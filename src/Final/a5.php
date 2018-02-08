<!DOCTYPE HTML>

<html>
	<head>
		<title>A5 : Security Misconfiguration</title>
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

		<!-- Nav -->
		<?php
		include("menu.html")
		?>
			<div class="wrapper style2">
				<article id="work">
					
						<h5>A5 : Security Misconfiguration</h5>
					
				
					<div class="container">

						<?php

						$file = $_GET['fname'];
						include $file;
						?>
			
					</div>
					
				</article>
			</div>

		<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>There is a File Inclusion vulnerability here. Leverage the Security Misconfiguration to exploit the badness.
						</p>
					</header>
					<div class="row">
							<div class="12u">
							<ul>
							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint1');"> Hint 1 </H5>
							<DIV id="hint1" style="display:none">
							<P>
							Access to files in other directories is not prohibited
							</P>
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint2');"> Hint 2 </H5>
							<DIV id="hint2" style="display:none">
							<P>
							Can you get to sensitive files like /etc/passwd?
							</P>
							
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'solution');"> Solution </H5>
							<DIV id="solution" style="display:none">
							<P>
							Fetch sensitive files by changing the fname parameter e.g., fname=../../../../../etc/passwd
							</P>
							
							</DIV></li>
							
							</ul>
							</div>
						
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; OpenDNS. All rights reserved.</li><li><a href="http://engineering.opendns.com/security/" target="_blank">OpenDNS Security</a></li>
						</ul>
					</footer>
				</article>
			</div>


	</body>
</html>