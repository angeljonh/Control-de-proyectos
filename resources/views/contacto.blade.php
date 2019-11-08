@extends('empleado.contacto')

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
					<li><a href="{{ route('acerca') }}">Acerca de</a></li>
					<li><a href="{{ route('clases') }}">clases</a></li>
					<li><a href="{{ route('blog') }}">blog</a></li>
					<li class="active"><a href="{{ route('contacto') }}">contacto</a></li>
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
					<li><a href="{{ route('acerca') }}">Acerca de</a></li>
					<li><a href="{{ route('clases') }}">clases</a></li>
					<li><a href="{{ route('blog') }}">blog</a></li>
					<li class="active"><a href="{{ route('contacto') }}">contacto</a></li>
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
						<li class="active"><a href="{{ route('contacto') }}">contacto</a></li>
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
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/classes.jpg" data-speed="0.8"></div>
		<div class="home_overlay"></div>
		<div class="home_container d-flex flex-column align-items-center justify-content-center">
			<div class="home_title"><h1>Contacto</h1></div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact custom_container_wrap">
		<div class="container">
			<div class="row">
				
				<!-- Contact Content -->
				<div class="col-xl-6">
					<div class="contact_content">
						<div>
							<div class="contact_logo"><img src="images/logo_1.png" alt=""></div>
							<div class="contact_title">Nuestra información de contacto</div>
							<div class="row contact_row">
								<div class="col-xl-6">
									<div class="contact_text">
										<p>Presentamos un nuevo espacio donde ponerte en forma con lo último en tecnología fitness. Entrenar de forma segura y eficaz desde el primer día es vital. Por este motivo, recibirás el asesoramiento profesional que mejor se adapte a tus características y objetivos.</p>
									</div>
								</div>
								<div class="col-xl-6">
									<div class="contact_info_list">
										<ul>
											<li>Cucei, Guadalajara</li>
											<li>+521 333 130 0949</li>
											<li>angel.renteria.hernandez@gmail.com</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="contact_form_container">
								<form action="#" class="contact_form">
									<div class="row contact_form_row">
										<div class="col-md-6"><input type="text" class="contact_input" placeholder="Nombre" required="required"></div>
										<div class="col-md-6"><input type="email" class="contact_input" placeholder="Correo" required="required"></div>
										<div class="col-12"><input type="text" class="contact_input" placeholder="Tema"></div>
										<div class="col-12"><textarea class="contact_input contact_textarea" placeholder="Mensaje" required="required"></textarea></div>
									</div>
									<button class="contact_button">Envia mensaje</button>
								</form>
							</div>
						</div>
					</div>
				</div>

				<!-- Contact Map -->
				<div class="col-xl-6">
					<div class="contact_map_container">
						<div class="map">
							<div id="google_map" class="google_map">
                            <br><br><br><br><br><br><br><br>
                            <div class="content card__content"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.2630889032125!2d-103.32607418508748!3d20.658872886199898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdacdb7fd592feb90!2sCentro+Universitario+de+Ciencias+Exactas+e+Ingenier%C3%ADas!5e0!3m2!1ses!2smx!4v1541651720655" width="500" height="500" frameborder="0" style="border:0" allowfullscreen=""></iframe>
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