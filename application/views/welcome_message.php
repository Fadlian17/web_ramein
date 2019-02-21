<!DOCTYPE html>
	<html lang="eng" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="../img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Ramein -Discover & Create Culture Events Indonesia</title>

		<link rel="icon" type="text/css" href="../img/Ramein.png">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			
			<link rel="stylesheet" href="../css/linearicons.css">
			<link rel="stylesheet" href="../css/font-awesome.min.css">
			<link rel="stylesheet" href="../css/magnific-popup.css">
			<link rel="stylesheet" href="../css/nice-select.css">
			<link rel="stylesheet" href="../css/owl.carousel.css">
			<link rel='stylesheet' href='../css/simplelightbox.min.css' >
			<link rel="stylesheet" href="../css/bootstrap.css">
			<link rel="stylesheet" href="../css/main.css">
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
			

		<style>
		*{
			margin: 0;
			padding: 0;
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
			  font-weight: bold;
			}

			.active {
			  background-color: #FFA500;
			}

			.cd-top.cd-top--show { 
			 /* the button becomes visible */ 
			 visibility: visible;
			 opacity: 1;
			} 

			.cd-top.cd-top--fade-out { 
			 /* if the user keeps scrolling down, the button is out of focus and becomes less visible */ 
			 opacity: .5; 
			}
			.sticky {
			  position: fixed;
			  top: 0;
			  width: 100%;
			}

			.sticky + .content {
			 padding-top: 60px;
			}
		</style>
		</head>
		<body>
			<!-- Start banner Area -->
			<section class="banner relative">	
			<!-- Start Header Area -->
				<div class="main-menubar">
						<ul style="width: 100%;">
						  <li><a class="active" href="<?= base_url('Welcome/')?>">Ramein</a></li>
						  <li><a href="<?= base_url('Welcome/browse')?>">Browse Event</a></li>
						  <li><a href="<?= base_url('Welcome/create')?>">Create Event</a></li>
						  <li class=""><a href="<?= base_url('Welcome/#contact')?>">Contact</a></li>
						 <li style="float: right;" ><a href="<?= base_url('Welcome/login')?>" >Login / Register</a></li>
						 <li style="float: right;" ><a href="<?= base_url('login/logout')?>" >logout</a></li>
						</ul>
				</div>
			</section>
			<!-- End Header Area -->
			<!-- start banner Area -->
				<div id="myCarousel" class="carousel slide relative" data-ride="carousel">
	    			  <!-- Indicators -->
	    			  <ol class="carousel-indicators">
	     			   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      			  <li data-target="#myCarousel" data-slide-to="1"></li>
	      			  <li data-target="#myCarousel" data-slide-to="2"></li>
	    			  </ol>
				<!-- Wrapper for slides -->
    			<div class="carousel-inner">
				      <div class="carousel-item active" >
				        <img src="../img/sld-sumut.jpg" alt="" style="width:100%; ">
				        <div class="carousel-caption d-md-block">
				         <h2 class="text-uppercase" style="text-align: center; font-size: 50pt;"><b style="color:white; text-shadow: black;">Be A Lovely</b></h2>
				             <p style="text-align: center;color: orange;">
								Ramein Indonesia
				             </p>
				        </div>
				      </div>

				      <div class="carousel-item">
				        <img src="../img/sld-dieng.jpg" alt="" style="width:150%; ">
				        <div class="carousel-caption d-md-block">
				         <h2 class="text-uppercase" style="text-align: center; font-size: 50pt;"><b style="color:white;">Diverse Cultural Wealth</b></h2>
				             <p style="text-align: center;color: orange;">
								Ramein Indonesia
				             </p>
				        </div>
				      </div>
				    
				      <div class="carousel-item">
				        <img src="../img/sld-rajaampat.jpg" alt="" style="width: 100%;">
				        <div class="carousel-caption d-md-block">
				         <h2 class="text-uppercase" style="text-align: center; font-size: 50pt;"><b style="color:white;">Unforgettable Moment</b></h2>
				             <p style="text-align: center;color: orange;">
								Ramein Indonesia
				             </p>
				        </div>
				      </div>

				      <!-- Left and right controls -->
   					 <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      			 <span class="glyphicon glyphicon-chevron-left"></span>
	      			 <span class="sr-only">Previous</span>
	    			 </a>
	    			 <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      			 <span class="glyphicon glyphicon-chevron-right"></span>
	      			 <span class="sr-only">Next</span>
	    			 </a>
    			</div>

			<!-- End banner Area -->	


			<!-- Start About Area -->
			<section class="About-area section-gap" id="browse">
				<div class="container">
					<div class="row d-flex align-items-center">
						<div class="col-lg-6 about-right">
							<img class="img-fluid rounded" src="../img/slide/sibud2.jpg"  width="1200" height="1200">
						</div>
						<div class="col-lg-6 about-left">
							<h1>
								Enjoy your best life <br>
							</h1>
							<p style="font-size: 15pt;">
								Melihat Event dari berbagai daerah yang sudah bekerja sama dengan Ramein
							</p>
							<a href="<?= base_url('Welcome/browse')?>" class="submit-btn primary-btn mt-20 text-uppercase" >See Other Regional Events <span class="lnr lnr-arrow-right"></span></a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End About Area -->
			<!-- Start callto Area -->
			<section class="callto-area pt-50 pb-50" >
				<div class="container" >
					<div class="col" >
						 <div class="col-lg-9 callto-left " >
						 	<h1 class="text-uppercase" style="font-size: 30pt;">Mau Buat Event ?? </h1>
						 </div>
						 <div class="col-lg-3 callto-right">
						 	<a href="<?= base_url('Welcome/create')?>" class="btn-white btn text-uppercase">Click here</a>
						 </div>
					</div>
				</div>	
			</section>
			<!-- End callto Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-md-8 pb-30 header-text">
							<h1><b style="color: black;">event that has been completed</b></h1>
							<p style="font-family: sans-serif;font-size: 12pt;">
								Berbagai event dan acara lain yang berkomitmen berkerja sama dengan Tim Ramein yang sukses menarik perhatian banyak pengunjung
							</p>
						</div>
					</div>
					<div class="row">	
						<div class="single-blog col-lg-4 col-md-4">

							<img class="f-img img-fluid mx-auto" src="../img/prj.jpg" alt="">
							<h4>
								<a href="#">Pekan Raya Jakarta 2018</a>
							</h4>
							<p>
								Mau nyari apa saja ada di PRJ. Mau nyari kosmetik? Ada. Mau beli mobil dan motor baru? Ada. Mau beli keperluan makan juga ada. Diskonnya mulai dari 30 persen hingga 80 persen. Saya dapat rok jeans bermerk dari harga Rp 299 ribu, dijual seharga Rp 60 ribu. Masih kondisi bagus dan baru. Nggak hanya menjual aneka produk, tapi di PRJ juga ada aneka permainan yang bisa dinikmati bersama keluarga.
 
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="../img/user.png" alt="">
									<a href="#"><span>Ida Koesnaeni</span></a>
								</div>
								<div class="meta">
									2nd Jul
									<span class="lnr lnr-heart"></span> 4500
									<span class="lnr lnr-bubble"></span> 125
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="../img/jember.jpg" alt="">
							<h4>
								<a href="#">Jember Fashion Carnaval 2017</a>
							</h4>
							<p>
								 Sejak penyelenggaraan perdana 16 tahun silam, Jember Fashion Carnaval (JFC) terus mendulang kesuksesan. Karnaval unik yang konsisten diadakan tiap tahun ini bukan hanya mempromosikan wisata kota Jember, Jawa Timur, tapi juga mengharumkan nama Indonesia di mata dunia. Pada tahun-tahun sebelumnya, tema Jember Fashion Carnaval selalu berkaitan dengan kebudayaan Indonesia.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="../img/user.png" alt="">
									<a href="#"><span>Indah Putri</span></a>
								</div>
								<div class="meta">
									7th Ags
									<span class="lnr lnr-heart"></span> 5000
									<span class="lnr lnr-bubble"></span> 125
								</div>
							</div>
						</div>
						<div class="single-blog col-lg-4 col-md-4">
							<img class="f-img img-fluid mx-auto" src="../img/malang.jpg" alt="">
							<h4>
								<a href="#">Malang Flower Carnival 2018</a>
							</h4>
							<p>
								Ada yang unik dari pelaksanaan Malang Flower Carnival (MFC) 2018. Akan ada pawai peserta dalam balutan kostum berbahan daur ulang yang ramah lingkungan.

								Inisiatif baru tersebut berlaku pada seluruh peserta karnaval, yakni mewajibkan mengenakan kostum berbahan daur ulang. Inovasi tersebut merupakan salah satu langkah dalam mengampanyekan pelestarian lingkungan.

								Para peserta dijamin tak akan risih ataupun takut terpapar masalah kesehatan karena seluruh desain kostumnya sangat higienis. Produk yang ditampilkan juga sangat fashionable. Kegiatan tersebut akan digelar pada Minggu 16 September 2018.
							</p>
							<div class="bottom d-flex justify-content-between align-items-center flex-wrap">
								<div>
									<img class="img-fluid" src="../img/user.png" alt="">
									<a href="#"><span>Buja Suniardi</span></a>
								</div>
								<div class="meta">
									16th Sep
									<span class="lnr lnr-heart"></span> 3000
									<span class="lnr lnr-bubble"></span> 500
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end blog Area -->

			<!-- Start callto Area -->
			<section class="callto-area pt-50 pb-50">
				<div class="container">
					<div class="row">
						 <div class="col-lg-12 callto-center text-center">
						 	<h1 class="text-uppercase text-center" style="font-size: 40pt; ">Categories </h1>
						 <a class="btn-lg" href="<?= base_url('Welcome/browse')?>" role="button"><img src="../img/slide/Pawai.jpg" class="rounded " width="200" height="250" style="margin: 20px;"></a>
						 <a class="btn-lg" href="<?= base_url('Welcome/browse')?>" role="button"><img src="../img/slide/Alam.jpg" class="rounded " width="200" height="250" style="margin: 20px;"> </a>
						 <a class="btn-lg" href="<?= base_url('Welcome/browse')?>" role="button"><img src="../img/slide/Hut.jpg" class="rounded " width="200" height="250" style="margin: 20px;"> 	</a>
						 <a class="btn-lg" href="<?= base_url('Welcome/browse')?>" role="button"><img src="../img/slide/Adat.jpg" class="rounded " width="200" height="250" style="margin: 20px;"> </a>
						</div>
					</div>						 								
				</div>	
			</section>
			<br>
			<!-- End callto Area -->

			<!-- Start contact Area -->
			<section class="contact-area" id="contact">
				<div class="container-fluid">
					<div class="row d-flex justify-content-end align-items-center">
						<div class="col-lg-5 col-md-12 contact-left no-padding">
							<img class="img-fluid rounded" src="../img/sld-contact.jpg" alt="" style="width: 200;">
						</div>
						<div class="col-lg-7 col-md-12 contact-right no-padding">
							<h1>Butuh Perlengkapan lain ?</h1>
							<p>
								Kami Menyediakan Perlangkapan lain dalam penyelenggaraan Event,Karnaval ddb. Pembuatan Brosur ,Banner,Spanduk dll.
							</p>
							<form class="booking-form" id="myForm" action="<?php echo base_url().'send'?>" method="post">
								 	<div class="row">
								 		<div class="col-lg-12 d-flex flex-column">
							 				<input name="name" placeholder="Your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your name'" class="form-control mt-20" required="" type="text" required>
								 		</div>
							 			<div class="col-lg-12 d-flex flex-column">
											<input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mt-10" required="" type="email">
										</div>									
										<div class="col-lg-12 flex-column">
											<textarea class="form-control mt-20" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
										</div>
										
										<div class="col-lg-12 callto-right ">
											<input type="submit" name="" class="btn-warning btn text-uppercase" value="Confirm Booking Tip">
										</div>

										<div class="alert-msg"></div>		
									</div>
					  		</form>
							</div>
						</div>
						<body>
 							<!-- all your content here -->
							 <a href="#" class="cd-top js-cd-top" id="top">Top</a>
						</body>						
					</div>
				</div>	
			</section>
			<br>
			<!-- End contact Area -->

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
			<script src="../js/jquery.ajaxchimp.min.js"></script>
			<script src="../js/owl.carousel.min.js"></script>			
			<script src="../js/jquery.nice-select.min.js"></script>
			<script src="../js/jquery.sticky.js"></script>
			<script src="../js/parallax.min.js"></script>
			<script src="../https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			<script type="text/javascript" src="../js/simple-lightbox.min.js"></script>
			<script src="../js/main.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  			<script id="top">
  				//browser window scroll (in pixels) after which the "back to top" link is shown
				var offset = 300, 
			    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced 
			    offsetOpacity = 1200,
			    //duration of the top scrolling animation (in ms)
			    scrollDuration = 700;
	  		</script>
	  		<script>
				window.onscroll = function() {myFunction()};

				var navbar = document.getElementById("navbar");
				var sticky = navbar.offsetTop;

				function myFunction() {
				  if (window.pageYOffset >= sticky) {
				    navbar.classList.add("sticky")
				  } else {
				    navbar.classList.remove("sticky");
				  }
				}
			</script>
		
		</body>
	</html>