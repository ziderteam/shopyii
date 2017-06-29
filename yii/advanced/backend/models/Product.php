<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $prod_id
 * @property string $prod_name
 * @property string $prod_desc
 * @property integer $cate_id
 * @property double $pro_price
 * @property string $img
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['prod_name', 'cate_id', 'pro_price'], 'required'],
            [['cate_id'], 'integer'],
            [['pro_price'], 'number'],
            [['prod_name', 'prod_desc', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'prod_id' => 'Prod ID',
            'prod_name' => 'Prod Name',
            'prod_desc' => 'Prod Desc',
            'cate_id' => 'Category',
            'pro_price' => 'Pro Price',
            'img' => 'Img',
        ];
    }
}
