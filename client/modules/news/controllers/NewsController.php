<?php
/**
 * @package   yii2-cms
 * @author    Yuri Shekhovtsov <shekhovtsovy@yandex.ru>
 * @copyright Copyright &copy; Yuri Shekhovtsov, lowbase.ru, 2015 - 2016
 * @version   1.0.0
 */

namespace app\client\modules\news\controllers;

use Yii;
use app\models\news\NewsCategory;
use app\models\news\News;
use yii\web\UploadedFile;
use app\models\UploadForm;
use app\override\controllers\ClientController;


class NewsController extends ClientController
{
    public $layout = '@app/client/layouts/main.php';

    public function actionCreate() {
        $model = new News();
        $dbCategories = NewsCategory::find()->all();
        $categories =[];
        foreach ($dbCategories as $category) {
            $categories[$category->category_id] = $category->category_name;
        }

        return $this->render('create',[
            'categories' => $categories,
            'model' => $model
        ]);
    }

    public function actionArchive($year = null, $month = null, $limit = 10) {

        $news = News::find()->limit($limit)->all();

        return $this->render('archive', [
            'news' => $news
        ]);
    }

    public function actionAdd() {
        $model = new UploadForm();
        $modelNews = new News();
        $lastNews = News::find()
            ->orderBy('news_id DESC')
            ->one();
        if(isset($lastNews->news_id)) {
            $newsDirId = $lastNews->news_id + 1;
        } else {
            $newsDirId = 1;
        }


        if (Yii::$app->request->isPost) {
            $model->imageFile = UploadedFile::getInstance($modelNews, 'news_image');

            $pathToDir = 'uploads/news/';
            if (!file_exists('../web/'.$pathToDir.$newsDirId)) {
                mkdir('../web/'.$pathToDir.$newsDirId, 0777, true);
            }

            if ($model->upload('../web/'.$pathToDir.$newsDirId.'/') && $modelNews->load(Yii::$app->request->post())) {
                $modelNews->news_image = $pathToDir.$newsDirId.'/'.$model->imageFile->baseName . '.' . $model->imageFile->extension;
                $modelNews->save();
                $dbCategories = NewsCategory::find()->all();
                $categories =[];
                foreach ($dbCategories as $category) {
                    $categories[$category->category_id] = $category->category_name;
                }
                return $this->render('create',[
                    'model' => new News(),
                    'categories' => $categories,
                    'saved' => true
                ]);
            }
        } else {
            return $this->redirect('/client/news/create');
        }
    }
}
