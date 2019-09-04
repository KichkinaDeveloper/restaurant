<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Zakazlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakazlar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'persons')->textInput() ?>

    <?= $form->field($model, 'cstol')->textInput() ?>

    <?= $form->field($model, 'cstul')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <div class="form-group">

        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
