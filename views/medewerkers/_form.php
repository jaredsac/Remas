<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\medewerkers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medewerkers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'rolID')->textInput() ?>

    <?= $form->field($model, 'naam')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'wachtwoord')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'emailaddres')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
