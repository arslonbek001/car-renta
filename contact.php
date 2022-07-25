<?php

include_once("db.php");

$contact_sql = "SELECT * FROM `contact`";
$res_contact = mysqli_query($connect, $contact_sql);

$categ = [];
while ($row = mysqli_fetch_assoc($res_contact)) {
	array_push($categ, $row);
}

?>


<!DOCTYPE html>

<html>
	<head>
		<title>Mashina bron qilish | Biz bilan bog`lanish</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<?php include("includes/menu.php"); ?>

				<!-- Main -->
					<div id="main" class="alt">
			<!-- One -->
							<section id="one">
								<div class="inner">


	<?php
foreach ($categ as $key) {
	echo '<header class="major">
										<h1>'.$key['title_uz'].'</h1>
									</header>
									<span class="image main"><img src='.$key['image'].' alt="" /></span>
									<p>'.$key['description_uz'].'
									</p>';
}

	?>		

									
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<header class="major">
									<h2>Biz bilan bog`lanish</h2>
								</header>

								<form method="post" action="#">
									<div class="fields">
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
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
										<div class="field half text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Xabarni yuborish" class="primary" /></li>
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
										<h3>1-Manzil</h3>
										<span>Beruniy 65<br />
										Samarqand shahar<br />
										O`zbekiston</span>
										<h3>2-Manzil</h3>
										<span>Amir Temur 157, Garderobe do`koni yerto`lasi<br />
										Samarqand shahar<br />
										O`zbekiston</span>
									</div>
								</section>
							</section>
						</div>
					</section>


				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon alt fa-telegram"><span class="label">Telegram</span></a></li>
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