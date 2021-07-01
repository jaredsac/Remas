<?php

use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\onderdeelapparaat */
/* @var $form yii\widgets\ActiveForm */

$onderdeel = ArrayHelper::map($onderdelen, 'id', 'naam');
$apparaat = ArrayHelper::map($apparaten, 'id', 'naam');
//dit gebruik ik om mijn dropdownlist te kunnen gebruiken
?>

<div class="onderdeelapparaat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'apparaatID')->dropDownList($apparaat)
    //hier boven en onder staan de dropdownlist
    ?>

    <?= $form->field($model, 'onderdeelID')->dropDownList($onderdeel) ?>

    <?= $form->field($model, 'percentage')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-info']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>