<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "productorder".
 *
 * @property integer $order_id
 * @property integer $cus_id
 * @property integer $prod_id
 * @property integer $order_number
 * @property string $created_at
 */
class Productorder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'productorder';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cus_id', 'prod_id', 'order_number'], 'required'],
            [['cus_id', 'prod_id', 'order_number'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'cus_id' => 'Cus ID',
            'prod_id' => 'Prod ID',
            'order_number' => 'Order Number',
            'created_at' => 'Created At',
        ];
    }
}
