<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\onderdeelapparaat */

$this->title = 'Create Onderdeelapparaat';
$this->params['breadcrumbs'][] = ['label' => 'Onderdeelapparaat', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="onderdeelapparaat-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'onderdelen' => $onderdelen,
        'apparaten' => $apparaten
        // hier word het uitgevoerd in het browser
    ]) ?>

</div>