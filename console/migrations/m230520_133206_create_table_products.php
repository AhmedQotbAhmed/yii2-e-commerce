<?php

use yii\db\Migration;

/**
 * Class m230520_133206_create_table_products
 */
class m230520_133206_create_table_products extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m230520_133206_create_table_products cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230520_133206_create_table_products cannot be reverted.\n";

        return false;
    }
    */
}
