<?php
use yii\bootstrap\ActiveForm;
use yii\grid\GridView;
use yii\helpers\Html;

?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'summary'=>'',
    //'filterModel' => $searchModel,
    'columns' => [
        //['class' => 'yii\grid\SerialColumn'],
        'name',
        'domain',
        'theme',
        [
            'class' => 'yii\grid\ActionColumn',
            'header'=> Yii::t('app','Actions'),
            //'contentOptions'=>['style'=>'text-align: center;']
        ],
    ],
]); ?>