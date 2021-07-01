<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\innamesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Innames';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="innames-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Innames', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'medewerkerID',
                'label'     => 'Medewerker',
                'value'     => 'medewerker.naam'
                // hier verander ik  ik de naaam van medewerkerID naar medewerker
                //vranderd de naam van de medewerker inplaats van een nummer staat er een naam
            ],
            'tijdstip',
            'apparaatID',
            //heeft mij niet gelukt om dit goed te tonen
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>