<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_notification`.
 */
class m171027_090518_create_user_notification_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->execute("CREATE TABLE IF NOT EXISTS `user_notification` (
        `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
        `user_id` int(10) unsigned NOT NULL,
        `title` varchar(50) NOT NULL,
        `content` varchar(255) NOT NULL,
        `status` tinyint(1) unsigned NOT NULL DEFAULT 1,
        PRIMARY KEY (id)
        )ENGINE = InnoDB DEFAULT CHARSET = utf8;");
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_notification');
    }
}
