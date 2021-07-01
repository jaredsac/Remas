<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\innameapparaat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="innameapparaat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'apparaatID')->textInput() ?>

    <?= $form->field($model, 'innameID')->textInput() ?>

    <?= $form->field($model, 'ontleed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
