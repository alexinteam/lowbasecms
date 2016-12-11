<?php

use yii\db\Migration;
use yii\db\Schema;

class m161211_064320_add_sites_tables extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%lb_site}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING.'(255) NOT NULL',
            'domain' => Schema::TYPE_STRING.'(255) NOT NULL',
        ], $tableOptions);
    }

    public function down()
    {
        echo "m161211_064320_add_sites_tables cannot be reverted.\n";

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
