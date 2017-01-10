<?php

use yii\db\Migration;

class m170109_231732_create_news extends Migration
{
    public function up()
    {
        $sql = 'CREATE TABLE `lb_news_category` (
                  `category_id` INT NOT NULL AUTO_INCREMENT,
                  `category_name` VARCHAR(150) NOT NULL,
                  PRIMARY KEY (`category_id`),
                  UNIQUE INDEX `category_name_UNIQUE` (`category_name` ASC));';
        $this->execute($sql);

        $sql = 'CREATE TABLE `lowbasecms`.`lb_news` (
                  `news_id` INT NOT NULL AUTO_INCREMENT,
                  `news_title` VARCHAR(255) NOT NULL,
                  `news_category_id` INT NOT NULL,
                  `news_date` TIMESTAMP NOT NULL,
                  `news_image` VARCHAR(255) NULL,
                  `news_text` LONGTEXT NULL,
                  PRIMARY KEY (`news_id`));';
        $this->execute($sql);


    }

    public function down()
    {
        echo "m170109_231732_create_news cannot be reverted.\n";

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
