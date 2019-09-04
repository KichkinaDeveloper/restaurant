<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%order}}`.
 */
class m190609_090839_create_orderlar_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%orderlar}}', [
            'id' => $this->primaryKey(),
            'zakaz_id' => $this->integer()->notNull(),
            'odamlar' => $this->integer()->notNull(),
            'stol' => $this->integer()->notNull(),
            'stul' => $this->integer()->notNull(),
            'vaqt' => $this->date()->notNull(),
            'summa' => $this->integer()->notNull()
        ]);

        $this->addForeignKey(
            'zakaz_order',
            'orderlar',
            'zakaz_id',
            'zakazlar',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%orderlar}}');
    }
}
