<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "apparaten".
 *
 * @property int $id
 * @property string $naam
 * @property string $omschrijving
 * @property float $vergoeding
 * @property int $gewichtgram
 *
 * @property Innameapparaat[] $innameapparaats
 * @property Onderdeelapparaat[] $onderdeelapparaats
 */
class Apparaten extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'apparaten';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naam', 'omschrijving', 'vergoeding', 'gewichtgram'], 'required'],
            [['vergoeding'], 'number'],
            [['gewichtgram'], 'integer'],
            [['naam'], 'string', 'max' => 40],
            [['omschrijving'], 'string', 'max' => 200],
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
            'vergoeding' => 'Vergoeding',
            'gewichtgram' => 'Gewichtgram',
        ];
    }

    /**
     * Gets query for [[Innameapparaats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInnameapparaats()
    {
        return $this->hasMany(Innameapparaat::className(), ['apparaatID' => 'id']);
        //hier zijn de joins die ik in de database hebt gemmaakt.
    }

    /**
     * Gets query for [[Onderdeelapparaats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOnderdeelapparaats()
    {
        return $this->hasMany(Onderdeelapparaat::className(), ['apparaatID' => 'id']);
        //hier zijn de joins die ik in de database hebt gemmaakt.
    }
}
