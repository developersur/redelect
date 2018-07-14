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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseSix"><span class="">
                            </span>Otros</a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Valor visita técnico</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Planos y listado de materiales</a>
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
          <legend class="text-center header">Agregar producto</legend>
              <div class="panel panel-default">
                  <div class="panel-body">
                      <form method="post" action="<?php echo base_url(); ?>index.php/Producto/AgregarProducto" enctype="multipart/form-data">
                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="codigo">Código</label>
                                  <input id="codigo" name="codigo" type="text" placeholder="Código" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="codigo">Nombre</label>
                                  <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="codigo">Descripción</label>
                                  <input id="descripcion" name="descripcion" type="text" placeholder="Descripción" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="codigo">Precio</label>
                                  <input id="precio" name="precio" type="number" placeholder="Precio" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="descuento">% Descuento</label>
                                  <input id="descuento" name="descuento" type="number" placeholder="% Descuento" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="marca">Marca</label>
                                  <input id="marca" name="marca" type="text" placeholder="Marca" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="cantidad">Cantidad</label>
                                  <input id="cantidad" name="cantidad" type="text" placeholder="Cantidad" class="form-control">
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="habilitado">Habilitado</label>
                                  <select name="habilitado" id="habilitado" class="form-control">
                                      <option value="si">Si</option>
                                      <option value="no">No</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="nuevo">Nuevo</label>
                                  <select name="nuevo" id="nuevo" class="form-control">
                                      <option value="si">Si</option>
                                      <option value="no">No</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="categoria">Categoria</label>
                                  <select name="categoria" id="categoria" class="form-control">
                                      <option value="fuerza">Fuerza</option>
                                      <option value="no">No</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="imagen">Imagen</label>
                                  <input type="file" id="imagen" name="imagen" class="form-control">
                              </div>
                          </div>

                          <div class="">
                              <div class="col-md-12">
                                  <input type="submit" class="btn btn-primary" value="Enviar">
                              </div>
                          </div>

                      </form>
                  </div>
              </div>
          </fieldset>
        </div>
    </div>
</div>
