<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Equipo');
    mainPages::navbars();
?>
   <!--Container con el titulo del mantenimiento y el boton para agregar un nuevo registro--> 
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-10 col-lg-10 col-sm-10">
                <h3>Equipo Biomédico</h3>
            </div>
            <div class="col-xs-6 col-md-2 col-sm-2">
                <!--Boton agregar nuevo registro-->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registroEquipo"><a>Agregar
                    </a><i class="fas fa-plus"></i></button>
            </div>
        </div>&nbsp
        <div class="row"><!--Campo para buscar un registro-->
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
            <div class=" table-responsive col-sm-12">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <!--Encabezados de tabla-->
                            <th scope="col">Nombre equipo</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Tipo de equipo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <!--Datos de la tabla-->
                            <td>Equipo 1</td>
                            <td>Equipo que realiza exámenes químicos</td>
                            <td>Química</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modificacionEquipo"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>
                                    </div> &nbsp
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarEquipo"><i
                                                    class="fas fa-trash"></i></button>
                                        <span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <!--Datos de la tabla-->
                            <td>Equipo 2</td>
                            <td>Equipo que realiza exámenes de hematología</td>
                            <td>Hematología</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modificacionEquipo"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>
                                    </div> &nbsp
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarEquipo"><i
                                                    class="fas fa-trash"></i></button>
                                        <span>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <!--Datos de la tabla-->
                            <td>Equipo 3</td>
                            <td>Equipo para realizar exámenes químicos a alta velocidad</td>
                            <td>Química</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modificacionEquipo"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>
                                    </div> &nbsp
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarEquipo"><i
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
        <!-- Modal para registrar equipo -->
        <div class="modal fade" id="registroEquipo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro Equipo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Cuerpo del modal donde se encuentran los campos de registro de equipo-->
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group"><!--Campo Nombre del equipo-->
                                        <label for="direccionHospital">Nombre Equipo</label>
                                        <input type="text" class="form-control" id="nombreEquipo" placeholder="Ingrese nombre del equipo">
                                    </div>
                                </div>
                                <div class="col-lg-6"><!--Lista de tipo de equipo-->
                                    <label for="sel1">Tipo de equipo:</label>
                                    <select class="form-control" id="sel1">
                                        <option selected>Selecciona un tipo de equipo</option>
                                        <option>Quimica</option>
                                        <option>Hematologia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"><!--Area para la descripcion del equipo-->
                                    <label for="comment">Descripción del equipo:</label>
                                    <textarea class="form-control" rows="5" id="descripcion"></textarea>
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
        <!-- Modal para modificar datos del equipo -->
        <div class="modal fade" id="modificacionEquipo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar Equipo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Cuerpo del modal donde se encuentran los campos de registro de equipo-->
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="direccionHospital">Nombre Equipo</label>
                                        <input type="text" class="form-control" id="nombreEquipo" placeholder="Ingrese nombre del equipo" value="Equipo 1">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <label for="sel1">Tipo de equipo:</label>
                                    <select class="form-control" id="sel1">
                                        <option selected>Quimica</option>
                                        <option>Hematologia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="comment">Descripción del equipo:</label>
                                    <textarea class="form-control" rows="5" id="descripcion">Equipo que realiza exámenes químicos</textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!--footer del modal donde se encuentra el boton de regresar y guardar registro-->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                        <button type="button" class="btn btn-primary"><i class="fas fa-sync-alt "></i></button>
                    </div>
                </div>
            </div>
        </div>   
        <!-- Modal para eliminar datos del equipo -->
        <div class="modal fade" id="eliminarEquipo" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Equipo</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                       ¿Estas seguro que deseas eliminar el equipo?
                    </div>
                    <div class="modal-footer">
                        <!--footer del modal donde se encuentra el boton de regresar y guardar registro-->
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