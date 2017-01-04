<?php

use yii\db\Migration;

class m170102_161423_main extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lb_main_site_config` 
                ADD COLUMN `id` INT NOT NULL AUTO_INCREMENT AFTER `contact_email`,
                ADD PRIMARY KEY (`id`),
                ADD UNIQUE INDEX `id_UNIQUE` (`id` ASC);
              ';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170102_161423_main cannot be reverted.\n";

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
