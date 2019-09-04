<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Orderlar;

/**
 * OrderlarSearch represents the model behind the search form of `common\models\Orderlar`.
 */
class OrderlarSearch extends Orderlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'zakaz_id', 'odamlar', 'stol', 'stul', 'summa'], 'integer'],
            [['vaqt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Orderlar::find();

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
            'id' => $this->id,
            'zakaz_id' => $this->zakaz_id,
            'odamlar' => $this->odamlar,
            'stol' => $this->stol,
            'stul' => $this->stul,
            'vaqt' => $this->vaqt,
            'summa' => $this->summa,
        ]);

        return $dataProvider;
    }
}
