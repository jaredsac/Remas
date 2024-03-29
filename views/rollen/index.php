<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\rollenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rollen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rollen-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rollen', ['create'], ['class' => 'btn btn-info']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'naam',
            'omschrijving',
            'waarde',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
