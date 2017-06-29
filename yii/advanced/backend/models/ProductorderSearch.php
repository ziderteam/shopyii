<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Productorder;

/**
 * ProductorderSearch represents the model behind the search form about `backend\models\Productorder`.
 */
class ProductorderSearch extends Productorder
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'cus_id', 'prod_id', 'order_number'], 'integer'],
            [['created_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Productorder::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'order_id' => $this->order_id,
            'cus_id' => $this->cus_id,
            'prod_id' => $this->prod_id,
            'order_number' => $this->order_number,
            'created_at' => $this->created_at,
        ]);

        return $dataProvider;
    }
}
