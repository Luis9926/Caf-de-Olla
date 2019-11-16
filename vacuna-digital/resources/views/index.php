<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>{{Curp}}</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
  </head>
  <body>
    <div style="background-color: #12009c;">
  		<div class="row">
        <div class="col float-left align-self-center">
          <h6 style="color: white; padding-left: 10px;">Gobierno del Estado de Durango<br>2016-2022</h6>
        </div>
        <div class="col float-right align-self-center">
          <form action="#" method="get" class="float-right form-inline ">
            <input type="text" id="search" class="form-control align-self-center" placeholder="Buscar en sitio de Gobierno..." autocomplete="off" style="width: 300px; height: 100%;">
          </form>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbartop" style="padding-bottom:0;padding-top:0;background:#fff;">
		<div class="container float-left">
			<a class="navbar-brand logo" href="index">
				<img class="img-logo" src="http://www.durango.gob.mx/wp-content/themes/theme/img/dgo.png" style="width: 175px;">
				<!-- <img class="img-logo" src="http://www.durango.gob.mx/wp-content/themes/theme/img/dgo_rosa.png" style="width: 175px;"> -->
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul id="menu-main" class="navbar-nav mr-auto">
          <li id="menu-item-2536" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home nav-item active"><a title="Inicio" class="nav-link" href="#">Inicio</a></li>
          <li id="menu-item-2549" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item dropdown"><a title="Gobierno" class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Gobierno <span class="caret"></span></a>
            <ul role="menu" class=" dropdown-menu">
            	<li id="menu-item-2552" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Gabinete" class="nav-link" href="#">Gabinete</a></li>
            	<li id="menu-item-2553" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Dependencias y Organismos" class="nav-link" href="#">Dependencias y Organismos</a></li>
            	<li id="menu-item-2555" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Paquete Económico" class="nav-link" href="#">Paquete Económico</a></li>
            	<li id="menu-item-2556" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Decreto Administrativo" class="nav-link" href="#">Decreto Administrativo</a></li>
            	<li id="menu-item-10271" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Informes de Gobierno" class="nav-link" href="#">Informes de Gobierno</a></li>
            	<li id="menu-item-3344" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Plan Estatal de Desarrollo" class="nav-link" href="#">Plan Estatal de Desarrollo</a></li>
            	<li id="menu-item-10045" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Agenda 2030 Durango" class="nav-link" href="#">Agenda 2030 Durango</a></li>
            </ul>
          </li>
          <li id="menu-item-2734" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Trámites y Servicios" class="nav-link" href="#">Trámites y Servicios</a></li>
          <li id="menu-item-2559" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Turismo" class="nav-link" href="#">Turismo</a></li>
          <li id="menu-item-2561" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav-item dropdown"><a title="Transparencia" class="dropdown-toggle nav-link" href="#" data-toggle="dropdown">Transparencia <span class="caret"></span></a>
          <ul role="menu" class=" dropdown-menu">
          	<li id="menu-item-2612" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Portal de Transparencia" class="nav-link" href="#">Portal de Transparencia</a></li>
          	<li id="menu-item-8737" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Transparencia Fiscal" class="nav-link" href="#">Transparencia Fiscal</a></li>
          	<li id="menu-item-2611" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Planeacion" class="nav-link" href="#">Planeacion</a></li>
          	<li id="menu-item-2615" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Juridico" class="nav-link" href="#">Juridico</a></li>
          	<li id="menu-item-3987" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Evaluaciones" class="nav-link" href="#">Evaluaciones</a></li>
          </ul>
          </li>
          <li id="menu-item-2562" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Consulados" class="nav-link" href="#">Consulados</a></li>
        </ul>
      </div>
		</div>
	  </nav>
    <div class="container">
      <h1>CONSULTA TU CARTILLA DE SALUD</h1>
      <div class="row">
        <div class="col-6">
          <h2>e($datos['curp'])</h2>
          <h3>Nombre completo:</h3>
          e($datos['nombre']) e($datos['apellido_paterno']) e($datos['apellido_materno'])
          <h3>Genero</h3>
          <h3>Domicilio:</h3>
          {{Domicilio}}
          <h3>Lugar y fecha de nacimiento</h3>
          {{Lugar}} {{Fecha}}
          <h3>Cerificado de nacimiento:</h3>
          {{}}
          <h3>Grupo sanguineo:</h3>
          {{}}
          <h3>Afiliación / Matrícula / Expediente:</h3>
          {{}}
          <h3>Unidad Medica:</h3>
          {{}}-->
        </div>
          <div class="col-4">
            <img src="{{URL::to('/')}}/img/user.png" alt="image" width="350px" height="350px" alt="">
            <a href="/EsquemaNino"><button onclick="">Ver esquema de valunacion niños</button></a>

          {{}}
        </div>
          <div class="col-4">
            <img src="img/user.png" width="350px" height="350px" alt="">
            <a href="EsquemaNino.html"><button onclick="">Ver esquema de valunacion niños</button></a>
          </div>
      </div>
    </div>
  </body>
</html>
