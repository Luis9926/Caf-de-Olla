<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Esquema de vacunación -Niños</title>
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
    <div class="informacion text-center" id="informacion">
        <?= e($esquema)?>
        </div>
    <div class="container">
        <div class="row">
            <div class="col rounded-pill border border-dark" style="background-color: #3b9422;">
                <h1 class="text-center">Esquema de vacunacion - Niños (0 - 10 años)</h1>
            </div>
        </div>
        <table class="table rounded-pill" style="padding-top: 20px; margin-top: 20px;border: 2px solid black!important; border-radius: 25px;">
            <thead>
                <tr>
                    <th scope="col">
                        <h3>Vacuna</h3>
                    </th>
                    <th scope="col"></th>
                    <th scope="col">
                        <h3>Fecha de aplicacion</h3>
                    </th>
                </tr>
            </thead>
            <tbody class="">
                <tr>
                    <td>
                        <h5>BCG</h5>
                    </td>
                    <td><a href="javascript:popup(1)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
                <tr>
                    <td>
                        <h5>HEPATITIS B</h5>
                    </td>
                    <td><a href="javascript:popup(2)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
                <tr>
                    <td>
                        <h5>PENTAVALENTE<br>ACELULAR<br></h5>
                        <h6>DPaT + VPI + Hib</h6>
                    </td>
                    <td><a href="javascript:popup(3)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
                <tr>
                    <td>
                        <h5>DPT</h5>
                    </td>
                    <td><a href="javascript:popup(4)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
                <tr>
                    <td>
                        <h5>ROTAVIRUS</h5>
                    </td>
                    <td><a href="javascript:popup(5)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
                <tr>
                    <td>
                        <h5>NEUMOCÓCICA CONJUGADA</h5>
                    </td>
                    <td><a href="javascript:popup(6)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
                <tr>
                    <td>
                        <h5>INFLUENZA</h5>
                    </td>
                    <td><a href="javascript:popup(7)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
                <tr>
                    <td>
                        <h5>S R P</h5>
                    </td>
                    <td><a href="javascript:popup(8)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
                <tr>
                    <td>
                        <h5>SABIN</h5>
                    </td>
                    <td><a href="javascript:popup(9)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
                <tr>
                    <td>
                        <h5>S R</h5>
                    </td>
                    <td><a href="javascript:popup(9)" class="align-self-center">Ver informacion...</a></td>
                    <td>{{Fecha}}</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
<script type="text/javascript">
    function popup(id) {
        debugger
        //Al llamar esta funcion se asigna opacidad 100% a un div que muestra la imagen y el titulo
        //ademas de que activas pos pointer-events que se utilizaran para cerrar el div
        $("#informacion").empty();
        $("#informacion").css("opacity", "100%");
        $("#informacion").css("pointer-events", "all");
        $("#informacion").css("padding-top", "60px");
        $("#informacion").append(""
        +"<h1>{{Nombre de vacuna}}</h1><br><br>"
        +"<h3>La aplicacion de esta vacuna ayuda a prevenir enfermedades como {{enfermedad}}<br>"
        +"y debe ser aplicada en niños menores de 10 años en el periodo de {{dosis}}</h3><br><br>"
        )
        //Al hacer click en sobre el div que muestra la imagen este se oculta y se desactivan sus ponter-events
        $("div").click(function() {
            $("#informacion").css("opacity", "0%");
            $("#informacion").css("pointer-events", "none");
            $("#informacion").css("padding-top", "0");
        });
    }
</script>
<style type="text/css">
    .informacion {
        position: fixed;
        padding: 0;
        padding-top: -10%;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(242, 242, 242, .8);
        z-index: 2;
        opacity: 0%;
        pointer-events: none;
        transition: .5s;
    }
</style>

</html>
