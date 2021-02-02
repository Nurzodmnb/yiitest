<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%bulim}}`.
 */
class m210202_053538_create_bulim_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bulim}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bulim}}');
    }
}
