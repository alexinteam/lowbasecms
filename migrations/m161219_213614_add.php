<?php

use yii\db\Migration;

class m161219_213614_add extends Migration
{
    public function up()
    {
        $sql = 'CREATE TABLE `lb_messages` (
                  `message_id` INT NOT NULL,
                  `message_text` LONGTEXT NOT NULL,
                  `from` INT NOT NULL,
                  `to` INT NOT NULL,
                  `status` TINYINT(1) NOT NULL,
                  UNIQUE INDEX `message_id_UNIQUE` (`message_id` ASC),
                  PRIMARY KEY (`message_id`));
                ';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m161219_213614_add cannot be reverted.\n";

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
