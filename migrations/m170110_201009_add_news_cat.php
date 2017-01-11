<?php

use yii\db\Migration;

class m170110_201009_add_news_cat extends Migration
{
    public function up()
    {
        $sql = 'INSERT INTO `lb_news_category` (`category_name`) VALUES (\'акция\');
                INSERT INTO `lb_news_category` (`category_name`) VALUES (\'новость\');
                INSERT INTO `lb_news_category` (`category_name`) VALUES (\'объявление\');
                INSERT INTO `lb_news_category` (`category_name`) VALUES (\'пост\');
                ';
        $this->execute($sql);

    }

    public function down()
    {
        echo "m170110_201009_add_news_cat cannot be reverted.\n";

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
