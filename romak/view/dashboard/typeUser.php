<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Tipo de Usuario');
    mainPages::navbars();
?>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-md-10 col-lg-6 col-sm-10">
            <h3>Tipo de Usuario</h3>
        </div>
        <div class="col-xs-6 col-md-2 col-sm-2">
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#agregarTipoUsuario"><a>Agregar
                </a><i class="fas fa-plus"></i></button>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 col-md-10 col-sm-10 ">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Buscar </span>
                </div>
                <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
            </div>
        </div>
        <div class="col-lg-6 col-md-2 col-sm-2 ">
            <button type="button" class="btn btn-info">Buscar </a><i class="fas fa-search"></i></button>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Categoría</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">GLU</th>
                        <td>Glucosa</td>
                        <td>Sangre</td>
                        <td>Examen Normal</td>
                        <td>
                            <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizarExamen">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </span>
                            <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarExamen">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">TRI</th>
                        <td>Triglicéridos</td>
                        <td>Sangre</td>
                        <td>Examen Normal</td>
                        <td>
                            <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizarExamen">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </span>
                            <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarExamen">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">COL</th>
                        <td>Colesterol</td>
                        <td>Sangre</td>
                        <td>Examen Normal</td>
                        <td>
                            <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#actualizarExamen">
                                    <i class="fas fa-sync-alt"></i>
                                </button>
                            </span>
                            <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarExamen">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php 
    mainPages::script();
?>