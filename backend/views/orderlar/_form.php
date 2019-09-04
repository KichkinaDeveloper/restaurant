<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Orderlar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orderlar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'zakaz_id')->textInput() ?>

    <?= $form->field($model, 'odamlar')->textInput() ?>

    <?= $form->field($model, 'stol')->textInput() ?>

    <?= $form->field($model, 'stul')->textInput() ?>

    <!-- <= $form->field($model, 'vaqt')->textInput() ?> -->

    <?= $form->field($model, 'summa')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
