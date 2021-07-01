<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\innameapparaat */

$this->title = 'Update Innameapparaat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Innameapparaats', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="innameapparaat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
