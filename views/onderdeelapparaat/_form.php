<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\onderdeelapparaat */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="onderdeelapparaat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'apparaatID')->textInput() ?>

    <?= $form->field($model, 'onderdeelID')->textInput() ?>

    <?= $form->field($model, 'percentage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
