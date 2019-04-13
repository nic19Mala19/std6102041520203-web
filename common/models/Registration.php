<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "regustration".
 *
 * @property int $id
 * @property int $client_id
 * @property int $property_for_rent_id
 * @property string $date_joined
 */
class Registration extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regustration';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id', 'property_for_rent_id'], 'integer'],
            [['date_joined'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'property_for_rent_id' => 'Property For Rent ID',
            'date_joined' => 'Date Joined',
        ];
    }
}
