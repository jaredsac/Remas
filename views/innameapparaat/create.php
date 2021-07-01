<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\innameapparaat */

$this->title = 'Create Innameapparaat';
$this->params['breadcrumbs'][] = ['label' => 'Innameapparaat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="innameapparaat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'apparaten' => $apparaten,
        'innames' => $innames
        // hier word het uitgevoerd in het browser
    ]) ?>

</div>
