<?php

use yii\db\Migration;

class m170111_204409_restoraunts_table extends Migration
{
    public function up()
    {
        $sql = 'CREATE TABLE `lowbasecms`.`lb_restoraunts` (
                  `lb_restoraunts_id` INT NOT NULL AUTO_INCREMENT,
                  `lb_restoraunts_name` VARCHAR(255) NOT NULL,
                  PRIMARY KEY (`lb_restoraunts_id`));
                ';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170111_204409_restoraunts_table cannot be reverted.\n";

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
