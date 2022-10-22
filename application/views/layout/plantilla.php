<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="COOTRANSURB es una Empresa de economia solidaria, conformada para brindar un excelente servicio de transporte y actividades conexas a la comunidad.">
    <meta name="keywords" content="COOTRANSURB,transporte,cartagena">
    <meta name="author" content="KEVIN HENRIQUEZ">

    <link rel="icon" href="<?= load_img_url('favicon.ico'); ?>">

    <title><?= $title ?></title>

    <script type="text/javascript">
    var loginBack = "<?php echo $loginBack ?>";
    </script>

    <?= load_styles(); ?>
    <?= $css ?>

</head>

<body>

    <!-- HEADER -->
    <header id="top-bar" class="navbar-fixed-top animated-header">
        <div class="container">
            <div class="navbar-header">
                <!-- responsive nav button -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <!-- /responsive nav button -->
                
                <!-- logo -->
                <div class="navbar-brand center-div">
                    <a class="logo divLogo m-0">
                        <img src="<?= load_img_url('images/logo.png'); ?>" alt="" style="width: auto; height:80px;">
                    </a>
                </div>
                <!-- /logo -->
            </div>
            <!-- main menu -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <div class="main-menu">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="aRedirectLink" data-url="">Inicio</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle aRedirectLink" data-url="rutas" data-toggle="dropdown">Secciones <span class="caret"></span></a>
                            <div class="dropdown-menu">
                                <ul>
                                    <li><a class="aRedirectLink" data-url="rutas">RUTA CARACOLES - BOSQUE</a></li>
                                    <li><a class="aRedirectLink" data-url="rutas">RUTA DIRECTO</a></li>
                                    <li><a class="aRedirectLink" data-url="rutas">RUTA NUEVO BOSQUE - CALAMARES</a></li>
                                    <li><a class="aRedirectLink" data-url="rutas">RUTA POZÓN - BICENTENARIO - AVENIDA</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="aRedirectLink" data-url="noticias">Noticias</a></li>
                        <li><a class="aRedirectLink" data-url="servicios">Servicios</a></li>
                        <li><a class="aRedirectLink" data-url="reencauchadora">Reencauchadora</a></li>
                        <li><a class="aRedirectLink" data-url="contactos">Contactos</a></li>
                        <li class="ml-4 liOpcionUser" id="opcMenuLogin">
                            <button id="btnLogin" class="btn btn-outline-warning" style="margin-top: 8px; border-radius:5px !important;">                            
							    <i class="ion-person"></i> <span>USUARIOS</span>
                            </button>
                        </li>
                        <li class="ml-4 liOpcionUser">
                            <div id="opcMenuUser" class="dropdown dropdownUser display-none" style="padding: 8px 0px;">
                                <button id="btnLogin" class="btn btn-success color-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <i class="ion-person"></i> <span id="lblNombreUser">-</span>
                                </button>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#" id="btnAdminPage"><i class="fa fa-power-off" aria-hidden="true"></i> Admin</a>
                                    <br>
                                    <a class="dropdown-item" href="#" id="btnSalir">Salir <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- /main nav -->
        </div>
    </header>
    <!-- /HEADER -->


    <!-- CONTENIDO -->
    <?= $content_for_layout ?>


    <!-- FOOTER -->
    <section id="call-to-action" class="py-3"></section>

    <section class="py-5">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="divEnlaces">
                        <div>
                            <a href="https://www.cartagena.gov.co/"><img src="<?= load_img_url("images/enlaces/alcaldia.png"); ?>" alt="ALCALDIA DE CARTAGENA"></a>
                        </div>
                        <div>
                            <a href="https://www.mintransporte.gov.co/"><img src="<?= load_img_url("images/enlaces/mintrasporte.png"); ?>" alt="MINISTERIO DE TRANSPORTE"></a>
                        </div>
                        <div>
                            <a href="https://fcm.org.co/simit/#/home-public"><img src="<?= load_img_url("images/enlaces/simit.png"); ?>" alt="SIMIT"></a>
                        </div>
                        <div>
                            <a href="https://www.runt.com.co/"><img src="<?= load_img_url("images/enlaces/runt.png"); ?>" alt="RUNT"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer" class="pt-4">
        <div class="container">
            <div class="col-md-8">
                <p class="copyright pt-2 mt-1">Copyright: <span><script>document.write(new Date().getFullYear())</script></span> Reservados todos los derechos de Autor - Diseñado por <b><a href="http://www.lmsoluciones.co/" target="_blank">KEVIN HENRIQUEZ</a></b></p>
            </div>
            <div class="col-md-4">
                <!-- Social Media -->
                <ul class="social text-center">
                    <li>
                        <a href="http://www.facebook.com/profile.php?id=100003509801345" class="Facebook" target="_blank">
                            <i class="ion-social-facebook"></i> <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="http://twitter.com/cootransurb" class="Twitter" target="_blank">
                            <i class="ion-social-twitter"></i> <span>Twitter</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->

    <?= load_scripts(); ?>
    <?= $js ?>

</body>
</html>