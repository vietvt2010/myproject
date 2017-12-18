<?php

use yii\db\Migration;

/**
 * Handles the creation of table `user_profile`.
 */
class m171218_030408_create_user_profile_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('user_profile', [
            'id' => $this->primaryKey(),
            'full_name' => $this->string(255),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('user_profile');
    }
}
