<?php

use yii\db\Migration;

/**
 * Handles the creation of table `image`.
 */
class m171027_095925_create_image_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `image` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `source` varchar(255) NOT NULL,
        `cate` varchar(100) DEFAULT NULL,
        PRIMARY KEY (id)
        )ENGINE = InnoDB DEFAULT CHARSET = utf8;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('image');
    }
}
