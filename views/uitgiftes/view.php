<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\uitgiftes */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Uitgiftes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="uitgiftes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'medewerkerID',
                'label'     => 'Medewerker',
                
                // hier verander ik  ik de naaam van medewerkerID naar medewerker
                //vranderd de naam van de medewerker inplaats van een nummer staat er een naam
                // valua value werk niet 
            ],
            [
                'attribute' => 'onderdeelID',
                'label'     => 'Onderdeel',
                // valua value werk niet
                // hier verander ik  ik de naaam van onderdeelID naar onderdeel
                //vranderd de naam van de onderdeel inplaats van een nummer staat er een naam
            ],
            'tijdstip',
            'gewichtKg',
            'prijs',
        ],
    ]) ?>

</div>
