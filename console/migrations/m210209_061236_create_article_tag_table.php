<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%article_tag}}`.
 */
class m210209_061236_create_article_tag_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%article_tag}}', [
            'id' => $this->primaryKey(),
            'article_id' => $this->integer(),
            'tag_id' => $this->integer(),
        ]);

        // user_id uchun Index yaratamiz
        $this->createIndex(
            'tag_article_article_id',
            'article_tag',
            'article_id'
        );

        // user uchun ForeignKey yaratamiz
        $this->addForeignKey(
            'tag_article_article_id',
            'article_tag',
            'article_id',
            'article',
            'id',
            'CASCADE'
        );

        // article_id uchun Index yaratamiz
        $this->createIndex(
            'idx-tag_id',
            'article_tag',
            'tag_id'
        );

        // article uchun ForeignKey yaratamiz
        $this->addForeignKey(
            'fk-tag_id',
            'article_tag',
            'tag_id',
            'tag',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%article_tag}}');
    }
}
