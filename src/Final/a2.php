<!DOCTYPE HTML>

<html>
	<head>
		<title>A2 : Broken Authentication and Session Management</title>
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
					<header>
						<h5>A2 : Broken Authentication and Session Management</h5>
					</header>
					<div class="container">
							<?php

								$uname = $_POST['uname'];
								$pass = $_POST['pwd'];
								
								//verify_credentials($uname,$pass);
								if(($uname=='user1')&&($pass=='145_Bluxome'))
								{	
									$hash1 = hash("sha1", "user1");
									echo '<script>document.cookie="sessionID='.$hash1.'";</script>';
									echo "Login successful as $uname!<br>";
									echo "<a href=user_details.php>View personal details</a>";
								}
								elseif(($uname=='user2')&&($pass=='xxww!'))
								{
									$hash2 = hash("sha1", "user2");
									echo '<script>document.cookie="sessionID='.$hash2.'";</script>';
									echo "Login successful as $uname!<br>";
									echo "<a href=user_details.php>View personal details</a>";
								}	
								else
								{	
									echo "Failed login<br>";
									echo "<a href=a2-html.php>Please Login</a>";

								}	

							?>

							</div>
						
					</div>
					
				</article>
			</div>

		<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>There is a flaw in the way this page handles authentication and sessions.</p>
					</header>
					<div>
						There is a login required to view personal information. <br>Login credentials for user1 : username - 'user1', password - '145_Bluxome' <br>
						There is another user with username 'user2'. You have to steal his personal information by exploiting the vulnerability on this page.<br><br>	
						
						<div class="row">
							<div class="12u">
							<ul>
							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint1');"> Hint 1 </H5>
							<DIV id="hint1" style="display:none">
							<P>
							Login as user1 and see how Session Management is being done
							</P>
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint2');"> Hint 2 </H5>
							<DIV id="hint2" style="display:none">
							<P>
							Look at the session cookie. Does it look predictable?
							</P>
							
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'solution');"> Solution </H5>
							<DIV id="solution" style="display:none">
							<P>
							sessionID cookie is a SHA1 hash of the username. Replace SHA1(user1) in the cookie by SHA1(user2) to authenticate as user2. <br>i.e.  sessionID=a1881c06eec96db9901c7bbfe41c42a3f08e9cb4
							</P>
							
							</DIV></li>
							
							</ul>
							</div>
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

