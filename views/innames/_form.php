<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\innames */
/* @var $form yii\widgets\ActiveForm */

$medewerker = ArrayHelper::map($medewerkers, 'id', 'naam');
//dit gebruik ik om mijn dropdownlist te kunnen gebruiken

?>

<div class="innames-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medewerkerID')->dropDownList($medewerker) 
    //hier boven  staan de dropdownlist
    ?>

    <?= $form->field($model, 'tijdstip')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
