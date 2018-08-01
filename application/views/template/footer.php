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
								<p align="justify">Redelec, una empresa cuyo principal producto es la SEGURIDAD ELECTRICA.
									En Redelec nos enfocamos en entregar un resultado en formato OBRA VENDIDA,
									así, el cliente no se preocupa de las tradicionales instalaciones donde además
									de buscar al técnico o en muchos casos al “maestro eléctrico” también tiene que
									ocuparse de las compras de materiales y todo para instalar un par de enchufes o
									un punto de alumbrado.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i>Barros Arana 492 oficina 78, Torre Ligure, Concepción</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+569 99373838</a></li>
									<li><a href="#"><i class="fas fa-envelope"></i>contacto@redelect.cl</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-2 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Categorias</h3>
								<ul class="footer-links">
									<?php
									$this->load->model('CategoriaModel');
									$categorias = $this->CategoriaModel->obtenerCategorias();

									if($categorias)
									{
											foreach ($categorias->result() as $categoria)
											{
												?>
												<li><a href="#"><?php echo $categoria->nombre; ?></a></li>
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
									<li><a href="<?php echo base_url();?>index.php/QuienesSomos">Acerca de</a></li>
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
								Copyright &copy;<!-- <script>document.write(new Date().getFullYear());</script> --> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
