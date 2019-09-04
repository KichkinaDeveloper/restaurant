<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\OrderlarSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orderlar-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'zakaz_id') ?>

    <?= $form->field($model, 'odamlar') ?>

    <?= $form->field($model, 'stol') ?>

    <?= $form->field($model, 'stul') ?>

    <?php // echo $form->field($model, 'vaqt') ?>

    <?php // echo $form->field($model, 'summa') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
