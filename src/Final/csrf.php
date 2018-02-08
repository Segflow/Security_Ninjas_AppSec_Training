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
		<script type="text/javascript" src="logout.js"></script>
	</head>
	<body>

		
<?php
include("menu.html")
?>
			<div class="wrapper style2">
				<article id="work">
					
						<h5>A8 : Cross-Site Request Forgery (CSRF)</h5>
					
					<div class="container">
							
							<br>
							<?php

							$uname = $_POST['uname'];
							$pass = $_POST['pwd'];


							//verify_credentials($uname,$pass);
							if(($uname=='user1')&&($pass=='user1_pass'))
							{	
								$hash1 = hash("sha256", "youser1_pass");
								echo '<script>document.cookie="sessionID='.$hash1.'";</script>';
								echo "<br><button onclick='logoff()'>Log Off</button><br><br>Login Successful!<br><br>";
								echo '<a href="view_email.php">View Email</a>';
							}
							elseif(($uname=='user2')&&($pass=='user2_pass'))
							{
								$hash2 = hash("sha256", "youser2_pass");
								echo '<script>document.cookie="sessionID='.$hash2.'";</script>';
								echo "<br><button onclick='logoff()'>Log Off</button><br><br>Login Successful!<br><br>";
								echo '<a href="view_email.php">View Email</a>';
							}	
							else
							{	
								echo "Failed login<br>";
							}	

							

							?>

					
					</div>
					
				</article>
			</div>

		
		
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>Go to the 'View Email' page if you are logged in.</p>
					</header>
					
					<footer>
						<ul id="copyright">
							<li>&copy; OpenDNS. All rights reserved.</li><li><a href="http://engineering.opendns.com/security/" target="_blank">OpenDNS Security</a></li>
						</ul>
					</footer>
				</article>
			</div>

	</body>
</html>