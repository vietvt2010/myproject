<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m171027_091643_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `category` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(100) NOT NULL,
        `description` varchar(255),
        `notice` varchar(255),
        PRIMARY KEY (id),
        UNIQUE KEY (name)
        )ENGINE = MyISAM DEFAULT CHARSET = utf8;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
