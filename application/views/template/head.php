<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- <meta charset="utf-8"> -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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

		<!---JQUERY-->
		<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>

		<!-- Calendario con hora  -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.datetimepicker.css"/>

		<!-- Calendario con horas -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.datetimepicker.js"></script>



		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-122092742-1"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-122092742-1');
		</script>

		<!-- Smartsupp Live Chat script -->
		<script type="text/javascript">
		var _smartsupp = _smartsupp || {};
		_smartsupp.key = '86b501d3323c02a14dc28f7fbc27e907009ac3a1';
		window.smartsupp||(function(d) {
		  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
		  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
		  c.type='text/javascript';c.charset='utf-8';c.async=true;
		  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
		})(document);
		</script>

    </head>
    <body>
		<!-- HEADER -->
		<header class="altura_header">
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> +569 99373838</a></li>
						<li><a href="#"><i class="fas fa-envelope"></i> contacto@redelect.cl</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Barros Arana 492 oficina 78, Torre Ligure, Concepción</a></li>
					</ul>
					<ul class="header-links pull-right">
						<li class="dropdown">
							<a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="fas fa-user"></i>
								<?php if(isset($this->session->nombre_user))
								{
									echo $this->session->nombre_user;
								}else{
									echo 'Mi cuenta';
								}?>
							</a>
							<ul class="dropdown-menu">
									<?php
									if($this->session->logged_in)
									{
									?>
										<li class="block"><a href="<?php echo base_url(); ?>index.php/Admin">Administrar</a></li>
										<li class="block"><a href="<?php echo base_url(); ?>index.php/Login/salir">Salir</a></li>
										<?php
									}else if($this->session->logged_in_user){?>
										<li class="block"><a href="<?php echo base_url(); ?>index.php/Cliente/">Mi Cuenta</a></li>
										<li class="block"><a href="<?php echo base_url(); ?>index.php/Login/salir">Salir</a></li>
									<?php
								}else{?>
									<li class="block"><a href="<?php echo base_url(); ?>index.php/Login">Ingresar</a></li>
							<?php } ?>
							</ul>
						</li>

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

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<?php if($categorias) { ?>
							<?php foreach($categorias->result() as $categoria) { ?>
								<li><a href="<?php echo base_url(); ?>index.php/Producto/Categoria?id_categoria=<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></a></li>
				 				<li role="separator" class="divider"></li>
							<?php } ?>
						<?php } ?>
					</ul>
				</li>

                <li><a href="<?php echo base_url();?>index.php/Servicio">Nuestros servicios</a></li>
                <li><a href="<?php echo base_url();?>index.php/QuienesSomos">Quienes somos</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/Contacto">Contactanos</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
