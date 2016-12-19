<?php

use yii\db\Migration;

class m161219_222609_alter extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lb_messages` 
                CHANGE COLUMN `message_id` `message_id` INT(11) NOT NULL AUTO_INCREMENT ;
                ';
        $this->execute($sql);


        $sql = 'ALTER TABLE `lowbasecms`.`lb_messages` 
                CHANGE COLUMN `status` `status` ENUM(\'read\', \'unread\') NOT NULL ;
                ';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m161219_222609_alter cannot be reverted.\n";

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
