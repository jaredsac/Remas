<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\rollen */

$this->title = 'Create Rollen';
$this->params['breadcrumbs'][] = ['label' => 'Rollens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rollen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
