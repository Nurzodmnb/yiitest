<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%maqola}}`.
 */
class m210202_053611_create_maqola_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%maqola}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255),
            'text' => $this->text(),
            'izoh_id' => $this->integer(),
            'bulim_id' => $this->integer(),
            'created' => $this->dateTime(),
            'view' => $this->integer(),
            'user_status' => $this->integer()
        ]);

        $this->addForeignKey(
            'fk_maqola_izoh',
            'maqola',
            'izoh_id',
            'izoh',
            'id',
            'CASCADE',
            'CASCADE'

        );

        $this->addForeignKey(
            'fk_maqola_bulim',
            'maqola',
            'bulim_id',
            'bulim',
            'id',
            'CASCADE',
            'CASCADE'

        );

        $this->addForeignKey(
            'fk_maqola_user',
            'maqola',
            'user_status',
            'users',
            'role',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%maqola}}');
    }
}
