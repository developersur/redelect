<div class="col-md-8">
    <fieldset>
    <legend class="text-center header">Agregar producto</legend>
        <div class="">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form method="post" action="">
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
        </div>
    </fieldset>
</div>