<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Zakazlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakazlar-form pt-4 m-5">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'persons')->textInput() ?>

    <?= $form->field($model, 'cstol')->textInput() ?>

    <?= $form->field($model, 'cstul')->textInput() ?>

    <?=$form->field($model, 'data')->textInput()?>

    <!-- <= $form->field($model, 'price')->radioList() ?> -->
    
    <?= $form->field($model, 'price')->radioList([15000 => 15000, 10000 => 10000, 5000 => 5000])->label("Narxni tanlang:"); ?>
    
    <div class="form-group">

        <?= Html::submitButton('Zakazni faollashtirish', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>
    
</div>
