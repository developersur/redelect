<script>
  function open_edit_cat()
  {
    $('#modal_edit_cat').modal('show');
  }
</script>

<div class="container" id="menuadmin">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Modificar categorías</legend>
              <table class="table table-bordered table-condensed">
                <thead class="cabecera_dark">
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Habilitado</th>
                    <th>Modificar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if($categorias)
                  {
                    foreach ($categorias->result() as $categoria)
                    {
                    ?>
                    <tr>
                      <td><?php echo $categoria->nombre; ?></td>
                      <td><?php echo $categoria->descripcion; ?></td>
                      <td><?php echo $categoria->habilitado; ?></td>
                      <td><button type="button" class="btn btn-info btn-xs" onclick="open_edit_cat()">Modificar</button></td>
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
<div class="modal fade" id="modal_edit_cat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar categoria</h4>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar cambios</button>
      </div>
      </form>
    </div>
  </div>
</div>
