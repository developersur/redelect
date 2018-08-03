<script>
  function open_edit_ser()
  {
    $('#modal_edit_ser').modal('show');
  }
</script>

<div class="container" id="menuadmin">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Modificar servicios</legend>
              <table class="table table-bordered table-condensed">
                <thead class="cabecera_dark">
                  <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Habilitado</th>
                    <th>Modificar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if($servicios)
                  {
                    foreach ($servicios->result() as $servicio)
                    {
                    ?>
                    <tr>
                      <td><?php echo $servicio->codigo; ?></td>
                      <td><?php echo $servicio->titulo; ?></td>
                      <td><?php echo $servicio->descripcion; ?></td>
                      <td>
                      <label class="switch">
                          <?php if($servicio->habilitado == 'Si')
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
                      <td><button type="button" class="btn btn-info btn-xs" onclick="open_edit_ser()">Modificar</button></td>
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
<div class="modal fade" id="modal_edit_ser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Editar categoria</h4>
      </div>
      <div class="modal-body">
        <form class="form-horizontal">
          <div class="form-group">
            <label for="titulo" class="col-sm-2 control-label">Título</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="titulo" name="titulo">
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
