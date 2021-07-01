<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\onderdelen */

$this->title = 'Update Onderdelen: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Onderdelen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="onderdelen-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
