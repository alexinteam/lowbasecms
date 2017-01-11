<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload($dir)
    {
        if ($this->validate()) {
            $this->imageFile->saveAs($dir . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            
            return true;
        } else {
            return false;
        }
    }
}