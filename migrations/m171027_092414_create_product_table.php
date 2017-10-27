<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product`.
 */
class m171027_092414_create_product_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `product` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(100) NOT NULL,
        `cate_id` int(10) unsigned NOT NULL,
        `source_id` int(10) unsigned NOT NULL,
        `image` varchar(255),
        `information` varchar(255),
        `notice` varchar(255),
        PRIMARY KEY (id),
        UNIQUE KEY (name)
        )ENGINE = InnoDB DEFAULT CHARSET = utf8;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product');
    }
}
