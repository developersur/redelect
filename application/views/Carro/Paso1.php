
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
        Paso 1        
        <fieldset>
        <legend class="text-center header titulo">Paso 1 - Complete su información</legend>
            <div class="contenido_formulario">
                    
                <form action="<?php echo base_url(); ?>index.php/Carro/Paso2" method="POST">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rut">Tipo de comprobante</label>
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="Boleta">Boleta</option>
                                        <option value="Factura">Factura</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="rut">Teléfono</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Teléfono">
                                </div>
                            </div>    
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rut">RUT</label>
                                    <input type="text" class="form-control" id="rut" name="rut" placeholder="RUT">
                                </div>
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
                                </div>
                            </div>  
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                                </div>
                            </div> 
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 contenedor_facturacion" style="display:none">

                                <legend class="text-center header titulo">Datos de Facturación</legend>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="rut_fac">RUT</label>
                                        <input type="text" class="form-control" id="rut_fac" name="rut_fac" placeholder="RUT">
                                    </div>
                                    <div class="form-group">
                                        <label for="telefono_fac">Teléfono</label>
                                        <input type="text" class="form-control" id="telefono_fac" name="telefono_fac" placeholder="Teléfono">
                                    </div>
                                    <div class="form-group">
                                        <label for="comuna_fac">Comuna</label>
                                        <select id="comuna_fac" name="comuna_fac" class="form-control comunas"></select>
                                    </div>
                                    <div class="form-group">
                                        <label for="nro_calle_fac">Número</label>
                                        <input type="text" class="form-control" id="nro_calle_fac" name="nro_calle_fac" placeholder="Nro Calle">
                                    </div>
                                </div>    
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="razon_fac">Razon Social</label>
                                        <input type="text" class="form-control" id="razon_fac" name="razon_fac" placeholder="Razon Social">
                                    </div>
                                    <div class="form-group">
                                        <label for="cocorreo_facrreo">Correo</label>
                                        <input type="text" class="form-control" id="correo_fac" name="correo_fac" placeholder="Correo">
                                    </div>
                                    <div class="form-group">
                                        <label for="sector_fac">Sector</label>
                                        <input type="text" class="form-control" id="sector_fac" name="sector_fac" placeholder="Sector">
                                    </div>
                                </div>  
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="giro_fac">Giro</label>
                                        <input type="text" class="form-control" id="giro_fac" name="giro_fac" placeholder="Giro">
                                    </div>
                                    <div class="form-group">
                                        <label for="region_fac">Región</label>
                                        <select id="region_fac" name="region_fac" class="form-control regiones"></select>
                                    </div>
                                    <div class="form-group">
                                        <label for="calle_fac">Calle</label>
                                        <input type="text" class="form-control" id="calle_fac" name="calle_fac" placeholder="Calle">
                                    </div>
                                </div> 
                                <div class="clearfix visible-xs"></div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button type="submit" class="btn btn-default">Continuar</button>
                        </div> 
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </form>
            </div>
        </fieldset>
        </div>
    </div>
</div>