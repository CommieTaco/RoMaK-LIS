<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Usuarios');
    mainPages::navbars();
?>
    <div class="container"><!--Container con el titulo del mantenimiento y el boton agregar nuevo registro-->
        <div class="row">
            <div class="col-xs-6 col-md-10 col-lg-10 col-sm-10">
                <h3>Usuarios</h3>
            </div>
            <div class="col-xs-6 col-md-2 col-sm-2">
                <!--Boton agregar nuevo registro-->
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registroUsuario"><a>Agregar
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
        </div>
        <div class="row"><!--Row con la tabla que muestra los registros-->
             <!---Tabla con los registros-->
        <div class="table-responsive col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <!--Encabezados de tabla-->
                        <th scope="col">Foto</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!--Datos de la tabla-->
                        <th scope="row"><img src="../../resources/img/user/user.png" height="100"></th>
                        <td>Manuel</td>
                        <td>Araniva</td>
                        <td>Administrador</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modificacionUsuario">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionUsuario">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!--Datos de la tabla-->
                        <th scope="row"><img src="../../resources/img/user/user.png" height="100"></th>
                        <td>Karla</td>
                        <td>Ramirez</td>
                        <td>Secretaria</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modificacionUsuario">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionUsuario">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!--Datos de la tabla-->
                        <th scope="row"><img src="../../resources/img/user/user.png" height="100"></th>
                        <td>Rolin</td>
                        <td>Azmitia</td>
                        <td>Jefe de hospital</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modificacionUsuario">
                                            <i class="fas fa-sync-alt"></i>
                                        </button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionUsuario">
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
        <!-- Modal para registrar usuario -->
        <div class="modal fade" id="registroUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Registro Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Cuerpo del modal donde se encuentran los campos de registro-->
                        <form>
                            <div class="row">
                                <!--Fila con los campos nombre y apellido y genero del usuario-->
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="nombreUsuario">Nombre</label>
                                        <input type="text" class="form-control" id="nombreUsuario" aria-describedby="emailHelp"
                                            placeholder="Ingrese nombre">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="apellidoUsuario">Apellido</label>
                                        <input type="text" class="form-control" id="apellidoUsuario" placeholder="Ingrese Apellido">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="sel1">Género:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Masculino</option>
                                            <option>Femenino</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--Fila con los campos correo y contraseña-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="correo">Correo</label>
                                        <input type="email" class="form-control" id="correoUsuario" placeholder="Ingrese correo">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="telefono">Contraseña</label>
                                        <input type="password" class="form-control" id="contrasenaUsuario" placeholder="Ingrese contraseña ">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--Fila con los campos fecha de nacimiento  y estado usuario-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="camillas">Fecha de nacimiento</label>
                                        <input type="date" class="form-control" id="correoUsuario" placeholder="Ingrese correo">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sel1">Estado:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Activo</option>
                                            <option>Inactivo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sel1">Tipo de usuario:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Admin</option>
                                            <option>Jefe de hospital</option>
                                            <option>Secretaria</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sel1">Hospital:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Rosales</option>
                                            <option>Hospital Bloom</option>
                                            <option>San Juan</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <!--Fila con el campo para seleccionar archivo de imagen-->
                                <div class="col-lg-12">
                                    <label for="logo">Foto:</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="icono">Seleccione archivo</label>
                                            <input type="file" class="custom-file-input" id="logoHospital">
                                        </div>
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
        <!-- Modal para modificar usuario -->
        <div class="modal fade" id="modificacionUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!--Cuerpo del modal donde se encuentran los campos de modificacion-->
                        <form>
                            <div class="row">
                                <!--Fila con los campos correo y contraseña-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="correo">Correo</label>
                                        <input type="email" class="form-control" id="correoUsuario" placeholder="Ingrese correo" value="manuelaraniva@gmail.com">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sel1">Estado:</label>
                                        <select class="form-control" id="sel1">
                                            <option selected>Activo</option>
                                            <option>Inactivo</option>
                                        </select>
                                    </div>
                                </div>                                
                            </div>
                            <div class="row">
                                <!--Fila con los campos de hospital al que pertenece el usuario-->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="sel1">Hospital:</label>
                                        <select class="form-control" id="sel1">
                                            <option>Rosales</option>
                                            <option selected>Hospital Bloom</option>
                                            <option>San Juan</option>
                                        </select>
                                    </div>
                                </div>
                                <!--Fila con el campo para seleccionar archivo de imagen-->
                                <div class="col-lg-6">
                                    <label for="logo">Foto:</label>
                                    <div class="input-group mb-3">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="icono">Seleccione archivo</label>
                                            <input type="file" class="custom-file-input" id="logoHospital">
                                        </div>
                                    </div>
                                </div>                                
                            </div>                            
                        </form>
                    </div>
                    <div class="modal-footer">
                        <!--footer del modal donde se encuentra el boton de regresar y modificar registro-->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-arrow-left"></i></button>
                        <button type="button" class="btn btn-info"><i class="fas fa-sync-alt "></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal para verificar eliminacion de usuario -->
        <div class="modal fade" id="eliminacionUsuario" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminación de  Usuario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Esta seguro que desea eliminar usuario?                        
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