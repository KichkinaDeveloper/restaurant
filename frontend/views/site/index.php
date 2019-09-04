<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<center>
<div id="top">
	<div class="nav">
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
<div id="startParallax" class="m-0 p-0">
<center>
	<p id="logo"><span>To'yxonalar</span></p>
</center>
</div><br><br>
<main>
<div id="menu">
<form id="food" action="mailto:dicksonparlma@gmail.com" method="post" enctype="text/plain">

	<div class="row">
		<div class="col-md-6">
			<h1 id="morning">Versal</h1>
			<img alt="table spread" class="image-responsive w-100" style="object-fit:cover" src="images/versal.jpg">
		</div>
		<div class="col-md-6 mt-3">
			<div class="well">

			<h1 class="name">Versal to'yxonasi haqida:</h1>
			<br>
			<p style="font-size:20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est autem veritatis quis accusamus magni nam, cupiditate sint molestias, vel quibusdam minima nobis ex nisi. Eius nobis maiores illum voluptatem praesentium?</p>
			<p style="font-size:20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est autem veritatis quis accusamus magni nam, cupiditate sint molestias, vel quibusdam minima nobis ex nisi. Eius nobis maiores illum voluptatem praesentium?</p>
			<p style="font-size:20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est autem veritatis quis accusamus magni nam, cupiditate sint molestias, vel quibusdam minima nobis ex nisi. Eius nobis maiores illum voluptatem praesentium?</p>
		</div>
	</div>
</div>
	<br>

	<div class="row">
		<div class="col-md-6">
        <div class="well">

<h1 class="name">Marjona to'yxonasi haqida:</h1>
<br>
<p style="font-size:20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est autem veritatis quis accusamus magni nam, cupiditate sint molestias, vel quibusdam minima nobis ex nisi. Eius nobis maiores illum voluptatem praesentium?</p>
<p style="font-size:20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est autem veritatis quis accusamus magni nam, cupiditate sint molestias, vel quibusdam minima nobis ex nisi. Eius nobis maiores illum voluptatem praesentium?</p>
<p style="font-size:20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est autem veritatis quis accusamus magni nam, cupiditate sint molestias, vel quibusdam minima nobis ex nisi. Eius nobis maiores illum voluptatem praesentium?</p>
</div>
	</div>
		<div class="col-md-6">
			<h1 id="noon">Marjona</h1>
			<img alt="pilau" class="image-responsive w-100" src="images/marjona.jpg">
		</div>

	</div>
	<br><br>

	<div class="row">
		<div class="col-md-6">
			<h1 id="night">Oq Oltin</h1>
			<img alt="dinner buffet" class="image-responsive w-100" src="images/oqoltin.jpg">
		</div>
			<div class="col-md-6">
            <div class="well">

<h1 class="name">Oq Oltin to'yxonasi haqida:</h1>
<br>
<p style="font-size:20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est autem veritatis quis accusamus magni nam, cupiditate sint molestias, vel quibusdam minima nobis ex nisi. Eius nobis maiores illum voluptatem praesentium?</p>
<p style="font-size:20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est autem veritatis quis accusamus magni nam, cupiditate sint molestias, vel quibusdam minima nobis ex nisi. Eius nobis maiores illum voluptatem praesentium?</p>
<p style="font-size:20px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Est autem veritatis quis accusamus magni nam, cupiditate sint molestias, vel quibusdam minima nobis ex nisi. Eius nobis maiores illum voluptatem praesentium?</p>
</div>	
		</div>
	</div>
	</form>
	</div>
	</form>

<br>
<br>
<div class="container">
<section class="awSlider">
	<div class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target=".carousel" data-slide-to="0" class="active"></li>
			<li data-target=".carousel" data-slide-to="1"></li>
			<li data-target=".carousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div id="rev" class="container">
<section class="awSlider">
	<div class="carousel slide" data-ride="carousel">
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="card">
					<blockquote class="blockquote">
					<p class="review">Eng yaxshi to'yxonalar faqat bizda! Biz bilan bog'laning</p>
					<footer class="review-footer mt-2 mb-3 pb-5"><h1 class="name">Isroilov Nizom</h1>
					</footer>
				</blockquote>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<blockquote class="blockquote">
          <p class="review">Eng yaxshi to'yxonalar faqat bizda! Biz bilan bog'laning</p>
					<footer class="review-footer"><h1 class="name">Leila Tutu</h1>
					</footer>
					</blockquote>
				</div>
			</div>
			<div class="item">
				<div class="card">
					<blockquote class="blockquote">
					<p class="review">Eng yaxshi to'yxonalar faqat bizda! Biz bilan bog'laning</p>
   				<footer class="review-footer">
					<h1 class="name">Amwoma</h1>
				</footer>
				</blockquote>
				</div>
			</div>
		</div>
	</div>
	</div>
</section>
</div>
<br>
<br>
</main>
<div id="footer container" style="background:orange">
	<div class="row">
	<div class="m-0 p-0 col-sm-6">
		<br>
		<ul>
			<h4 class="same">Biz bilan aloqa:</h4><br>
			<li class="staff">Xisobchi:123456789</li><br>
			<li class="staff">Adminstrator: 098765312</li><br>
			<li class="staff">Bosh direktor: 345672894</li><br>
			<li class="staff">Ish boshqaruvchi: 467345678</li><br>
		</ul>
	</div>
	<div class="col-sm-6">
		<br>
		<ul>
			<h4 class="same">Ijtimoiy tarmoqlarda:</h4><br>
			<li><img src="https://cdn4.iconfinder.com/data/icons/social-media-icons-the-circle-set/48/facebook_circle-512.png" alt="" class="icon"><span class="staff">Marjona</span>
			<li><img src="https://cdn2.iconfinder.com/data/icons/minimalism/512/twitter.png" alt="" class="icon"><span class="staff">Versal</span></li>
			<li><img src="https://cdn3.iconfinder.com/data/icons/social-media-logos-flat-colorful/2048/5337_-_Snapchat-512.png" alt="" class="icon"><span class="staff">Oq Oltin</span></li>
	</div>
</div>
</div>
</div>