<?php

namespace app\models\entities;

use app\models\User;
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

    public static $themes = [
        'aqua',
        'agency',
        'creative',
        'touche'
    ];

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
            [['about_us','address','phone','email', 'ga_account'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        $attributeLabels = [
            'id' => 'ID',
            'name' => 'Name',
            'domain' => 'Domain',

            // details
            'banner_greeting' => 'Приветствие',
            'banner_description' => 'Описание',

            'call_header' => 'Заголовок призыв',
            'call_description' => 'Описание',

            'site_address' => 'Адрес',
            'site_phone' => 'Телефон',

            'ga_account' => 'Google Analytics ID',
        ];

        for($i=1; $i <= 5; $i++){
            $attributeLabels['about_header_' . $i] = 'Заголовок';
            $attributeLabels['about_description_' . $i] = 'Описание';

            $attributeLabels['advantage_header_' . $i] = 'Заголовок';
            $attributeLabels['advantage_description_' . $i] = 'Описание';
        }

        return $attributeLabels;
    }

    public function defaultValues(){
        $lrIpSum = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.';

        $defaultValues = [
            'banner_greeting' => 'Добро пожаловать в Ресторан!',
            'banner_description' => $lrIpSum,

            // about
            'about_header_1' => "ЗАГОЛОВОК 1",
            'about_description_1' => $lrIpSum,
            'about_photo_1' => '/static/bg-01.png',

            'about_header_2' => "ЗАГОЛОВОК 2",
            'about_description_2' => $lrIpSum,
            'about_photo_2' => '/static/bg-02.png',

            'about_header_3' => "ЗАГОЛОВОК 3",
            'about_description_3' => $lrIpSum,
            'about_photo_3' => '/static/bg-03.png',

            'about_header_4' => "ЗАГОЛОВОК 4",
            'about_description_4' => $lrIpSum,
            'about_photo_4' => '/static/bg-04.png',

            // announce
            'announce_header' => 'Живая музыка по пятницам!',
            'announce_description' => $lrIpSum,

            // advantages
            'advantage_header_1' => 'Более 200 коктейлей',
            'advantage_description_1' => $lrIpSum,
            'advantage_icon_1' => '/static/icon-1.png',

            'advantage_header_2' => 'Более 200 бургеров',
            'advantage_description_2' => $lrIpSum,
            'advantage_icon_2' => '/static/icon-2.png',

            'advantage_header_3' => 'Более 200 коктейлей',
            'advantage_description_3' => $lrIpSum,
            'advantage_icon_3' => '/static/icon-1.png',

            'advantage_header_4' => 'Более 200 бургеров',
            'advantage_description_4' => $lrIpSum,
            'advantage_icon_4' => '/static/icon-2.png',

            // call
            'call_header' => 'Живая музыка по пятницам!',
            'call_description' => $lrIpSum,

            'menu_file' => '/static/Demo_Menu.xlsx',

            // site
            //'site_address' => '129430, г.Москва, Набережная 8, стр. 33, офис 404',
            'site_address' => 'г.Санкт-Петербург, ул. Таллинская, д.85',
            'site_phone' => '+7 812 799-09-62'

        ];

        return $defaultValues;
    }

    public function populateDefaultValues(){
        $values = $this->defaultValues();

        foreach ($values as $key => $value) {
            if(!$this->$key){
                $this->$key = $value;
            }
        }
    }

    public function clearDefaultValues()
    {
        $values = $this->defaultValues();

        foreach ($values as $key => $value) {
            if($this->$key == $value){
                unset($this->$key);
            }
        }

    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public static function getIdField()
    {
        return 'site_id';
    }

    public static function getThemesForSelect(){
        $result = [];

        foreach (self::$themes as $item){
            $result[$item] = ucfirst($item);
        }

        return $result;
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }


}
