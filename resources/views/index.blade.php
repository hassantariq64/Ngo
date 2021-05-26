<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" href="img/fav.png">
		<meta name="author" content="CodePixar">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta charset="UTF-8">
		<title>Unused Medicine Donation To Ngo's @yield('title')</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">
		    <link rel="stylesheet" href="css/ion.rangeSlider.css" />
		    <link rel="stylesheet" href="css/ion.rangeSlider.skinFlat.css" />
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

			<!-- Start Header Area -->
			@section('header')
			<header class="default-header">
				<div class="menutop-wrap banner-area">
					<div class="menu-top container">
						<div class="d-flex justify-content-between align-items-center">
							<ul class="list">
								<li><a href="tel:+92-312-5454534">+92-312-5454534</a></li>
								<li><a href="mailto:MedDonation@gmail.com">MedDonation@gmail.com</li>								
							</ul>
							<ul class="list">
								@if(Auth::user())
								<li><a href="{{url('')}}"><i class="fa fa-fw fa-user"></i>{{Auth::user()->name}}</a></li>

								<li><a href="" data-toggle="modal" data-target="#logout"><i class="fa fa-fw fa-user"></i>logout</a></li>
								{{-- <li><button class="primary-btn text-uppercase" href="" data-toggle="modal" data-target="#logout">Logout</button> --}}
								</li>
								{{-- <li><button href="" data-toggle="modal" data-target="#logout"> <i  class="fa fa-fw fa-logout"></i>  Logout</button></li> --}}

								@else	
								
								<li><a href="{{url('loginuser')}}"><i class="fa fa-fw fa-user"></i>login / Signup</a></li>
								@endif


							</ul>
						</div>
					</div>					
				</div>
				@section('navbar')
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="#home">
						  	<!-- <img src="img/logo.png" alt=""> -->
						  </a>
						  <a class="navbar-brand" href="{{url('index')}}">
						  	<h1>Medicine Donation</h1>
						  </a>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="navbar-toggler-icon"></span>
						  </button>
						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="#home">Home</a></li>
								<li><a href="#products">Medicines</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
																	
						    </ul>
						  </div>						
					</div>
				</nav>
				@show
			</header>
			@show
			<!-- End Header Area -->

			<!-- start banner Area -->
			@section('slider')
			<section class="banner-area relative" id="home">
				<div class="container-fluid">
					<div class="row fullscreen align-items-center justify-content-center">
						
						<div class="banner-content col-lg-6 col-md-12">
						
							<h1 class="text-uppercase">
								Your Donation <br>
								Is Others Inspiration.
							</h1>
							<button class="primary-btn text-uppercase"><a href="{{url('products')}}">Donate Now</a></button>
						</div>	
						<div class="col-lg-6 col-md-12 d-flex align-self-end img-right no-padding">
							<img class="img-fluid" src="img/med.png" alt="">
						</div>						
					</div>
				</div>
			</section>
			@show
			<!-- End banner Area -->	

			<!-- Products Area -->
			@section('products')
			<section class="category-area section-gap section-gap" id="products">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40">
							<div class="title text-center">
								<h1 class="mb-10">MEDICINES</h1>
								<p>Your Donation Can Change Life.</p><hr>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-8 col-md-8 mb-10">
							<div class="row category-bottom">
								<div class="col-lg-6 col-md-6 mb-30">
									<div class="content">
									    <a href="{{url('Kestine')}}">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="img/kestein.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Kestine</h3>
									      </div>
									    </a>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 mb-30">
									<div class="content">
									    <a href="{{url('Injections')}}">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="img/injection.jpeg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Vitamin C Injection</h3>
									      </div>
									    </a>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="content">
										<a href="{{url('Cardiolip')}}">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="img/cardiolip.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Cardiolip</h3>
									      </div>
									    </a>
									</div>
							  	</div>																
							</div>							
						</div>
						<div class="col-lg-4 col-md-4 mb-10">
						  <div class="content">
						    <a href="Epival">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/epival.png" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Epival</h3>
						      </div>
						    </a>
						  </div>
						</div>					
					</div>
				</div>	
				<div class="container">					
					<div class="row">
						<div class="col-lg-8 col-md-8 mb-10">
							<div class="row category-bottom">
								<div class="col-lg-6 col-md-6 mb-30">
									<div class="content">
									    <a href="Bepex">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="img/bepex.png" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Bepex</h3>
									      </div>
									    </a>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 mb-30">
									<div class="content">
									    <a href="{{url('Flagyl')}}">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="img/flagyl.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Flagyl</h3>
									      </div>
									    </a>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="content">
										<a href="{{url('Disprin')}}">
									      <div class="content-overlay"></div>
									  		 <img class="content-image img-fluid d-block mx-auto" src="img/dn.jpg" alt="">
									      <div class="content-details fadeIn-bottom">
									        <h3 class="content-title">Disprin</h3>
									      </div>
									    </a>
									</div>
							  	</div>																
							</div>							
						</div>
						<div class="col-lg-4 col-md-4 mb-10">
						  <div class="content">
						    <a href="{{url('Voltral Emulgel')}}">
						      <div class="content-overlay"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" src="img/gel.jpeg" alt="">
						      <div class="content-details fadeIn-bottom">
						        <h3 class="content-title">Voltral Emulgel</h3>
						      </div>
						    </a>
						  </div>
						</div>					
					</div>
				</div>	
			</section>
			@show
			<!-- End products Area -->
			
			<!-- About us Area -->
			@section('about')
			<section class="men-product-area section-gap relative" id="about">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-40">
							<div class="title text-center">
								<h1 class="text-white mb-10">HELP THE POOR IN NEED</h1>
								<p class="text-white">We believe that we can save more lifes with you.</p><hr>
								<p class="text-white">Lend The Helping Hand Get Involved.</p>
								<p class="text-white"></p>
								<p class="text-white">Donate For The Sake of Poor.</p>
							</div>
						</div>
					</div>



					
				</div>	
			</section>
			@show
			<!-- About us Area -->

			<!-- Contact Area --> 
			@section('contact')
			<section class="women-product-area section-gap" id="contact">
				<section class="banner-area organic-breadcrumb">
                <div class="container">
                    <div class="breadcrumb-banner d-flex flex-wrap align-items-center">
                        <div class="container">
					<div class="countdown-content pb-40">
						<div class="title text-center">
							<h1 class="mb-10">CONTACT US</h1>
							<p>You can contact us by sending us message.</p><hr>
						</div>
						<br>
						<div class="row">
							<form style="width: 500px;">
							<div class="form-group">
							    <label for="exampleFormControlInput1" class="text-white">Name</label>
							    <input type="text" class="form-control" id="name" placeholder="Enter Your Name">
							</div>
							<div class="form-group">
							    <label for="exampleFormControlInput2" class="text-white">Email address</label>
							    <input type="email" class="form-control" id="email" placeholder="Enter Email">
							</div>
							<div class="form-group">
							    <label for="exampleFormControlTextarea1" class="text-white">Message</label>
							    <textarea class="form-control" id="message" rows="3" placeholder="Type your message"></textarea>
							</div>
							<button class="primary-btn text-uppercase"><a href="#">Submit</a></button>
							</form>
							<div class=" col-md-6 col-sm-6 text-center">
							<div class="single-footer-widget">
								<h5 class="text-white">Contact Us</h5><br>
								<p>Email Address</p>
								<p>meddonations@gmail.com</p><br>
								<h5 class="text-white">Follow Us</h5>
								<a href="#"><i class="fa fa-facebook" style="color: white;"></i></a>&nbsp &nbsp
								<a href="#"><i class="fa fa-instagram" style="color: white;"></i></a>
							</div>
						</div>
						</div>
					</div>
				</div>
                    </div>
                </div>
            </section>

				
			</section>
			@show
			<!-- End contact Area -->
	
			<!-- Start brand Area -->
			@section('brand')
			<section class="brand-area pb-100">
				<div class="container">
					<div class="logo-wrap row">
											<div class="col-sm-5"></div>
							<div>
							<h1> Donation To NGO's </h1>
						</div>
							<div class="col-sm-3"></div>
					</div>
						
				</div>	
			</section>
			@show

			@yield('content')
			<!-- End brand Area -->
			<!-- start Logout Model -->
				<div class="modal" id="logout">
					<div class="modal-content">
						<div class="modal-header">
							<h3>Logout</h3>
						</div>
						<div class="modal-body">
							<form action="{{url('/logout')}}" method="post">
								@csrf
								<button type="submit" class="btn btn-danger">Logout</button>
							</form>
						</div>
					</div>
				</div>
			<!-- end Logout Model -->
			<!-- start footer Area -->
			@section('footer')		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									We are providng medicines to the NGO's to donate further to the needy people.
								</p>
							</div>
						</div>
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay updated with our medicines.</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
				                          	
											
										</div>		
										<div class="info"></div>
										</form>
								</div>
								</div>
						</div>						
						<div class="col-lg-3  col-md-6 col-sm-6">
							<div class="single-footer-widget mail-chimp">
								<h6 class="mb-20"></h6>
								<ul class="instafeed d-flex flex-wrap">
									<li><img src="img/id1.jpg" alt=""></li>
									<li><img src="img/i2d.jpg" alt=""></li>
									<li><img src="img/id3.jpg" alt=""></li>
									<li><img src="img/id4.jpg" alt=""></li>
									<li><img src="img/id5.jpg" alt=""></li>
									<li><img src="img/id6.jpg" alt=""></li>
									<li><img src="img/id7.jpg" alt=""></li>
									<li><img src="img/id8.jpg" alt=""></li>
								</ul>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>							
					</div>
					
				</div>
			</footer>	
			@show
			<!-- End footer Area -->		

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/ion.rangeSlider.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/owl.carousel.min.js"></script>			
			<script src="js/main.js"></script>	
			
		</body>
	</html>