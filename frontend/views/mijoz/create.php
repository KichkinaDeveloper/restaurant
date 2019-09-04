<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model common\models\Zakazlar */

$this->title = 'Buyurtma Berish';
$this->params['breadcrumbs'][] = ['label' => 'Zakazlars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<center>
<div id="top" class="mb-4">
	<div class="nav mb-4">
			<span id="display">☰ to'yxonalar </span>
		<div class="navbar">
		<a href="<?= Url::to(['site/index'])?>" class="rules">Bosh Sahifa</a>
		</div>
		<div class="navbar">
			<p><a href="<?= Url::to(['mijoz/create'])?>">Buyurtma berish</a></p>
		</div>
		<div class="navbar">
			<p><a href="<?= Url::to(['mijoz/index'])?>">Berilgan buyurtmalar</a></p>
		</div>
			</div>
	</div>
</div>
</center>
<style>
h1{
    border: 2px solid black;
    background: blue;
    width: 700px;
    margin-left: 280px;
    border-radius: 30px;
    color:white;
}
</style>
<div class="zakazlar-create mt-5 pt-5 ml-3 mr-3 p-5">

    <h1 class="text-center mt-5"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
