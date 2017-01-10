<?php

namespace app\views\widgets;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Editor extends \dosamigos\tinymce\TinyMce
{
    /**
     * @inheritdoc
     */
    public function init()
    {

        $this->options = ['rows' => 6];
        $this->language = 'ru';
        $this->clientOptions = [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ];
        parent::init();
    }
    /**
     * @inheritdoc
     */
}