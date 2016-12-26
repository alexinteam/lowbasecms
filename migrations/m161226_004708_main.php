<?php

use yii\db\Migration;
use app\models\entities\MainSiteConfig;

class m161226_004708_main extends Migration
{
    public function up()
    {
        $config = new MainSiteConfig();
        $config->site_name = 'RESTOWEB';
        $config->contact_email = 'restoweb@mail.ru';
        $config->phone = '+7 (495) 799-09-62';
        $config->address = 'Москва, Ленинградский проспект, 37, к.9';
        $config->save();
    }

    public function down()
    {
        echo "m161226_004708_main cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
