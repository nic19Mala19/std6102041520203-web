<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%viewing}}`.
 */
class m190413_075804_create_viewing_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%viewing}}', [
            'id' => $this->primaryKey(),
            'client_id' => $this->string(10)->notNull()->unique(),
            'property_id' => $this->string(10)->notNull()->unique(),
            'view_date' => $this->date(),
            'comment' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%viewing}}');
    }
}
