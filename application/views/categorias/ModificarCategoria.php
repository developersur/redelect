<div class="container" id="menuadmin">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Modificar categorias</legend>
              <table class="table table-borderde table-condensed">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Habilitado</th>
                    <th>Modificar</th>
                    <th>Estado</th>
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
                      <td><button type="button" class="btn btn-info btn-xs">Modificar</button></td>
                      <?php if($categoria->habilitado == 'si')
                      {
                      ?>
                        <td><button type="button" class="btn btn-warning btn-xs">Desabilitar</button></td>
                      <?php
                      }else{
                      ?>
                        <td><button type="button" class="btn btn-success btn-xs">Habilitar</button></td>
                      <?php
                      }?>
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
