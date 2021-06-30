<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\apparaten;

/**
 * apparatenSearch represents the model behind the search form of `app\models\apparaten`.
 */
class apparatenSearch extends apparaten
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'gewichtgram'], 'integer'],
            [['naam', 'omschrijving'], 'safe'],
            [['vergoeding'], 'number'],
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
        $query = apparaten::find();

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
            'vergoeding' => $this->vergoeding,
            'gewichtgram' => $this->gewichtgram,
        ]);

        $query->andFilterWhere(['like', 'naam', $this->naam])
            ->andFilterWhere(['like', 'omschrijving', $this->omschrijving]);

        return $dataProvider;
    }
}
