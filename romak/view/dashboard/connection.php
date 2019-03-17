<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Conexión');
    mainPages::navbars();
?>
<!--Container con el titulo del mantenimiento y el boton agregar registro-->
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-10 col-lg-6 col-sm-10">
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
        <div class="col-lg-6 col-md-10 col-sm-10 ">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Buscar </span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="col-lg-6 col-md-2 col-sm-2 ">
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
                        <td>Hospital 1</td>
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
                        <td>Hospital 2</td>
                        <td>192.168.1.2</td>
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
                        <td>Hospital 3</td>
                        <td>192.168.1.3</td>
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
    <!-- Modal para registrar datos de conexión -->
    <div class="modal fade" id="agregarConexion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro de conexión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <form>
                        <div class="row">
                            <!--Fila con los campos del número de equipo y hospital-->
                            <div class="form-group col-md-12 col-lg-6">
                                <label for="tipoExamen">Equipo:</label>
                                <select id="tipoExamen" class="form-control">
                                    <option selected>Seleccione un equipo</option>
                                    <option>Equipo 1</option>
                                    <option>Equipo 2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label for="tipoExamen">Hospital:</label>
                                <select id="tipoExamen" class="form-control">
                                    <option selected>Seleccione un equipo</option>
                                    <option>Hospital 1</option>
                                    <option>Hospital 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <!--Fila con los campos IP y puerto-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="ipMaquina">Dirección IP del equipo</label>
                                    <input type="text" class="form-control" id="ipMaquina" aria-describedby="emailHelp"
                                        placeholder="Ingrese dirección IP del equipo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="puertoMaquina">Puerto</label>
                                    <input type="text" class="form-control" id="puertoMaquina" placeholder="Ingrese puerto del equipo">
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
    <div class="modal fade" id="actualizarConexion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modificación de conexión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <form>
                        <div class="row">
                            <!--Fila con los campos del número de equipo y hospital-->
                            <div class="form-group col-md-12 col-lg-6">
                                <label for="tipoExamen">Equipo:</label>
                                <select id="tipoExamen" class="form-control">
                                    <option selected>Seleccione un equipo</option>
                                    <option>Equipo 1</option>
                                    <option>Equipo 2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-6">
                                <label for="tipoExamen">Hospital:</label>
                                <select id="tipoExamen" class="form-control">
                                    <option selected>Seleccione un equipo</option>
                                    <option>Hospital 1</option>
                                    <option>Hospital 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <!--Fila con los campos IP y puerto-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="ipMaquina">Dirección IP del equipo</label>
                                    <input type="text" class="form-control" id="ipMaquina" aria-describedby="emailHelp"
                                        placeholder="Ingrese dirección IP del equipo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="puertoMaquina">Puerto</label>
                                    <input type="text" class="form-control" id="puertoMaquina" placeholder="Ingrese puerto del equipo">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!--footer del modal donde se encuentra el boton de regresar y modificar registro-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-sync-alt "></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="eliminarConexion" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar datos de conexión</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <p>¿Estás seguro de eliminar datos de conexión?
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