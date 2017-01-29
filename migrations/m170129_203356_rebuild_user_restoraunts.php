<?php

use yii\db\Migration;

class m170129_203356_rebuild_user_restoraunts extends Migration
{
    public function up()
    {
        $sql = 'ALTER TABLE `lb_restoraunts` 
ADD COLUMN `lb_inn` VARCHAR(45) CHARACTER SET \'utf8\' NOT NULL AFTER `lb_created_at`,
ADD COLUMN `lb_phone` VARCHAR(100) CHARACTER SET \'utf8\' NULL DEFAULT NULL AFTER `lb_inn`,
ADD COLUMN `lb_phone2` VARCHAR(100) CHARACTER SET \'utf8\' NULL DEFAULT NULL AFTER `lb_phone`,
ADD COLUMN `lb_director` VARCHAR(255) CHARACTER SET \'utf8\' NULL DEFAULT NULL AFTER `lb_phone2`,
ADD COLUMN `lb_addtional_contact` VARCHAR(255) CHARACTER SET \'utf8\' NULL DEFAULT NULL AFTER `lb_director`,
ADD COLUMN `lb_restoraunt_email` VARCHAR(50) CHARACTER SET \'utf8\' NULL DEFAULT NULL AFTER `lb_additional_contact`;';
        $this->execute($sql);

        $sql = 'ALTER TABLE `lb_user`
                DROP COLUMN `addtional_contact`,
                DROP COLUMN `phone2`,
                DROP COLUMN `inn`;';
        $this->execute($sql);
    }

    public function down()
    {
        echo "m170129_203356_rebuild_user_restoraunts cannot be reverted.\n";

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
