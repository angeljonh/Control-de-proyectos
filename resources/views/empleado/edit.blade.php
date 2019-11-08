@extends('master')

@section('content')


	<!-- Header -->

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
					<li><a href="classes.html">clases</a></li>
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

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

  <!--/ Services Star /-->
  <section class="section-services section-t8">
    <div class="container">
    <div class="row justify-content-center">
 <div class="row">
 <div class="col-md-12">
  <br />
  <h3>Editar Empleado</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('EmpleadoController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="nombre" class="form-control" value="{{$empleado->nombre}}" placeholder="Agregar domicilio" />
    </div>
    <div class="form-group">
    <input type="text" name="puesto" class="form-control" value="{{$empleado->puesto}}" placeholder="Agregar numero" />
   </div>
   <div class="form-group">
    <input type="text" name="tipo_de_empleado" class="form-control" value="{{$empleado->tipo_de_empleado}}" placeholder="Agregar colonia" />
   </div>
   <div class="form-group">
    <input type="text" name="horario" class="form-control" value="{{$empleado->horario}}" placeholder="Agregar ciudad" />
   </div>
   <div class="form-group">
    <input type="text" name="pago_mensual" class="form-control" value="{{$empleado->pago_mensual}}" placeholder="Agregar estado" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Editar" />
   </div>
  </form>
 </div>
</div>



@endsection
