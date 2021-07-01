<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\innames */

$this->title = 'Create Innames';
$this->params['breadcrumbs'][] = ['label' => 'Innames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="innames-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'medewerkers' =>$medewerkers
    ]) ?>

</div>
