<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m210209_061145_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'user_id' => $this->integer(),
            'article_id' => $this->integer(),
            'status' => $this->integer()
        ]);

        // user_id uchun Index yaratamiz
        $this->createIndex(
            'idx-post-user_id',
            'comment',
            'user_id'
        );

        // user uchun ForeignKey yaratamiz
        $this->addForeignKey(
            'fk-post-user_id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );

        // article_id uchun Index yaratamiz
        $this->createIndex(
            'idx-article_id',
            'comment',
            'article_id'
        );

        // article uchun ForeignKey yaratamiz
        $this->addForeignKey(
            'fk-article_id',
            'comment',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%comment}}');
    }
}
