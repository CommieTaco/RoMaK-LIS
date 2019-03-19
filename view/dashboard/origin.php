<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Procedencia');
    mainPages::navbars();
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-10 col-lg-10 col-sm-10">
                <h3>Procedencia</h3>
            </div>
            <div class="col-xs-6 col-md-2 col-sm-2"><!--Boton agregar nuevo registro-->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registroProcedencia"><a>Agregar </a><i class="fas fa-plus"></i></button>
            </div>
        </div>&nbsp
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 ">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Buscar </span>
                    </div>
                    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </div> 
            <div class="col-lg-2 col-md-2 col-sm-2 "><!---Boton para buscar registro-->
                <button type="button" class="btn btn-info">Buscar </a><i class="fas fa-search"></i></button>
            </div>   
        </div>&nbsp
        <div class="row">
            <div class="table-responsive col-sm-12">
                <table class="table table-hover">
                    <thead>
                        <tr><!--Encabezados de tabla-->
                            <th>Descripción de procedencia</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Cirugía de emergencia</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modificacionProcedencia" data-placement="left"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>        
                                    </div>&nbsp
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionProcedencia"><i class="fas fa-trash"></i></button> 
                                        <span>   
                                    </div>                 
                                </div>        
                            </td>
                        </tr>
                        <tr>
                            <td>Cirugía programada</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modificacionProcedencia" data-placement="left"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>  
                                    </div> &nbsp
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionProcedencia"><i class="fas fa-trash"></i></button> 
                                        <span>   
                                    </div>                 
                                </div>        
                            </td>
                        </tr>
                        <tr>
                            <td>Referido de unidad de salud</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modificacionProcedencia" data-placement="left"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                    </span>  
                                    </div> &nbsp
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionProcedencia"><i class="fas fa-trash"></i></button> 
                                        <span>   
                                    </div>                 
                                </div>        
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="registroProcedencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de Procedencia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"><!--Cuerpo del modal donde se encuentran los campos de registro-->
                        <form>
                            <div class="row"><!--Fila con el campo de la descripción de procedencia-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="descripcionProcedencia">Descripción de procedencia</label>
                                        <input type="text" class="form-control" id="descripcionProcedencia" aria-describedby="emailHelp" placeholder="Ingrese procedencia">
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
        <div class="modal fade" id="modificacionProcedencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar procedencia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"><!--Cuerpo del modal donde se encuentran los campos de registro-->
                        <form>
                            <div class="row"><!--Fila con el campo de descrpción de procedencia-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="descripcionProcedencia">Descripción de procedencia</label>
                                        <input type="text" class="form-control" id="descripcionProcedencia" aria-describedby="emailHelp" placeholder="Ingrese procedencia" value="Cirugía de emergencia">
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
        <div class="modal fade" id="eliminacionProcedencia" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Procedencia</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"><!--Cuerpo del modal donde se encuentran los campos de registro-->
                       <p>¿Estas seguro de eliminar procedencia?
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