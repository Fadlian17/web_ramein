	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="../img/Ramein.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Create Event</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="../css/linearicons.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/nice-select.css">			
			<link rel="stylesheet" href="../css/magnific-popup.css">
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/main.css">

		<style>
			ul {
			  list-style-type: none;
			  margin: 0;
			  padding: 0;
			  overflow: hidden;
			  background-color: #333;
			}

			li {
			  float: left;
			}

			li a {
			  display: block;
			  color: white;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			}

			li a:hover:not(.active) {
			  background-color: #FFA500;
			}

			.active {
			  background-color: #FFA500;
			}
		</style>

		</head>
		<body>
			<!-- Start banner Area -->
			<section class="generic-banner relative">
			<!-- Start Header Area -->
				<div class="main-menubar">
						<ul style="width: 100%;">
						  <li><a class="active" href="<?= base_url('Welcome/')?>">Ramein</a></li>
						  <li><a href="<?= base_url('Welcome/browse')?>">Browse Event</a></li>
						  <li><a href="<?= base_url('Welcome/create')?>">Create Event</a></li>
						  <li><a href="<?= base_url('Welcome/#contact')?>">Contact</a></li>
						   <li style="float: right;" ><a href="<?= base_url('Welcome/login')?>" >Login / Register</a></li>
						</ul>
				</div>
			<!-- End Header Area -->						
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">

							<div class="generic-banner-content">
						<br>
						<br>
					
								<h2 class="text-white" style="font-size: 100px;">Create Event</h2>
								<p class="text-white" style="font-size: 25px;">Buat event di daerahmu ditonton banyak pengunjung dari berbagai daerah di Indonesia</p>
							</div>
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
			<div class="section-top-border">
						<div class="container">
							<div class="form">
								<h3 class="mb-50">Pengisian Formulir Event</h3>
								<form action="<?php echo base_url().'create/add'?>" method="post" >
									<div class="mt-50 flex-column">
										<input type="text" name="ev_title" id="" placeholder=" Event Title" onfocus="this.placeholder = ''" required class="single-input">
									</div>
									<div class="input-group-icon mt-30">
										<div class="icon"><i class="fa fa-thumb-tack black" aria-hidden="true"></i></div>
										<input type="text" name="ev_add" placeholder="Event Address" onfocus="this.placeholder = ''" required class="single-input">
									</div>
									<div class="input-group-icon mt-30 ">
										<div class="icon"><i class="fa fa-thumb-tack black" aria-hidden="true"></i></div>
										<input type="date" name="ev_datest" placeholder="Date Start" onfocus="this.placeholder = ''"  required class="single-input">
									</div>
									<div class="input-group-icon mt-30 ">
										<div class="icon"><i class="fa fa-thumb-tack black" aria-hidden="true"></i></div>
										<input type="date" name="ev_dateend" placeholder="Date End" onfocus="this.placeholder = ''"  required class="single-input">
									</div>
									
									<div class="mt-50">
										<textarea class="single-textarea" placeholder="Event Description" onfocus="this.placeholder = ''"  required class="single-input" name="ev_desc"></textarea>
									</div>
									
									<!-- For Gradient Border Use -->
									<!-- <div class="mt-10">
										<div class="primary-input">
											<input id="primary-input" type="text" name="first_name" placeholder="Primary color" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Primary color'">
											<label for="primary-input"></label>
										</div>
									</div> -->
									<br>
									<input type="submit" name="" class="btn btn-block  btn-warning" value="konfirmasi"></a>
								</form>
							</div>
								
							</div>
						</div>
			
			
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30">Block Quotes</h3>
						<div class="row">
							<div class="col-lg-12">
								<blockquote class="generic-blockquote">
									“Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking” 
								</blockquote>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->


			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<div class="row footer-bottom d-flex justify-content-between">
						<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2019 All rights reserved   |   This template is made with <i class="fa fa-heart-o"style="color: #FFA500;" aria-hidden="true"></i> by <a href="#" style="color: #FFA500;">Ramein</a></p>
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->	


			<script src="../js/vendor/jquery-2.2.4.min.js"></script>
			<script src="../https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="../js/vendor/bootstrap.min.js"></script>
			<script src="../js/owl.carousel.min.js"></script>
			<script src="../js/jquery.sticky.js"></script>
			<script src="../js/jquery.nice-select.min.js"></script>			
			<script src="../js/parallax.min.js"></script>
			<script src="../js/jquery.magnific-popup.min.js"></script>
			<script src="../js/main.js"></script>
			<script src="../dist/sweetalert2.all.min.js"></script>
		</body>
	</html>