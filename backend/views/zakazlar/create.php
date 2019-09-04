<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Zakazlar */

$this->title = 'Zakaz Berish';
$this->params['breadcrumbs'][] = ['label' => 'Zakazlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakazlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
