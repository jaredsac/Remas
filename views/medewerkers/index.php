<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\medewerkersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Medewerkers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="medewerkers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Medewerkers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'rolID',
                'label'     => 'Role',
                'value'     => 'rol.naam'
                // hier verander ik  ik de naaam van rolID naar role
                //vranderd de naam van de rollen inplaats van een nummer staat er een naam
            ],
            'naam',
            'wachtwoord',
            'emailaddres:email',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
