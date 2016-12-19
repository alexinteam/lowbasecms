<?php

use yii\db\Migration;

class m161219_214348_alter extends Migration
{
    public function up()
    {
        $sql='ALTER TABLE `lb_messages` 
CHANGE COLUMN `status` `status` ENUM(\'read\', \'uread\') NOT NULL ;
';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m161219_214348_alter cannot be reverted.\n";

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
