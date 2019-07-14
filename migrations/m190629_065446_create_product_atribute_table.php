<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product_atribute}}`.
 */
class m190629_065446_create_product_atribute_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product_atribute}}', [
            'id' => $this->primaryKey(),
            'product_id'=>$this->integer(),
            'atribute_id'=>$this->integer()
        ]);
        $this->createIndex(
            'atribute_product_product_id',
            'product_atribute',
            'product_id'
        );
        // add foreign key for table `user`
        $this->addForeignKey(
            'atribute_product_product_id',
            'product_atribute',
            'product_id',
            'product',
            'id',
            'CASCADE'
        );
        // creates index for column `user_id`
        $this->createIndex(
            'idx_atribute_id',
            'product_atribute',
            'atribute_id'
        );
        // add foreign key for table `user`
        $this->addForeignKey(
            'fk-atribute_id',
            'product_atribute',
            'atribute_id',
            'atribute',
            'id',
            'CASCADE'
         );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product_atribute}}');
    }
}
