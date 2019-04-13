<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%staff}}`.
 */
class m190413_083915_create_staff_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%staff}}', [
            'id' => $this->primaryKey(),
            'staff_no'=>$this->char(5),
            'f_name'=>$this->char(100),
            'l_name'=>$this->char(100),
            'position'=>$this->char(50),
            'sex'=>$this->char(2),
            'd_o_b'=>$this->date(),
            'salary'=>$this->float(7,2),
            'branch_id'=>$this->integer(11)

            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%staff}}');
    }
}
