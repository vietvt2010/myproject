<?php

use yii\db\Migration;

/**
 * Handles the creation of table `source`.
 */
class m171027_094843_create_source_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `source` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(200) NOT NULL,
        `address` varchar(255),
        `phone` varchar(30),
        `mail` varchar(100),
        PRIMARY KEY (id)
        )ENGINE = MyISAM DEFAULT CHARSET = utf8;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('source');
    }
}
