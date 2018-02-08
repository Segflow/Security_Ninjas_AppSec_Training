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

							//read file
							$user_file = file_get_contents("comments.txt");fclose($user_file);
							$rows = explode("@#", $user_file);

							$num_rows = count($rows);

							$cols = array('Name', 'Username');

							$html = '<table><colgroup>';
							foreach($cols as $col)
							{
								$html .= '<col style="text-align: left;" />';
							}
							unset($col);
							$html .= '</colgroup><thead><tr>';
							 
							foreach($cols as $col)
							{
								$html .= "<td><b>{$col}</b></td>";
							}
							unset($col);
							 
							$html .= '</tr></thead><tbody>';
							$html .= '<tr>'.'<td>'."test".'</td>'.'<td>'."test".'</td>'.'</tr>';
							for($r = 1; $r <= $num_rows; $r++)
							{


								$html .= '<tr>';

								//parse row and print column
									$name=preg_split("/#@/", $rows[$r]);
									$html .= '<td>' .$name[0]. '</td>';
									$html .= '<td>' .$name[1]. '</td>';

								$html .= '</tr>';
							}
							$html .= '</body></html>';
							 
							echo $html;

							?>

							</div>
						
					</div>
					
				</article>
			</div>

		

	</body>
</html>

