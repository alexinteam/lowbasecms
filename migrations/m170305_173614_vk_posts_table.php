<?php

use yii\db\Migration;

class m170305_173614_vk_posts_table extends Migration
{
    public function up()
    {
        $sql='CREATE TABLE `vk_posts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `post_title` VARCHAR(255) NOT NULL,
  `post_image` VARCHAR(255) NULL,
  `restoraunt_id` INT NOT NULL,
  PRIMARY KEY (`id`));
';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170305_173614_vk_posts_table cannot be reverted.\n";

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
