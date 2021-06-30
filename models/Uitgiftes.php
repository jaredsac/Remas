<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "uitgiftes".
 *
 * @property int $id
 * @property int $medewerkerID
 * @property int $onderdeelID
 * @property string $tijdstip
 * @property int $gewichtKg
 * @property float $prijs
 *
 * @property Medewerkers $medewerker
 * @property Onderdelen $onderdeel
 */
class Uitgiftes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'uitgiftes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['medewerkerID', 'onderdeelID', 'tijdstip', 'gewichtKg', 'prijs'], 'required'],
            [['medewerkerID', 'onderdeelID', 'gewichtKg'], 'integer'],
            [['tijdstip'], 'safe'],
            [['prijs'], 'number'],
            [['medewerkerID'], 'exist', 'skipOnError' => true, 'targetClass' => Medewerkers::className(), 'targetAttribute' => ['medewerkerID' => 'id']],
            [['onderdeelID'], 'exist', 'skipOnError' => true, 'targetClass' => Onderdelen::className(), 'targetAttribute' => ['onderdeelID' => 'id']],
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
            'onderdeelID' => 'Onderdeel ID',
            'tijdstip' => 'Tijdstip',
            'gewichtKg' => 'Gewicht Kg',
            'prijs' => 'Prijs',
        ];
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

    /**
     * Gets query for [[Onderdeel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOnderdeel()
    {
        return $this->hasOne(Onderdelen::className(), ['id' => 'onderdeelID']);
    }
}
