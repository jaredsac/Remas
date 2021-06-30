<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\medewerkersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="medewerkers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'rolID') ?>

    <?= $form->field($model, 'naam') ?>

    <?= $form->field($model, 'wachtwoord') ?>

    <?= $form->field($model, 'emailaddres') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
