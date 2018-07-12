<div class="container" id="login">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-login">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Iniciar Sesión</a>
                        </div>
                        <div class="col-xs-6">
                            <a href="#" id="register-form-link">Registrate</a>
                        </div>
                    </div>
                    <hr>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php 
                            echo validation_errors();
                            $attributes = array('id' => 'login-form', 'style' => 'display: block');
                            echo form_open('Login', $attributes); ?>
                            <!--<form id="login-form" action="" method="post" role="form" style="display: block;">-->
                                <div class="form-group">
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Contraseña">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Ingresar">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <a href="" tabindex="5" class="forgot-password">¿Olvidaste tu contraseña?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php echo form_close();?>    
                            <!--</form>-->

                            <?php
                            echo validation_errors();
                            $attributes = array('id' => 'register-form', 'style' => 'display: none');
                            echo form_open('Registrar', $attributes); ?>
                            <!--<form id="register-form" action="" method="post" role="form" style="display: none;">-->
                                <div class="form-group">
                                    <input type="text" name="username2" id="username2" tabindex="1" class="form-control" placeholder="Usuario">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email2" id="email2" tabindex="1" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password2" id="password2" tabindex="2" class="form-control" placeholder="Contraseña">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmar contraseña">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-3">
                                            <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Registrar">
                                        </div>
                                    </div>
                                </div>
                            <?php echo form_close();?>   
                            <!--</form>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    