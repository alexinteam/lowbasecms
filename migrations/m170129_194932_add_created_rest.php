<?php

use yii\db\Migration;

class m170129_194932_add_created_rest extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lb_restoraunts` ADD COLUMN `lb_created_at` DATETIME NOT NULL AFTER `lb_featured`;';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170129_194932_add_created_rest cannot be reverted.\n";

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
