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
    <!--Modales-->
    <!-- Modal para registrar exámen -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="agregarExamen">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Registro de Exámen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <form>
                        <div class="form-row">
                                <!--Fila con los todos los campos-->
                            <div class="form-group col-lg-8 col-md-8 col-sm-9">
                                <label for="nombreExamen" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombreExamen" placeholder="Ingrese nombre del exámen">
                            </div>
                            <div class="form-group col-lg-4 col-md-4 col-sm-3">
                                <label for="abreviExamen" class="col-form-label">Abreviación:</label>
                                <input type="text" class="form-control" id="abreviExamen" placeholder="Ingrese abreviación del exámen">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="descripcionExamen">Descripción:</label>
                                <textarea class="form-control" id="descripcionExamen" rows="3" placeholder="Ingrese descripción del exámen"></textarea>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label for="tipoExamen">Tipo de Exámen:</label>
                                <select id="tipoExamen" class="form-control">
                                    <option selected>Seleccione un tipo</option>
                                    <option>Sangre</option>
                                    <option>Orina</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label for="categoriaExamen">Categoria de Exámen:</label>
                                <select id="categoriaExamen" class="form-control">
                                    <option selected>Seleccione una categoria</option>
                                    <option>Examen Normal</option>
                                    <option>Examen Calculado 1</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label for="tipoExamen">Equipo:</label>
                                <select id="tipoExamen" class="form-control">
                                    <option selected>Seleccione un equipo</option>
                                    <option>Equipo 1</option>
                                    <option>Equipo 2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <h6>Rangos de Referencia</h6>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Rango Inicial</th>
                                            <th scope="col">Rango Final</th>
                                            <th scope="col">Edad Inicial</th>
                                            <th scope="col">Edad Final</th>
                                            <th scope="col">Género</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="rangoInicial">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="rangoFinal">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="edadInicial">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="edadFinal">
                                            </td>
                                            <td>
                                                <select id="tipoExamen" class="form-control" id="generoRango">
                                                    <option selected>Seleccione un género</option>
                                                    <option>Masculino</option>
                                                    <option>Femenino</option>
                                                    <option>General</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="descripcionRango">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="tooltip"
                                                    data-placement="right" title="Más"><i class="fas fa-plus"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer"><!--footer del modal donde se encuentra el boton de regresar y guardar registro-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip"
                        data-placement="bottom" title="Salir"><i class="fas fa-arrow-left"></i></button>
                    <button type="button" class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Guardar"><i
                            class="fas fa-save"></i></button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="actualizarExamen">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Actualizar Exámen</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-lg-8 col-md-8 col-sm-9">
                                <label for="nombreExamen" class="col-form-label">Nombre:</label>
                                <input type="text" class="form-control" id="nombreExamen" value="Glucosa" placeholder="Ingrese nombre del exámen">
                            </div>
                            <div class="form-group col-lg-4 col-md-4 col-sm-3">
                                <label for="abreviExamen" class="col-form-label">Abreviación:</label>
                                <input type="text" class="form-control" id="abreviExamen" value="GLU" placeholder="Ingrese abreviación del exámen">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="descripcionExamen">Descripción:</label>
                                <textarea class="form-control" id="descripcionExamen" rows="3" placeholder="Ingrese descripción del exámen">Exámen para medir el nivel de azúcar en la sangre en el organismo del paciente </textarea>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label for="tipoExamen">Tipo de Exámen:</label>
                                <select id="tipoExamen" class="form-control">
                                    <option selected>Sangre</option>
                                    <option>Orina</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label for="categoriaExamen">Categoria de Exámen:</label>
                                <select id="categoriaExamen" class="form-control">
                                    <option selected>Examen Normal</option>
                                    <option>Examen Calculado 1</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12 col-lg-4">
                                <label for="tipoExamen">Equipo:</label>
                                <select id="tipoExamen" class="form-control">
                                    <option selected>Equipo 1</option>
                                    <option>Equipo 2</option>
                                </select>
                            </div>
                            <div class="form-group col-md-12">
                                <span class="switch">
                                    <input type="checkbox" class="switch" id="switch-id">
                                    <label for="switch-id">Small switch</label>
                                </span>
                            </div>
                            <div class="form-group col-md-12">
                                <h6>Rangos de Referencia</h6>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Rango Inicial</th>
                                            <th scope="col">Rango Final</th>
                                            <th scope="col">Edad Inicial</th>
                                            <th scope="col">Edad Final</th>
                                            <th scope="col">Género</th>
                                            <th scope="col">Descripción</th>
                                            <th scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="rangoInicial" value="0">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="rangoFinal" value="60">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="edadInicial" value="0">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="edadFinal" value="99">
                                            </td>
                                            <td>
                                                <select id="tipoExamen" class="form-control" id="generoRango">
                                                    <option>Masculino</option>
                                                    <option>Femenino</option>
                                                    <option selected>General</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="descripcionRango" value="Bajo">
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="rangoInicial" value="61">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="rangoFinal" value="100">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="edadInicial" value="0">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="edadFinal" value="99">
                                            </td>
                                            <td>
                                                <select id="tipoExamen" class="form-control" id="generoRango">
                                                    <option>Masculino</option>
                                                    <option>Femenino</option>
                                                    <option selected>General</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="descripcionRango" value="Normal">
                                            </td>
                                            <td>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control" id="rangoInicial" value="101">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="rangoFinal" value="300">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="edadInicial" value="0">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="edadFinal" value="99">
                                            </td>
                                            <td>
                                                <select id="tipoExamen" class="form-control" id="generoRango">
                                                    <option>Masculino</option>
                                                    <option>Femenino</option>
                                                    <option selected>General</option>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" id="descripcionRango" value="Alto">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-info" data-toggle="tooltip"
                                                    data-placement="right" title="Más"><i class="fas fa-plus"></i></button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
    <div class="modal fade" id="eliminarExamen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <p>¿Está seguro de eliminar el exámen?</p>
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