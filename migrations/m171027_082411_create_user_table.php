<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user`.
 */
class m171027_082411_create_user_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `user` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `username` varchar(100) NOT NULL,
        `password` varchar(100) NOT NULL,
        `email` varchar(100) NOT NULL,
        `phone` varchar(20) NULL,
        `last_login` int(10) unsigned DEFAULT 0,
        `created_at` int(10) unsigned NOT NULL,
        `updated_at` int(10) unsigned NOT NULL,
        PRIMARY KEY (id),
        UNIQUE KEY (username),
        UNIQUE KEY (email)
        ) ENGINE = InnoDB DEFAULT CHARSET = utf8;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user');
    }
}
