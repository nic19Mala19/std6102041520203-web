<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%regustration}}`.
 */
class m190413_082420_create_regustration_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%regustration}}', [
            'id' => $this->primaryKey(),
            'client_id'=>$this->integer(11),
            'property_for_rent_id'=>$this->integer(11),
            'date_joined'=>$this->date(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%regustration}}');
    }
}
