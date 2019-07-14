<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%product}}`.
 */
class m190629_065202_create_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%product}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'content' => $this->text(),
            'price' => $this->float(),
            'image' => $this->string(),
            'viewed' => $this->integer(),
            'user_id' => $this->integer(),
            'status' => $this->integer(),
            'category_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%product}}');
    }
}
