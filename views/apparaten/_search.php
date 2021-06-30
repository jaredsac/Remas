<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\apparatenSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="apparaten-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'naam') ?>

    <?= $form->field($model, 'omschrijving') ?>

    <?= $form->field($model, 'vergoeding') ?>

    <?= $form->field($model, 'gewichtgram') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
