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

            'id',
            'medewerkerID',
            'onderdeelID',
            'tijdstip',
            'gewichtKg',
            //'prijs',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
