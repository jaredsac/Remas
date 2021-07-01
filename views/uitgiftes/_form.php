<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\uitgiftes */
/* @var $form yii\widgets\ActiveForm */

$onderdeel = ArrayHelper::map($onderdelen, 'id', 'naam');
$medewerker = ArrayHelper::map($medewerkers, 'id', 'naam');
//dit gebruik ik om mijn dropdownlist te kunnen gebruiken

?>

<div class="uitgiftes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'medewerkerID')->dropDownList($medewerker) 
    //hier boven en onder staan de dropdownlist
    ?>

    <?= $form->field($model, 'onderdeelID')->dropDownList($onderdeel) ?>

    <?= $form->field($model, 'tijdstip')->textInput() ?>

    <?= $form->field($model, 'gewichtKg')->textInput() ?>

    <?= $form->field($model, 'prijs')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
