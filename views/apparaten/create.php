<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\apparaten */

$this->title = 'Create Apparaten';
$this->params['breadcrumbs'][] = ['label' => 'Apparatens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="apparaten-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
