<?php

use yii\db\Migration;

class m171201_091917_create_product_table_in_web_module extends Migration
{
    public function safeUp()
    {

    }

    public function safeDown()
    {
        echo "m171201_091917_create_product_table_in_web_module cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m171201_091917_create_product_table_in_web_module cannot be reverted.\n";

        return false;
    }
    */
}
