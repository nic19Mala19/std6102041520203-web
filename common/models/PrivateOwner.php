<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "private_owner".
 *
 * @property int $id
 * @property string $owner_no
 * @property string $f_name
 * @property string $l_name
 * @property string $address
 * @property string $telephone
 * @property int $user_id
 */
class PrivateOwner extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'private_owner';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['owner_no', 'f_name', 'l_name'], 'required'],
            [['address'], 'string'],
            [['user_id'], 'integer'],
            [['owner_no'], 'string', 'max' => 5],
            [['f_name', 'l_name'], 'string', 'max' => 150],
            [['telephone'], 'string', 'max' => 11],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'owner_no' => 'Owner No',
            'f_name' => 'F Name',
            'l_name' => 'L Name',
            'address' => 'Address',
            'telephone' => 'Telephone',
            'user_id' => 'User ID',
        ];
    }
}
