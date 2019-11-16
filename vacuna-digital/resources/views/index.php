<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> <?= e($index['curp'])?></title>

    <style>
      #menu-main li{
        padding-left:12px;
        font-size:21px;
      }
    </style>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div style="background-color: #12009c;">
  		<div class="row">
        <div class="col float-left align-self-center" >
          <h6 style="color: white; padding-left: 10px;">Gobierno del Estado de Durango 2016-2022</h6>
        </div>
        <div class="col align-self-center">
          <form action="#" method="get" class="float-right form-inline " style="padding-top:10px;">
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
    <div class="container" style="padding-top:50px;">
      <h1 align=center style="margin-bottom:50px;">CONSULTA TU CARTILLA DE SALUD</h1>
      <div class="row justify-content-between">
        <div class="col align-self-center">
          <h2 id="curp"><?= e($index['curp'])?></h2>
          <h3>Nombre completo</h3>
          <?= e($index['nombres'])?> <?=e($index['apellido_paterno'])?> <?=e($index['apellido_materno'])?>
          <h3>Genero </h3>
          <?= e($index['sexo'])?>
          <h3>Domicilio </h3>
          <?= e($index['calle'])?> #<?= e($index['numero'])?>  <?= e($index['localidad'])?>  <?= e($index['estado'])?>
          <h3>Lugar y fecha de nacimiento </h3>
          <?= e($index['fecha_nacimiento'])?>  <?= e($index['localidad_nacimiento'])?>
          <h3>Afiliación / Matrícula / Expediente</h3>
          <?= e($index['matricula_expediente'])?>
          <h3>Unidad Medica NO  </h3>
          <?= e($index['unidad_medica'])?>
        </div>
          <div class="col-4 align-self-center">
            <img src="https://www.clipartwiki.com/clipimg/full/174-1742152_computer-icons-user-clip-art-transparent-user-icon.png" alt="" width="100%" style="padding-bottom:30px;" alt=""> 
           <a href="/EsquemaNino"> <button type="button" class="btn btn-primary btn-lg btn-block" href="/EsquemaNino">Esquema de Vacunación</button></a>
      </div>
      <div align=center style="padding-top:50px;">
      <h1 style="padding-bottom:50px;">Mapa del Estado de Durango Organizado Por Grado de Marginación</h1>
        <img src="http://www.conapo.gob.mx/work/models/CONAPO/indices_margina/mf2010/AnexosMapas/Mapas/Entidadesfederativas/MapaB10Durango.jpg " style="width:100%;" alt="">
        
      </div>
    </div>
  </body>
  <script>
  $(document).ready(function(){
    debugger
    if ($('#curp').is(':empty')){
      alert("No existe este registro");
      location.href = "http://127.0.0.1:8000/";
    }
  });
  
  </script>
</html>
