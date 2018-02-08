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
							<?php
							$operation = $_GET['operation'];
							$is_admin = $_GET['is_admin'];

							switch($operation){
								case 'view':
									{
											$user_file = file_get_contents('management.txt');
											$rows = explode("@#", $user_file);

											$num_rows = count($rows);
											$html = '<img src="images/opendns_logo.png" height=7% width=15% ><br><h3>LEADERSHIP</h3>';	
											$html .= '<table>';
											$html .= '<thead><tr>';
											//$html .= '<td><img src="images/opendns_logo.png" height=20%  ></td></tr>'.'<tr><td><h5>OPENDNS LEADERSHIP</h5></td>';			 
											$html .= '</tr></thead><tbody align="left">';
											for($r = 0; $r < $num_rows; $r++)
											{
												$html .= '<tr>';

												//parse row and print column
													$name=preg_split("/#@/", $rows[$r]);
													$html .= '<td>' . '<b>' .$name[0]. '</b>' . '</td>';
													$name[1] = isset($name[1]) ? $name[1] : ' ';
													$html .= '<td>' .$name[1]. '</td>';

												$html .= '</tr>';
											}
											$html .= '</table>';
											 
											echo $html;
									}
									break;
								case 'add':
									if($is_admin != 'true')
									{
										echo "You need to be an admin for this operation";
									}	
									elseif($is_admin == 'true')
									{
										file_put_contents("management.txt", $_POST["name"]."#@".$_POST["description"]."@#", FILE_APPEND);
										echo "Success!";
										echo '<br><a href="function_AC.php?operation=view&is_admin=false">OpenDNS Leadership</a>';
									}	

									break;
							}


							?>				
					</div>
					
				</article>
			</div>

		
		
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
