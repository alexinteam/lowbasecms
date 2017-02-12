<?php

use yii\db\Migration;

class m170212_102930_add_site_user_id extends Migration
{
    public function up()
    {
        $this->addColumn('lb_site','user_id',$this->integer());
    }

    public function down()
    {
        echo "m170212_102930_add_site_user_id cannot be reverted.\n";

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
