<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%private_owner}}`.
 */
class m190413_083231_create_private_owner_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%private_owner}}', [
            'id' => $this->primaryKey(),
            'owner_no'=>$this->char(5)->notNull(),
            'f_name'=>$this->char(150)->notNull(),
            'l_name'=>$this->char(150)->notNull(),
            'address'=>$this->text(),
            'telephone'=>$this->char(11),
            'user_id'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%private_owner}}');
    }
}
