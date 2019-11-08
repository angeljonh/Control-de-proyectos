@extends('empleado.acercade')

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
					<li><a href="{{ route('inicio') }}">Inicio</a></li>
					<li class="active"><a href="{{ route('acerca') }}">Acerca de</a></li>
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
					<li><a href="{{ route('inicio') }}">Inicio</a></li>
					<li class="active"><a href="{{ route('acerca') }}">Acerca de</a></li>
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
						<li class="active"><a href="{{ route('acerca') }}">Acerca de</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/about.jpg" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>Acerca de</h1></div>
		</div>
	</div>

	<!-- About -->

	<div class="about">
		<div class="container">
			<div class="row row-eq-height">
				
				<!-- About Content -->
				<div class="col-lg-8">
					<div class="about_content">
						<div class="section_title_container">
							<div class="section_title"><h1>Acerca de SoftGym</h1></div>
						</div>
						<div class="about_text">
							<p>Porque nos apasiona lo que hacemos y nos gusta el Fitnes, creamos el gimnasio e implementamos una Cultura Fisica en donde podemos transmitir a nuestros clientes la importancia de mantenerse activos y realizar ejercicios. Nuestro gimnasio cuenta con entrenadores certificados que le brindaran las directrices para poder establecer un plan de entrenamiento y asi usted pueda lograr las metas a traves del ejercicio continuo y las directrices de nuestros entrenadores. Ven a nuestro gimnasio, te invitamos a que seas parte de la moda Fitnes la cual es una actividad física realizada de forma repetida (varias veces por semana) que tiene el objetivo de que nos sintamos mejor, tanto física como psicológicamente.</p>
						</div>
					</div>
				</div>

				<!-- About Image -->
				<div class="col-lg-4">
					<div class="about_image">
						<img src="images/about_2.png" alt="">
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Quote -->

	<div class="quote">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="quote_content d-flex flex-row align-items-center justify-content-center text-center">
						<p>"Entrenar como una bestia parece una belleza"</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Trainers -->

	<div class="trainers">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<div class="section_title"><h1>Nuestros entrenadores</h1></div>
					</div>
				</div>
			</div>
			<div class="row trainers_row">
				<!-- Trainer -->
				<div class="col-xl-3 col-md-6">
					<div class="trainer_box">
						<div class="trainer_image">
							<img src="images/trainer_1.jpg" alt="">
							<div class="trainer_info">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div class="trainer_name"><a href="#">michael smith </a></div>
									<div class="trainer_title">Entrenador de Pilates </div>
								</div>
							</div>
						</div>
						<div class="trainer_content">
							<div class="social trainer_social">
								<ul class="d-flex flex-row align-items-center justify-content-center">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="trainer_text text-center">
								<p>.</p>
							</div>
						</div>
					</div>
				</div>
               
				<!-- Trainer -->
                <div class="col-xl-3 col-md-6">
					<div class="trainer_box">
						<div class="trainer_image">
							<img src="images/trainer_2.jpg" alt="">
							<div class="trainer_info">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div class="trainer_name"><a href="#">jenny williams</a></div>
									<div class="trainer_title">Entrenador de yoga</div>
								</div>
							</div>
						</div>
						<div class="trainer_content">
							<div class="social trainer_social">
								<ul class="d-flex flex-row align-items-center justify-content-center">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="trainer_text text-center">
								<p>.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Trainer -->
				<div class="col-xl-3 col-md-6">
					<div class="trainer_box">
						<div class="trainer_image">
							<img src="images/trainer_3.jpg" alt="">
							<div class="trainer_info">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div class="trainer_name"><a href="#">james smith</a></div>
									<div class="trainer_title">Entrenador de pesas</div>
								</div>
							</div>
						</div>
						<div class="trainer_content">
							<div class="social trainer_social">
								<ul class="d-flex flex-row align-items-center justify-content-center">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="trainer_text text-center">
								<p>.</p>
							</div>
						</div>
					</div>
				</div>

				<!-- Trainer -->
				<div class="col-xl-3 col-md-6">
					<div class="trainer_box">
						<div class="trainer_image">
							<img src="images/trainer_4.jpg" alt="">
							<div class="trainer_info">
								<div class="d-flex flex-column align-items-center justify-content-center">
									<div class="trainer_name"><a href="#">cris white</a></div>
									<div class="trainer_title">Entrenador de fitness</div>
								</div>
							</div>
						</div>
						<div class="trainer_content">
							<div class="social trainer_social">
								<ul class="d-flex flex-row align-items-center justify-content-center">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="trainer_text text-center">
								<p>.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">

			<!-- CTA Image -->
			<div class="cta_image align-self-stretch">
				<div class="background_image" style="background-image:url(images/cta_2.jpg)"></div>
			</div>

			<!-- CTA Content -->
			<div class="cta_content">
				<div class="section_title_container">
					<div class="section_title"><h1>Adquiere tu membresia para conseguir un entrenador personal</h1></div>
				</div>
				<div class="cta_text">
					<p>Registrate en nuestra plataforma para obtener tu membresia y obtengas los beneficios de pertenecer a nuestro gimnasio</p>
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
<script src="js/about.js"></script>

@endsection