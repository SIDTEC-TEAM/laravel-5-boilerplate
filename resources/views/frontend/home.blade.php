<!DOCTYPE html>
<html lang="en">
    <head>
        <title>iAssist</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- @todo: fill with your company info or remove -->
        <meta name="description" content="">
        <meta name="author" content="Themelize.me">

        <!-- Bootstrap v4.0.0 CSS via CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

        <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->

        <!-- Theme style -->
        <link href="assets/css/theme-style.min.css" rel="stylesheet">

        <!--Your custom colour override-->
        <link href="#" id="colour-scheme" rel="stylesheet">

        <!-- Your custom override -->
        <link href="assets/css/custom-style.css" rel="stylesheet">



        <!-- Optional: ICON SETS -->
        <!-- Iconset: Font Awesome 5.0.4 via CDN -->
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
        <!-- Iconset: flag icons - http://lipis.github.io/flag-icon-css/ -->
        <link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
        <!-- Iconset: ionicons - http://ionicons.com/ -->
        <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
        <!-- Iconset: Linearicons - https://linearicons.com/free -->
        <link href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel="stylesheet">


        <!-- Le fav and touch icons - @todo: fill with your icons or remove, try https://realfavicongenerator.net -->
        <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
        <link rel="manifest" href="assets/favicons/manifest.json">
        <link rel="shortcut icon" href="assets/favicon.ico">
        <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">


        <!-- Google fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

        <!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js"></script>
    </head>

    <!-- ======== @Region: body ======== -->
    <body class="page page-onepager header-ontop header-compact-sticky page-index-onepager-image-full-height navbar-layout-default">

        <!-- @plugin: page loading indicator, delete to remove loader -->
        <div class="page-loader" data-toggle="page-loader"></div>

        <a href="#content" id="top" class="sr-only">Skip to content</a> 

        <!-- ======== @Region: #highlighted ======== -->
        <div id="highlighted">
            <!-- Image Banner: Use the the data-bg-img functionality to create a simple image banner Use spacer classes to make the banner larger with padding, allows for easy responsive changes too see: elements-ctas.htm To make the banner full height/screen add the attributes: data-toggle="full-height" data-offset="#header" -->
            <div class="bg-white overlay overlay-primary overlay-op-1 text-center px-3 py-5 py-lg-10 flex-valign" data-bg-img="assets/img/backgrounds/mina.jpg" data-css='{"background-position": "center bottom","background-attachment": "fixed"}' data-toggle="full-height">
                <h2 class="display-4 text-white" data-animate="fadeIn" data-animate-delay="0.2">
                    <span class="font-weight-bold">iAssist!</span>
                </h2>
                <h3 class="text-grey font-weight-normal" data-animate="fadeIn" data-animate-delay="0.35">
                    Information at the reach of your fingertips! 
                </h3>
                <hr class="hr-inverse hr-lg w-20 mx-auto my-4" data-animate="fadeIn" data-animate-delay="0.45" />
                <!--                <div> 
                                    <a href="#about" class="btn btn-dark btn-rounded btn-lg py-lg-3 px-lg-5" data-toggle="scroll-link" data-animate="fadeIn" data-animate-delay="0.55">Find Out More</a>
                                </div>-->
            </div>
        </div>

        <!-- ======== @Region: #header ======== -->
        <div id="header">

            <div data-toggle="sticky">

                <!--Header search region - hidden by default -->
                <!--                <div class="header-search collapse" id="search">
                                    <form class="search-form container">
                                        <input type="text" name="search" class="form-control search" value="" placeholder="Search">
                                        <button type="button" class="btn btn-link"><span class="sr-only">Search </span><i class="fa fa-search fa-flip-horizontal search-icon"></i></button>
                                        <button type="button" class="btn btn-link close-btn" data-toggle="search-form-close"><span class="sr-only">Close </span><i class="fa fa-times search-icon"></i></button>
                                    </form>
                                </div>-->

                <!--Header & Branding region-->
                <div class="header header-transparent header-dark border-dark border-op-2 sticky-header-dark sticky-bg-dark sticky-bg-op-8">
                    <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
                    <div class="header-inner container">
                        <!--branding/logo -->
                        <div class="header-brand">
                            <a class="header-brand-text" href="{!!URL::to('/')!!}" title="Home">
                                <h1 class="h2">
                                    <!--<span class="header-brand-text-alt">App</span>Strap<span class="header-brand-text-alt">.</span>-->
                                    <img src="assets/img/logo/logo.png">
                                </h1>
                            </a>
                            <!--                            <div class="header-divider d-none d-lg-block"></div>
                                                        <div class="header-slogan d-none d-lg-block">Bootstrap 4 Theme</div>-->
                        </div>
                        <!-- other header content -->
                        <div class="header-block order-lg-12">

                            <!--Search trigger -->
                            <!--<a href="#search" class="btn btn-icon btn-link text-white sticky-text-light header-btn float-right order-11" data-toggle="search-form" data-target=".header-search"><i class="fa fa-search fa-flip-horizontal search-icon"></i></a>-->

                            <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="jpanel-menu" = jPanel Menu - data-toggle="overlay" = Overlay Menu -->
                            <a href="#top" class="btn btn-link btn-icon text-white sticky-text-light header-btn float-right d-lg-none" data-toggle="collapse" data-target=".navbar-main" data-direction="right"> <i class="fa fa-bars"></i> </a>
                        </div>

                        <div class="navbar navbar-expand-md navbar-expand-collapse navbar-static-top">
                            <!--everything within this div is collapsed on mobile-->
                            <div class="navbar-main collapse">
                                <!--main navigation-->
                                <ul class="nav navbar-nav navbar-nav-onepager">
                                    <li class="nav-item">
                                        <a href="#top" data-toggle="scroll-link" class="nav-link"> <i class="fa fa-home nav-link-icon"></i> <span class="d-none">Home</span> </a>
                                    </li>

                                    <li class="nav-item"> <a href="#about" data-toggle="scroll-link" class="nav-link"> Nosotros </a> </li>
                                    <li class="nav-item"> <a href="#features" data-toggle="scroll-link" class="nav-link"> Producto </a> </li>
<!--                                    <li class="nav-item"> <a href="#pricing" data-toggle="scroll-link" class="nav-link"> Pricing </a> </li>
                                    <li class="nav-item"> <a href="#projects" data-toggle="scroll-link" class="nav-link"> Projects </a> </li>-->
                                    <li class="nav-item"> <a href="#contact" data-toggle="scroll-link" class="nav-link"> Contacto </a> </li>
                                </ul>
                            </div>
                            <!--/.navbar-collapse -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======== @Region: #content ======== -->
        <div id="content" class="p-0">
            <!-- About -->
            <div id="about" class="py-3 pt-lg-6 pb-lg-0">
                <div class="container">
                    <div data-animate="fadeIn" data-animate-duration="0.8">
                        <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                        <h2 class="text-center text-uppercase font-weight-bold my-0">
                            We are <span class="text-shadow">AppStrap</span>
                        </h2>
                        <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
                            This is how we roll
                        </h5>
                        <hr class="mb-5 w-50 mx-auto" />
                    </div>
                    <div class="row">
                        <div class="col-md-6" data-animate="fadeIn" data-animate-delay="0.4" data-animate-offset="100%">
                            <p class="lead">Antehabeo illum refoveo sed. Abluo adipiscing autem camur cogo defui esca qui refero validus.</p>
                            <p>Appellatio commoveo et iaceo quidne te tincidunt valetudo. Bene ex vicis. Brevitas probo quibus. Exerci iriure metuo nibh nobis occuro suscipere uxor.</p>
                            <p class="mb-0">Amet camur jus laoreet macto mauris sit utrum. Eros esse pertineo premo sed sit tincidunt utinam utrum vel. Abico accumsan capto commodo consequat et macto oppeto saluto.</p>
                        </div>
                        <div class="col-md-6" data-animate="fadeIn" data-animate-delay="0.8" data-animate-offset="100%">
                            <!-- List Items -->
                            <ul class="fa-ul list-unstyled mt-4 mt-md-0">
                                <li class="mb-4">
                                    <i class="fa-li fa fa-check text-primary"></i> 
                                    <h4 class="mb-1">
                                        Enim Paulatim Tamen Vindico
                                    </h4>
                                    Abbas odio pertineo quis suscipit tincidunt ymo.
                                </li>
                                <li class="mb-3">
                                    <i class="fa-li fa fa-check text-primary"></i> 
                                    <h4 class="mb-1">
                                        Esca Metuo Sino Te
                                    </h4>
                                    Iustum jumentum os paulatim veniam. Humo quibus rusticus suscipere.
                                </li>
                                <li>
                                    <i class="fa-li fa fa-check text-primary"></i> 
                                    <h4 class="mb-1">
                                        Erat Iusto Quibus Vereor
                                    </h4>
                                    At duis illum luptatum nobis paulatim.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Why AppStrap -->
                <div class="bg-dark mt-3 mt-lg-6">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-5 divider-diagonal divider-diagonal-r divider-dark" data-bg-img="assets/img/backgrounds/dashboard.jpg" data-animate="fadeIn" data-animate-delay="0.1"></div>
                            <div class="col-lg-6 py-6" data-animate="fadeIn" data-animate-delay="0.3">
                                <hr class="hr-lg mt-0 mb-2 w-10 ml-0 hr-primary" />
                                <h2 class="display-4 text-slab text-white text-uppercase mt-0 mb-5">
                                    ¿Por que <span class="text-primary font-weight-bold">iAssist?</span>
                                </h2>
                                <div class="row mb-3">
                                    <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
                                    </div>
                                    <div class="col-10 col-md-11 text-grey">
                                        <h4 class="font-weight-bold text-white text-uppercase">
                                            Optimizado
                                        </h4>
                                        <p style="font-size: 14px;">
                                            Sistema esta optimizado para el uso en actividades industriales como construcción de infraestructura, actividades en minería y la industria forestal. 
                                            Maneja y configura turnos, faenas, trabajadores, etc. Solución a un problema transversal en minería y construcción basado en necesidades de empresas 
                                            líderes en ambas industrias.
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
                                    </div>
                                    <div class="col-10 col-md-11 text-grey">
                                        <h4 class="font-weight-bold text-white text-uppercase">
                                            Multiplataforma / Multifaena
                                        </h4>
                                        <p style="font-size: 14px;">
                                            Nuestro sistema funciona en diferentes plataformas y dispositivos; además permite controlar faenas de largo plazo, en donde los dispositivos físicos 
                                            pueden ser la mejor solución, así como proyectos spots, en donde el uso de un equipo móvil resuelve mejor la necesidad.
                                        </p>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
                                    </div>
                                    <div class="col-10 col-md-11 text-grey">
                                        <h4 class="font-weight-bold text-white text-uppercase">
                                            Visibilidad
                                        </h4>
                                        <p style="font-size: 14px;">
                                            Tome decisiones en forma rápida y confiable con los datos del personal disponible en faena, provee información confiable al mandante y marca una diferencia
                                            aumentando la eficiencia de tus recursos. Múltiples dashboards y reportes disponibles.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-0" />
                <div class="bg-light py-3 py-lg-6 overlay overlay-white overlay-op-9">
                    <div class="container">
                        <h3>
                            Skills Set
                        </h3>
                        <hr class="hr-lg m-0 hr-primary w-10" />
                        <hr class="mt-0 mb-4 hr-blank" />
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="row align-items-center mb-4 no-gutters">
                                    <div class="col-md-2 text-md-center"><i class="fa fa-recycle fa-2x text-primary-dark"></i></div>
                                    <div class="col-md-10">
                                        <h5 class="mt-0">
                                            Dinámico
                                        </h5>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4 no-gutters">
                                    <div class="col-md-2 text-md-center"><i class="fa fa-puzzle-piece fa-2x text-primary-dark"></i></div>
                                    <div class="col-md-10">
                                        <h5 class="mt-0">
                                            Fácil de usar
                                        </h5>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4 no-gutters">
                                    <div class="col-md-2 text-md-center"><i class="fa fa-tasks fa-2x text-primary-dark"></i></div>
                                    <div class="col-md-10">
                                        <h5 class="mt-0">
                                            Multifaena
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row align-items-center mb-4 no-gutters">
                                    <div class="col-md-2 text-md-center"><i class="fa fa-cloud fa-2x text-primary-dark"></i></div>
                                    <div class="col-md-10">
                                        <h5 class="mt-0">
                                            En la nube o local
                                        </h5>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4 no-gutters">
                                    <div class="col-md-2 text-md-center"><i class="fa fa-wifi fa-2x text-primary-dark"></i></div>
                                    <div class="col-md-10">
                                        <h5 class="mt-0">
                                            Conectividad
                                        </h5>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4 no-gutters">
                                    <div class="col-md-2 text-md-center"><i class="fa fa-lock fa-2x text-primary-dark"></i></div>
                                    <div class="col-md-10">
                                        <h5 class="mt-0">
                                            Seguridad
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row align-items-center mb-4 no-gutters">
                                    <div class="col-md-2 text-md-center"><i class="fa fa-file-excel fa-2x text-primary-dark"></i></div>
                                    <div class="col-md-10">
                                        <h5 class="mt-0">
                                            Reportabilidad en tiempo real.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4 no-gutters">
                                    <div class="col-md-2 text-md-center"><i class="fa fa-certificate fa-2x text-primary-dark"></i></div>
                                    <div class="col-md-10">
                                        <h5 class="mt-0">
                                            Aprobado por la inspección del trabajo.
                                        </h5>
                                    </div>
                                </div>
                                <div class="row align-items-center mb-4 no-gutters">
                                    <div class="col-md-2 text-md-center"><i class="fa fa-users fa-2x text-primary-dark"></i></div>
                                    <div class="col-md-10">
                                        <h5 class="mt-0">
                                            Perfiles de acceso
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hiring MDR block -->
            <!--            <div class="bg-light" style="padding: 10px;">
                            <div class="container">
                                
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <blockquote class="blockquote blockquote-bubble text-right">
                                            <p class="blockquote-bubble-content"><i class="fa fa-quote-left"></i> Doing things at the last minute are much more expensive that just before the last minute <i class="fa fa-quote-right"></i></p>
                                            <footer class="blockquote-footer">
                                                <cite title="Source Title">Randy Paush</cite>
                                                <img src="assets/img/people/RandyPausch.jpg" alt="Randy Paush" class="img-circle ml-1" style="border-radius: 30px;">
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                                
                            </div>
                        </div>-->
            <!-- Features -->
            <div id="features" class="container py-4 py-lg-6">
                <div data-animate="fadeIn" data-animate-duration="0.6">
                    <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                    <h2 class="text-center text-uppercase font-weight-bold my-0">
                        Producto
                    </h2>
                    <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
                        Grandes caracteristícas, excelente servicio!
                    </h5>
                    <hr class="mb-5 w-50 mx-auto" />
                </div>
                <div class="row text-center">
                    <div class="col-md-3 text-left">
                        <div class="row">
                            <!-- List Items -->
                            <ul class="fa-ul list-lg">
                                <li class="pt-0 pb-4">
                                    <i class="fa-li fa fa-check text-primary"></i> 
                                    <h4>
                                        Energia:
                                    </h4>
                                    Mas de 3 horas Autonomía del sistema móvil.
                                </li>
                                <li class="pt-0 pb-4">
                                    <i class="fa-li fa fa-check text-primary"></i> 
                                    <h4>
                                        Conectividad:
                                    </h4>
                                    Modem 3G interno (celular)/ Bluethooth (segun modelo).
                                </li>
                                <li class="pt-0 pb-4">
                                    <i class="fa-li fa fa-check text-primary"></i> 
                                    <h4>
                                        Orientación:
                                    </h4>
                                    Faenas industriales y control en terreno.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <img src="assets/img/backgrounds/virdi_explosion.png" style="width: 55%;">
                    </div>

                    <div class="col-md-3 text-left">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li class="pt-0 pb-4">
                                <i class="fa-li fa fa-check text-primary"></i> 
                                <h4>
                                    Movilidad:
                                </h4>
                                Adaptabilidad permite medición en buses, ingreso áreas de trabajo, etc.
                            </li>
                            <li class="pt-0 pb-4">
                                <i class="fa-li fa fa-check text-primary"></i> 
                                <h4>
                                    Facil uso:
                                </h4>
                                Interruptor de encendido y apagado. 
                            </li>
                            <li class="pt-0 pb-4">
                                <i class="fa-li fa fa-check text-primary"></i> 
                                <h4>
                                    Amigable:
                                </h4>
                                Luces Conectividad y energia. 
                            </li>
                        </ul>
                    </div>
                    
                    <hr class="mb-5 w-100 mx-auto hr-blank" />

                    <div class="col-md-4">
                        <img src="assets/img/backgrounds/negro_5000.jpg" style="width: 50%;">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/backgrounds/azul_2200.jpg" style="width: 30%;">
                    </div>
                    <div class="col-md-4">
                        <img src="assets/img/backgrounds/azul_5000.jpg" style="width: 50%;">
                    </div>
                    
                    <hr class="mb-5 w-100 mx-auto hr-blank" />

                    <div class="col-md-4 text-left">
                        <div class="row align-items-center mb-4 no-gutters">
                            <div class="col-md-2 text-md-center"><img src="assets/img/icons/fingerprint.png"></div>
                            <div class="col-md-10">
                                <h5 class="mt-0">
                                    Lector biométrico portable/fijo.
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center mb-4 no-gutters">
                            <div class="col-md-2 text-md-center"><img src="assets/img/icons/credit-card.png"></div>
                            <div class="col-md-10">
                                <h5 class="mt-0">
                                    Lectura de tarjeta RFID. credit-card
                                </h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-left">
                        <div class="row align-items-center mb-4 no-gutters">
                            <div class="col-md-2 text-md-center"><img src="assets/img/icons/drop.png"></div>
                            <div class="col-md-10">
                                <h5 class="mt-0">
                                    Estructura (case) IP65.
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center mb-4 no-gutters">
                            <div class="col-md-2 text-md-center"><img src="assets/img/icons/folder.png"></div>
                            <div class="col-md-10">
                                <h5 class="mt-0">
                                    Almacenamiento interno de 61.000 registros.  
                                </h5>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 text-left">
                        <div class="row align-items-center mb-4 no-gutters">
                            <div class="col-md-2 text-md-center"><img src="assets/img/icons/vehicle-speedometer.png"></div>
                            <div class="col-md-10">
                                <h5 class="mt-0">
                                    Reconocimiento huella < 0.5 seg. 
                                </h5>
                            </div>
                        </div>
                        <div class="row align-items-center mb-4 no-gutters">
                            <div class="col-md-2 text-md-center"><img src="assets/img/icons/scanning_fingerprint.png"></div>
                            <div class="col-md-10">
                                <h5 class="mt-0">
                                    Detección de huellas falsas. 
                                </h5>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="mb-5 w-100 mx-auto hr-blank" />

                    <div class="col-lg-3 py-2" data-animate="fadeIn" data-animate-delay="0.1">
                        <i class="fa fa-tachometer-alt icon-5x text-primary"></i> 
                        <h4 class="mt-2">
                            Alta Capacidad
                        </h4>
                        <p>Nuestros equipos pueden almacenar hasta 20,000 usuarios.</p>
                    </div>
                    <div class="col-lg-3 py-2" data-animate="fadeIn" data-animate-delay="0.2">
                        <i class="fa fa-wrench icon-5x text-primary"></i> 
                        <h4 class="mt-2">
                            Flexible
                        </h4>
                        <p>Equipos fijos o móviles. Especialmente diseñado para contratos de largo plazo y spot.</p>
                    </div>
                    <div class="col-lg-3 py-2" data-animate="fadeIn" data-animate-delay="0.3">
                        <i class="fa fa-rocket icon-5x text-primary"></i> 
                        <h4 class="mt-2">
                            Focalizado
                        </h4>
                        <p>Orientado a faenas industriales y control en terreno.</p>
                    </div>
                    <div class="col-lg-3 py-2" data-animate="fadeIn" data-animate-delay="0.4">
                        <i class="fa fa-chart-line icon-5x text-primary"></i> 
                        <h4 class="mt-2">
                            99.9% Uptime
                        </h4>
                        <p>Servidores en AWS por lo cual aseguramos disponibilidad de nuestra solución.</p>
                    </div>
                    <!--                    <div class="col-lg-4 py-2" data-animate="fadeIn" data-animate-delay="0.5">
                                            <i class="fa fa-users icon-5x text-primary"></i> 
                                            <h4 class="mt-2">
                                                Multiuser
                                            </h4>
                                            <p>Amet damnum iaceo in lobortis luptatum refero sagaciter.</p>
                                        </div>
                                        <div class="col-lg-4 py-2" data-animate="fadeIn" data-animate-delay="0.6">
                                            <i class="fa fa-plug icon-5x text-primary"></i> 
                                            <h4 class="mt-2">
                                                Plug n play
                                            </h4>
                                            <p>Accumsan acsi aliquip facilisi inhibeo quidem. Damnum eligo ludus pala pecus.</p>
                                        </div>-->
                </div>
            </div>
            
            
            <!--Pricing Table-->
            <!--            <div id="pricing" class="bg-light py-3 py-lg-6">
                            <div class="container">
                                <div data-animate="fadeIn" data-animate-duration="0.6">
                                    <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                                    <h2 class="text-center text-uppercase font-weight-bold my-0">
                                        Pricing Plans
                                    </h2>
                                    <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
                                        Competitive pricing plans to suit your needs
                                    </h5>
                                    <hr class="mb-5 w-50 mx-auto" />
                                </div>
                                <div class="row pricing-stack">
                                    <div class="col-md-3" data-animate="fadeIn" data-animate-delay="0.2">
                                        <div class="card bg-shadow text-center rounded">
                                            <h3 class="card-title py-3 text-shadow">
                                                Starter
                                            </h3>
                                            <p class="price-banner border-grey card-body-overlap"> <span class="text-fancy price-digits">Free!</span>
                                            </p>
                                            <div class="card-body">
                                                <ul class="list-unstyled list-border-dots">
                                                    <li>3 User Accounts</li>
                                                    <li>3 Private Projects</li>
                                                    <li>Umlimited Public Projects</li>
                                                    <li>5GB of space</li>
                                                </ul>
                                                <a href="#" class="btn btn-primary btn-block btn-rounded">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" data-animate="fadeIn" data-animate-delay="0.3">
                                        <div class="card bg-white bg-shadow text-center card-outline-primary">
                                            <h3 class="card-title py-3 text-shadow">
                                                <span class="em">Pro</span> <span class="text-fancy">Plus</span>
                                            </h3>
                                            <p class="price-banner bg-primary text-white border-primary card-body-overlap">
                                                <span class="price-currency">$</span> 
                                                <span class="price-digits">49<span>.95</span></span>
                                                <span class="price-extra">/MO</span>
            
                                            </p>
                                            <div class="card-body">
                                                <ul class="list-unstyled list-border-dots">
                                                    <li>50 User Accounts</li>
                                                    <li>50 Private Projects</li>
                                                    <li>Umlimited Public Projects</li>
                                                    <li>Unlimited space</li>
                                                </ul>
                                                <a href="#" class="btn btn-primary btn-block btn-rounded mt-4">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" data-animate="fadeIn" data-animate-delay="0.4">
                                        <div class="card bg-white bg-shadow text-center card-outline-primary">
                                            <div class="card-ribbon card-ribbon-top card-ribbon-left bg-primary text-white">Popular</div>
                                            <h3 class="card-title py-3 text-shadow">
                                                <span class="em">Biz</span> <span class="text-fancy">Plus</span>
                                            </h3>
                                            <p class="price-banner bg-primary text-white border-primary card-body-overlap">
                                                <span class="price-currency">$</span> 
                                                <span class="price-digits">199<span>.95</span></span>
                                                <span class="price-term">/MO</span>
            
                                            </p>
                                            <div class="card-body">
                                                <ul class="list-unstyled list-border-dots">
                                                    <li>Umlimited User Accounts</li>
                                                    <li>Umlimited Private Projects</li>
                                                    <li>Umlimited Public Projects</li>
                                                    <li>Unlimited space</li>
                                                </ul>
                                                <a href="#" class="btn btn-primary btn-block btn-rounded mt-4">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3" data-animate="fadeIn" data-animate-delay="0.5">
                                        <div class="card bg-shadow text-center">
                                            <div class="card-ribbon card-ribbon-top card-ribbon-right bg-light text-muted">Best Buy</div>
                                            <h3 class="card-title py-3 text-shadow">
                                                Starter <span class="text-fancy">Plus</span>
                                            </h3>
                                            <p class="price-banner border-grey card-body-overlap">
                                                <span class="price-currency">$</span> 
                                                <span class="price-digits">19<span>.95</span></span>
                                                <span class="price-term">/MO</span>
            
                                            </p>
                                            <div class="card-body">
                                                <ul class="list-unstyled list-border-dots">
                                                    <li>10 User Accounts</li>
                                                    <li>10 Private Projects</li>
                                                    <li>Umlimited Public Projects</li>
                                                    <li>15GB of space</li>
                                                </ul>
                                                <a href="#" class="btn btn-primary btn-block btn-rounded">Sign Up</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <blockquote class="blockquote blockquote-bubble text-right">
                                            <p class="blockquote-bubble-content"><i class="fa fa-quote-left"></i> Doing things at the last minute are much more expensive that just before the last minute <i class="fa fa-quote-right"></i></p>
                                            <footer class="blockquote-footer">
                                                <cite title="Source Title">Randy Paush</cite>
                                                <img src="assets/img/people/RandyPausch.jpg" alt="Randy Paush" class="img-circle ml-1" style="border-radius: 30px;">
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>-->
            <!-- Video background MDR -->
            <!--<div class="p-3 p-lg-5 bg-light text-center" data-bg-video="assets/videos/bubbles.mp4" data-animate="fadeIn">
                <div class="container">
                    <h2 class="text-white display-4 text-shadow">
                        Add some <span class="font-italic font-weight-bold">fizz</span> to your next website!
                    </h2>
                    <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-xlg btn-rounded btn-primary mt-4">Get AppStrap!</a>

                </div>
            </div>-->
            <!--Projects carousel -->
            <!--            <div id="projects" class="container p-3 py-lg-6" data-toggle="magnific-popup" data-magnific-popup-settings='{"delegate": "a.project", "gallery":{"enabled":true}}'>
                            <div data-animate="fadeIn" data-animate-duration="0.6">
                                <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                                <h2 class="text-center text-uppercase font-weight-bold my-0">
                                    Latest Projects
                                </h2>
                                <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
                                    See what we've been working on!
                                </h5>
                                <hr class="mb-5 w-50 mx-auto" />
                            </div>
                            <div class="mt-4 owl-nav-over owl-nav-over-lg owl-dots-center" data-toggle="owl-carousel" data-owl-carousel-settings='{"responsive":{"0":{"items":1, "nav":false, "dots":true}, "600":{"items":2, "dots":true}, "940":{"items":3, "nav":true, "dots":true}}, "margin":1, "nav":true, "dots":false}'>
            
                                Project item 1
                                <a href="assets/img/projects/project-1.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-1-sm.jpg" alt="Project 1" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            Ad Feugiat Incassum Vero Volutpat
                                        </h5>
                                    </span>
                                </a>
            
                                Project item 2
                                <a href="assets/img/projects/project-2.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-2-sm.jpg" alt="Project 2" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            Distineo Jugis Ludus Natu Tum
                                        </h5>
                                    </span>
                                </a>
            
                                Project item 3
                                <a href="assets/img/projects/project-3.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-3-sm.jpg" alt="Project 3" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            Appellatio Esse Exputo Ideo Verto
                                        </h5>
                                    </span>
                                </a>
            
                                Project item 4
                                <a href="assets/img/projects/project-4.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-4-sm.jpg" alt="Project 4" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            Distineo Hendrerit Nibh Nulla Ratis
                                        </h5>
                                    </span>
                                </a>
            
                                Project item 5
                                <a href="assets/img/projects/project-5.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-5-sm.jpg" alt="Project 5" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            Dignissim Exputo Os Quis Tamen
                                        </h5>
                                    </span>
                                </a>
            
                                Project item 6
                                <a href="assets/img/projects/project-6.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-6-sm.jpg" alt="Project 6" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            At Enim Valde Veniam Verto
                                        </h5>
                                    </span>
                                </a>
            
                                Project item 7
                                <a href="assets/img/projects/project-7.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-7-sm.jpg" alt="Project 7" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            Antehabeo Occuro Qui Valde Vulputate
                                        </h5>
                                    </span>
                                </a>
            
                                Project item 8
                                <a href="assets/img/projects/project-8.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-8-sm.jpg" alt="Project 8" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            Brevitas Importunus Lobortis Pecus Proprius
                                        </h5>
                                    </span>
                                </a>
            
                                Project item 9
                                <a href="assets/img/projects/project-9.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-9-sm.jpg" alt="Project 9" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            Antehabeo Appellatio Comis Si Valde
                                        </h5>
                                    </span>
                                </a>
            
                                Project item 10
                                <a href="assets/img/projects/project-10.jpg" class="project overlay-hover">
                                    <img src="assets/img/projects/project-10-sm.jpg" alt="Project 10" class="img-fluid" />
                                    <span class="overlay-hover-content">
                                        <i class="fa fa-arrow-circle-right icon-3x text-white"></i> 
                                        <h5 class="mt-4">
                                            Capto Erat Huic Neo Tamen
                                        </h5>
                                    </span>
                                </a>
                            </div>
                        </div>
                        Customer testimonial
                        <div id="testimonials" class="p-3 py-lg-6 bg-dark">
                            <div class="container">
                                <div data-animate="fadeIn" data-animate-duration="0.6">
                                    <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                                    <h2 class="text-white text-center text-uppercase font-weight-bold my-0">
                                        Highly Recommended
                                    </h2>
                                    <h5 class="text-center font-weight-light mt-2 mb-0 text-grey">
                                        99% of our customers recommend us!
                                    </h5>
                                    <hr class="mb-5 w-50 mx-auto" />
                                </div>
                                <div class="row">
                                    <div class="col-md-4 d-md-flex">
                                        <blockquote class="blockquote-bubble text-center" data-animate="fadeIn" data-animate-delay="0.1">
                                            <p class="blockquote-bubble-content bg-white">"It's totally awesome, we're could imagine life without it!"</p>
                                            <small class="text-grey">
                                                <img src="assets/img/team/jimi.jpg" alt="Jimi Bloggs" class="rounded-circle mr-2" />
                                                Jimi Bloggs <span class="text-primary font-weight-bold">/</span> <a href="#">@mrjimi</a>
                                            </small>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-4 d-md-flex">
                                        <blockquote class="blockquote-bubble text-center" data-animate="fadeIn" data-animate-delay="0.2">
                                            <p class="blockquote-bubble-content bg-white text-center">"10 out of 10, highly recommended!"</p>
                                            <small class="text-grey">
                                                <img src="assets/img/team/steve.jpg" alt="Jimi Bloggs" class="rounded-circle mr-2" />
                                                Steve Bloggs <span class="text-primary font-weight-bold">/</span> <a href="#">Founder of Apple</a>
                                            </small>
                                        </blockquote>
                                    </div>
                                    <div class="col-md-4 d-md-flex">
                                        <blockquote class="blockquote-bubble text-center" data-animate="fadeIn" data-animate-delay="0.3">
                                            <p class="blockquote-bubble-content bg-white text-center">"Our productivity & sales are up! Couldn't be happier with this product!"</p>
                                            <small class="text-grey">
                                                <img src="assets/img/team/adele.jpg" alt="Adele Bloggs" class="rounded-circle mr-2" />
                                                Adele Bloggs <span class="text-primary font-weight-bold">/</span> <a href="#">@iamadele</a>
                                            </small>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>-->
            <!-- Contact form -->
            <div id="contact">
                <div class="container p-4 py-lg-5">
                    <div data-animate="fadeIn" data-animate-duration="0.6">
                        <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                        <h2 class="text-center text-uppercase font-weight-bold my-0">
                            Contactanos
                        </h2>
                        <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
                            Hablanos sobre tu proyecto
                        </h5>
                        <hr class="mb-5 w-50 mx-auto" />
                    </div>
                    <div class="row" data-animate="fadeIn" data-animate-delay="0.1">
                        <div class="col-md-12 mb-5">
                            <div class="google-map">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3328.748751030863!2d-70.57944358528468!3d-33.45585180517472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cfca7e89b87d%3A0x616d52dcaa0f8833!2zU2FuIEpvcmdlIDE2Mywgw5F1w7FvYSwgUmVnacOzbiBNZXRyb3BvbGl0YW5h!5e0!3m2!1ses-419!2scl!4v1523907007186" width="600" height="450" frameborder="0" style="border:0"></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form id="contact-form" action="#" role="form">
                                <div class="form-group" data-animate="fadeInDown" data-animate-delay="0.2">
                                    <label class="sr-only" for="contact-name">Nombre</label>
                                    <input type="text" class="form-control" id="contact-name" placeholder="Nombre">
                                </div>
                                <div class="form-group" data-animate="fadeInDown" data-animate-delay="0.3">
                                    <label class="sr-only" for="contact-email">Correo</label>
                                    <input type="email" class="form-control" id="contact-email" placeholder="Correo">
                                </div>
                                <div class="form-group" data-animate="fadeInDown" data-animate-delay="0.4">
                                    <label class="sr-only" for="contact-message">Mensaje</label>
                                    <textarea rows="5" class="form-control" id="contact-message" placeholder="Mensaje"></textarea>
                                </div>
                                <input type="button" class="btn btn-outline-primary btn-lg" value="Enviar Correo">
                            </form>
                        </div>
                        <div class="col-md-5 offset-md-1 mt-4 mt-md-0" data-animate="fadeIn" data-animate-delay="0.4">
                            <h4 class="mb-1 font-weight-bold">
                                iAssist Inc.
                            </h4>
                            <p class="mb-1">
                                <abbr title="Address"><i class="fa fa-home pr-2"></i></abbr>
                                San Jorge 163, Ñuñoa, Región Metropolitana.
                            </p>
                            <p class="mb-1">
                                <abbr title="Email"><i class="fa fa-envelope pr-2"></i></abbr>
                                info@iassist.cl
                            </p>
<!--                            <p class="mb-0">
                                <abbr title="Phone"><i class="fa fa-phone pr-2"></i></abbr>

                            </p>-->
                            <br>
                            <blockquote class="blockquote blockquote-bubble text-right">
                                <p class="blockquote-bubble-content"><i class="fa fa-quote-left"></i> Doing things at the last minute are much more expensive that just before the last minute <i class="fa fa-quote-right"></i></p>
                                <footer class="blockquote-footer">
                                    <cite title="Source Title">Randy Paush</cite>
                                    <img src="assets/img/people/RandyPausch.jpg" alt="Randy Paush" class="img-circle ml-1" style="border-radius: 30px;">
                                </footer>
                            </blockquote>
                            <!--<div class="bg-primary bg-shadow border-primary-darkend text-white p-4 pr-lg-6 mt-5 pos-relative">
                                <i class="fa fa-phone-square icon-10x icon-rotate-25 icon-bg icon-bg-r-ol icon-bg-b-ol op-3 text-white"></i> 
                                <h4 class="my-0 font-weight-bold text-uppercase">
                                    Request a callback!
                                </h4>
                                <hr class="hr-lg my-2 ml-0 hr-white w-20" />
                                <form id="callback-form" action="#" role="form">
                                    <div class="input-group">
                                        <label class="sr-only" for="callback-number">Your Number</label>
                                        <input type="tel" class="form-control" id="callback-number" placeholder="Your Number">
                                        <span class="input-group-append">
                                            <button class="btn btn-dark" type="button">Get Callback</button>
                                        </span>
                                    </div>
                                </form>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ======== @Region: #footer ======== -->
        <footer id="footer" class="py-3">
            <div class="container">
                <div class="row">
                    <!--@todo: replace with company copyright details-->
                    <div class="col-md-6">
                        <p class="mb-0 text-sm">Copyright <?php echo date('Y'); ?> &copy; <a href="{!!URL::to('/')!!}">iAssist - Information at the reach of your fingertips</a></p>
                        <ul class="list-inline footer-links mb-0 text-sm">
                            <li class="list-inline-item">All rights reserved.</li>
                            <!--                            <li class="list-inline-item"><a href="#">Privacy</a></li>
                                                        <li class="list-inline-item"><a href="#">Contact Us</a></li>-->
                        </ul>
                    </div>
                    <div class="col-md-6 flex-valign">
                        <div class="float-md-right ml-md-auto">
                            <!--@todo: replace with company social media details-->
<!--                            <a href="#" class="btn btn-sm btn-icon btn-dark btn-rounded"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-icon btn-dark btn-rounded"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="btn btn-sm btn-icon btn-dark btn-rounded"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#" class="btn btn-sm btn-icon btn-dark btn-rounded"><i class="fab fa-google-plus-g"></i></a>-->
                            <a href="{!!URL::to('/')!!}" class="pull-left"><img src="assets/img/logo/logo-blue.png" style="width: 150px;"></a>
                            &nbsp;&nbsp;&nbsp;
                            <a href="#top" class="btn btn-sm btn-icon btn-dark btn-rounded" title="Subir"><i class="fa fa-chevron-up"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Style switcher - demo only - @todo: remove in production -->
        <!--<div class="colour-switcher">
            <a href="#" class="colour-switcher-toggle" data-toggle="class" data-target=".colour-switcher"> <i class="fa fa-paint-brush"></i> </a>
            <h5 class="text-uppercase my-0">
                Theme Colours
            </h5>
            <hr />
            <div class="theme-colours"> <a href="#green" class="green active" data-toggle="tooltip" data-placement="right" data-original-title="Green (Default)">Green</a> <a href="#red" class="red" data-toggle="tooltip" data-placement="right" data-original-title="Red">Red</a> <a href="#blue" class="blue" data-toggle="tooltip" data-placement="right" data-original-title="Blue">Blue</a> <a href="#purple" class="purple" data-toggle="tooltip" data-placement="right" data-original-title="Purple">Purple</a> <a href="#pink" class="pink" data-toggle="tooltip" data-placement="right" data-original-title="Pink">Pink</a> <a href="#orange" class="orange" data-toggle="tooltip" data-placement="right" data-original-title="Orange">Orange</a> <a href="#lime" class="lime" data-toggle="tooltip" data-placement="right" data-original-title="Lime">Lime</a> <a href="#blue-dark" class="blue-dark" data-toggle="tooltip" data-placement="right" data-original-title="Blue-dark">Blue-dark</a> <a href="#red-dark" class="red-dark" data-toggle="tooltip" data-placement="right" data-original-title="Red-dark">Red-dark</a> <a href="#brown" class="brown" data-toggle="tooltip" data-placement="right" data-original-title="Brown">Brown</a> <a href="#cyan-dark" class="cyan-dark" data-toggle="tooltip" data-placement="right" data-original-title="Cyan-dark">Cyan-dark</a> <a href="#yellow" class="yellow" data-toggle="tooltip" data-placement="right" data-original-title="Yellow">Yellow</a> <a href="#slate" class="slate" data-toggle="tooltip" data-placement="right" data-original-title="Slate">Slate</a> <a href="#olive" class="olive" data-toggle="tooltip" data-placement="right" data-original-title="Olive">Olive</a> <a href="#teal" class="teal" data-toggle="tooltip" data-placement="right" data-original-title="Teal">Teal</a> <a href="#green-bright" class="green-bright" data-toggle="tooltip" data-placement="right" data-original-title="Green-bright">Green-bright</a> </div>
            <hr />
            <p class="text-xs text-muted">Cookies are NOT enabled so colour selection is not persistent.</p>
            <p class="text-xs my-0"><a href="index.html">Back to main homepage</a></p>
            <p class="text-xs my-0"><a href="intro.html">Back to intro page</a></p>
        </div>-->

        <!--jQuery 3.2.1 via CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!-- Popper 1.12.9 via CDN, needed for Bootstrap Tooltips & Popovers -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

        <!-- Bootstrap v4.0.0 JS via CDN -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


        <!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 To disable this and load plugin assets manually simple add data-plugins-manual=true to the body tag -->

        <!--Custom scripts & AppStrap API integration -->
        <script src="assets/js/custom-script.js"></script>
        <!--AppStrap scripts mainly used to trigger libraries/plugins -->
        <script src="assets/js/script.min.js"></script>
    </body>
</html>