<div class="container" id="menuadmin">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="">
                            </span>Productos</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class=""></span><a href="<?php echo base_url(); ?>index.php/Producto/formProducto">Agregar producto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=""></span><a href="<?php echo base_url(); ?>index.php/Producto/modProducto">Modificar producto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=""></span><a href="<?php echo base_url(); ?>index.php/Producto/borrarProducto">Eliminar producto</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="">
                            </span>Categorías</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Agregar categoría</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Modificar categoría</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Eliminar categoría</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="">
                            </span>Servicios</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Agregar servicio</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Modificar servicio</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Eliminar servicio</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="">
                            </span>Quienes somos</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Modificar</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="">
                            </span>Informe de ventas</a>
                        </h4>
                    </div>
                    <div id="collapseFive" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Ventas por periódo</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
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
                      <td><img src="<?php echo $producto->imagen; ?>" alt="" width="30" height="30"></td>
                      <td><button type="button" class="btn btn-info btn-xs">Modificar</button></td>
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
