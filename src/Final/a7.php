<!DOCTYPE HTML>

<html>

<head>
	<title>A7 : Missing Function Level Access Control</title>
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
	<script src="ac.js"></script>

</head>

<body>

<?php
include("menu.html")
?>
	<div class="wrapper style2">
		<article id="work">

			<h5>A7 : Missing Function Level Access Control</h5>

			<div class="container">


				<br>

				<a href="function_AC.php?operation=view&is_admin=false">OpenDNS Leadership</a>

				<div id="admin_view">

					<script language="javascript" type="text/javascript">
						add_style();
					</script>
					<form name="input" action="function_AC.php?operation=add&is_admin=true" method="post">
						Name
						<input type="text" name="name">
						<br> Description
						<input type="text" name="description">
						<br>
						<input type="submit" value="Submit">
					</form>
				</div>

		</article>
		</div>



		<div class="wrapper style4">
			<article id="contact" class="container small">
				<header>

					<p>There is a function on this page that lacks Access Control.</p>
					Look at the source code to find out the hidden function.

				</header>
				<div>

					<div class="row">
						<div class="12u">
							<ul>
								<li>
									<H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint1');"> Hint 1 </H5>
									<DIV id="hint1" style="display:none">
										<P>
											Look at the div with id 'admin_view'
										</P>
									</DIV>
								</li>

								<li>
									<H5 style="cursor: pointer" onclick="toggleBlock(this, 'solution');"> Solution </H5>
									<DIV id="solution" style="display:none">
										<P>
											Remove the style 'display:none' in the div with id 'admin_view' to make the hidden div visible. As this function lacks server
											side access control, you would be able to exploit this functionality.
										</P>

									</DIV>
								</li>

							</ul>
						</div>
					</div>
				</div>
				<footer>
					<ul id="copyright">
						<li>&copy; OpenDNS. All rights reserved.</li>
						<li>
							<a href="http://engineering.opendns.com/security/" target="_blank">OpenDNS Security</a>
						</li>
					</ul>
				</footer>
			</article>
		</div>

</body>

</html>