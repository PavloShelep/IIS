<!DOCTYPE HTML>

<html>

<head>

	<title>DevOfStartup</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
	<div id="wrapper">

		<header id="header">
			<div class="inner">

				<a href="index.html" class="logo">
					<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">DEVOFSTARTUP</span>
				</a>

				<!-- Nav -->
				<nav>
					<ul>
						<li><a href="#menu">Menu</a></li>
					</ul>
				</nav>

			</div>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<h2>Menu</h2>
			<ul>
				<li><a href="index.php">Startups</a></li>
				<li><a href="addStartup.php">Add startup</a></li>
				<li><a href="aboutus.php">About us</a></li>
			</ul>
		</nav>

		<!-- Main -->
		<div id="main">
			<div class="inner">
				<header>
					<h1>This is a DevOfStartup, a service on which you can<br />
						add your startup or help others.</h1>
					<p>To add your startup, you need to fill out a form and click add. If you want to help others, go to the startup and below will be an email where you can contact the startup.</p>
				</header>
<section class="tiles">

	<?php

	$conn = mysqli_connect('127.0.0.1', 'root', '', 'devofstartup');
	$result = mysqli_query($conn, "SELECT * FROM startups");
	$i=1;
	while($row = mysqli_fetch_array($result)){
		echo "<article class='style".$i."'>
	 	<span class='image'>
	 		<img src='".$row['photo']."' alt='' />
	 	</span>
	 	<a href='".$row['file']."'>
	 		<h2>".$row['name']."</h2>
	 		<div class='content'>
	 			<p>".$row['Budget']." $</p>
	 		</div>
	 	</a>
	 </article>";
	 $i++;
	}
	?>

				</section>
			</div>
		</div>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Follow</h2>
					<ul class="icons">
						<li><a href="#" class="icon brands style2 fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands style2 fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands style2 fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
					</ul>
				</section>
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved</li>
				</ul>
			</div>
		</footer>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
