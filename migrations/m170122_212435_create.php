<?php

use yii\db\Migration;

class m170122_212435_create extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lb_restoraunts` ADD COLUMN `lb_total_tables` INT NULL AFTER `lb_user_id`;';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170122_212435_create cannot be reverted.\n";

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
