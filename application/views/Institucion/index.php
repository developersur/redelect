<div class="container" id="form-contacto">
    <div class="row">
        <div class="col-md-12">
            <fieldset>
            <legend class="text-center header">Envianos tus datos y te contactaremos</legend>
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <form class="form-horizontal" method="post" action="<?php echo base_url();?>index.php/Institucion/consultaInstitucion">
                                <div class="form-group">
                                    <div class="col-md-12">
                                      <label for="institucion">Institución</label>
                                        <input id="institucion" name="institucion" type="text" placeholder="Nombre institución" class="form-control" minlength="2" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="nombre">Nombre</label>
                                        <input id="nombre" name="nombre" type="text" placeholder="Nombre contacto" class="form-control" minlength="4" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="telefono">Número contacto</label>
                                        <input id="telefono" name="telefono" type="text" placeholder="Número contacto" class="form-control" minlength="6" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label for="email">Email</label>
                                        <input id="email" name="email" type="email" placeholder="Email" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <textarea class="form-control" id="mensaje" name="mensaje" placeholder="Ingresa tu consulta." rows="7" required></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-lg form-control">Enviar</button>
                                    </div>
                                </div>
                                <?php
                                if($this->session->mensaje_email){
                                  echo $this->session->mensaje_email;
                                }
                                 ?>
                            </form>
                        </div>
                    </div>
                </div>
            </fieldset>
        </div>
    </div>
</div>
