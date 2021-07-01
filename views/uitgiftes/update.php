<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\uitgiftes */

$this->title = 'Update Uitgiftes: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uitgiftes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="uitgiftes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'onderdelen' => $onderdelen,
        'medewerkers' =>$medewerkers
        // hier word het uitgevoerd in het browser
    ]) ?>

</div>
