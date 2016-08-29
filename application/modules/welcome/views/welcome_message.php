<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Theme Made By www.w3schools.com - No Copyright -->
	<title>About Me</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url(); ?>/assets/css/font-awesome.css">
	<style>
		body {
			font: 20px Montserrat, sans-serif;
			line-height: 1.8;
			color: #f5f6f7;
		}
		
		p {
			font-size: 16px;
		}
		
		.margin {
			margin-bottom: 45px;
		}
		
		.bg-1 {
			background-color: #1abc9c;
			/* Green */
			color: #ffffff;
		}
		
		.bg-2 {
			background-color: #474e5d;
			/* Dark Blue */
			color: #ffffff;
		}
		
		.bg-3 {
			background-color: #ffffff;
			/* White */
			color: #555555;
		}
		
		.bg-4 {
			background-color: #2f2f2f;
			/* Black Gray */
			color: #fff;
		}
		
		.container-fluid {
			padding-top: 70px;
			padding-bottom: 70px;
		}
		
		.navbar {
			padding-top: 15px;
			padding-bottom: 15px;
			border: 0;
			border-radius: 0;
			margin-bottom: 0;
			font-size: 12px;
			letter-spacing: 5px;
		}
		
		.navbar-nav li a:hover {
			color: #1abc9c !important;
		}
		
		.map {
			height: 100%
		}
		
		#map-canvas {
			width: 100%;
			height: 500px;
		}
	</style>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

	<!-- Navbar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
				<a class="navbar-brand" href="#">Me</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#who">WHO</a></li>
					<li><a href="#what">WHAT</a></li>
					<li><a href="#where">WHERE</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<!-- First Container -->
	<div id="who" class="container-fluid bg-1 text-center">
		<h3 class="margin">Who Am I?</h3>
		<img src="<?php echo base_url(); ?>assets/images/bird.jpg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
		<h3>I'm an adventurer</h3>
	</div>

	<!-- Second Container -->
	<div id="what" class="container-fluid bg-2 text-center">
		<h3 class="margin">What Am I?</h3>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
		<a href="#" class="btn btn-default btn-lg">
			<span class="glyphicon glyphicon-search"></span> Search
		</a>
	</div>

	<!-- Third Container (Grid) -->
	<div id="where" class="container-fluid bg-3 text-center">
		<h3 class="margin">Where To Find Me?</h3><br>
		<div class="row">
			<div class="col-sm-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<img src="<?php echo base_url(); ?>assets/images/birds1.jpg" class="img-responsive margin" style="width:100%" alt="Image">
			</div>
			<div class="col-sm-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<img src="<?php echo base_url(); ?>assets/images/birds2.jpg" class="img-responsive margin" style="width:100%" alt="Image">
			</div>
			<div class="col-sm-4">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<img src="<?php echo base_url(); ?>assets/images/birds3.jpg" class="img-responsive margin" style="width:100%" alt="Image">
			</div>
		</div>
	</div>

	<!-- Footer -->
	<footer class="container-fluid bg-4">
		<div class="row">
			<div class="col-md-4">
				<h3>
			About
		</h3>
				<hr />
				<p class="footer-company-about text-left">
					<span>About the company</span> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
				</p>

			</div>
			<div class="col-md-4">
				<h3>
				Contacts
	</h3>
				<hr />
				<div class="footer-icons">

					<div>
						<div>
							<p>
								<i class="glyphicon glyphicon-map-marker"></i> &nbsp <span>221B Bakerstreet</span> London, England
							</p>
						</div>
						<div>
							<p>
								<i class="glyphicon glyphicon-earphone"></i> &nbsp +1 123 123456
							</p>
						</div>
						<div>
							<p>
								<i class="glyphicon glyphicon-envelope"></i> &nbsp <a href="mailto:contact@company.com">contact@company.com</a>
							</p>
						</div>

					</div>
				</div>
			</div>

			<div class="col-md-4">
				<h3>
				Directions
			</h3>
				<hr />
				<div>
					Directions goes <a href="<?php echo base_url();?>map/">here</a>.
				</div>
			</div>
		</div>


		<div class="row" style="text-align:center">
			<p>
				About me awesome website Copyright &copy 2010 -
				<span id="copyright">
			&copy <script>var d = new Date();var n = d.getFullYear(Date());document.getElementById("copyright").innerHTML = n;</script>
			</span> All rights reserved
			</p>
		</div>
	</footer>
</body>

</html>