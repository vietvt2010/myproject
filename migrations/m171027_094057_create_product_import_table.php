<?php

use yii\db\Migration;

/**
 * Handles the creation of table `product_import`.
 */
class m171027_094057_create_product_import_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `product_import` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `product_id` int(10) unsigned NOT NULL,
        `quantity` int(10) unsigned NOT NULL,
        `price` int(30) unsigned NOT NULL,
        `source_id` int(10) unsigned NOT NULL,
        `notice` varchar(255),
        `time` int(10) unsigned DEFAULT 0,
        PRIMARY KEY (id)
        )ENGINE = InnoDB DEFAULT CHARSET = utf8;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('product_import');
    }
}
