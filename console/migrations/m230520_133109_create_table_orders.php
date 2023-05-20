<?php

use yii\db\Migration;

/**
 * Class m230520_133109_create_table_orders
 */
class m230520_133109_create_table_orders extends Migration
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
        echo "m230520_133109_create_table_orders cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m230520_133109_create_table_orders cannot be reverted.\n";

        return false;
    }
    */
}
