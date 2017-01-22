<?php

use yii\db\Migration;

class m170122_213852_featured_rest extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lowbasecms`.`lb_restoraunts` ADD COLUMN `lb_featured` ENUM(\'1\', \'0\') NULL DEFAULT \'0\' AFTER `lb_total_tables`;';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170122_213852_featured_rest cannot be reverted.\n";

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
