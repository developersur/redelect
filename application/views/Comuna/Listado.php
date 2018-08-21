<script type="text/javascript">
    

    $(document).ready(function(){

        $(document).on("change",".cambiar_mostrar",function(e){

            var mostrar;
            var id_comuna = $(this).data('idcomuna');
            if($(this).prop('checked')) {
                mostrar = 'Si';
            } else {
                mostrar = 'No';
            }

            $.ajax({
                url: "<?php echo base_url(); ?>index.php/Comuna/Actualizar",
                type: "POST",
                data: { mostrar: mostrar, id_comuna: id_comuna },
                success:function(data){
                    alert(data);
                }
            })


        })
    })

</script>

<div class="container" id="menuadmin">
    <div class="row">
        
        <!-- Menu Izquierdo Usuario -->
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        
        <!-- Contenido Cliente -->
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Listado de Costo de Visita por Comuna</legend>
              <table id="ltdo_compra" class="table table-bordered">
                <thead class="cabecera_dark">
                  <tr>
                    <th>Región</th>
                    <th>Comuna</th>
                    <th>Costo</th>
                    <th>Mostrar</th>
                  </tr>
                </thead>
                <tbody>

                <?php if($comunas) { ?>
                    <?php foreach ($comunas as $comuna) {?>
                    <tr>
                      <td><?php echo $comuna['region']; ?></td>
                      <td><?php echo $comuna['comuna']; ?></td>
                      <td>$<?php echo number_format($comuna['costo'],'0',',','.'); ?></td>
                      <td>
                      <label class="switch">
                        <input type="checkbox" class="cambiar_mostrar" data-idcomuna="<?php echo $comuna['id_comuna']; ?>"
                            <?php if($comuna['mostrar'] == 'Si') echo "checked"; ?>
                        >
                        <span class="slider round"></span>
                      </label>
                      </td>
                    </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                      <td colspan="4">No se han encontrado comunas</td>
                    </tr>
                <?php } ?>
                </tbody>
              </table>
          </fieldset>
        </div>
    </div>
</div>
