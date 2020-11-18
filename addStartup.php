<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<title>DevOfStartup</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body class="is-preload">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<div id="wrapper">

		<header id="header">
			<div class="inner">

				<a href="index.php" class="logo">
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

		<footer id="footer">
			<div class="inner">
				<section>
					<h2>Add startup</h2>
					<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<input type="text" name="name" id="name" placeholder="Name of startup" />
							</div>
							<div class="field half">
								<input type="email" name="email" id="email" placeholder="Email" />
							</div>
							<div class="field">
								<textarea name="description" id="description" placeholder="Description"></textarea>
							</div>
              <div class="field">
								<textarea name="budget" id="budget" placeholder="Budget"></textarea>
							</div>
						</div>
            <div class="input-group">
              <input id="photo" name="photo" type="file" class="file" data-show-preview="false">
            </div> <br>
						<ul class="actions">
							<li><input type="submit" value="Send" name="Send" class="primary" /></li>
						</ul>
					</form>
				</section>
					<ul class="copyright">
					<li>&copy; Untitled. All rights reserved</li>
				</ul>
			</div>
		</footer>

    <?php
    if(isset($_POST['Send'])) {
            if(isset($_POST['name'])&&isset($_POST['email'])){
              send();
            }
        }
    function send() {
          $conn = mysqli_connect('127.0.0.1', 'root', '', 'devofstartup');
          $id = 4;
          $name = $_POST['name'];
          $email =  $_POST['email'];
          $description =  $_POST['description'];
          $photo = 'images/' . $_POST['photo'];
          $budget =  (int)$_POST['budget'];
          $file = "generic4.php";

          $insert = "INSERT INTO startups (id,name,email,description,photo, Budget, file)
          VALUES ('$id', '$name', '$email', '$description', '$photo', '$budget', '$file')";

          $query = mysqli_query($conn, $insert) or die(mysqli_error($conn));
    }
    ?>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/browser.min.js"></script>
	<script src="assets/js/breakpoints.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/main.js"></script>

</body>

</html>
