@extends('empleado.inicio')

@section('content')

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_wrap d-flex flex-row align-items-center justify-content-center">
			
			<!-- Logo -->
			<div class="logo"><a href="{{ route('inicio') }}"><img src="images/logo_1.png" alt=""></a></div>

			<!-- Main Nav -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-center">
					<li class="active"><a href="{{ route('inicio') }}">Inicio</a></li>
					<li><a href="{{ route('acerca') }}">Acerca de</a></li>
					<li><a href="{{ route('clases') }}">clases</a></li>
					<li><a href="{{ route('blog') }}">blog</a></li>
					<li><a href="{{ route('contacto') }}">contacto</a></li>
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
			<div class="logo"><a href="{{ route('inicio') }}"><img src="images/logo_2.png" alt=""></a></div>

			<!-- Main Nav -->
			<nav class="main_nav">
				<ul class="d-flex flex-row align-items-center justify-content-center">
					<li class="active"><a href="{{ route('inicio') }}">Inicio</a></li>
					<li><a href="{{ route('acerca') }}">Acerca de</a></li>
					<li><a href="{{ route('clases') }}">clases</a></li>
					<li><a href="{{ route('blog') }}">blog</a></li>
					<li><a href="{{ route('contacto') }}">contacto</a></li>
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
						<li><a href="{{ route('inicio') }}">Inicio</a></li>
						<li><a href="{{ route('acerca') }}">Acerca de</a></li>
						<li><a href="{{ route('clases') }}">clases</a></li>
						<li><a href="{{ route('blog') }}">blog</a></li>
						<li><a href="{{ route('contacto') }}">contacto</a></li>
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
		
		<!-- Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="home_slider_overlay"></div>
					<div class="slide_wrap d-flex flex-column align-items-start justify-content-center">
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content active">
											<div class="home_subtitle">¡Ve al gimnasio ahora!</div>
											<div class="home_title">
												<h1><span>Nunca</span> te</h1>
												<h1>limites.</h1>
											</div>
											<div class="button home_button"><a href="#">Lee mas</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="home_slider_overlay"></div>
					<div class="slide_wrap d-flex flex-column align-items-start justify-content-center">
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<div class="home_subtitle">¡Ve al gimnasio ahora!</div>
											<div class="home_title">
												<h1><span>Nunca</span> te</h1>
												<h1>limites</h1>
											</div>
											<div class="button home_button"><a href="#">Lee mas</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="home_slider_overlay"></div>
					<div class="slide_wrap d-flex flex-column align-items-start justify-content-center">
						<div class="home_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="home_content">
											<div class="home_subtitle">Ve al gimnasio ahora!</div>
											<div class="home_title">
												<h1><span>Nunca</span> te</h1>
												<h1>limites</h1>
											</div>
											<div class="button home_button"><a href="#">Lee mas</a></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="intro_boxes_wrap">
			<div class="d-flex flex-row align-items-start justify-content-start flex-wrap">
				
				<!-- Intro Box -->
				<div class="intro_box d-flex flex-column align-items-center justify-content-center text-center">
					<div class="intro_box_icon"><img src="images/icon_1.svg" alt=""></div>
					<div class="intro_box_title"><h3>Programa de aeróbics</h3></div>
					<div class="intro_box_text">
						<p></p>
					</div>
				</div>

				<!-- Intro Box -->
				<div class="intro_box d-flex flex-column align-items-center justify-content-center text-center">
					<div class="intro_box_icon"><img src="images/icon_2.svg" alt=""></div>
					<div class="intro_box_title"><h3>Entrenamiento pesado</h3></div>
					<div class="intro_box_text">
						<p></p>
					</div>
				</div>

				<!-- Intro Box -->
				<div class="intro_box d-flex flex-column align-items-center justify-content-center text-center">
					<div class="intro_box_icon"><img src="images/icon_3.svg" alt=""></div>
					<div class="intro_box_title"><h3>Programa basico</h3></div>
					<div class="intro_box_text">
						<p></p>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row">
				
				<!-- About Content -->
				<div class="col-lg-8">
					<div class="about_content">
						<div class="section_title_container">
							<div class="section_subtitle">Programa de aerobics</div>
							<div class="section_title"><h1>Acerca de SoftGym</h1></div>
						</div>
						<div class="about_text">
							<p></p>
						</div>
						<div class="button about_button"><a href="#">Lee mas</a></div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-4">
					<div class="about_image"><img src="images/about.png" alt=""></div>
				</div>

			</div>
		</div>
	</div>

	<!-- Quote -->

	<div class="quote">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="quote_content text-center">
						<p>“El entrenamiento nos da una salida para las energías suprimidas creadas por el estrés y, por lo tanto, tonifica el espíritu al igual que el ejercicio condiciona el cuerpo.”</p>
					</div>
					<div class="quote_author text-center">– Arnold Schwarzenegger</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">

			<!-- CTA Image -->
			<div class="cta_image align-self-stretch">
				<div class="background_image" style="background-image:url(images/cta.jpg)"></div>
			</div>

			<!-- CTA Content -->
			<div class="cta_content">
				<div class="section_title_container">
					<div class="section_subtitle">Programa de aerobics</div>
					<div class="section_title"><h1>Ùnete a nuestro gimnasio</h1></div>
				</div>
				<div class="cta_list">
					<ul>
						<li class="d-flex flex-row align-items-center justify-content-start">
							<img src="images/check.png" alt="">
							<span>Te ayudará a bajar de peso y mantenerte fit.</span>
						</li>
						<li class="d-flex flex-row align-items-center justify-content-start">
							<img src="images/check.png" alt="">
							<span>El gimnasio es perfecto para reducir el estrés.</span>
						</li>
						<li class="d-flex flex-row align-items-center justify-content-start">
							<img src="images/check.png" alt="">
							<span>Podrás mantenerte alejado de las enfermedades cardiovasculares.</span>
						</li>
						<li class="d-flex flex-row align-items-center justify-content-start">
							<img src="images/check.png" alt="">
							<span>Te ayuda a ser disciplinado.</span>
						</li>
                        <li class="d-flex flex-row align-items-center justify-content-start">
							<img src="images/check.png" alt="">
							<span>Conocerás gente increíble y disciplinada en el gimnasio.</span>
						</li>
                        <li class="d-flex flex-row align-items-center justify-content-start">
							<img src="images/check.png" alt="">
							<span>Entenderás cómo alimentarte sanamente.</span>
						</li>
					</ul>
				</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Classes -->

	<div class="classes">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Nuestros programas</div>
						<div class="section_title"><h1>clases</h1></div>
					</div>

					<!-- Classes Slider -->
					<div class="classes_slider_container">
						<div class="owl-carousel owl-theme classes_slider">
							
							<!-- Slide -->
							<div>
								<div class="classes_slide_wrap">
									<div class="text-center">
										<div class="classes_title"><h3>aerobics</h3></div>
										<div class="classes_text">
											<p></p>
										</div>
										<div class="class_image"><a href="#"><img src="images/instructor_1.jpg" alt=""></a></div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="classes_slide_wrap">
									<div class="text-center">
										<div class="classes_title"><h3>pilates</h3></div>
										<div class="classes_text">
											<p></p>
										</div>
										<div class="class_image"><a href="#"><img src="images/instructor_2.jpg" alt=""></a></div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="classes_slide_wrap">
									<div class="text-center">
										<div class="classes_title"><h3>yoga</h3></div>
										<div class="classes_text">
											<p></p>
										</div>
										<div class="class_image"><a href="#"><img src="images/instructor_3.jpg" alt=""></a></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pricing -->

	<div class="pricing">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/pricing.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_subtitle">Nuestros Programas</div>
						<div class="section_title"><h1>Precios</h1></div>
					</div>
					<div class="pricing_slider_container">
						<div class="owl-carousel owl-theme pricing_slider">
							
							<!-- Slide -->
							<div>
								<div class="pricing_box text-center">
									<div class="pricing_title_box">
										<div>
											<div class="pricing_name">Principiante</div>
											<div class="pricing_price">Gratis</div>
											<div class="pricing_per">1 dia</div>
										</div>
									</div>
									<div class="pricing_content">
										<div class="pricing_list">
											<ul>
												<li></li>
												<li></li>
												<li>Ejercicio</li>
												<li></li>
												<li></li>
											</ul>
										</div>
										<div class="pricing_info"><a href="#">i</a></div>
										<div class="button pricing_button ml-auto mr-auto"><a href="#">Comprar</a></div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="pricing_box text-center pricing_box_alt">
									<div class="pricing_title_box">
										<div>
											<div class="pricing_name">Moderado</div>
											<div class="pricing_price">$150<span>00</span></div>
											<div class="pricing_per">Por mes</div>
										</div>
									</div>
									<div class="pricing_content">
										<div class="pricing_list">
											<ul>
                                                <li></li>
                                                <li>Planes de dieta</li>
												<li>Soporte las 24 horas</li>
												<li>Instructor</li>
											</ul>
										</div>
										<div class="pricing_info"><a href="#">i</a></div>
										<div class="button_2 pricing_button ml-auto mr-auto"><a href="#">Comprar</a></div>
									</div>
								</div>
							</div>

							<!-- Slide -->
							<div>
								<div class="pricing_box text-center">
									<div class="pricing_title_box">
										<div>
											<div class="pricing_name">Profesional</div>
											<div class="pricing_price">$300<span>00</span></div>
											<div class="pricing_per">Por mes</div>
										</div>
									</div>
									<div class="pricing_content">
										<div class="pricing_list">
											<ul>
                                                <li>Promos por correo</li>
                                                <li>Planes de dieta</li>
												<li>Instructor</li>
												<li>Soporte las 24 horas</li>
                                                <li>Sauna</li>
                                                <li>Nutriologo</li>
											</ul>
										</div>
										<div class="pricing_info"><a href="#">i</a></div>
										<div class="button pricing_button ml-auto mr-auto"><a href="#">Comprar</a></div>
									</div>
								</div>
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
						<div class="footer_logo text-center"><a href="{{ route('inicio') }}"><img src="images/logo_3.png" alt=""></a></div>
					</div>
				</div>
				<div class="row footer_row">
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/phone.png" alt=""></div>
							</div>
							<div class="footer_title">Háblanos</div>
							<div class="footer_list">
								<ul>
									<li>+521 333 130 0949</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/mail.png" alt=""></div>
							</div>
							<div class="footer_title">Correo</div>
							<div class="footer_list">
								<ul>
									<li>angel.renteria.hernandez@gmail.com</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-lg-4 footer_col">
						<div class="footer_item text-center">
							<div class="footer_icon d-flex flex-column align-items-center justify-content-center ml-auto mr-auto">
								<div><img src="images/contact.png" alt=""></div>
							</div>
							<div class="footer_title">Ubicación</div>
							<div class="footer_list">
								<ul>
									<li>CUCEI</li>
									<li>44430 JA</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar d-flex flex-row align-items-center justify-content-center">
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados  <i class="fa fa-heart-o" aria-hidden="true"></i> por <a href="http://localhost:8000/inicio" target="_blank">SoftGym</a>
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