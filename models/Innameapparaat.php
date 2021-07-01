<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "innameapparaat".
 *
 * @property int $id
 * @property int $apparaatID
 * @property int $innameID
 * @property int $ontleed
 *
 * @property Apparaten $apparaat
 * @property Innames $inname
 */
class Innameapparaat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'innameapparaat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['apparaatID', 'innameID', 'ontleed'], 'required'],
            [['apparaatID', 'innameID', 'ontleed'], 'integer'],
            [['apparaatID'], 'exist', 'skipOnError' => true, 'targetClass' => Apparaten::className(), 'targetAttribute' => ['apparaatID' => 'id']],
            [['innameID'], 'exist', 'skipOnError' => true, 'targetClass' => Innames::className(), 'targetAttribute' => ['innameID' => 'id']],
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
            'innameID' => 'Inname ID',
            'ontleed' => 'Ontleed',
        ];
    }

    /**
     * Gets query for [[Apparaat]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getApparaat()
    {
        //hier zijn de joins die ik in de database hebt gemmaakt.
        return $this->hasOne(Apparaten::className(), ['id' => 'apparaatID']);
    }

    /**
     * Gets query for [[Inname]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInname()
    {
        //hier zijn de joins die ik in de database hebt gemmaakt.
        return $this->hasOne(Innames::className(), ['id' => 'innameID']);
    }
}
