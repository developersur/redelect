

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