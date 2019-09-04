<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%zakaz}}`.
 */
class m190609_090734_create_zakazlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%zakazlar}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            'persons' => $this->integer()->notNull(),
            'cstol' => $this->integer()->notNull(),
            'cstul' => $this->integer()->notNull(),
            'data' => $this->date(),
            'price' => $this->integer()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%zakazlar}}');
    }
}
