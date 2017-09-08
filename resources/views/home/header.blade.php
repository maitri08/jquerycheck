<!DOCTYPE html> 
<html lang="en" class="demo-loading no-js">
    <head> 
        <meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<title>Printshoot</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />  
		<!-- CSS Start -->
		
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="{{asset('common/css/bootstrap.min.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('common/css/slick.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('common/css/slick-theme.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('common/css/animate.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('common/fonts/stylesheet.css')}}" />
		<link rel="stylesheet" type="text/css" href="{{asset('common/css/style.css')}}" />
		<!-- <link rel="shortcut icon" href="" type="image/x-icon">
		<link rel="icon" href="" type="image/x-icon"> -->
		
		<!-- CSS End -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- <div class="offer_printshoot">
			<p class="wow fadeInDown" data-wow-delay=".2s">Ends Sun, July 30 SAVE 50% ON ORDERS OF $39+ Code: SUMMERTIME </p>
			<a href="javascript:void(0)" class="offer_cross wow zoomIn" data-wow-delay=".4s"></a>
		</div> -->
		<header class="header">
			<div class="header_left">
				<span class="menu_icon">
					<a href="javascript:void(0)" class="menu_iconlogo wow zoomIn" data-wow-delay=".4s">
						<span></span>
						<span></span>
						<span></span>
					</a>
				</span>
				<a href="{{asset('/')}}" class="logo">
					<img src="{{asset('common/images/printshoot_logo.gif')}}" alt="" class="logoDesk wow zoomIn" data-wow-delay=".3s" />
					<img src="{{asset('common/images/logo_M.png')}}" alt="" class="logoMB wow zoomIn" data-wow-delay=".3s" />
				</a>
			</div>
			<div class="header_right wow zoomIn" data-wow-delay=".2s">
				<form id="header_search">
					<a href="javascript:void(0)"></a>
					<input type="search" placeholder="Search">
				</form>
				<ul class="header_reg">
					<li>
						<a href="#">My photos</a>
					</li>
					<li>
						<a href="#">Help</a>
					</li>
					<li>
						<a href="{{asset('/signin')}}">Login</a>
					</li>
					<li>
						<a href="{{asset('/signup')}}">register</a>
					</li>
				</ul>
				<span class="cart_icon">
					<a href="#">0</a>
				</span>
			</div>
		</header>
		<div class="popup_menu">
			<div class="popup_crossOutr">
				<a href="javascript:void(0)" class="cross_icon">
					<span></span>
					<span></span>
				</a>
			</div>
			<div class="popup_menuoutr">
				<div class="popup_menuinnrLeft">
					<ul class="loginFormMList visible-xs">
						<li>
							<a href="#"><span class="loginFormMIcon"></span>Login</a>
						</li>
						<li>
							<a href="#"><span class="loginFormMIcon"></span>My photos</a>
						</li>
						<li>
							<a href="#"><span class="loginFormMIcon"></span>Help</a>
						</li>
					</ul>
					<ul class="menu">
						<li class="menuList">
							<a href="javascript:void(0)" class="menuListLink"><span class="menu_icon"></span>Photo Books</a>
							<div class="sub_menu">
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- Family Photo Albums</a></li>
										<li><a href="#">- Travel Photo Books</a></li>
										<li><a href="#">- Wedding Photo Books</a></li>
										<li><a href="#">- Baby Photo Books</a></li>
										<li><a href="#">- Years Books</a></li>
									</ul>
								</div>
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- 8x8 Photo Books</a></li>
										<li><a href="#">- 8x11 Photo Books</a></li>
										<li><a href="#">- 10x10 Photo Books</a></li>
										<li><a href="#">- 12x12 Photo Books</a></li>
										<li><a href="#">- Premium Books</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="menuList">
							<a href="javascript:void(0)" class="menuListLink"><span class="menu_icon"></span>Cards & Stationery</a>
							<div class="sub_menu">
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- Family Photo Albums</a></li>
										<li><a href="#">- Travel Photo Books</a></li>
										<li><a href="#">- Wedding Photo Books</a></li>
										<li><a href="#">- Baby Photo Books</a></li>
									</ul>
								</div>
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- 8x8 Photo Books</a></li>
										<li><a href="#">- 8x11 Photo Books</a></li>
										<li><a href="#">- 10x10 Photo Books</a></li>
										<li><a href="#">- 12x12 Photo Books</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="menuList">
							<a href="javascript:void(0)" class="menuListLink"><span class="menu_icon"></span>Prints</a>
							<div class="sub_menu">
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- Family Photo Albums</a></li>
										<li><a href="#">- Travel Photo Books</a></li>
										<li><a href="#">- Wedding Photo Books</a></li>
									</ul>
								</div>
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- 8x8 Photo Books</a></li>
										<li><a href="#">- 8x11 Photo Books</a></li>
										<li><a href="#">- 10x10 Photo Books</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="menuList">
							<a href="javascript:void(0)" class="menuListLink"><span class="menu_icon"></span>Calenders</a>
							<div class="sub_menu">
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- Family Photo Albums</a></li>
										<li><a href="#">- Travel Photo Books</a></li>
										<li><a href="#">- Wedding Photo Books</a></li>
										<li><a href="#">- Baby Photo Books</a></li>
									</ul>
								</div>
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- 8x8 Photo Books</a></li>
										<li><a href="#">- 8x11 Photo Books</a></li>
										<li><a href="#">- 10x10 Photo Books</a></li>
										<li><a href="#">- 12x12 Photo Books</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="menuList">
							<a href="javascript:void(0)" class="menuListLink"><span class="menu_icon"></span>Personalized Gifts</a>
							<div class="sub_menu">
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- Family Photo Albums</a></li>
									</ul>
								</div>
								<div class="sub_menuCL">
									<h4>Shop by Occasion</h4>
									<ul>
										<li><a href="#">- 8x8 Photo Books</a></li>
									</ul>
								</div>
							</div>
						</li>
						<li class="menuList">
							<a href="javascript:void(0)" class="menuListLink"><span class="menu_icon"></span>Special Offers</a>
						</li>
					</ul>
					<div class="footer_btmInnerRoutr">
						<a href="javascript:void(0)" class="footer_headBTM">
							get the app
						</a>
						<ul>
							<li>
								<a href="#" class="google_play"><span></span>Get it on google play</a>
							</li>
							<li>
								<a href="#" class="google_play app_store"><span></span>Get it on Apple store</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="popup_menuinnrRight">
					<div class="popup_menuinnrRLft">
						<h5>Make My Book<sup>TM</sup> Service We'll design your book</h5>
						<a href="#" class="custimize_it">Know more<span></span></a>
					</div> 
					<div class="popup_menuinnrRLft">
						<h5>50% off orders of $39+ Code: SUMMERTIME</h5>
						<a href="#" class="custimize_it">Know more<span></span></a>
					</div> 
				</div> 
			</div>
		</div>
	@yield('content')


		<footer class="footer">
					<section class="footer_top">
						<div class="container">
							<div class="row">
								<div class="col-xs-12 text-center">
									<div class="footer_topInner">
										<div class="footer_topLeft">
											<h3 class="wow zoomIn" data-wow-delay=".4s">It’s easy as</h3>
											<p class="wow fadeInUp" data-wow-delay=".5s">Create your own packaging with just a few finger taps!</p>
										</div>
										<span class="footer_topArrow wow zoomIn" data-wow-delay=".4s"></span>
										<ul>
											<li class="wow zoomIn" data-wow-delay=".4s">
												<small></small>
												<span>Add photo</span>
											</li>
											<li class="wow zoomIn" data-wow-delay=".4s">
												<small></small>
												<span>Create</span>
											</li>
											<li class="wow zoomIn" data-wow-delay=".4s">
												<small></small>
												<span>Order</span>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="footer_middle">
						<span class="FM_icon"></span>
						<div class="container">
							<div class="row">
								<div class="col-xs-12 text-center">
									<div class="footer_middleInner">
										<h4 class="wow zoomIn" data-wow-delay=".4s">Stay in the loop!</h4>
										<form class="wow fadeInUp" data-wow-delay=".5s">
											<span>
												<input type="text" placeholder="Enter your email id" />
												<button type="submit"></button>
											</span>
										</form>
										<ul>
											<li class="wow zoomIn" data-wow-delay=".4s">
												<a href="#">
													<span></span>Facebook
												</a>
											</li>
											<li class="wow zoomIn" data-wow-delay=".4s">
												<a href="#">
													<span></span>Instagram
												</a>
											</li>
											<li class="wow zoomIn" data-wow-delay=".4s">
												<a href="#">
													<span></span>Twitter
												</a>
											</li>
											<li class="wow zoomIn" data-wow-delay=".4s">
												<a href="#">
													<span></span>google+
												</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</section>
					<section class="footer_btm">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="footer_btmInneroutr">
										<div class="footer_btmInnerLoutr">
											<div class="footer_btmInnerLft">
												<a href="javascript:void(0)" class="footer_headBTM wow zoomIn" data-wow-delay=".4s">
													Help
												</a>
												<ul>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Customer Service</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Order Status</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">How to Upload</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">100% Happiness Guaranteed</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Promotion Details</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Shipping</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Feedback</a>
													</li>
												</ul>
											</div>
											<div class="footer_btmInnerLft">
												<a href="javascript:void(0)" class="footer_headBTM wow zoomIn" data-wow-delay=".4s">
													Resources
												</a>
												<ul>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Ideas & Inspiration</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Blog</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Contributing Photographers</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Refer a Friend</a>
													</li>
												</ul>
											</div>
											<div class="footer_btmInnerLft">
												<a href="javascript:void(0)" class="footer_headBTM wow zoomIn" data-wow-delay=".4s">
													Corporate
												</a>
												<ul>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Shutterfly, Inc.</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Careers</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Media</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Investor Relations</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Business Solutions</a>
													</li>
												</ul>
											</div>
											<div class="footer_btmInnerLft">
												<a href="javascript:void(0)" class="footer_headBTM wow zoomIn" data-wow-delay=".4s">
													Products & Services
												</a>
												<ul>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Bulk Photo Books</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Bulk Photo Products</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Gift Certificates</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Shop by Occasion</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Team Share Sites</a>
													</li>
													<li class="wow zoomIn" data-wow-delay=".5s">
														<a href="#">Mobile Apps</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="footer_btmInnerRoutr">
											<a href="javascript:void(0)" class="footer_headBTM wow zoomIn" data-wow-delay=".4s">
												get the app
											</a>
											<ul>
												<li>
													<a href="#" class="google_play wow fadeInUp" data-wow-delay=".4s"><span></span>Get it on google play</a>
												</li>
												<li>
													<a href="#" class="google_play app_store wow fadeInUp" data-wow-delay=".5s"><span></span>Get it on Apple store</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="footer_btmCpyROutr">
							<div class="container">
								<div class="row">
									<div class="col-xs-12">
										<div class="footer_btmCpyR">
											<ul>
												<li class="wow fadeInUp" data-wow-delay=".4s">
													<a href="#">Site map</a>
												</li>
												<li class="wow fadeInUp" data-wow-delay=".4s">
													<a href="#">Terms of Use</a>
												</li>
												<li class="wow fadeInUp" data-wow-delay=".4s">
													<a href="#">Privacy Policy</a>
												</li>
											</ul>
											<h6 class="wow fadeInUp" data-wow-delay=".4s">&copy;2017 Printshoot, Inc. All rights reserved.</h6>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</footer>
			</section>
		</section>
		<div class="chat_icon">
			<a href="javascript:void(0)"></a>
		</div>
		<div class="listingPopup_contentoutr">
			<div class="listingPopup_content">
				<div class="listingPOPUPCross">
					<a href="javascript:void(0)" class="Listingcross_icon">
						<span></span>
						<span></span>
					</a>
				</div>
				<div class="listingPUP_contentInnr">
					<div class="PUPL_contenttop">
						<div class="PUPL_contenttopLeft">
							<div class="PUPLst_container">
								<div class="POPUP_listSelect">
									<span></span>
									<select>
										<option>Select Size</option>
										<option>Select Size</option>
										<option>Select Size</option>
										<option>Select Size</option>
									</select>
								</div>
								<div class="POPUP_listSelect">
									<span></span>
									<select>
										<option>Select Cover</option>
										<option>Select Cover</option>
										<option>Select Cover</option>
										<option>Select Cover</option>
									</select>
								</div>
								<p><span>Each additional page</span><small>$1.59</small></p>
								<p><span>20 pages included</span><small>$39.99</small></p>
								<a href="#" class="take_tour">Select this photo book</a>
							</div>
						</div>
						<div class="PUPL_contenttopRight text-center">
							<h6>Modern White</h6>
							<p>Show off your photos in a stunning way with this crisp, modern design. An all-white background, clean collage layouts and bold headlines give your book the look of a high-end magazine. Journaling pages offer plenty of space to tell your story. Perfect for vacations, special occasions and everyday moments.</p>
							<a href="#" class="custimize_it"><span></span>Share this</a>
						</div>
					</div>
					<div class="PUPL_contentbtm">
						<ul>
							<li><a href="javascript:void(0)" data-id="samplebook">Sample Book</a></li>
							<li><a href="javascript:void(0)" data-id="backgrounds">Backgrounds</a></li>
							<li><a href="javascript:void(0)" data-id="embellishments">Embellishments</a></li>
							<li><a href="javascript:void(0)" data-id="ideapages">Idea pages</a></li>
						</ul>
						<div class="PUPL_contentbtmcontnt" id="samplebook">
							<div class="photoshootPOPUP_bgSlider">
								<div class="photoshootPOPUP_bgOutr">
									<div class="photoshootPOPUP_bg">
										<div class="thumb_imagesPrintSPopup">
											<div class="photoshootPOPUP_shadow"></div>
											<div class="PSPOPUP_bgSliderOutr">
												<div class="PSPOPUP_bgSliderInnr">
													<div class="photoshootPOPUP_imgL1">
														<img src="{{asset('common/images/photoshootPOPUP_imgL1.jpg')}}" alt="" />
													</div>
													<div class="photoshootPOPUP_imgR1">
														<img src="{{asset('common/images/photoshootPOPUP_imgR1.jpg')}}" alt="" />
													</div>
												</div>
												<div class="PSPOPUP_bgSliderInnr">
													<div class="photoshootPOPUP_imgL1">
														<img src="{{asset('common/images/photoshootPOPUP_imgR1.jpg')}}" alt="" />
													</div>
													<div class="photoshootPOPUP_imgR1">
														<img src="{{asset('common/images/photoshootPOPUP_imgL1.jpg')}}" alt="" />
													</div>
												</div>
												<div class="PSPOPUP_bgSliderInnr">
													<div class="photoshootPOPUP_imgL1">
														<img src="{{asset('common/images/photoshootPOPUP_imgL1.jpg')}}" alt="" />
													</div>
													<div class="photoshootPOPUP_imgR1">
														<img src="{{asset('common/images/photoshootPOPUP_imgR1.jpg')}}" alt="" />
													</div>
												</div>
												<div class="PSPOPUP_bgSliderInnr">
													<div class="photoshootPOPUP_imgL1">
														<img src="{{asset('common/images/photoshootPOPUP_imgR1.jpg')}}" alt="" />
													</div>
													<div class="photoshootPOPUP_imgR1">
														<img src="{{asset('common/images/photoshootPOPUP_imgL1.jpg')}}" alt="" />
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="PUPL_contentbtmcontnt" id="backgrounds">
							<div class="PUPL_contentotherTabs">
								<p>Backgrounds Samples : 10 of 17 backgrounds in this Style kit shown</p>
								<ul>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
								</ul>
							</div>
						</div>
						<div class="PUPL_contentbtmcontnt" id="embellishments">
							<div class="PUPL_contentotherTabs">
								<p>Enbellishments Samples : 10 of 69 enbellishments in this Style kit shown</p>
								<ul>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
								</ul>
							</div>
						</div>
						<div class="PUPL_contentbtmcontnt" id="ideapages">
							<div class="PUPL_contentotherTabs">
								<p>Idea Pages Samples : 10 of 16 idea pages in this Style kit shown</p>
								<ul>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
									<li><img src="{{asset('common/images/printshoot_otherIcon.jpg')}}" alt="" /></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="common/js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="common/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="common/js/wow.min.js"></script>
		<script type="text/javascript" src="common/js/slick.min.js"></script>
		<script type="text/javascript" src="common/js/custom.js"></script>
		<script type="text/javascript">
			
		</script>
	</body>
</html>



