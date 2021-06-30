<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\onderdeelapparatenSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Onderdeelapparaat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="onderdeelapparaat-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Onderdeelapparaat', ['create'], ['class' => 'btn btn-success']) ?>
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
                'attribute' => 'apparaatID',
                'label'     => 'Apparaat',
                'value'     => 'apparaat.naam'
                // hier verander ik  ik de naaam van apparaatID naar Appraat
                //vranderd de naam van de apparaat inplaats van een nummer staat er een naam
            ],
            [
                'attribute' => 'onderdeelID',
                'label'     => 'Onderdeel',
                'value'     => 'onderdeel.naam'
                // hier verander ik  ik de naaam van onderdeelID naar onderdeel
                //vranderd de naam van de onderdeel inplaats van een nummer staat er een naam
            ],
            'percentage',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>