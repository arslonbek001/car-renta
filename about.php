<!DOCTYPE html>
<html>
<head>
	<title>Mashina bron qilish | Biz haqimizda</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>
<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<?php include("includes/menu.php"); ?>

		<?php

		include_once("db.php");

		$about_us_sql = "SELECT * FROM `about-us`";
		$res_about = mysqli_query($connect, $about_us_sql);

		$categ = [];
		while ($row = mysqli_fetch_assoc($res_about)) {
			array_push($categ, $row);
		}
			?>

			<!-- Main -->
			<div id="main" class="alt">
				<!-- One -->
				<section id="one">
					<?php

					foreach ($categ as $key) {
						echo '<div class="inner">
						<header class="major">
						<h1>'.$key['title_uz'].'</h1>
						</header>
						<span class="image main"><img src='.$key['image'].' alt="" /></span>
						'.$key['description_uz'].' 
						</div>';
}
						?>

					</section>

				</div>

				<!-- Footer -->
				<footer id="footer">
					<div class="inner">
						<ul class="icons">
							<li><a href="https:/Instagram/Sam.Carrenta" class="icon alt fa-telegram"><span class="label">Telegram</span></a></li>
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