
<script type="text/javascript">

// Muestra campos para facturacion
$(document).ready(function () {
    $("#tipo").change(function(e){
        var tipo = $(this).val();
        if(tipo=="Factura"){
            $(".contenedor_facturacion").show();
        } else {
            $(".contenedor_facturacion").hide();
        }
    })
});


// Muestra regiones y comunas
$(document).ready(function () {
    jQuery('.comunas').change(function () {
        if (jQuery(this).val() == '') {
            //alert('selecciones Región');
        } else if (jQuery(this).val() == '') {
            //alert('selecciones Comuna');
        }
    });

    jQuery('.regiones').change(function () {
        //alert(jQuery(this).val());
        if (jQuery(this).val() == '') {
            //alert('selecciones Región');
        }
    });
});


</script>

<div class="container" id="contenedor_quienessomos">

<?php //echo var_dump($this->cart->contents()); ?>
<div id="resultados"></div>

<div class="row">
    <div class="col-md-12">
    <a href="<?php echo base_url(); ?>index.php/Carro/Paso1">Paso 1 - Complete su información</a> / Paso 2
    
    <fieldset>
    <legend class="text-center header titulo">Paso 2 - Datos de la Instalación</legend>
        <div class="contenido_formulario">
                
            <form action="<?php echo base_url(); ?>index.php/Carro/Paso2" method="POST">
                <div class="row">
                    <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="region_dir">Región</label>
                                    <select id="region_dir" name="region_dir" class="form-control regiones"></select>
                                </div>
                                <div class="form-group">
                                    <label for="calle_dir">Calle</label>
                                    <input type="text" class="form-control" id="calle_dir" name="calle_dir" placeholder="Calle">
                                </div>
                                <div class="form-group">
                                    <label for="fecha">Fecha de visita</label>
                                    <input type="text" class="form-control" id="fecha" name="fecha" placeholder="Fecha">
                                </div>
                            </div>    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="comuna_dir">Comuna</label>
                                    <select id="comuna_dir" name="comuna_dir" class="form-control comunas"></select>
                                </div>
                                <div class="form-group">
                                    <label for="nro_calle_dir">Número</label>
                                    <input type="text" class="form-control" id="nro_calle_dir" name="nro_calle_dir" placeholder="Nro Calle">
                                </div>
                                <div class="form-group">
                                    <label for="hora">Hora de visita</label>
                                    <input type="text" class="form-control" id="hora" name="hora" placeholder="Hora">
                                </div>
                            </div>  
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sector_dir">Sector</label>
                                    <input type="text" class="form-control" id="sector_dir" name="sector_dir" placeholder="Sector">
                                </div>
                                <div class="form-group">
                                    <label for="indicaciones_dir">Indicaciones</label>
                                    <input type="text" class="form-control" id="indicaciones_dir" name="indicaciones_dir" placeholder="Indicaciones">
                                </div>
                            </div>
                    </div>
                    
                    <div class="col-md-12">
                        <legend class="text-center header titulo">Método de Pago</legend>
                                <!-- WEBPAY -->
                                <div class="col-md-4">
                                    <div class="form-group boton_webpay_form">
                                        <label>WebPay</label><br>
                                        <label class="radio-inline">
                                            <input type="radio" name="pago" id="pago" value="WEBPAY" checked=""> <img src="https://www.libreriagiorgio.cl/assets/img/icono_webpay.png" width="200px">
                                        </label>
                                    </div>
                                </div>
                                
                                <!-- TRANSFERENCIAS -->
                                <div class="col-md-4">
                                    <div class="form-group boton_webpay_form">
                                        <label>Transferencias</label><br>
                                        <label class="radio-inline">
                                            <input type="radio" name="pago" id="pago" value="TRANSFERENCIA"> 
                                            <img src="https://www.libreriagiorgio.cl/assets/img/icono_transferencia.png" width="120px">
                                            Al realizar la transferencia debe enviar la información del pago
                                        </label>
                                    </div>
                                </div>
                    </div>



                </div>
            </form>
        </div>
    </fieldset>
    </div>
</div>
</div>