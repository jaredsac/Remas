<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\uitgiftes;

/**
 * uitgiftesSearch represents the model behind the search form of `app\models\uitgiftes`.
 */
class uitgiftesSearch extends uitgiftes
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'medewerkerID', 'onderdeelID', 'gewichtKg'], 'integer'],
            [['tijdstip'], 'safe'],
            [['prijs'], 'number'],
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
        $query = uitgiftes::find();

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
            'medewerkerID' => $this->medewerkerID,
            'onderdeelID' => $this->onderdeelID,
            'tijdstip' => $this->tijdstip,
            'gewichtKg' => $this->gewichtKg,
            'prijs' => $this->prijs,
        ]);

        return $dataProvider;
    }
}
