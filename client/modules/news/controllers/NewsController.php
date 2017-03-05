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
use app\models\User;


class NewsController extends ClientController
{
    public $layout = '@app/client/layouts/main.php';

    public function actionCreate() {
        $model = new News();
        return $this->render('create',[
            'categories' => $this->getAllCategories(),
            'model' => $model
        ]);
    }

    public function actionArchive($year = null, $month = null, $limit = 10) {
        $qry = News::find()->limit($limit);
        if(isset($year) && isset($month)) {
            if($month == 12) {
                $qry->where('news_date BETWEEN :startdate AND :endDate', [
                    ':startdate' => (string)((int)$year.'-'.(int)$month.'-01'),
                    ':endDate' => (string)(((int)$year+1).'-01-01')
                ]);
            } else {
                $qry->where('news_date BETWEEN :startdate AND :endDate', [
                    ':startdate' => (string)((int)$year.'-'.(int)$month.'-01'),
                    ':endDate' => (string)((int)$year.'-'.((int)$month+1).'-01')
                ]);
            }
        } elseif (isset($year)) {
            $qry->where('news_date BETWEEN :startdate AND :endDate', [
                ':startdate' => (int)$year.'-01-01',
                ':endDate' => (string)((int)$year+1).'-01-01'
            ]);
        }
        $news = $qry->all();

        $allYears = News::find()->select('distinct YEAR (news_date) as year')->orderBy('news_date',SORT_ASC)->asArray()->all();

        return $this->render('archive', [
            'news' => $news,
            'allYears' => $allYears
        ]);
    }

    public function actionAdd() {
        $model = new UploadForm();
        $modelNews = new News();
        $lastNews = News::find()
            ->orderBy('news_id DESC')
            ->one();
        $featuredRestoraunt = User::getFeaturedRestoraunt();
        $modelNews->restoraunt_id = $featuredRestoraunt->lb_restoraunts_id;
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

            $modelNews->load(Yii::$app->request->post());
            if ($model->upload('../web/'.$pathToDir.$newsDirId.'/')) {
                $modelNews->news_image = $pathToDir.$newsDirId.'/'.$model->imageFile->baseName . '.' . $model->imageFile->extension;
            }
            $modelNews->save();
            return $this->render('create',[
                'model' => new News(),
                'categories' => $this->getAllCategories(),
                'saved' => true
            ]);
        } else {
            return $this->redirect('/client/news/create');
        }
    }

    public function actionEdit($id) {
        $model = News::find()->where('news_id =:news_id', [
            ':news_id' => $id
        ])->one();
        return $this->render('edit',[
            'categories' => $this->getAllCategories(),
            'model' => $model
        ]);
    }

    public function actionDelete($id) {
        $model = News::find()->where('news_id =:news_id', [
            ':news_id' => $id
        ])->one();
        $model->delete();
        return $this->redirect('archive');
    }

    public function actionSave() {
        $model = new UploadForm();
        $modelNews = new News();
        $lastNews = News::find()
            ->orderBy('news_id DESC')
            ->one();
        $featuredRestoraunt = User::getFeaturedRestoraunt();
        $modelNews->restoraunt_id = $featuredRestoraunt->lb_restoraunts_id;
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

            $modelNews->load(Yii::$app->request->post());
            if ($model->upload('../web/'.$pathToDir.$newsDirId.'/')) {
                $modelNews->news_image = $pathToDir.$newsDirId.'/'.$model->imageFile->baseName . '.' . $model->imageFile->extension;
            }
            $modelNews->save();
            return $this->render('edit',[
                'model' => $modelNews,
                'categories' => $this->getAllCategories(),
                'saved' => true
            ]);
        } else {
            return $this->redirect('/client/news/archive');
        }
    }

    private function getAllCategories() {
        $dbCategories = NewsCategory::find()->all();
        $categories =[];
        foreach ($dbCategories as $category) {
            $categories[$category->category_id] = $category->category_name;
        }
        return $categories;
    }
}
