<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\medewerkers */
/* @var $form yii\widgets\ActiveForm */

$rolelist = ArrayHelper::map($rollen, 'id', 'naam');
//dit gebruik ik om mijn dropdownlist te kunnen gebruiken

?>

<div class="medewerkers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= //hier onder staan de dropdownlist
    $form->field($model, 'rolID')->dropDownList($rolelist) ?>

    <?= $form->field($model, 'naam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wachtwoord')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailaddres')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
