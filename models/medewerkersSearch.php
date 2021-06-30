<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\medewerkers;

/**
 * medewerkersSearch represents the model behind the search form of `app\models\medewerkers`.
 */
class medewerkersSearch extends medewerkers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rolID', 'emailaddres'], 'integer'],
            [['naam', 'wachtwoord'], 'safe'],
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
        $query = medewerkers::find();

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
            'rolID' => $this->rolID,
            'emailaddres' => $this->emailaddres,
        ]);

        $query->andFilterWhere(['like', 'naam', $this->naam])
            ->andFilterWhere(['like', 'wachtwoord', $this->wachtwoord]);

        return $dataProvider;
    }
}
