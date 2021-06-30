<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "medewerkers".
 *
 * @property int $id
 * @property int $rolID
 * @property string $naam
 * @property string $wachtwoord
 * @property int $emailaddres
 *
 * @property Innames[] $innames
 * @property Rollen $rol
 * @property Uitgiftes[] $uitgiftes
 */
class Medewerkers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'medewerkers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rolID', 'naam', 'wachtwoord', 'emailaddres'], 'required'],
            [['rolID', 'emailaddres'], 'integer'],
            [['naam', 'wachtwoord'], 'string', 'max' => 40],
            [['rolID'], 'exist', 'skipOnError' => true, 'targetClass' => Rollen::className(), 'targetAttribute' => ['rolID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rolID' => 'Role',
            'naam' => 'Naam',
            'wachtwoord' => 'Wachtwoord',
            'emailaddres' => 'Emailaddres',
        ];
    }

    /**
     * Gets query for [[Innames]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInnames()
    {
        return $this->hasMany(Innames::className(), ['medewerkerID' => 'id']);
    }

    /**
     * Gets query for [[Rol]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRol()
    {
        return $this->hasOne(Rollen::className(), ['id' => 'rolID']);
    }

    /**
     * Gets query for [[Uitgiftes]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUitgiftes()
    {
        return $this->hasMany(Uitgiftes::className(), ['medewerkerID' => 'id']);
    }
}
