<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\onderdeelapparaat */

$this->title = 'Update Onderdeelapparaat: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Onderdeelapparaat', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="onderdeelapparaat-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'onderdelen' => $onderdelen,
        'apparaten' => $apparaten
        // hier word het uitgevoerd in het browser
    ]) ?>

</div>
