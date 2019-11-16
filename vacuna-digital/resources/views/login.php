<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrarse o iniciar sesion</title>
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
          <li id="menu-1" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home nav-item active"><a title="Inicio" class="nav-link" href="#">Cartilla de Salud</a></li>
          <li id="menu-2" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Trámites y Servicios" class="nav-link" href="#">Esquemas de Vacunacion</a></li>
          <li id="menu-3" class="menu-item menu-item-type-custom menu-item-object-custom nav-item"><a title="Turismo" class="nav-link" href="#">Nutricion</a></li>
          <li id="menu-3" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Consulados" class="nav-link" href="#">Citas Informativas</a></li>
          <li id="menu-3" class="menu-item menu-item-type-post_type menu-item-object-page nav-item"><a title="Consulados" class="nav-link" href="/">Salir</a></li>
        </ul>

      </div>

		</div>
	  </nav>
    <div class="container self-align-center">
      <h1 class="text-center">Iniciar sesion</h1>
        <div class="form-group">
          <label for="inputPassword4">Ingresa tu CURP</label>
          <input type="text" class="form-control" name="curp" id="curp" placeholder="Ingresa tu CURP" autocomplete="off" requiered>
        </div>
        <button type="submit" onclick="ingresar()" class="btn btn-primary">Iniciar sesion</button>
    </div>
  </body>
  <script>
    function ingresar(){
      curp = "http://127.0.0.1:8000/index/"+document.getElementById("curp").value;
      location.href = curp;
    }
  </script>
</html>
