<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Categorias</legend>
              <table class="table table-borderde table-condensed">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Habilitado</th>
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
