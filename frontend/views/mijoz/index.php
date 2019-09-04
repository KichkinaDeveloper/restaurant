<?php
 use yii\helpers\Url;
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
<div class="m-5">Barcha zakazlar</div>
<style>
th,tr{
    font-size: 20px;
}
th{
    background: greenyellow;
}
table{
    margin-top: 200px;
}
h1{
    border: 2px solid black;
    background: red;
    width: 700px;
    margin-left: 315px;
    border-radius: 30px;
    color:white;
}
</style>
<h1 class="text-center">Barcha buyurtmalar</h1>
<div class="mt-5"></div>
<table class="table table-striped table-bordered mt-2" style="margin-top:100px;">
    <thead class="mdb-color darken-5">
        <tr class="text-red">
            <th class="pt-3 pb-3">#</th>
            <th>Restoran Nomi</th>
            <th>Odamlar Soni</th>
            <th>Stollar Soni</th>
            <th>Stullar Soni</th>
            <th>Belgilangan vaqt</th>
            <th>Stol Narxi (so'm)</th>
            <th>Kelishilgan Narx (so'm)</th>
            <th>O'chirish</th>
        </tr>
    </thead>
    <?php foreach ($model as $m) :; ?>
    <?php $a = 1; ?>
    <?php $a = $m->persons * $m->price ?>
    <tr>
        <td><?= $m->id?></td>
        <td><?= $m->name?></td>
        <td><?= $m->persons?></td>
        <td><?= $m->cstol?></td>
        <td><?= $m->cstul?></td>
        <td><?= $m->data?></td>
        <td><?= $m->price?></td>
        <td><?= $a?></td>
        <td><a data-confirm="Ishonchingiz komilmi?!" class="btn btn-danger" href="<?= Url::to(['mijoz/delete', 'id' => $m->id]);?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>