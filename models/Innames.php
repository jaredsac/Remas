<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "innames".
 *
 * @property int $id
 * @property int $medewerkerID
 * @property string $tijdstip
 *
 * @property Innameapparaat[] $innameapparaats
 * @property Medewerkers $medewerker
 */
class Innames extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'innames';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['medewerkerID'], 'required'],
            [['medewerkerID'], 'integer'],
            [['tijdstip'], 'safe'],
            [['medewerkerID'], 'exist', 'skipOnError' => true, 'targetClass' => Medewerkers::className(), 'targetAttribute' => ['medewerkerID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'medewerkerID' => 'Medewerker ID',
            'tijdstip' => 'Tijdstip',
        ];
    }

    /**
     * Gets query for [[Innameapparaats]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInnameapparaats()
    {
        return $this->hasMany(Innameapparaat::className(), ['innameID' => 'id']);
    }

    /**
     * Gets query for [[Medewerker]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMedewerker()
    {
        return $this->hasOne(Medewerkers::className(), ['id' => 'medewerkerID']);
    }
}
