<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\uitgiftes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uitgiftes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medewerkerID')->textInput() ?>

    <?= $form->field($model, 'onderdeelID')->textInput() ?>

    <?= $form->field($model, 'tijdstip')->textInput() ?>

    <?= $form->field($model, 'gewichtKg')->textInput() ?>

    <?= $form->field($model, 'prijs')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
