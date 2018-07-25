

<div class="container" id="menuadmin">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Detalle de la Compra #<?php echo $id_compra; ?></legend>

            <?php if(isset($compra) and count($compra)>0) { ?>
                <?php foreach ($compra as $data_post) { ?>
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
                                    <td><?php echo $data_post['calle_fac']; ?></td>
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
                                    <td><?php echo $data_post['calle_dir']; ?></td>
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


                    <!-- Metodo de Pago-->
                    <div class="col-md-12">
                        <div class="">
                            <table class="table table-bordered" style="table-layout:fixed; word-wrap:break-word;">
                                <thead class="cabecera_dark">
                                <tr>
                                    <th colspan="2">Datos del Pago</th>
                                </tr>
                                </thead>
                                <?php if ($data_post['metodo_pago']=="WEBPAY") { ?>
                                <tr>
                                    <td align="right">Método de Pago:</td>
                                    <td><?php echo $data_post['metodo_pago']; ?> <img src="<?php echo base_url(); ?>/assets/img/icono_webpay.png" width="50px"></td>
                                </tr>
                                <?php } ?>
                                <?php if ($data_post['metodo_pago']=="TRANSFERENCIA") { ?>
                                <tr>
                                    <td align="right">Método de Pago:</td>
                                    <td><?php echo $data_post['metodo_pago']; ?> <img src="<?php echo base_url(); ?>/assets/img/icono_transferencia.png" width="30px"></td>
                                </tr>
                                <?php } ?>
                            </table>
                        </div>
                    </div>





                    <!-- Detalles de la Transaccion Webpay-->
                    <?php if (($data_post['metodo_pago']=="WEBPAY") and (count($datospago)>0)) { ?>
                        <?php foreach ($datospago as $webpay) {  ?>
                            <div class="col-md-12">
                                <div class="">
                                    <table class="table table-bordered" style="table-layout:fixed; word-wrap:break-word;">
                                        <thead class="cabecera_dark">
                                        <tr>
                                            <th colspan="6">Detalles de la Transacción WebPay</th>
                                        </tr>
                                        </thead>
                                        <tr>
                                            <td align="right">ID Webpay:</td>
                                            <td><?php echo $webpay['id_pago_webpay']; ?></td>
                                            <td align="right">ID Compra:</td>
                                            <td><?php echo $webpay['buyOrder']; ?></td>
                                            <td align="right">Nro de Tarjeta:</td>
                                            <td><?php if($webpay['responseCode']=="0") echo "XXXX-XXXX-XXXX-" . $webpay['cardNumber']; ?></td>
                                        </tr>
                                        <tr>
                                            <td align="right">Tarjeta Expiración:</td>
                                            <td><?php echo $webpay['cardExpirationDate']; ?></td>
                                            <td align="right">Código de autorización:</td>
                                            <td><?php echo $webpay['authorizationCode']; ?></td>
                                            <td align="right">Nro de cuotas:</td>
                                            <td><?php echo $webpay['sharesNumber']; ?></td>
                                        </tr>
                                        <tr>
                                        <td align="right">Tipo de pago:</td>
                                            <td><?php echo $webpay['paymentTypeCodeDes'] . "(" . $webpay['paymentTypeCode'] .")"; ?></td>
                                            <td align="right">Respuesta:</td>
                                            <td><?php echo $webpay['responseDescription'] . "(" . $webpay['responseCode'] .")"; ?></td>
                                            <td align="right">Total:</td>
                                            <td>$<?php echo number_format($webpay['amount'],'0',',','.'); ?></td>
                                        </tr>
                                        <td align="right">Codigo comercio:</td>
                                            <td><?php echo $webpay['commerceCode']; ?></td>
                                            <td align="right">Fecha transacción:</td>
                                            <td><?php echo date("d-m-Y H:i", strtotime($webpay['transactionDate'])); ?></td>
                                            <td align="right">Más información:</td>
                                            <td><?php echo $webpay['VCIDescription'] . "(" . $webpay['VCI'] .")"; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>


                <?php } ?>
            <?php } else { ?>
                <div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i> No se han encontrado resultados</div>
            <?php }  ?>


          </fieldset>
        </div>
    </div>
</div>
