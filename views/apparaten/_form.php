<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\apparaten */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apparaten-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'naam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'omschrijving')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'vergoeding')->textInput() ?>

    <?= $form->field($model, 'gewichtgram')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
