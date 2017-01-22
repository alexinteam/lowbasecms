<?php

use yii\db\Migration;

class m170122_210811_alter extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lb_restoraunts` 
                ADD COLUMN `lb_user_id` INT NOT NULL AFTER `lb_restoraunts_name`;
                ';
        $this->execute($sql);

        $sql = 'ALTER TABLE `lowbasecms`.`lb_user` DROP COLUMN `organization`;';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170122_210811_alter cannot be reverted.\n";

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
