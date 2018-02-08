<!DOCTYPE HTML>

<html>

<head>
	<title>A8 : Cross-Site Request Forgery (CSRF)</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.scrolly.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/init.js"></script>
	<noscript>
		<link rel="stylesheet" href="css/skel.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/style-desktop.css" />
	</noscript>
	<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
</head>

<body>

<?php
include("menu.html")
?>
	<div class="wrapper style2">
		<article id="work">

			<h5>A8 : Cross-Site Request Forgery (CSRF)</h5>

			<div class="container">
				<b>Enter Login Credentials</b>

				<br>

				<form method="POST" action="csrf.php">
					Username
					<input type="text" name="uname">
					<br> Password
					<input type="password" name="pwd">
					<br>
					<input type="submit" value="Submit">
				</form>

			</div>

		</article>
	</div>



	<div class="wrapper style4">
		<article id="contact" class="container small">
			<header>

				<p>Login to go to the vulnerable page.</p>
			</header>
			Use any of the below to login -
			<br> username: user1 &nbsp; password: user1_pass
			<br> username: user2 &nbsp; password: user2_pass
			<br>
			<footer>
				<ul id="copyright">
					<li>&copy; OpenDNS. All rights reserved.</li>
					<li>
						<a href="http://engineering.opendns.com/security/" target="_blank">OpenDNS Security</a>
					</li>
				</ul>
			</footer>
		</article>
	</div>>

</body>

</html>