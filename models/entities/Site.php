<?php

namespace app\models\entities;

use Yii;
use app\models\traits\details\ParentModel as DetailsParentModelTrait;

/**
 * This is the model class for table "lb_sites".
 *
 * @property integer $id
 * @property string $name
 * @property integer $domain
 */
class Site extends \yii\db\ActiveRecord
{
    use DetailsParentModelTrait;
    protected $detailClass = '\app\models\entities\SiteDetail';

    // general
    /*public $id;
    public $name;
    public $domain;
    public $theme;*/

    // header
    /*public $title;
    public $description;*/

    // contacts
    /*public $about_us;
    public $address;
    public $phone;
    public $email;*/

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lb_site';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'domain'], 'required'],
            [['name', 'domain'], 'string'],
            ['domain', 'unique'],

            //[['title','description'], 'required'],
            [['title','description'], 'string'],

            //[['about_us','address','phone','email'], 'required'],
            [['about_us','address','phone','email'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'domain' => 'Domain',
        ];
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public static function getIdField()
    {
        return 'site_id';
    }
}
