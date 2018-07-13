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
                                        <span class=""></span><a href="Producto/AgregarProducto">Agregar producto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Modificar producto</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class=""></span><a href="">Eliminar producto</a>
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
            <div class="row">
                <div class="col-md-12">
                    <fieldset>
                    <legend class="text-center header">Agregar producto</legend>
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <form class="form-horizontal" method="post">
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <input id="codigo" name="codigo" type="text" placeholder="Código" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <input id="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <input id="descripcion" name="descripcion" type="text" placeholder="Descripción" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <input id="precio" name="precio" type="number" placeholder="Precio" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <input id="descuento" name="descuento" type="number" placeholder="% Descuento" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <input id="marca" name="marca" type="text" placeholder="Marca" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <input id="cantidad" name="cantidad" type="text" placeholder="Cantidad" class="form-control">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <select name="habilitado" id="habilitado" class="form-comtrol">
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <select name="nuevo" id="nuevo" class="form-comtrol">
                                                    <option value="si">Si</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class=""></i></span>
                                            <div class="col-md-9">
                                                <select name="categoria" id="categoria" class="form-comtrol">
                                                    <option value="fuerza">Fuerza</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <span class="col-md-1 col-md-offset-1 text-center"><i class="
                                        "></i></span>
                                            <div class="col-md-9">
                                                <input type="file" name="imagen" class="form-control">                                            
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-9 col-md-offset-2 ">
                                                <button type="submit" class="btn btn-primary btn-lg form-control">Enviar</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>


    



