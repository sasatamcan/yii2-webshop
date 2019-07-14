<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%atribute}}`.
 */
class m190629_065306_create_atribute_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%atribute}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'code' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%atribute}}');
    }
}
