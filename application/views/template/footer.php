        <!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-5 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Nosotros</h3>
								<ul class="footer-links">
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
							</div>
						</div>

						<div class="col-md-2 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<?php
									$this->load->model('CategoriaModel');
									$categorias = $this->CategoriaModel->obtenerCategoriasActivas();

									if($categorias)
									{
											foreach ($categorias->result() as $categoria)
											{
												?>
												<li><a href="<?php echo base_url(); ?>index.php/Producto/Categoria?id_categoria=<?php echo $categoria->id; ?>"><?php echo $categoria->nombre; ?></a></li>
											<?php
										}
									}?>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Información</h3>
								<ul class="footer-links">
									<li><a href="javascript:mostrar_qsomos();">Acerca de</a></li>
									<li><a href="<?php echo base_url(); ?>index.php/Contacto">Contáctanos</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Desarrollado por <a href="https://www.developersur.cl" target="_blank">Developersur</a> | &copy; 2018<!-- <script>document.write(new Date().getFullYear());</script> --> Todos los derechos reservados<!--| This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>-->
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
    </footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->

		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/slick.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/main.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/jquery.zoom.min.js"></script>

		<!-- jquery confirm -->
		<script src="<?php echo base_url(); ?>assets/js/jquery-confirm.js"></script>

		<!-- Funciones Carrito-->
		<?php $this->load->view('template/Ajax_carrito.php');  ?>

		<!-- Valida el RUT -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.rut.chileno.js"></script>

		<!-- Pluging DataTables  -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script>

		<link href="<?php echo base_url(); ?>assets/css/datatables.min.css" rel="stylesheet" type="text/css" />

		<script type="text/javascript">
			$(document).ready(function() {
				$('.dt_compras').DataTable();
			});
		</script>


		<!-- Ventana Modal de Confirmacion  -->
		<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-confirm.min.js"></script>
		<link href="<?php echo base_url(); ?>assets/css/jquery-confirm.min.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">

		$(document).ready(function(){
			jconfirm.defaults = {
				closeIcon: true,
				bgOpacity: 0.5,
			};
		})


    </script>

	</body>
</html>
