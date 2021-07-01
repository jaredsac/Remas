<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\onderdelen */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="onderdelen-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'omschrijving')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'prijsPerKg')->textInput() ?>

    <?= $form->field($model, 'voorraadKg')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
