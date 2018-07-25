<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <?php $this->load->view('template/MenuAdmin'); ?>
        </div>
        <div class="col-sm-9 col-md-9">
          <fieldset>
          <legend class="text-center header">Agregar categoría</legend>
              <div class="panel panel-default">
                  <div class="panel-body">
                        <?php if(isset($error)){
                            echo $error;
                        } ?>
                      <form class="form form-horizontal" method="post" action="<?php echo base_url(); ?>index.php/Categoria/agregarCategoria">
                          <div class="form-group">
                              <div class="col-md-6">
                                  <label class="control-label" for="nombre">Nombre</label>
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
                                  <label class="control-label" for="habilitado">Habilitado</label>
                                  <select name="habilitado" id="habilitado" class="form-control">
                                      <option value="Si">Si</option>
                                      <option value="No">No</option>
                                  </select>
                              </div>
                          </div>

                          <div class="form-group">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Agregar">
                            </div>
                          </div>


                      </form>
                  </div>
              </div>
          </fieldset>
        </div>
    </div>
</div>