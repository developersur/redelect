<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<meta name="description" content="">
  		<meta name="author" content="developersur">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Redelect. Instalaciones electricas.</title>

		<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo_redelect.jpeg">

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<!--  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css"> -->
        
        <!-- Font Awesome Icon VERSION MAS RECIENTE -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontawesome.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nouislider.min.css"/>

		<!-- -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-theme.css"/>
		
		<!--  -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css"/>

		<!-- Mis Estilos Alexis -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/estilos.css"/>

    </head>
    <body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +56950077896</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> whernandez.fobos@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Barros Arana 492 oficina 78, Torre Ligure, Concepción</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li><a href="#"><i class="fa fa-user-o"></i> Mi cuenta</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			
			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-4">
							<div class="header-logo">
								<a href="<?php echo base_url();?>index.php" class="logo">
									<font size=10><img src="<?php echo base_url(); ?>assets/img/logo_redelect.jpeg" height="60" width="60" alt="logo">RedElect.</font>
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-5">
							<div class="header-search">
								<form>
									<input class="input" placeholder="¿Qué estás buscando?">
									<button class="search-btn">Buscar</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						 <!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
                        <div class="header-ctn">

                        <!-- Cart -->
                        <div id="carrito_cabecera" class="dropdown">
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->

<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="<?php echo base_url();?>index.php">Inicio</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="<?php echo base_url();?>index.php/Servicio">Nuestros servicios</a></li>
                <li><a href="<?php echo base_url();?>index.php/QuienesSomos">Quienes somos</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/Contacto">Contacto</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->