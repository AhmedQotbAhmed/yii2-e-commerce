<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%category}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%products}}`
 */
class m230524_103634_create_category_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%category}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(255)->notNull(),
            'products' => $this->integer(11),
        ]);

        // creates index for column `products`
        $this->createIndex(
            '{{%idx-category-products}}',
            '{{%category}}',
            'products'
        );

        // add foreign key for table `{{%products}}`
        $this->addForeignKey(
            '{{%fk-category-products}}',
            '{{%category}}',
            'products',
            '{{%products}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%products}}`
        $this->dropForeignKey(
            '{{%fk-category-products}}',
            '{{%category}}'
        );

        // drops index for column `products`
        $this->dropIndex(
            '{{%idx-category-products}}',
            '{{%category}}'
        );

        $this->dropTable('{{%category}}');
    }
}
