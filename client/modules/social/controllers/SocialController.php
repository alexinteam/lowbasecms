<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\social\controllers;

use Yii;
use app\override\controllers\ClientController;
use app\client\modules\social\models\Vkmodel;
use app\models\UploadForm;
use yii\web\UploadedFile;
use app\models\User;
use app\client\modules\social\models\Vk as VKapi;


class SocialController extends ClientController
{
    public $layout = '@app/client/layouts/main.php';

    public function actionVk() {
        $model = new Vkmodel();
        return $this->render('vkontakte',[
            'model' =>$model
        ]);
    }

    public function actionFacebook() {
        return $this->render('facebook');
    }

    public function actionInstagram() {
        return $this->render('instagram');
    }

    public function actionAddvk() {
        $gid = '141403043';
        $model = new UploadForm();
        $modelVk = new Vkmodel();
        $featuredRestoraunt = User::getFeaturedRestoraunt();
        $lastPost = Vkmodel::find()
            ->orderBy('id DESC')
            ->one();
        $modelVk->restoraunt_id = $featuredRestoraunt->lb_restoraunts_id;
        if(isset($lastPost->id)) {
            $vkDirId = $lastPost->id + 1;
        } else {
            $vkDirId = 1;
        }

        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($modelVk, 'post_image');

            $pathToDir = 'uploads/social/vk/';
            if (!file_exists('../web/'.$pathToDir.$vkDirId)) {
                mkdir('../web/'.$pathToDir.$vkDirId, 0777, true);
            }

            $modelVk->load(Yii::$app->request->post());
            if ($model->upload('../web/'.$pathToDir.$vkDirId.'/')) {
                $modelVk->post_image = $pathToDir.$vkDirId.'/'.$model->imageFile->baseName . '.' . $model->imageFile->extension;
            }
            $modelVk->save();

            # Получаем ссылку для загрузки изображений
            $vk = new VKapi('5898723', 'slz7D7MAoq75zlxFCgXT', '8ac69792548768831c86109bb5399715c2f8ddd8ff672249f1e1977a2fd146089087e4bf25f09efb47005');
            $uploadResponse = $vk->api('photos.getWallUploadServer', [
                'group_id'   => $gid
            ]);

            # Загружаем изображение на url
            $curl = curl_init();
            curl_setopt_array($curl,[
                CURLOPT_URL => $uploadResponse['response']['upload_url'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => "",
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 30,
                CURLOPT_POST => 1,
                CURLOPT_FRESH_CONNECT => 1,
                CURLOPT_POSTFIELDS =>  [
                    'file' => new \CURLFile(realpath($modelVk->post_image), '@', $model->imageFile->name)
                ],
            ]);
            $response = json_decode(curl_exec($curl));
            curl_close($curl);

            # Сохраняем фото на сервере и получаем id
            $saveResult = $vk->api('photos.saveWallPhoto', [
                'group_id'   => $gid,
                'hash' => $response->hash,
                'photo' => $response->photo,
                'server' => $response->server
            ]);
            # id нужно прикрепить в attachments метода wall.post
            $vk->api('wall.post', [
                'owner_id'   => '-'.$gid,
                'attachments' => $saveResult['response'][0]['id'],
                'message' => $modelVk->post_title.(rand(1,100))
            ]);


            return $this->render('vkontakte',[
                'model' => new Vkmodel(),
                'saved' => true
            ]);
        } else {
            return $this->redirect('/client/social/vk');
        }




    }

}
