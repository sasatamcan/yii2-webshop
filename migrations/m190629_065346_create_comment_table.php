<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%comment}}`.
 */
class m190629_065346_create_comment_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%comment}}', [
            'id' => $this->primaryKey(),
            'text'=>$this->string(),
            'user_id'=>$this->integer(),
            'product_id'=>$this->integer(),
            'status'=>$this->integer()
        ]);
        // creates index for column `user_id`
        $this->createIndex(
            'idx-post-user_id',
            'comment',
            'user_id'
        );
        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-post-user_id',
            'comment',
            'user_id',
            'user',
            'id',
            'CASCADE'
        );
        // creates index for column `article_id`
        $this->createIndex(
            'idx-product_id',
            'comment',
            'product_id'
        );
        // add foreign key for table `article`
        $this->addForeignKey(
            'fk-product_id',
            'comment',
            'product_id',
            'product',
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
