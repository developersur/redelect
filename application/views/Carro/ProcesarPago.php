

<div class="container" id="contenedor_quienessomos">

<?php //echo var_dump($this->cart->contents()); ?>
<div id="resultados"></div>

<div class="row">
    <div class="col-md-12">
    <a href="<?php echo base_url(); ?>index.php/Carro/Paso1">Paso 1 - Complete su información</a> / 
    <a href="<?php echo base_url(); ?>index.php/Carro/Paso2">Paso 2 - Datos de la Instalación</a> /
    Paso 3
    
    <fieldset>
    <legend class="text-center header titulo">Pago Proceso</legend>
            
        <?php if(isset($error) and $error!="") { ?>
            <h4>Atención</h4>
            <div class="alert alert-warning"><i class="fas fa-exclamation-triangle"></i>
                <?php echo $error; ?>
            </div>
        <?php } ?>

        <?php if(isset($mensaje) and $mensaje!="") { ?>
            <h4>Resultado</h4>
            <div class="alert alert-success"><i class="fas fa-check-circle"></i>
                <?php echo $mensaje; ?>
            </div>
        <?php } ?>

    </fieldset>
    </div>
</div>
</div>