<!DOCTYPE html>
	<html lang="eng" class="no-js">
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

			input[type=text] {
			  width: 130px;
			  box-sizing: border-box;
			  border: 2px solid #ccc;
			  border-radius: 4px;
			  font-size: 16px;
			  background-color: white;
			  background-image: url('searchicon.png');
			  background-position: 10px 10px; 
			  background-repeat: no-repeat;
			  padding: 12px 20px 12px 40px;
			  -webkit-transition: width 0.4s ease-in-out;
			  transition: width 0.4s ease-in-out;
			}

			input[type=text]:focus {
			  width: 50%;
			}

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
			<!-- Start banner Area -->			
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white" style="font-size: 100px;">Browse All Event</h2>
								<p class="text-white" style="font-size: 20px;">Melihat Event dari berbagai daerah yang sudah bergabung dengan team Ramein</p>
							</div>
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
			<div class="section-top-border">
					<div class="container">
						<form>
						<input type="text" name="search" placeholder="Search..">
						<a href="" type="input" class="btn btn-primary">Search</a>
						</form>
					<br>
					<br>
						<div style=" background-color: #F0F8FF;width: 750pt; padding: 25px;"><img src="../img/event/Culinary.jpg" style="width: 100%;"><br>Jakarta Culinary & Shopping Festival<br> 27 September – 27 Oktober 2018 <br>Kota Kasablanka Mall, Jakarta<a href="<?= base_url('Welcome/join')?>" type="input" class="btn btn-primary" style="float: right;">Join</a>
						</div>
						<br>
						<div style=" background-color: #F0F8FF;width: 750pt; padding: 25px;"><img src="../img/event/Ciletueh.jpg" style="width: 100%;"><br>GEOPARK CILETUH FESTIVAL, JAWA BARAT<br>12-14 Oktober 2018 <br>Palabuhanratu, Kabupaten Sukabumi, Jawa Barat <a href="<?= base_url('Welcome/join')?>" type="input" class="btn btn-primary"  style="float: right;">Join</a>
						</div>
						<br>
						<div style=" background-color: #F0F8FF;width: 750pt; padding: 25px;"><img src="../img/event/Sriwijaya.jpg" style="width: 100%;"><br>Sriwijaya Diaspora Festival <br>08 Agustus – 02 September 2018 <br>Benteng Kuto Besak, Palembang <a href="<?= base_url('Welcome/join')?>" type="input" class="btn btn-primary"  style="float: right;">Join</a>
						</div>
						<br>
						<div style=" background-color: #F0F8FF;width: 750pt; padding: 25px;"><img src="../img/event/Moyo.jpg" style="width: 100%;"><br>FESTIVAL MOYO <br>10 September – 8 Oktober 2018 <br>Sumbawa , Nusa Tenggara Barat<a href="<?= base_url('Welcome/join')?>" type="input" class="btn btn-primary"  
						style="float: right;">Join</a>
						</div>
						<br>
						<div style=" background-color: #F0F8FF;width: 750pt; padding: 25px;"><img src="../img/event/Kota.jpg" style="width: 100%;"><br>FESTIVAL KOTA TUA MALANG <br>27-29 September 2018 <br>Lawang, Malang, Jawa Timur<a href="<?= base_url('Welcome/join')?>" type="input" class="btn btn-primary"  
						style="float: right;">Join</a>
						</div>
						<br>
						<div style=" background-color: #F0F8FF;width: 750pt; padding: 25px;"><img src="../img/event/SIPA.jpg" style="width: 100%;"><br>SOLO INTERNATIONAL PERFORMING ARTS (SIPA)<br> 6-8 September 2018 <br>Benteng Vastenburg  Solo,Jawa Tengah  <a href="<?= base_url('Welcome/join')?>" type="input" class="btn btn-primary"  style="float: right;">Join</a>
						</div>
						<br>

					</div>
			</div>
			
			

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