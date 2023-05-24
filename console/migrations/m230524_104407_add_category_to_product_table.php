<?php

use yii\db\Migration;

/**
 * Class m230524_104407_add_category_to_product_table
 */
class m230524_104407_add_category_to_product_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%products}}', 'category_id', $this->integer()->after('price'));
        $this->addForeignKey(
            'fk-product-category',
            '{{%products}}',
            'category_id',
            '{{%category}}',
            'id',
            'CASCADE',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('fk-product-category', '{{%products}}');
        $this->dropColumn('{{%products}}', 'category_id');
    }
}
