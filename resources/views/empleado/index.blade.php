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
    
    <div class="col-md-16">
            <div class="card">
            <div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Datos de Empleados</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('empleado.create')}}" class="btn btn-primary">Agregar</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Nombre</th>
    <th>Puesto</th>
    <th>Tipo de empleado</th>
    <th>Horario</th>
    <th>Pago mensual</th>
    <th>Editar</th>
    <th>Elminar</th>
   </tr>
   @foreach($empleados as $row)
   <tr>
    <td>{{$row['nombre']}}</td>
    <td>{{$row['puesto']}}</td>
    <td>{{$row['tipo_de_empleado']}}</td>
    <td>{{$row['horario']}}</td>
    <td>{{$row['pago_mensual']}}</td>
    <td><a href="{{action('EmpleadoController@edit', $row['id'])}}" class="btn btn-warning">Editar</a></td>
    <td>
     <form method="post" class="delete_form" action="{{action('EmpleadoController@destroy', $row['id'])}}">
      {{csrf_field()}}
      <input type="hidden" name="_method" value="DELETE" />
      <button type="submit" class="btn btn-danger">Eliminar</button>
     </form>
    </td>
   </tr>
   @endforeach
  </table>
 </div>
</div>



@endsection
  