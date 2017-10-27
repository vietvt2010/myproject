<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_price`.
 */
class m171027_093420_create_product_price_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `product_price` (
        `product_id` int(10) unsigned NOT NULL,
        `price` int(30) unsigned NOT NULL,
        `discount` int(3) unsigned DEFAULT 0,
        UNIQUE KEY (product_id)
        )ENGINE = InnoDB DEFAULT CHARSET = utf8;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product_price');
    }
}
