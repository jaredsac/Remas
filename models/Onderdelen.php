<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "onderdelen".
 *
 * @property int $id
 * @property string $naam
 * @property string $omschrijving
 * @property float $prijsPerKg
 * @property float $voorraadKg
 *
 * @property Onderdeelapparaat[] $onderdeelapparaats
 * @property Uitgiftes[] $uitgiftes
 */
class Onderdelen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'onderdelen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naam', 'omschrijving', 'prijsPerKg', 'voorraadKg'], 'required'],
            [['prijsPerKg', 'voorraadKg'], 'number'],
            [['naam'], 'string', 'max' => 40],
            [['omschrijving'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'naam' => 'Naam',
            'omschrijving' => 'Omschrijving',
            'prijsPerKg' => 'Prijs Per Kg',
            'voorraadKg' => 'Voorraad Kg',
        ];
    }

    /**
     * Gets query for [[Onderdeelapparaats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOnderdeelapparaats()
    {
        return $this->hasMany(Onderdeelapparaat::className(), ['onderdeelID' => 'id']);
        //hier zijn de joins die ik in de database hebt gemmaakt.
    }

    /**
     * Gets query for [[Uitgiftes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUitgiftes()
    {
        return $this->hasMany(Uitgiftes::className(), ['onderdeelID' => 'id']);
        //hier zijn de joins die ik in de database hebt gemmaakt.
    }
}
