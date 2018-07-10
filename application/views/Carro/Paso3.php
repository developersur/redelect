

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
        <div class="contenido_formulario">
            
            <!-- Si la conexion con Webpay se realiza correctamente -->
            <?php if (isset($WebPayResultado->token) and !empty($WebPayResultado->token)) { ?>
                <form action="<?php echo $WebPayResultado->url; ?>" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo var_dump($data_post); ?> 
                            
                            <input type="hidden" name="token_ws" value="<?php echo $WebPayResultado->token; ?>">
                            <input type="submit" value="Pagar">
                            
                        </div>
                    </div>
                </form>
            <?php } ?>


        </div>
    </fieldset>
    </div>
</div>
</div>