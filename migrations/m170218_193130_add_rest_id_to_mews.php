<?php

use yii\db\Migration;

class m170218_193130_add_rest_id_to_mews extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lb_news` 
ADD COLUMN `restoraunt_id` INT(11) NOT NULL AFTER `news_text`;';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170218_193130_add_rest_id_to_mews cannot be reverted.\n";

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
