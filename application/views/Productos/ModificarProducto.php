<script>
function open_edit_prod(){
  $('#modal_edit_prod').modal('show')
}
</script>
<div class="container" id="menuadmin">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Modificar producto</legend>
              <table class="table table-bordeder">
                <thead class="cabecera_dark">
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Habilitado</th>
                    <th>Nuevo</th>
                    <th>Imagen</th>
                    <th>Modificar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if($productos)
                  {
                    foreach ($productos->result() as $producto)
                    {
                    ?>
                    <tr>
                      <td><?php echo $producto->nombre; ?></td>
                      <td><?php echo $producto->descripcion; ?></td>
                      <td><?php echo $producto->precio; ?></td>
                      <td>
                        <label class="switch">
                          <?php if($producto->habilitado == 'Si')
                          {
                          ?>
                            <input type="checkbox" checked>
                          <?php
                          }else{?>
                            <input type="checkbox">
                          <?php
                          }
                          ?>
                          <span class="slider round"></span>
                        </label>
                      </td>
                      <td>
                        <label class="switch">
                          <?php if($producto->nuevo == 'Si')
                          {
                          ?>
                            <input type="checkbox" checked>
                          <?php
                          }else{?>
                            <input type="checkbox">
                          <?php
                          }
                          ?>
                          <span class="slider round"></span>
                        </label>
                      </td>
                      <td><img src="<?php echo $producto->imagen; ?>" alt="" width="30" height="30"></td>
                      <td><button type="button" class="btn btn-info btn-xs" onclick="open_edit_prod()">Modificar</button></td>
                    </tr>
                    <?php
                    }
                  } ?>
                </tbody>
              </table>
          </fieldset>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal_edit_prod" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar producto</h4>
      </div>
      <div class="modal-body">

        <form class="form-horizontal">
          <div class="form-group">
            <label for="nombre" class="col-sm-2 control-label">Nombre</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="nombre" name="nombre">
            </div>
          </div>
          <div class="form-group">
            <label for="descripcion" class="col-sm-2 control-label">Descripción</label>
            <div class="col-sm-10">
              <textarea type="text" class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>
          </div>
          <div class="form-group">
            <label for="precio" class="col-sm-2 control-label">Precio</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" id="precio" name="precio">
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>
