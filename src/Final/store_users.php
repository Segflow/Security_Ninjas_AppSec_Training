<!DOCTYPE HTML>

<html>
	<head>
		<title>A3 : Stored Cross-Site Scripting (XSS)</title>
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
					<header>
						<h5>A3 : Stored Cross-Site Scripting (XSS)</h5>
					</header>
					<div class="container">
							<?php
$myfile = fopen("comments.txt", "a") or die("Unable to open file!");
fwrite($myfile, " ");
							fwrite($myfile, $_POST["name"]."#@".$_POST["uname"]."@#");

	fclose($myfile);
					
							echo "Account creation successful ! <br><a href='fetch_users.php'>View Users</a><br><br><br><br><br>";

							?>

							</div>
						
					</div>
					
				</article>
			</div>

		
		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container small">
					
					<footer>
						<ul id="copyright">
							<li>&copy; OpenDNS. All rights reserved.</li><li><a href="http://engineering.opendns.com/security/" target="_blank">OpenDNS Security</a></li>
						</ul>
					</footer>
				</article>
			</div>

	</body>
</html>

