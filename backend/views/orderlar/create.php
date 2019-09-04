<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Orderlar */

$this->title = 'Create Orderlar';
$this->params['breadcrumbs'][] = ['label' => 'Orderlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderlar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
