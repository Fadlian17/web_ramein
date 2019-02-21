<!DOCTYPE html>
	<html lang="eng"  	no-js">
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

			button {
  			  background: cornflowerblue;
  			  color: white;
  			  border: none;
  			  padding: 10px;
  			  border-radius: 8px;
  			  font-family: 'Lato';
  			  margin: 5px;
  			  text-transform: uppercase;
  			  cursor: pointer;
  			  outline: none;
			}

			button:hover {
  			background: orange;
			}
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
						  <li><a href="<?= base_url('Welcome/')?>">Home</a></li>
						  <li><a href="<?= base_url('Welcome/browse')?>">Browse Event</a></li>
						  <li><a href="<?= base_url('Welcome/create')?>">Create Event</a></li>
						  <li><a href="<?= base_url('Welcome/#contact')?>">Contact</a></li>
						  <li style="float: right;" ><a href="<?= base_url('Welcome/login')?>" >Login</a></li>
						</ul>
				</div>
			<!-- End Header Area -->			
				
			<div class="section-top-border">
					<div class="container">
						<div style=" background-color: #F0F8FF;width: 750pt; padding: 25px;"><img src="../img/event/Culinary.jpg" style="width: 100%;"><br>Jakarta Culinary & Shopping Festival<br> 27 September – 27 Oktober 2018 <br>Kota Kasablanka Mall, Jakarta <br><a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Booking</a>
						</div>
					</div>
			</div>

			
			

			<!-- start footer Area -->		
			<footer class="footer-area">
				<div class="container">
					<<div class="row footer-bottom d-flex justify-content-between">
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
			<script src="../js/bootstrap.min.js"></script>
			<script src="../css/bootstrap.min.css"></script>
			<script type="../js/modal.js"></script>
			<!-- The Modal -->
			  <div class="modal" id="myModal">
			    <div class="modal-dialog">
			      <div class="modal-content">
			      
			        <!-- Modal Header -->
			        <div class="modal-header">
			          <h4 class="modal-title">Event Notification</h4>
			          <button type="button" class="close" data-dismiss="modal">&times;</button>
			        </div>
			        
			        <!-- Modal body -->
			        <div class="modal-body">
			          sure to continue booking with this event?
			        </div>
			        
			        <!-- Modal footer -->
			        <div class="modal-footer">
			          <a href="" type="input" class="btn btn-primary rounded" data-dismiss="modal">Booking</a>
			          <a href="" type="input" class="btn btn-secondary rounded" data-dismiss="modal">Cancel</a>
			        </div>
			        
			      </div>
			    </div>
			  </div>
		</body>
	</html>