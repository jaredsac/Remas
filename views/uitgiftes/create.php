<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\uitgiftes */

$this->title = 'Create Uitgiftes';
$this->params['breadcrumbs'][] = ['label' => 'Uitgiftes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uitgiftes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'onderdelen' => $onderdelen
    ]) ?>

</div>
