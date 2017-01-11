<?php

use yii\db\Migration;

class m170111_181926_alter_user_table extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lowbasecms`.`lb_user` 
                ADD COLUMN `inn` VARCHAR(45) NOT NULL AFTER `login_at`,
                ADD COLUMN `organization` VARCHAR(255) NOT NULL AFTER `inn`,
                ADD COLUMN `phone2` VARCHAR(100) NULL AFTER `organization`,
                ADD COLUMN `addtional_contact` VARCHAR(255) NULL AFTER `phone2`;
                ';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170111_181926_alter_user_table cannot be reverted.\n";

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
