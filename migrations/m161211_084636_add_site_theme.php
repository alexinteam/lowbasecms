<?php

use yii\db\Migration;
use yii\db\Schema;

class m161211_084636_add_site_theme extends Migration
{
    public function up()
    {
        $this->addColumn('{{%lb_site}}','theme',Schema::TYPE_STRING);
    }

    public function down()
    {
        echo "m161211_084636_add_site_theme cannot be reverted.\n";

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
