<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "onderdeelapparaat".
 *
 * @property int $id
 * @property int $apparaatID
 * @property int $onderdeelID
 * @property int $percentage
 *
 * @property Apparaten $apparaat
 * @property Onderdelen $onderdeel
 */
class Onderdeelapparaat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'onderdeelapparaat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['apparaatID', 'onderdeelID', 'percentage'], 'required'],
            [['apparaatID', 'onderdeelID', 'percentage'], 'integer'],
            [['apparaatID'], 'exist', 'skipOnError' => true, 'targetClass' => Apparaten::className(), 'targetAttribute' => ['apparaatID' => 'id']],
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
            'apparaatID' => 'Apparaat',
            'onderdeelID' => 'Onderdeel',
            'percentage' => 'Percentage',
        ];
    }

    /**
     * Gets query for [[Apparaat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApparaat()
    {
        return $this->hasOne(Apparaten::className(), ['id' => 'apparaatID']);
        //hier zijn de joins die ik in de database hebt gemmaakt.

    }

    /**
     * Gets query for [[Onderdeel]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOnderdeel()
    {
        return $this->hasOne(Onderdelen::className(), ['id' => 'onderdeelID']);
        //hier zijn de joins die ik in de database hebt gemmaakt.
    }
}
