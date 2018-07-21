<div class="container" id="menuadmin">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Productos</legend>
              <table class="table table-borderde table-condensed">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Habilitado</th>
                    <th>Nuevo</th>
                    <th>Imagen</th>
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
                      <td><?php echo $producto->habilitado; ?></td>
                      <td><?php echo $producto->nuevo; ?></td>
                      <td><img src="<?php echo $producto->imagen; ?>" alt="" width="30" height="30"></td>
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
