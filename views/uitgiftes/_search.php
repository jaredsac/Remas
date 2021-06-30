<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\uitgiftesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="uitgiftes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'medewerkerID') ?>

    <?= $form->field($model, 'onderdeelID') ?>

    <?= $form->field($model, 'tijdstip') ?>

    <?= $form->field($model, 'gewichtKg') ?>

    <?php // echo $form->field($model, 'prijs') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
