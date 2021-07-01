<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\innameappraatSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Innameapparaat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="innameapparaat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Innameapparaat', ['create'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
 
            //'id',
            [
                'attribute' => 'apparaatID',
                'label'     => 'Apparaat',
                'value'     => 'apparaat.naam'
                // hier verander ik  ik de naaam van apparaatID naar Appraat
                //vranderd de naam van de apparaat inplaats van een nummer staat er een naam
            ],
            'innameID',
            //heeft mij niet gelukt op het te veranderen
            'ontleed',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
