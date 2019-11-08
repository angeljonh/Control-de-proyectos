@extends('empleado.blog')

@section('content')

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_wrap d-flex flex-row align-items-center justify-content-center">
			
			<!-- Logo -->
			<div class="logo"><a href="#"><img src="images/logo_1.png" alt=""></a></div>

			<!-- Main Nav -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-center">
					<li><a href="index.html">home</a></li>
					<li><a href="about.html">about us</a></li>
					<li><a href="classes.html">classes</a></li>
					<li class="active"><a href="blog.html">blog</a></li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</nav>

			<!-- Social -->
			<div class="social header_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<!-- Hamburger -->
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</header>

	<!-- Fixed Header -->

	<header class="fixed_header">
		<div class="header_wrap d-flex flex-row align-items-center justify-content-center">
			
			<!-- Logo -->
			<div class="logo"><a href="#"><img src="images/logo_2.png" alt=""></a></div>

			<!-- Main Nav -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-center">
					<li><a href="index.html">home</a></li>
					<li><a href="about.html">about us</a></li>
					<li><a href="classes.html">classes</a></li>
					<li class="active"><a href="blog.html">blog</a></li>
					<li><a href="contact.html">contact</a></li>
				</ul>
			</nav>

			<!-- Social -->
			<div class="social header_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>

			<!-- Hamburger -->
			<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_door door_left"></div>
		<div class="menu_door door_right"></div>
		<div class="menu_content d-flex flex-column align-items-center justify-content-center">
			<div class="menu_close">close</div>
			<div class="menu_nav_container">
				<nav class="menu_nav text-center">
					<ul>
						<li><a href="index.html">home</a></li>
						<li><a href="about.html">about us</a></li>
						<li><a href="classes.html">classes</a></li>
						<li><a href="blog.html">blog</a></li>
						<li><a href="contact.html">contact</a></li>
					</ul>
				</nav>
			</div>
			<div class="social menu_social">
				<ul class="d-flex flex-row align-items-center justify-content-start">
					<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/blog.jpg" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>blog</h1></div>
		</div>
	</div>

	<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">
				
				<!-- Blog Posts -->
				<div class="col-lg-8">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between flex-wrap">
						
						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<a href="#"><img src="images/blog_1.jpg" alt=""></a>
								<div class="blog_post_date">
									<a href="#">
										<span class="d-flex flex-column align-items-center justify-content-center">
											<span>22</span>
											<span>Dec</span>
											<span>2018</span>
										</span>
									</a>
								</div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><h3><a href="#">How to train your abs</a></h3></div>
								<div class="blog_post_info d-flex flex-row align-items-center justify-content-start">
									<div class="author_image"><img src="images/blog_post_author.jpg" alt=""></div>
									<div class="author_name">
										<span>Written by</span>
										<a href="#">Tina Smith</a>
									</div>
								</div>
								<div class="blog_post_text">
									<p>Auctor nisl vitae auctor faucibus. Pellentesque imperdiet auctor eros, sit amet ornare mauris malesuada in. Duis rutrum nisi tempus finibus luctus. Sed porta vel lacus quis.</p>
								</div>
								<div class="button blog_post_button"><a href="#">read more</a></div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<a href="#"><img src="images/blog_2.jpg" alt=""></a>
								<div class="blog_post_date">
									<a href="#">
										<span class="d-flex flex-column align-items-center justify-content-center">
											<span>22</span>
											<span>Dec</span>
											<span>2018</span>
										</span>
									</a>
								</div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><h3><a href="#">How to train your abs</a></h3></div>
								<div class="blog_post_info d-flex flex-row align-items-center justify-content-start">
									<div class="author_image"><img src="images/blog_post_author.jpg" alt=""></div>
									<div class="author_name">
										<span>Written by</span>
										<a href="#">Nick Brown</a>
									</div>
								</div>
								<div class="blog_post_text">
									<p>Auctor nisl vitae auctor faucibus. Pellentesque imperdiet auctor eros, sit amet ornare mauris malesuada in. Duis rutrum nisi tempus finibus luctus. Sed porta vel lacus quis.</p>
								</div>
								<div class="button blog_post_button"><a href="#">read more</a></div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<a href="#"><img src="images/blog_3.jpg" alt=""></a>
								<div class="blog_post_date">
									<a href="#">
										<span class="d-flex flex-column align-items-center justify-content-center">
											<span>22</span>
											<span>Dec</span>
											<span>2018</span>
										</span>
									</a>
								</div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><h3><a href="#">101 Pilates training</a></h3></div>
								<div class="blog_post_info d-flex flex-row align-items-center justify-content-start">
									<div class="author_image"><img src="images/blog_post_author.jpg" alt=""></div>
									<div class="author_name">
										<span>Written by</span>
										<a href="#">Tina Smith</a>
									</div>
								</div>
								<div class="blog_post_text">
									<p>Auctor nisl vitae auctor faucibus. Pellentesque imperdiet auctor eros, sit amet ornare mauris malesuada in. Duis rutrum nisi tempus finibus luctus. Sed porta vel lacus quis.</p>
								</div>
								<div class="button blog_post_button"><a href="#">read more</a></div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<a href="#"><img src="images/blog_4.jpg" alt=""></a>
								<div class="blog_post_date">
									<a href="#">
										<span class="d-flex flex-column align-items-center justify-content-center">
											<span>22</span>
											<span>Dec</span>
											<span>2018</span>
										</span>
									</a>
								</div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><h3><a href="#">How to train your abs</a></h3></div>
								<div class="blog_post_info d-flex flex-row align-items-center justify-content-start">
									<div class="author_image"><img src="images/blog_post_author.jpg" alt=""></div>
									<div class="author_name">
										<span>Written by</span>
										<a href="#">Nick Brown</a>
									</div>
								</div>
								<div class="blog_post_text">
									<p>Auctor nisl vitae auctor faucibus. Pellentesque imperdiet auctor eros, sit amet ornare mauris malesuada in. Duis rutrum nisi tempus finibus luctus. Sed porta vel lacus quis.</p>
								</div>
								<div class="button blog_post_button"><a href="#">read more</a></div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<a href="#"><img src="images/blog_5.jpg" alt=""></a>
								<div class="blog_post_date">
									<a href="#">
										<span class="d-flex flex-column align-items-center justify-content-center">
											<span>22</span>
											<span>Dec</span>
											<span>2018</span>
										</span>
									</a>
								</div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><h3><a href="#">Butt exercises for begginers</a></h3></div>
								<div class="blog_post_info d-flex flex-row align-items-center justify-content-start">
									<div class="author_image"><img src="images/blog_post_author.jpg" alt=""></div>
									<div class="author_name">
										<span>Written by</span>
										<a href="#">Tina Smith</a>
									</div>
								</div>
								<div class="blog_post_text">
									<p>Auctor nisl vitae auctor faucibus. Pellentesque imperdiet auctor eros, sit amet ornare mauris malesuada in. Duis rutrum nisi tempus finibus luctus. Sed porta vel lacus quis.</p>
								</div>
								<div class="button blog_post_button"><a href="#">read more</a></div>
							</div>
						</div>

						<!-- Blog Post -->
						<div class="blog_post">
							<div class="blog_post_image">
								<a href="#"><img src="images/blog_6.jpg" alt=""></a>
								<div class="blog_post_date">
									<a href="#">
										<span class="d-flex flex-column align-items-center justify-content-center">
											<span>22</span>
											<span>Dec</span>
											<span>2018</span>
										</span>
									</a>
								</div>
							</div>
							<div class="blog_post_content">
								<div class="blog_post_title"><h3><a href="#">How to train your abs</a></h3></div>
								<div class="blog_post_info d-flex flex-row align-items-center justify-content-start">
									<div class="author_image"><img src="images/blog_post_author.jpg" alt=""></div>
									<div class="author_name">
										<span>Written by</span>
										<a href="#">Nick Brown</a>
									</div>
								</div>
								<div class="blog_post_text">
									<p>Auctor nisl vitae auctor faucibus. Pellentesque imperdiet auctor eros, sit amet ornare mauris malesuada in. Duis rutrum nisi tempus finibus luctus. Sed porta vel lacus quis.</p>
								</div>
								<div class="button blog_post_button"><a href="#">read more</a></div>
							</div>
						</div>

					</div>

					<!-- Page nav -->
					<div class="page_nav">
						<ul class="d-flex flex-row align-items-center justify-content-start flex-wrap">
							<li class="active"><a href="#">01.</a></li>
							<li><a href="#">02.</a></li>
							<li><a href="#">03.</a></li>
						</ul>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">
						
						<!-- Search -->
						<div class="sidebar_search">
							<div class="sidebar_title">Search</div>
							<form action="#" class="sidebar_search_form">
								<input type="text" class="sidebar_search_input" placeholder="Search" required="required">
								<button class="sidebar_search_button"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Categories -->
						<div class="categories">
							<div class="sidebar_title">Categories</div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#">Fitness (11)</a></li>
									<li><a href="#">Gym (9)</a></li>
									<li><a href="#">Crossfit (17)</a></li>
									<li><a href="#">Trainings (15)</a></li>
								</ul>
							</div>
						</div>

						<!-- Archives -->
						<div class="archives">
							<div class="sidebar_title">Archives</div>
							<div class="sidebar_list">
								<ul>
									<li><a href="#">September 2018</a></li>
									<li><a href="#">June 2018</a></li>
									<li><a href="#">May 2018</a></li>
									<li><a href="#">April 2018</a></li>
								</ul>
							</div>
						</div>

						<!-- Promo -->
						<div class="promo">
							<div class="sidebar_title">Promo</div>
							<div class="promo_content">
								<div class="background_image" style="background-image:url(images/promo.jpg)"></div>
								<a href="#">
									<span class="promo_box">
										<span class="d-flex flex-row align-items-center justify-content-start">
											<span>30%</span>
											<span>
												<span>promo</span>
												<span>discount</span>
											</span>
										</span>
										<span class="promo_text">Etiam vehicula arcu in libero pretium, porttitor</span>
									</span>
								</a>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_logo text-center"><a href="#"><img src="images/logo_3.png" alt=""></a></div>
					</div>
				</div>
				<div class="row footer_row">
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/phone.png" alt=""></div>
							</div>
							<div class="footer_title">talk to us</div>
							<div class="footer_list">
								<ul>
									<li>+34 5667 4332 244</li>
									<li>+224 667 889</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/mail.png" alt=""></div>
							</div>
							<div class="footer_title">e-mail</div>
							<div class="footer_list">
								<ul>
									<li>Contact@sportify25.com</li>
									<li>office@sportify25.com</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/contact.png" alt=""></div>
							</div>
							<div class="footer_title">location</div>
							<div class="footer_list">
								<ul>
									<li>MAin str. 25</li>
									<li>458811 CA</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar d-flex flex-row align-items-center justify-content-center">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.3.4/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/blog.js"></script>

@endsection