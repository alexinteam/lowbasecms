<?php

use yii\db\Migration;

class m170111_164329_change_news extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lowbasecms`.`lb_news` 
                CHANGE COLUMN `news_date` `news_date` DATE NOT NULL ;';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170111_164329_change_news cannot be reverted.\n";

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
