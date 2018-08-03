<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Servicios</legend>
              <table class="table table-bordered table-condensed">
                <thead class="cabecera_dark">
                  <tr>
                    <th>Código</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Habilitado</th>
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
                      <td><?php echo $servicio->habilitado; ?></td>
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
