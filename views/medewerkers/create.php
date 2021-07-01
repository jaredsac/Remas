<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\medewerkers */

$this->title = 'Create Medewerkers';
$this->params['breadcrumbs'][] = ['label' => 'Medewerkers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medewerkers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'rollen' => $rollen
        // hier word het uitgevoerd in het browser
    ]) ?>

</div>
