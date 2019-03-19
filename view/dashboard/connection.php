<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Conexión');
    mainPages::navbars();
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-10 col-lg-10 col-sm-10">
            <h3>Conexión</h3>
        </div>
        <div class="col-xs-6 col-md-2 col-sm-2">
            <!--Boton agregar nuevo registro-->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregarConexion"><a>Agregar
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
            <!---Boton para buscar registro-->
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
                        <th scope="col">Equipo</th>
                        <th scope="col">Hospital</th>
                        <th scope="col">Dirección IP</th>
                        <th scope="col">Puerto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!--Datos de la tabla-->
                        <td>Equipo 1</td>
                        <td>Hospital Bloom</td>
                        <td>192.168.1.1</td>
                        <td>443</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizarConexion">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarConexion">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!--Datos de la tabla-->
                        <td>Equipo 2</td>
                        <td>Hospital Rosales</td>
                        <td>178.133.13.1</td>
                        <td>443</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizarConexion">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarConexion">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!--Datos de la tabla-->
                        <td>Equipo 3</td>
                        <td>Hospital Bloom</td>
                        <td>153.12.12.1</td>
                        <td>443</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizarConexion">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarConexion">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!--Modales-->
    <!-- Modal para registrar exámen -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="agregarConexion">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro de Conexión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <form>
                        <div class="form-row">
                            <!--Fila con los todos los campos-->
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="direccionIP" class="col-form-label">Equipo:</label>
                                <select class="form-control" id="sel1">
                                    <option selected>Seleccione un equipo</option>
                                    <option>Equipo 1</option>
                                    <option>Equipo 2</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="direccionIP" class="col-form-label">Hospital:</label>
                                <select class="form-control" id="sel1">
                                    <option selected>Seleccione un Hospital</option>
                                    <option>Hospital Bloom</option>
                                    <option>Hospital Rosales</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="direccionIP" class="col-form-label">Dirección IP:</label>
                                <input type="text" class="form-control" id="direccionIP" placeholder="Ingrese dirección IP de la conexión">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="puertoConexion" class="col-form-label">Puerto:</label>
                                <input type="text" class="form-control" id="puertoConexion" placeholder="Ingrese puerto de conexión">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!--footer del modal donde se encuentra el boton de regresar y guardar registro-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip"
                        data-placement="bottom" title="Salir"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Guardar"><i
                            class="fas fa-save"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="actualizarConexion">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar Conexión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <!--Fila con los todos los campos-->
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="direccionIP" class="col-form-label">Equipo:</label>
                                <select class="form-control" id="sel1">
                                    <option selected>Equipo 1</option>
                                    <option>Equipo 2</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="direccionIP" class="col-form-label">Hospital:</label>
                                <select class="form-control" id="sel1">
                                    <option selected>Hospital Bloom</option>
                                    <option>Hospital Rosales</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="direccionIP" class="col-form-label">Dirección IP:</label>
                                <input type="text" class="form-control" id="direccionIP" placeholder="Ingrese dirección IP de la conexión"
                                    value="192.168.1.1">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="puertoConexion" class="col-form-label">Puerto:</label>
                                <input type="text" class="form-control" id="puertoConexion" placeholder="Ingrese puerto de conexión">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip"
                        data-placement="bottom" title="Salir"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="btn btn-primary" data-toggle="tooltip" data-placement="bottom" title="Actualizar"><i
                            class="fas fa-sync-alt"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="eliminarConexion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar exámen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Está seguro de eliminar la conexión?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
    mainPages::script();
?>