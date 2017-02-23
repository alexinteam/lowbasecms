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
            'template' => '{view} {update} {configure} {delete}',

            'buttons' => [
                'configure' => function ($url,$model) {
                    $icon = Html::tag('span', '', ['class' => "glyphicon glyphicon-cog"]);
                    return Html::a($icon, ['/sites/site/edit', 'id' => $model->id]);
                }
            ],


            //'contentOptions'=>['style'=>'text-align: center;']
        ],
    ],
]); ?>