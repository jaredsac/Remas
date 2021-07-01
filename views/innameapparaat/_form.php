<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\innameapparaat */
/* @var $form yii\widgets\ActiveForm */

$apparaat = ArrayHelper::map($apparaten, 'id', 'naam');
$inname = ArrayHelper::map($innames, 'id', 'medewerkerID');
?>

<div class="innameapparaat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'apparaatID')->dropDownList($apparaat) ?>

    <?= $form->field($model, 'innameID')->dropDownList($inname) ?>

    <?= $form->field($model, 'ontleed')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
