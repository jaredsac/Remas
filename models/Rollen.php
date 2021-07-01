<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rollen".
 *
 * @property int $id
 * @property string $naam
 * @property string $omschrijving
 * @property int $waarde
 *
 * @property Medewerkers[] $medewerkers
 */
class Rollen extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rollen';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['naam', 'omschrijving', 'waarde'], 'required'],
            [['waarde'], 'integer'],
            [['naam'], 'string', 'max' => 20],
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
            'waarde' => 'Waarde',
        ];
    }

    /**
     * Gets query for [[Medewerkers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedewerkers()
    {
        return $this->hasMany(Medewerkers::className(), ['rolID' => 'id']);
        //hier zijn de joins die ik in de database hebt gemmaakt.
    }
}
