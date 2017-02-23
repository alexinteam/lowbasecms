<?php

namespace app\modules\sites\controllers;

use app\models\entities\Site;
use app\modules\sites\models\ContactForm;
use Yii;
use yii\filters\VerbFilter;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'upload' => ['post'],
                ],
            ],
        ];
    }

    public function init(){
        parent::init();

        Yii::$app->request->enableCsrfValidation = false;
    }

    /**
     * @param $siteId
     * @return string
     */
    public function actionIndex($siteId)
    {
        $site = $this->findModel($siteId);
        $this->setTheme($site->theme);

        $site->populateDefaultValues();

        Yii::$app->view->params['site'] = $site;
        Yii::$app->view->params['site_id'] = $site->id;
        Yii::$app->view->params['mode'] = 'view';

        $contactForm = new ContactForm();

        if ($contactForm->load(Yii::$app->request->post())) {
            $site->clearDefaultValues();

            if($contactForm->validate()){
                //@TODO save contact form

                //Yii::$app->session->addFlash('contact_form_success','Form Successfully Sent');

                return 'Form saved';
            }
        }

        return $this->render('index',[
            'site' => $site,
            'contactForm' => $contactForm,
        ]);
    }

    public function actionEdit($id){
        $user = Yii::$app->user;

        if ($user->isGuest) {
            return $this->redirect('/client');
        }

        $site = $this->findModel($id);
        $this->setTheme($site->theme);

        $contactForm = new ContactForm();

        /*if($site->user_id != $user->id){
            throw new NotFoundHttpException();
        }*/

        if ($site->load(Yii::$app->request->post())) {
            $site->clearDefaultValues();

            if($site->save()){
                return $this->redirect(['index', 'siteId' => $site->id]);
            }
        }
        
        $site->populateDefaultValues();

        Yii::$app->view->params['site'] = $site;
        Yii::$app->view->params['site_id'] = $site->id;
        Yii::$app->view->params['mode'] = 'edit';

        return $this->render('edit',[
            'site' => $site,
            'contactForm' => $contactForm,
        ]);
    }

    public function actionUpload(){
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $siteId = Yii::$app->request->post('site_id');

        if (!$siteId) {
            throw new BadRequestHttpException('Missing required parameter site_id');
        }

        try{
            $file = UploadedFile::getInstanceByName('Filedata');

            $path = Yii::getAlias('@webroot/uploads/sites/' . $siteId);
            if(!is_dir($path)){
                mkdir($path);
            }

            $url = Yii::getAlias('@web/uploads/sites/' . $siteId);

            $ext = $file->getExtension();
            $filename = md5(time()) . '.' . $ext;

            $file->saveAs($path . '/' . $filename);

            return [
                'success' => true,
                'url' => $url . '/' . $filename
            ];
        }
        catch (\Exception $e){
            return [
                'success' => false,
                'message' => $e->getMessage()
            ];
        }
    }

    /**
     * @param $theme
     */
    protected function setTheme($theme){
        $this->viewPath = '@app/themes/sites/' . $theme . '/views/site';
        $this->layout = '@app/themes/sites/' . $theme . '/layouts/main';

        Yii::$app->view->siteTheme = $theme;
    }

    /**
     * Finds the Site model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Site the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Site::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
