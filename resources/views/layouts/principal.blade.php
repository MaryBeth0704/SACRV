<!DOCTYPE html5>
<html>
<!--COMO TECNICA A LOS ARCHIVOS SCRIPT SE LOS COLOCA AL FINAL PARA QUE LA WEB SE CARGUE RÁPIDAMENTE-->
<head lang="es">
	<meta charset="UTF-8"/>
	<title>Registrar Salida</title>
	<!-- Con esto garantizamos que se vea bien en dispositivos móviles-->
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<!--Archivos importantes de BOOTSTRAP-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" href="bootstrap/js/bootstrap.min.js"></script>
	<!--Importante llamar antes a jQuery para que funcione bootstrap.min.js-->
	<script type="text/javascript" href="bootstrap/jquery.js"></script>
	

	<link rel="stylesheet" type="text/css" href="css/template.css">

</head>

<body>
	<header> 
		<div >
		 	<img id="imagen" src="images/LOGO - copia.jpg" alt="Sistema del CRV"> 
		</div>
		
		<div id="logueo" class="form-group">
		    <label for="bienvenida">Bienvenid@</label>
		    <input type="text" class="form-control" id="user" value="Nombre del usuario que se logueo" disabled="">
	  	</div>	
	  	
		<div id="boton2" class="btn-group">	
			<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown"> 
			    Ir <span class="caret"></span>
			</button>
		 
			<ul class="dropdown-menu" role="menu">
			    <li><a href="#">Cambiar contraseña</a></li>
			    <li class="divider"></li>
			    <li><a href="#">Salir</a></li>
			</ul>
		</div>
	</header>

	<div  class="well">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#miMenu">
                <span class="sr-only"> Navigation</span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
              </button>
              <a class="navbar-brand" href="#"> <b> Menú </b></a>
            </div>
          
            <div class="collapse navbar-collapse" id="miMenu">
              <ul class="nav navbar-nav">
                <li class="active"> <button type="button" class="btn btn-default navbar-btn">Ingresar Vehículo</button> </li>
                <li> <button type="button" class="btn btn-default navbar-btn">Registrar Entrada</button> </li>
                <li> <button type="button" class="btn btn-default navbar-btn">Registrar Salida</button> </li>
                <li> <button type="button" class="btn btn-default navbar-btn">Bitácora de Ingresos</button> </li>
              </ul>
            </div>  
          </div>
        </nav>
	</div>

<!--ESTA PARTE ES LA QUE CAMBIA EN EL TEMPLATE-->
	@yield('content')
	




<!-- Este es el fin-->
	<footer>
		<img id="imagen2" src="images/Municipio.png" alt="Ilustre Municipio de Loja">
		<a id="Pie" href="#">Unidad de tránsito</a>
		<a id="Pie" href="#">Ciudad</a>
		<a id="Pie" href="#">Municipio</a> 
		<p id="autoria"> María Betsabé Mora Medina <br> Proyecto de trabajo de Titulación <br> Universidad Nacional de Loja - CIS </p>
	</footer>

	<!--JS para el dropdown-->
	<script type="text/javascript" src="bootstrap/js/MIjquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/MIbootstrap.js"></script>
</body>
</html>