<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\onderdelenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Onderdelen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="onderdelen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Onderdelen', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'naam',
            'omschrijving',
            'prijsPerKg',
            'voorraadKg',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
