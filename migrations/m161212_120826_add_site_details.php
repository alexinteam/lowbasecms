<?php

use yii\db\Migration;

class m161212_120826_add_site_details extends Migration
{
    public function up()
    {
        $this->createTable('{{%lb_site_detail}}', [
            'id' => $this->primaryKey(),
            'site_id' => $this->integer(),
            'option' => $this->string(100),
            'value' => $this->text()
        ]);
    }

    public function down()
    {
        $this->dropTable('{{%lb_site_detail}}');
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
