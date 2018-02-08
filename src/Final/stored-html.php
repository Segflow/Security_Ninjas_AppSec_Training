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
	<script type="text/javascript">

		function validateForm() {

			var name = document.forms["inputform"]["name"].value;
			var uname = document.forms["inputform"]["uname"].value;
			var upass = document.forms["inputform"]["password"].value;

			if (!(/[a-zA-Z0-9]/.test(name))) {
				alert("Only alphanumeric characters allowed in the Name");
				return false;
			}

			if (!(/[a-zA-Z0-9]/.test(uname))) {
				alert("Only alphanumeric characters allowed in the User Name");
				return false;
			}

			if (upass == '') {
				alert("Password can't be empty");
				return false;
			}

			return true;
		}
	</script>
</head>

<body>


	<?php
include("menu.html")
?>
	<div class="wrapper style2">
		<article id="work">

			<h5>A3 : Stored Cross-Site Scripting (XSS)</h5>

			<div class="container">
				<form name="inputform" action="store_users.php" onsubmit="return validateForm();" method="post">
					Name
					<input type="text" name="name">
					<br> Username
					<input type="text" name="uname">
					<br> Password
					<input type="password" name="password">
					<br>
					<input type="submit" value="Submit">

				</form>
			</div>

		</article>
	</div>



	<div class="wrapper style4">
		<article id="contact" class="container small">
			<header>

				<p>Textbox inputs are not validated/ sanitized properly</p>
			</header>
			<div>

				<div class="row">
					<div class="12u">
						<ul>
							<li>
								<H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint1');"> Hint 1 </H5>
								<DIV id="hint1" style="display:none">
									<P>
										Inject a script in the Name or Username field
									</P>
								</DIV>
							</li>

							<li>
								<H5 style="cursor: pointer" onclick="toggleBlock(this, 'solution');"> Solution </H5>
								<DIV id="solution" style="display:none">
									<P>
										Enter any malicious javascript code. e.g., &lt;script&gt;window.location.href = &quot;http://opendns.com&quot;;&lt;/script&gt;
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