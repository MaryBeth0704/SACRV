@extends('layouts.template_administrador')


@section('content')
	<section id="seccionAdmin">
		
		<span class="glyphicon glyphicon-cog"></span> <font style="font-size: 25px;">  Registrar nuevos usuarios</font> 
							          
		<hr>
		<form class="form-horizontal" role="form">

			<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="email">Email:</label>
			    <div class="col-sm-10">
			      <input type="email" class="form-control" id="email" placeholder="Enter email">
			    </div>
			  </div>
			  <div class="form-group">
			    <label class="control-label col-sm-2" for="pwd">Password:</label>
			    <div class="col-sm-10"> 
			      <input type="password" class="form-control" id="pwd" placeholder="Enter password">
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <div class="checkbox">
			        <label><input type="checkbox"> Remember me</label>
			      </div>
			    </div>
			  </div>
			  <div class="form-group"> 
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">Submit</button>
			    </div>
			  </div>
			</form>

			<div class="form-group">
				<label for="fecha" class="col-lg-2 control-label">Fecha</label>
				<div class="col-lg-2">
					<input type="date" class="form-control" id="fecha" >				
				</div>

				<label for="hora" class="col-lg-2 control-label">Hora</label>
				<div class="col-sm-1">
					<input type="time" class="form-control" id="hora">
				</div>
			</div>

			<div class="form-group">
				<label for="nombreAgente" class="col-lg-2 control-label">Nombre </label>
				<div class="col-lg-4">
					<input type="text" class="form-control" id="nombreAgente" placeholder="Claudio González" disabled>
				</div>
			</div>


			<div class="form-group">
				<label for="novedadesSalida" class="col-sm-2 control-label">Novedades Salida </label>
				<div class="col-lg-8">
					<textarea class="form-control" rows="7" id="novedadesSalida" placeholder="Al retirarse el agente custodio en turno indica el número de vehículos: motos, bicicletas, livianos, pesados y extra pesados, con los que deja el turno (actualizados); a más se escriben artículos que encuentren a su responsabilidad como: Motorola base, Motorola móvil, Cámara, Cable USB, etc."></textarea>
				</div>
			</div>

			
			<div class="form-group">
				<div class="col-lg-offset-5 col-lg-16">
				<br><br>
					<button type="submit" class="btn btn-danger">Registrar Salida</button>
				</div>
			</div>
			<br>
		</form>		
	</section>

	
@stop