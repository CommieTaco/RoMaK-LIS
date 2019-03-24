<?php 
//Inclusion de header y navbars de la pagina
    require_once '../../core/helpers/mainPages.php';
    mainPages::header('Exámenes');
    mainPages::navbars();
?>
<div class="container-fluid" id="bodyWrapper">
    <div class="row" id="mains">
        <div class="col-12">
            <div class="container" id="headers">
                <div class="row">
                    <div class="col-xs-6 col-md-10 col-lg-10 col-sm-10">
                        <h3>Exámenes</h3>
                    </div>
                    <div class="col-xs-6 col-md-2 col-sm-2">
                        <div class="mb-3">
                            <!--Boton agregar nuevo registro-->
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                data-target="#agregarExamen"><a>Agregar
                                </a><i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!--Barra de busqueda de registro-->
                    <div class="col-lg-10 col-md-10 col-sm-10 ">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Buscar </span>
                            </div>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-2 ">
                        <div class="mb-3">
                            <!---Boton para buscar registro-->
                            <button type="button" class="btn btn-info">Buscar </a><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="table-responsive col-sm-12">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <!--Encabezados de tabla-->
                                    <th scope="col">ABREV</th>
                                    <th scope="col">NOMBRE</th>
                                    <th scope="col">TIPO</th>
                                    <th scope="col">CATEGORÍA</th>
                                    <th scope="col">ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <!--Datos de la tabla-->
                                    <th scope="row">GLU</th>
                                    <td>Glucosa</td>
                                    <td>Sangre</td>
                                    <td>Examen Normal</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-xs-12" id="button-action">
                                                <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target="#actualizarExamen">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="col-xs-12" id="button-action">
                                                <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#eliminarExamen">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <!--Datos de la tabla-->
                                    <th scope="row">TRI</th>
                                    <td>Triglicéridos</td>
                                    <td>Sangre</td>
                                    <td>Examen Normal</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-xs-12" id="button-action">
                                                <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target="#actualizarExamen">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="col-xs-12" id="button-action">
                                                <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#eliminarExamen">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <!--Datos de la tabla-->
                                    <th scope="row">COL</th>
                                    <td>Colesterol</td>
                                    <td>Sangre</td>
                                    <td>Examen Normal</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-xs-12" id="button-action">
                                                <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                                        data-target="#actualizarExamen">
                                                        <i class="fas fa-sync-alt"></i>
                                                    </button>
                                                </span>
                                            </div>
                                            <div class="col-xs-12" id="button-action">
                                                <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                                        data-target="#eliminarExamen">
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
            </div>
        </div>
    </div>
</div>
<?php 
    mainPages::script();
?>