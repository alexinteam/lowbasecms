<?php

use yii\db\Migration;

class m170129_215846_restoraunt_fields extends Migration
{
    public function up()
    {
        $sql = 'CREATE TABLE `lb_restoraunt_options` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `restoraunt_id` INT NOT NULL,
  `restoraunt_bill` VARCHAR(45) NULL,
  `restoraunt_kitchen` VARCHAR(255) NULL,
  `restoraunt_vk_link` VARCHAR(255) NULL,
  `restoraunt_fb_link` VARCHAR(255) NULL,
  `restoraunt_insta_link` VARCHAR(255) NULL,
  PRIMARY KEY (`id`));
';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170129_215846_restoraunt_fields cannot be reverted.\n";

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
