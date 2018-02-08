<!DOCTYPE HTML>

<html>

<head>
	<title>A6 : Sensitive Data Exposure</title>
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
	<SCRIPT language="JavaScript">

		function Calculate() {
			// calculate each line total

			if (priceform.Qtz1.value == 1) {
				priceform.Cost1.value = priceform.Qty1.value * 10;
			}
			else {
				priceform.Cost1.value = priceform.Qty1.value * priceform.Qtz1.value * 10;
			}

			//Give 10% off if discount code matches
			if (priceform.discount.value == 'oneteamonedream') {
				priceform.Cost1.value *= 0.9;
			}

			priceform.Subtotal.value = parseFloat(priceform.Cost1.value);

		}

	</SCRIPT>
</head>

<body>

<?php
include("menu.html")
?>
	<div class="wrapper style2">
		<article id="work">

			<h5>A6 : Sensitive Data Exposure</h5>
			<br>

			<div class="container">

				<img src="umbrella.jpeg">
				<FORM NAME="priceform">
					<br>
					<B>
						<FONT SIZE="6" COLOR="">Calculate total price</FONT>
					</B>
					<P>

						<TABLE BORDER="1" WIDTH="35%" BGCOLOR="">
							<TR>
								<TD WIDTH="53%">
									<B>Package</B>
								</TD>
								<TD WIDTH="16%">
									<B>Quantity</B>
								</TD>
								<TD WIDTH="17%">
									<B>Years</B>
								</TD>
								<TD WIDTH="14%">
									<B>$</B>
								</TD>
							</TR>


							<TR>
								<TD>Umbrella Professional ($10 annually per seat)</TD>
								<TD>

									<CENTER>
										<INPUT TYPE="TEXT" NAME="Qty1" SIZE="5" oninput="Calculate();" VALUE=0>
									</CENTER>


								</TD>
								<TD>
									<CENTER>
										<INPUT TYPE="TEXT" NAME="Qtz1" SIZE="5" oninput="Calculate();" VALUE=0>
									</CENTER>
								</TD>

								<TD>
									<INPUT TYPE="TEXT" NAME="Cost1" SIZE="8" VALUE=0>
								</TD>
							</TR>
							<TR>
								<TD WIDTH="53%">Discount Code</TD>
								<TD>
									<INPUT TYPE="TEXT" NAME="discount" SIZE="10" oninput="Calculate();">
								</TD>
							</TR>


							<TR>
								<TD></TD>
								<TD></TD>
								<TD align="right">
									<B>Total</B>
								</TD>
								<TD>
									<INPUT TYPE="TEXT" NAME="Subtotal" SIZE="8" VALUE=0>
								</TD>
							</TR>


						</TABLE>

				</FORM>

			</div>

		</article>
	</div>



	<div class="wrapper style4">
		<article id="contact" class="container small">
			<header>

				<p>There is a hidden discount code. Find it!
				</p>
			</header>
			<div>
				<div>

					<div class="row">
						<div class="12u">
							<ul>
								<li>
									<H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint1');"> Hint 1 </H5>
									<DIV id="hint1" style="display:none">
										<P>
											Look at the Source code
										</P>
									</DIV>
								</li>

								<li>
									<H5 style="cursor: pointer" onclick="toggleBlock(this, 'solution');"> Solution </H5>
									<DIV id="solution" style="display:none">
										<P>
											oneteamonedream
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