<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 */
class m190629_065242_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'meta_title' => $this->string(),
            'name' => $this->string(),
            'content' => $this->text(),
            'image' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%category}}');
    }
}
