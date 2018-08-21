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

		<!--Jquery confirm-->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-confirm.css"/>

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

			function mostrar_qsomos()
			{
				$.confirm({
					columnClass: 'col-md-8 col-md-offset-2',
					content: function () {
						var self = this;
						return $.ajax({
							url: "<?php echo base_url(); ?>index.php/QuienesSomos/obtenerQS",
							method: 'post',
						}).done(function (response) {
							var val = [];
							var newData = JSON.parse(response);

							newData.forEach(function(value, index) {
								val[index] = value;
							});

							self.setContent(val[1]);
							self.setTitle(val[0]);
						}).fail(function(){
							self.setContent('Error al cargar datos');
						});
					},
					buttons: {
						Cerrar: function () {
						}
					},
					type: 'dark',
				});
			}

			function mostrar_servicio(id)
			{
				$.confirm({
					columnClass: 'col-md-8 col-md-offset-2',
					content: function () {
						var self = this;
						return $.ajax({
							url: "<?php echo base_url(); ?>index.php/Servicio/getServicio",
							//dataType: 'json',
							method: 'post',
							data: { id: id}
						}).done(function (response) {
							var val = [];
							var newData = JSON.parse(response);

							newData.forEach(function(value, index) {
								val[index] = value;
							});

							self.setContent(val[1]);
							self.setTitle(val[0]);
						}).fail(function(){
							self.setContent('Error al cargar datos');
						});
					},
					buttons: {
						Cotizar: {
							text: 'Cotizar',
							btnClass: 'btn-green',
							action: function () {
								window.location.replace("index.php/Institucion");
							}
						},
						Cerrar: function () {
						}
					},
					type: 'dark',
				});
			}
		</script>

    </head>
    <body>
		<!-- HEADER -->
		<header class="altura_header">
			<!-- TOP HEADER -->
			<div id="top-header">
				<div class="container">
					<ul class="header-links pull-left">
					<?php
						$this->load->model('DatosModel');
						$datos = $this->DatosModel->obtenerDatos();
						foreach($datos->result() as $dato) 
						{
						
							echo '<li><a href="#"><i class="fa fa-phone"></i>'.$dato->telefono.'</a></li>';
							echo '<li><a href="#"><i class="fas fa-envelope"></i>'.$dato->correo.'</a></li>';
							echo '<li><a href="#"><i class="fa fa-map-marker"></i>'.$dato->direccion.'</a></li>';
						} ?>
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
								<form method="post" action="<?php echo base_url(); ?>index.php/Producto/buscaProducto">
									<input class="input" type="text" name="texto_buscar" minlength="2" maxlength="20" placeholder="¿Qué estás buscando?" required>
									<button class="search-btn" type="submit">Buscar</button>
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
										<?php
											$this->load->model('CategoriaModel');
											$categorias = $this->CategoriaModel->obtenerCategoriasActivas();
											foreach($categorias->result() as $categoria) { ?>
												<li><a href="<?php echo base_url(); ?>index.php/Producto/Categoria?id_categoria=<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></a></li>
								 				<li role="separator" class="divider"></li>
											<?php } ?>
									</ul>
								</li>

								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Nuestros servicios<span class="caret"></span></a>
									<ul class="dropdown-menu">
										<?php
											$this->load->model('ServicioModel');
											$servicios = $this->ServicioModel->obtenerServiciosActivos();

											foreach($servicios->result() as $servicio) { ?>
												<li><a href="javascript:mostrar_servicio('<?=$servicio->id?>');"><?php echo $servicio->titulo; ?></a></li>
								 				<li role="separator" class="divider"></li>
										<?php } ?>
									</ul>
								</li>

                <!--<li><a href="<?php echo base_url();?>index.php/Servicio">Nuestros servicios</a></li>-->
                <!--<li><a href="<?php echo base_url();?>index.php/QuienesSomos">Quienes somos</a></li>-->
								<li><a href="javascript:mostrar_qsomos();">Quienes somos</a></li>
                <li><a href="<?php echo base_url(); ?>index.php/Contacto">Contactanos</a></li>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->
