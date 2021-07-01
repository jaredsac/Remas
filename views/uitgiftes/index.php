<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\uitgiftesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Uitgiftes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="uitgiftes-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Uitgiftes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            [
                'attribute' => 'medewerkerID',
                'label'     => 'Medewerker',
                'value'     => 'medewerker.naam'
                // hier verander ik  ik de naaam van medewerkerID naar medewerker
                //vranderd de naam van de medewerker inplaats van een nummer staat er een naam
            ],
            [
                'attribute' => 'onderdeelID',
                'label'     => 'Onderdeel',
                'value'     => 'onderdeel.naam'
                // hier verander ik  ik de naaam van onderdeelID naar onderdeel
                //vranderd de naam van de onderdeel inplaats van een nummer staat er een naam
            ],
            'tijdstip',
            'gewichtKg',
            'prijs',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
