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
            'apparaatID' => 'Apparaat ID',
            'onderdeelID' => 'Onderdeel ID',
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
// hier moest een hasmany staan maar het werkte niet goed bij mij dus heb ik het 
//heb ik het maar hasOne gedaan twee keer.