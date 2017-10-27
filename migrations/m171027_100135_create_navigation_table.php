<?php

use yii\db\Migration;

/**
 * Handles the creation of table `navigation`.
 */
class m171027_100135_create_navigation_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `navigation` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `name` varchar(100) NOT NULL,
        `url` varchar(255) NOT NULL,
        PRIMARY KEY (id)
        )ENGINE = InnoDB DEFAULT CHARSET = utf8;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('navigation');
    }
}
