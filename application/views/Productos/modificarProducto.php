<div class="container" id="menuadmin">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Modificar producto</legend>
              <table class="table table-borderde table-condensed">
                <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Habilitado</th>
                    <th>Nuevo</th>
                    <th>Imagen</th>
                    <th>Modificar</th>
                    <th>Estado</th>
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
                      <td><button type="button" class="btn btn-info btn-xs">Modificar</button></td>
                      <?php if($producto->habilitado == 'si')
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
