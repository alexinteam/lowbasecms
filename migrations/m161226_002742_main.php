<?php

use yii\db\Migration;

class m161226_002742_main extends Migration
{
    public function up()
    {
        $sql = 'CREATE TABLE `lb_main_site_config` (
                      `site_name` VARCHAR(255) NULL,
                      `phone` VARCHAR(45) NULL,
                      `address` VARCHAR(255) NULL,
                      `contact_email` VARCHAR(255) NULL,
                      UNIQUE INDEX `site_name_UNIQUE` (`site_name` ASC))
                    ENGINE = InnoDB
                    ';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m161226_002742_main cannot be reverted.\n";

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
