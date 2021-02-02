<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%izoh}}`.
 */
class m210202_053539_create_izoh_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%izoh}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'text' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%izoh}}');
    }
}
