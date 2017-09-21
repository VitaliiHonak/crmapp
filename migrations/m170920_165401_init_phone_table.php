<?php

use yii\db\Migration;

class m170920_165401_init_phone_table extends Migration
{
    public function safeUp()
    {
$this->createTable(
    'phone',[
        'id'=>'pk',
        'customer_id'=>'int unique',
        'number'=>'string',
        ],
    'ENGINE=InnoDB'
);
$this->addForeignKey('customer_phone_numbers','phone','customer_id','customer','id');

    }

    public function safeDown()
    {
        //echo "m170920_165401_init_phone_table cannot be reverted.\n";
        $this->dropForeignKey('customer_phone_numbers','phone');
        $this->dropTable('phone');
        //return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m170920_165401_init_phone_table cannot be reverted.\n";

        return false;
    }
    */
}
