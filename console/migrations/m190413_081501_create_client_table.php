<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%client}}`.
 */
class m190413_081501_create_client_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%client}}', [
            'id' => $this->primaryKey(),
            'client_no' =>$this->char(5),
            'f_name' =>$this->char(100),
            'l_name' =>$this->char(100),
            'tel_no' =>$this->char(11),
            'pref_type' =>$this->char(50),
            'max_rent' =>$this->float(7,2),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%client}}');
    }
}
