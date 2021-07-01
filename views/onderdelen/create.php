<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\onderdelen */

$this->title = 'Create Onderdelen';
$this->params['breadcrumbs'][] = ['label' => 'Onderdelen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="onderdelen-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
