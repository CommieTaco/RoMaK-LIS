<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Tipo de Usuario');
    mainPages::navbars();
?>
<!--Container con el titulo del mantenimiento y el boton agregar registro-->
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-10 col-lg-10 col-sm-10">
            <h3>Tipos de Usuario</h3>
        </div>
        <div class="col-xs-6 col-md-2 col-sm-2">
            <!--Boton agregar nuevo registro-->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregarTipoUsuario"><a>Agregar
                </a><i class="fas fa-plus"></i></button>
        </div>
    </div>&nbsp
    <div class="row">
        <!--Barra de busqueda de registro-->
        <div class="col-lg-10 col-md-10 col-sm-10 ">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Buscar </span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="col-lg-2 col-md-2 col-sm-2 ">
            <!---Botón para buscar registro-->
            <button type="button" class="btn btn-info">Buscar </a><i class="fas fa-search"></i></button>
        </div>
    </div>&nbsp
    <div class="row">
        <!---Tabla con los registros-->
        <div class="table-responsive col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <!--Encabezados de tabla-->
                        <th>Tipo Usuario</th>
                        <th>N° Usuario</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Administrador</td>
                        <td>4 Usuarios</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizarTipoUsuario"><i
                                                class="fas fa-sync-alt"></i></button>
                                    </span>
                                </div>&nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionTipoUsuario"><i
                                                class="fas fa-trash"></i></button>
                                        <span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Secretaria</td>
                        <td>3 Usuarios</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizarTipoUsuario"
                                            data-placement="left" title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionTipoUsuario"><i
                                                class="fas fa-trash"></i></button>
                                        <span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Jefe de Hospital</td>
                        <td>3 Usuarios</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizarTipoUsuario"
                                            data-placement="left" title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionTipoUsuario"><i
                                                class="fas fa-trash"></i></button>
                                        <span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="agregarTipoUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de Tipo de Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <form>
                        <div class="form-row">
                            <!--Fila con los todos los campos-->
                            <div class="form-group col-sm-12">
                                <label for="nombreExamen" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombreExamen" placeholder="Ingrese nombre del tipo de usuario">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="nombreExamen" class="col-form-label">Elige las acciones:</label>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="principio">
                                    <label class="custom-control-label" for="principio">Principio</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="solicitud">
                                    <label class="custom-control-label" for="solicitud">Solicitud</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="búsqueda">
                                    <label class="custom-control-label" for="búsqueda">Búsqueda</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="historial">
                                    <label class="custom-control-label" for="historial">Historial</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="mantenimiento">
                                    <label class="custom-control-label" for="mantenimiento">Mantenimiento</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="reporte">
                                    <label class="custom-control-label" for="reporte">Reporte</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="contactenos">
                                    <label class="custom-control-label" for="contactenos">Contáctenos</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="conexion">
                                    <label class="custom-control-label" for="conexion">Conexión</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!--footer del modal donde se encuentra el boton de regresar y guardar registro-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="btn btn-success"><i class="fas fa-save "></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="actualizarTipoUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar de Tipo de Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <form>
                        <div class="form-row">
                            <!--Fila con los todos los campos-->
                            <div class="form-group col-sm-12">
                                <label for="nombreExamen" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombreExamen" placeholder="Ingrese nombre del tipo de usuario" value="Administrador">
                            </div>
                            <div class="form-group col-sm-12">
                                <label for="nombreExamen" class="col-form-label">Elige las acciones:</label>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="actualizarPrincipio">
                                    <label class="custom-control-label" for="actualizarPrincipio">Principio</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="actualizarSolicitud">
                                    <label class="custom-control-label" for="actualizarSolicitud">Solicitud</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="actualizarBúsqueda">
                                    <label class="custom-control-label" for="actualizarBúsqueda">Búsqueda</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="actualizarHistorial">
                                    <label class="custom-control-label" for="actualizarHistorial">Historial</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="actualizarMantenimiento">
                                    <label class="custom-control-label" for="actualizarMantenimiento">Mantenimiento</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="actualizarReporte">
                                    <label class="custom-control-label" for="actualizarReporte">Reporte</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="actualizarContactenos">
                                    <label class="custom-control-label" for="actualizarContactenos">Contáctenos</label>
                                </div>
                            </div>
                            <div class="form-group col-sm-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="actualizarConexion">
                                    <label class="custom-control-label" for="actualizarConexion">Conexión</label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!--footer del modal donde se encuentra el boton de regresar y guardar registro-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="btn btn-success"><i class="fas fa-save "></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="eliminacionTipoUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Procedencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <p>¿Estas seguro de eliminar el tipo de usuario?
                </div>
                <div class="modal-footer">
                    <!--footer del modal donde se encuentra el boton de regresar y eliminar registro-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash "></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    mainPages::script();
?>