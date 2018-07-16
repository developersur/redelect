

<div class="container" id="contenedor_quienessomos">

<?php //echo var_dump($this->cart->contents()); ?>
<div id="resultados"></div>

<div class="row">
    <div class="col-md-12">
    <a href="<?php echo base_url(); ?>index.php/Carro/Paso1">Paso 1 - Complete su información</a> / 
    <a href="<?php echo base_url(); ?>index.php/Carro/Paso2">Paso 2 - Datos de la Instalación</a> /
    Paso 3
    
    <fieldset>
    <legend class="text-center header titulo">Paso 3 - Confirmación</legend>

            <!-- Productos del Carrito-->
            <div class="col-md-12">
                <div class="listado_carrito">
                    <table class="table">
                        <thead class="cabecera_dark">
                            <tr>
                                <th style="text-align: center">Imagen</th>
                                <th>Codigo</th>
                                <th>Nombre</th>
                                <th style="text-align: right">Precio</th>
                                <th>Cantidad</th>
                                <th style="text-align: right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="body_carrito">
                            <?php $productosC = $this->cart->contents(); ?>
                            <?php if(count($productosC)) { ?>
                            <?php foreach ($productosC as $p) { ?>
                            <tr>
                                <td align="center"><img src="<?php echo $p["imagen"]; ?>" width="80px"></td>
                                <td><?php echo $p["id"]; ?></td>
                                <td><?php echo $p["name"]; ?></td>
                                <td align="right">$<?php echo number_format($p["price"],'0',',','.'); ?></td>
                                <td><?php echo $p["qty"]; ?></td>
                                <td align="right">$<?php echo number_format($p["subtotal"],'0',',','.'); ?></td>
                            </tr>
                            <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="4">No hay productos en el carrito</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td align="right">Total: </td>
                                <td align="right"><b>$<?php echo number_format($this->cart->total(),'0',',','.'); ?></b></td>
                            </tr>
                    </table>
                </div>    
            </div>



            <!-- Datos del Cliente-->
            <div class="col-md-12">
                <div class="">
                    <table class="table table-bordered" style="table-layout:fixed; word-wrap:break-word;">
                        <thead class="cabecera_dark">
                        <tr>
                            <th colspan="6">Datos de Contacto</th>
                        </tr>
                        </thead>
                        <tr>
                            <td align="right">Tipo de comprobante:</td>
                            <td><?php echo $data_post['tipo']; ?></td>
                            <td align="right">RUT:</td>
                            <td><?php echo $data_post['rut_con']; ?></td>
                            <td align="right">Nombre:</td>
                            <td><?php echo $data_post['nombre_con']; ?></td>
                        </tr>
                        <tr>
                            <td align="right">Teléfono:</td>
                            <td><?php echo $data_post['telefono_con']; ?></td>
                            <td align="right">Correo:</td>
                            <td><?php echo $data_post['correo_con']; ?></td>
                            <td align="right"></td>
                            <td></td>
                        </tr>
                    </table>
                </div>    
            </div>
    

            <!-- Datos de Facturación-->
            <?php if ($data_post['tipo']=="Factura") { ?>
            <div class="col-md-12">
                <div class="">
                    <table class="table table-bordered" style="table-layout:fixed; word-wrap:break-word;">
                        <thead class="cabecera_dark">
                        <tr>
                            <th colspan="6">Datos de Facturación</th>
                        </tr>
                        </thead>
                        <tr>
                            <td align="right">RUT:</td>
                            <td><?php echo $data_post['rut_fac']; ?></td>
                            <td align="right">Razón Social:</td>
                            <td><?php echo $data_post['razon_fac']; ?></td>
                            <td align="right">Giro:</td>
                            <td><?php echo $data_post['gira_fac']; ?></td>
                        </tr>
                        <tr>
                            <td align="right">Teléfono:</td>
                            <td><?php echo $data_post['telefono_fac']; ?></td>
                            <td align="right">Correo:</td>
                            <td><?php echo $data_post['correo_fac']; ?></td>
                            <td align="right">Región:</td>
                            <td><?php echo $data_post['region_fac']; ?></td>
                        </tr>
                        <tr>
                            <td align="right">Comuna:</td>
                            <td><?php echo $data_post['comuna_fac']; ?></td>
                            <td align="right">Sector:</td>
                            <td><?php echo $data_post['sector_fac']; ?></td>
                            <td align="right">Calle:/td>
                            <td><?php echo $data_post['caller_fac']; ?></td>
                        </tr>
                        <tr>
                            <td align="right">Nro Calle:</td>
                            <td><?php echo $data_post['nro_calle_fac']; ?></td>
                            <td align="right"></td>
                            <td></td>
                            <td align="right"></td>
                            <td></td>
                        </tr>
                    </table>
                </div>    
            </div>
            <?php } ?>



            <!-- Datos de Facturación-->
            <div class="col-md-12">
                <div class="">
                    <table class="table table-bordered" style="table-layout:fixed; word-wrap:break-word;">
                        <thead class="cabecera_dark">
                        <tr>
                            <th colspan="6">Datos de Instalación/Visita</th>
                        </tr>
                        </thead>
                        <tr>
                            <td align="right">Región:</td>
                            <td><?php echo $data_post['region_dir']; ?></td>
                            <td align="right">Comuna:</td>
                            <td><?php echo $data_post['comuna_dir']; ?></td>
                            <td align="right">Sector:</td>
                            <td><?php echo $data_post['sector_dir']; ?></td>
                        </tr>
                        <tr>

                            <td align="right">Calle:</td>
                            <td><?php echo $data_post['caller_dir']; ?></td>
                            <td align="right">Nro Calle:</td>
                            <td><?php echo $data_post['nro_calle_dir']; ?></td>
                            <td align="right">Indicaciones:</td>
                            <td><?php echo $data_post['indicaciones_dir']; ?></td>
                        </tr>
                        <tr>
                            <td align="right">Fecha visita:</td>
                            <td></td>
                            <td align="right">Hora visita</td>
                            <td></td>
                            <td align="right"></td>
                            <td></td>
                        </tr>
                    </table>
                </div>    
            </div>


            <!-- Datos de Pago-->
            <div class="col-md-12">
                <div class="">
                    <table class="table table-bordered" style="table-layout:fixed; word-wrap:break-word;">
                        <thead class="cabecera_dark">
                        <tr>
                            <th colspan="6">Datos para realizar el Pago</th>
                        </tr>
                        </thead>
                        <?php if ($data_post['metodo_pago']=="WEBPAY") { ?>
                        <tr>
                            <td align="right">Método de Pago:</td>
                            <td><?php echo $data_post['metodo_pago']; ?> <img src="<?php echo base_url(); ?>/assets/img/icono_webpay.png" width="50px"></td>
                            <td align="right">Tiempo de espera por confirmación:</td>
                            <td colspan="3">El pago es confirmado inmediatamente</td>
                        </tr>
                        <tr>
                            <td align="right">Información</td>
                            <td colspan="5">Una vez que presione el botón "Pagar" el cliente será redireccionado a la página de WebPay para realizar el pago través de Débito o Crédito.</td>
                        </tr>
                        <?php } ?>
                        <?php if ($data_post['metodo_pago']=="TRANSFERENCIA") { ?>
                        <tr>
                            <td align="right">Método de Pago:</td>
                            <td><?php echo $data_post['metodo_pago']; ?> <img src="<?php echo base_url(); ?>/assets/img/icono_transferencia.png" width="30px"></td>
                            <td align="right">Tiempo de espera por confirmación:</td>
                            <td colspan="3">Entre 24 y 48 horas habiles</td>
                        </tr>
                        <tr>
                            <td align="right">Información</td>
                            <td colspan="5">Al presionar el botón "Registrar compra" la compra será guarda y el cliente deberá realizar el pago a través de un deposito o transferencia, y luego notificarlo vía correo electrónico.</td>
                        </tr>
                        <tr>
                            <td align="right">Banco:</td>
                            <td>AQUI NOMBRE DEL BANCO:</td>
                            <td align="right">Titular:</td>
                            <td>AQUI LOS DATOS DEL TITULAR</td>
                            <td align="right">RUT:</td>
                            <td>AQUI RUT</td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>    
            </div>

        <?php //echo $data_post['pago']; ?>

        <div class="contenido_formulario">
            
            <!-- Si es por Webpay -->
            <?php if ($data_post['metodo_pago']=="WEBPAY") { ?>
                <!-- Si la conexion con Webpay se realiza correctamente -->
                <?php if (isset($WebPayResultado->token) and !empty($WebPayResultado->token)) { ?>
                    <form action="<?php echo $WebPayResultado->url; ?>" method="POST">
                        <div class="row">
                            <div class="col-md-12">
                                <?php // echo var_dump($data_post); ?> 
                                
                                <input type="hidden" name="token_ws" value="<?php echo $WebPayResultado->token; ?>">
                                <input type="submit" value="Pagar" class="btn btn-primary">
                                
                            </div>
                        </div>
                    </form>
                <?php } ?>
            <?php } ?>
            <!-- Si es por Transferencia -->
            <?php if ($data_post['metodo_pago']=="TRANSFERENCIA") { ?>
                <form action="<?php echo base_url(); ?>index.php/Carro/ProcesarPago" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <?php // echo var_dump($data_post); ?> 
                                    
                            <input type="hidden" name="transferencia" value="SI">
                            <input type="submit" value="Registrar Compra" class="btn btn-primary">
                                    
                        </div>
                    </div>
                </form>
            <?php } ?>

        </div>

    </fieldset>
    </div>
</div>
</div>