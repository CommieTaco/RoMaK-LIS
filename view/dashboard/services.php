<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Servicios');
    mainPages::navbars();
?>
    <div class="container" id="bodyWrapper">
        <div class="row">
            <div class="col-xs-6 col-md-10 col-lg-10 col-sm-10 mb-3">
                <h3>Servicios</h3>
            </div>
            <div class="col-xs-6 col-md-2 col-sm-2 mb-3"><!--Boton agregar nuevo registro-->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registroServicio"><a>Agregar </a><i class="fas fa-plus"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 ">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Buscar </span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div> 
            <div class="col-lg-2 col-md-2 col-sm-2 mb-3"><!---Boton para buscar registro-->
                <button type="button" class="btn btn-info">Buscar </a><i class="fas fa-search"></i></button>
            </div>   
        </div>
        <div class="row">
            <div class="table-responsive col-sm-12">
                <table class="table table-hover">
                    <thead>
                        <tr><!--Encabezados de tabla-->
                            <th>SERVICIOS HOSPITALARIOS</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Pediatria</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12" id="button-action">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modificacionServicio" data-placement="left"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>        
                                    </div>
                                    <div class="col-xs-12" id="button-action">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionServicio"><i class="fas fa-trash"></i></button> 
                                        <span>   
                                    </div>                 
                                </div>        
                            </td>
                        </tr>
                        <tr>
                            <td>Ginecología</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12" id="button-action">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modificacionServicio" data-placement="left"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>  
                                    </div>
                                    <div class="col-xs-12" id="button-action">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionServicio"><i class="fas fa-trash"></i></button> 
                                        <span>   
                                    </div>                 
                                </div>        
                            </td>
                        </tr>
                        <tr>
                            <td>Oncología</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12" id="button-action">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modificacionServicio" data-placement="left"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>  
                                    </div>
                                    <div class="col-xs-12" id="button-action">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionServicio"><i class="fas fa-trash"></i></button> 
                                        <span>   
                                    </div>                 
                                </div>        
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="registroServicio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro Servicio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"><!--Cuerpo del modal donde se encuentran los campos de registro-->
                        <form>
                            <div class="row"><!--Fila con los campos nombre y direccion del hospital-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nombreServicio">Nombre del Servicio</label>
                                        <input type="text" class="form-control" id="nombreServicio" aria-describedby="emailHelp" placeholder="Ingrese servicio">
                                    </div>
                                </div>      
                            </div>    
                        </form>
                    </div>
                    <div class="modal-footer"><!--footer del modal donde se encuentra el boton de regresar y guardar registro-->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                        <button type="button" class="btn btn-success"><i class="fas fa-save "></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modificacionServicio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar Servicio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"><!--Cuerpo del modal donde se encuentran los campos de registro-->
                        <form>
                            <div class="row"><!--Fila con los campos nombre y direccion del hospital-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nombreServicio">Nombre del Servicio</label>
                                        <input type="text" class="form-control" id="nombreServicioM" aria-describedby="emailHelp" placeholder="Ingrese servicio" value="Pediatria">
                                    </div>
                                </div>      
                            </div>    
                        </form>
                    </div>
                    <div class="modal-footer"><!--footer del modal donde se encuentra el boton de regresar y guardar registro-->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                        <button type="button" class="btn btn-info"><i class="fas fa-sync-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="eliminacionServicio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Servicio</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"><!--Cuerpo del modal donde se encuentran los campos de registro-->
                       <p>¿Estas seguro de eliminar servicio?
                    </div>
                    <div class="modal-footer"><!--footer del modal donde se encuentra el boton de regresar y eliminar registro-->
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