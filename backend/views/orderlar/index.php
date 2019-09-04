<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\OrderlarSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orderlars';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderlar-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Orderlar', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'zakaz_id',
            'odamlar',
            'stol',
            'stul',
            //'vaqt',
            //'summa',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
