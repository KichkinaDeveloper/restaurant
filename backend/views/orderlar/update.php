<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Orderlar */

$this->title = 'Update Orderlar: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Orderlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="orderlar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
