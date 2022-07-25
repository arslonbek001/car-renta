<?php
include_once("header.php");
include_once("db.php");

$category_sql = "SELECT * FROM `category` WHERE status='1'";
$res_category = mysqli_query($connect, $category_sql);

$categ = [];
while ($row = mysqli_fetch_assoc($res_category)) {
	array_push($categ, $row);
}

?>

<!-- Main -->
<div id="main">

	<!-- One -->
	<section id="one" class="tiles">
		<?php
		foreach ($categ as $key) {
			echo '<article>
			<span class="image">
			<img src='.$key['image'].' alt="" />
			</span>
			<header class="major">
			<h3>'.$key['title_uz'].'</h3>

			<p style="font-size: 13px" >Narxi: <strong>'.$key['price'].'</strong></p>

			<p style="font-size: 17px">'.$key['car_list_uz'].' <br>'.$key['cars'].'

			<div class="major-actions">
			<a style="font-size: 18px" href="#contact" class="button small next scrolly">'.$key['button'].'</a>
			</div>
			</header>
			</article>';
		} 
		?>	
	</section>

	<!-- Two -->
	<section id="two">
		<div class="inner">
			<header class="major">
				<h2>Biz haqimizda</h2>
			</header>
			<p>Sam Car Renta kompaniyasiga xush kelibsiz! <br> Bu yo`nalishni Dubay megapolisi - Arab Amirliklarida boshlab endi shu yerdamiz. Biz bu sohada yillar davomida ishlaymiz. Xalqaro darajada tajribamiz bor...</p>
			<ul class="actions">
				<li><a href="about.php" class="button next">Ko`proq o`qish</a></li>
			</ul>
		</div>
	</section>

</div>

<!-- inquiry -->
<section id="contact">
	<div class="inner">
		<section>
			<header class="major">
				<h2>Buyurtma qilish</h2>
			</header>

			<form method="post" action="#">
				<div class="fields">
					<div class="field half">
						<label for="location">Manzil</label>
						<input type="text" name="location" id="location" />
					</div>

					<div class="field half">
						<label for="vehicle-type">Mashina turini kiriting</label>

						<select name="vehicle-type" id="vehicle-type">
							<option value="">- Mashina turi -</option>
							<option value="1">Premyum</option>
							<option value="2">Bagajli</option>
							<option value="3">Sedanlar</option>
						</select>
					</div>

					<div class="field half">
						<label for="date-from">Shu sanadan</label>
						<input type="text" name="date-from" id="date-from" />
					</div>

					<div class="field half">
						<label for="date-to">Bu sanagacha</label>
						<input type="text" name="date-to" id="date-to" />
					</div>

					<div class="field">
						<label for="name">Ism</label>
						<input type="text" name="name" id="name" />
					</div>

					<div class="field half">
						<label for="email">Email</label>
						<input type="text" name="email" id="email" />
					</div>

					<div class="field half">
						<label for="phone">Telefon</label>
						<input type="text" name="phone" id="phone" />
					</div>

					<div class="field">
						<label for="message">Izoh</label>
						<textarea name="message" id="message" rows="3"></textarea>
					</div>

					<div class="field half text-right">
						<label>&nbsp;</label>

						<ul class="actions">
							<li><input type="submit" value="Yuborish" class="primary" /></li>
						</ul>
					</div>
				</div>
			</form>
		</section>
		<section class="split">
			<section>
				<div class="contact-method">
					<span class="icon alt fa-envelope"></span>
					<h3>Email</h3>
					<a href="#">Sam_car_renta_info@gmail.com</a>
				</div>
			</section>
			<section>
				<div class="contact-method">
					<span class="icon alt fa-phone"></span>
					<h3>Telefon</h3>
					<span>(+998) 91 317 00 11</span>
					<br>
					<span>(+998) 90 445 44 00</span>
				</div>
			</section>
			<section>
				<div class="contact-method">
					<span class="icon alt fa-home"></span>
					<h3>Manzil</h3>
					<span>Beruniy 65<br />
						Samarqand shahar<br />
					O`zbekiston</span>
					<h3>2-Manzil</h3>
					<span>Amir Temur 157, Garderobe celler<br />
						Samarqand shahar<br />
					O`zbekiston</span>
				</div>
			</section>
			<section>
				<h3>Qoidalar</h3>

				<div class="box">
					<p>Mashinani 10 kunlik ijarasi uchun 1kun bonus - 11 kun boshqarish<br>
						1 oy bron uchun 10% chegirma<br>
						Moykasiz topshirganlik uchun 50 ming so`m jarima<br>
						Kunlik boshqarish limiti 200 km<br>
						Ortiqcha har km uchun ming so`mdan jarima<br>
						Kechikkan har soatga 50 ming so`mdan jarima<br>
						Pasport, prava muddatidan o`tgan bo`lmasligi<br>
					</p>
				</div>
			</section>
		</section>
	</div>
</section>

<!-- Footer -->
<footer id="footer">
	<div class="inner">
		<ul class="icons">
			<li><a href="#" class="icon alt fa-telegram"><span class="label">Twitter</span></a></li>
			<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
			<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
		</ul>
		<ul class="copyright">
			<li>&copy; 2022 <a href="#">SamCarRent LTD</a> | Barcha huquqlar himoyalangan.</li>
		</ul>
	</div>
</footer>

</div>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
<script src="assets/js/util.js"></script>
<script src="assets/js/main.js"></script>
</body>
</html>