<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Perfiles');
    mainPages::navbars();
?>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-10 col-lg-10 col-sm-10">
                <h3>Perfiles</h3>
            </div>
            <div class="col-xs-6 col-md-2 col-sm-2"><!--Boton agregar nuevo perfil-->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registroPerfil"><a>Agregar </a><i class="fas fa-plus"></i></button>
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
            <div class="col-lg-2 col-md-2 col-sm-2 "><!---Boton para buscar perfil-->
                <button type="button" class="btn btn-info">Buscar </a><i class="fas fa-search"></i></button>
            </div>   
        </div>&nbsp
        <div class="row">
            <div class="table-responsive col-sm-12">
                <table class="table table-hover">
                    <thead>
                        <tr><!--Encabezados de tabla-->
                            <th>Nombre de perfil</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Perfil 1</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modificacionPerfil" data-placement="left"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>        
                                    </div>&nbsp
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionPerfil"><i class="fas fa-trash"></i></button> 
                                        <span>   
                                    </div>                 
                                </div>        
                            </td>
                        </tr>
                        <tr>
                            <td>Perfil 2</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modificacionPerfil" data-placement="left"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                        </span>  
                                    </div> &nbsp
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionPerfil"><i class="fas fa-trash"></i></button> 
                                        <span>   
                                    </div>                 
                                </div>        
                            </td>
                        </tr>
                        <tr>
                            <td>Perfil 3</td>
                            <td>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                            <button type="button" class="btn btn-info"  data-toggle="modal" data-target="#modificacionPerfil" data-placement="left"
                                                title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                    </span>  
                                    </div> &nbsp
                                    <div class="col-xs-12">
                                        <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionPerfil"><i class="fas fa-trash"></i></button> 
                                        <span>   
                                    </div>                 
                                </div>        
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="modal fade" id="registroPerfil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro de perfil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"><!--Cuerpo del modal donde se encuentran los campos de registro de perfil-->
                        <form>
                            <div class="row"><!--Fila con el campo del nombre del perfil-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nombrePerfil">Nombre del Perfil</label>
                                        <input type="text" class="form-control" id="nombrePerfil" aria-describedby="emailHelp" placeholder="Ingrese perfil">
                                    </div>
                                </div>      
                            </div>
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Buscar </span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Ingrese exámen">
                                    </div>
                                </div> 
                                <div class="col-lg-2 col-md-2 col-sm-2 "><!---Boton para buscar exámen-->
                                    <button type="button" class="btn btn-info">Buscar </a><i class="fas fa-search"></i></button>
                                </div>   
                            </div>&nbsp 
                            <div class="form-group col-md-12">
                                <h6>Exámenes</h6>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Exámen</th>
                                            <th scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> Exámen uno </td>
                                            <td> 
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Exámen dos </td>
                                            <td> 
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"><!--footer del modal donde se encuentra el boton de regresar y guardar perfil-->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                        <button type="button" class="btn btn-success"><i class="fas fa-save "></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modificacionPerfil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar Perfil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"><!--Cuerpo del modal donde se encuentran los campos de registro-->
                        <form>
                            <div class="row"><!--Fila con campo de nombre del perfil-->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="nombrePerfil">Nombre del Perfil</label>
                                        <input type="text" class="form-control" id="nombrePerfil" aria-describedby="emailHelp" placeholder="Ingrese el nombre" value="Perfil 1">
                                    </div>
                                </div>      
                            </div>    
                            <div class="row">
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text" id="inputGroup-sizing-default">Buscar </span>
                                        </div>
                                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  placeholder="Ingrese exámen">
                                    </div>
                                </div> 
                                <div class="col-lg-2 col-md-2 col-sm-2 "><!---Boton para buscar exámen-->
                                    <button type="button" class="btn btn-info">Buscar </a><i class="fas fa-search"></i></button>
                                </div>   
                            </div>&nbsp 
                            <div class="form-group col-md-12">
                                <h6>Exámenes</h6>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th scope="col">Exámen</th>
                                            <th scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> Exámen uno </td>
                                            <td> 
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td> Exámen dos </td>
                                            <td> 
                                                <div class="form-check">
                                                    <input class="form-check-input position-static" type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer"><!--footer del modal donde se encuentra el boton de regresar y guardar perfil-->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                        <button type="button" class="btn btn-info"><i class="fas fa-sync-alt"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="eliminacionPerfil" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Perfil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"><!--Cuerpo del modal donde se encuentran los campos de registro-->
                       <p>¿Estás seguro de eliminar perfil?
                    </div>
                    <div class="modal-footer"><!--footer del modal donde se encuentra el boton de regresar y eliminar perfil-->
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