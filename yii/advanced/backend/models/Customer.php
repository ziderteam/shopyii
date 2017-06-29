<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "customer".
 *
 * @property integer $cus_id
 * @property string $name
 * @property string $email
 * @property string $tel
 * @property string $fax
 */
class Customer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['gender',], 'integer'],
            [['name', 'email', 'address'], 'string', 'max' => 255],
            [['tel', 'fax'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cus_id' => 'Cus ID',
            'gender' =>'Gender',
            'name' => 'Name',
            'email' => 'Email',
            'tel' => 'Tel',
            'fax' => 'Fax',
            'address'=>'Address'
        ];
    }
}
