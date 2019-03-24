<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Hospitales');
    mainPages::navbars();
?>
<!--Container con el titulo del mantenimiento y el boton agregar registro-->
<div class="container" id="bodyWrapper">
    <div class="row">
        <div class="col-xs-6 col-md-10 col-lg-10 col-sm-10">
            <h3>Hospitales</h3>
        </div>
        <div class="col-xs-6 col-md-2 col-sm-2">
            <!--Boton agregar nuevo registro-->
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#registroHospital"><a>Agregar
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
        <div class=" table-responsive col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <!--Encabezados de tabla-->
                        <th scope="col">Logo</th>
                        <th scope="col">Hospital</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!--Datos de la tabla-->
                        <td><img src="../../resources/img/hospitals/hospitalID1.png" height="100"></td>
                        <td>Hospital Bloom</td>
                        <td>hospitalBloom@gmail.com</td>
                        <td>85476389</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modificacionHospital"
                                            title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionHospital"><i
                                                class="fas fa-trash"></i></button>
                                        <span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!--Datos de la tabla-->
                        <td><img src="../../resources/img/hospitals/hospitalID1.png" height="100"></td>
                        <td>Hospital San Juan</td>
                        <td>sanjuan@gmail.com</td>
                        <td>54128036</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modificacionHospital"
                                            data-placement="left" title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionHospital"><i
                                                class="fas fa-trash"></i></button>
                                        <span>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <!--Datos de la tabla-->
                        <td><img src="../../resources/img/hospitals/hospitalID1.png" height="100"></td>
                        <td>Hospital Rosales</td>
                        <td>hrosales@gmail.com</td>
                        <td>12456398</td>
                        <td>
                            <div class="row">
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="left" title="Actualizar">
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modificacionHospital"
                                            data-placement="left" title="Actualizar"><i class="fas fa-sync-alt"></i></button>
                                    </span>
                                </div> &nbsp
                                <div class="col-xs-12">
                                    <span data-toggle="tooltip" data-placement="right" title="Eliminar">
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminacionHospital"><i
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
    <!-- Modal para registrar hospital -->
    <div class="modal fade" id="registroHospital" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registro Hospital</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <form>
                        <div class="row">
                            <!--Fila con los campos nombre y direccion del hospital-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nombreHospital">Nombre Hospital</label>
                                    <input type="text" class="form-control" id="nombreHospital" aria-describedby="emailHelp"
                                        placeholder="Ingrese nombre">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="direccionHospital">Dirección</label>
                                    <input type="text" class="form-control" id="direccionHospital" placeholder="Ingrese dirección">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--Fila con los campos correo y telefono del hospital-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correoHospital" placeholder="Ingrese correo">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefonoHospital" placeholder="Ingrese teléfono ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--Fila con los campos cantidas de camillas y cantidad de camas-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="camillas">Cantidad de camillas</label>
                                    <input type="number" class="form-control" id="cantidadCamillas" placeholder="Ingrese cantidad">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="camillas">Cantidad de camas</label>
                                    <input type="number" class="form-control" id="cantidadCamas" placeholder="Ingrese cantidad">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--Fila con el campo para seleccionar archivo de icono-->
                            <div class="col-lg-12">
                                <label for="logo">Logo del hospital</label>
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
    <div class="modal fade" id="modificacionHospital" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Hospital</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <form>
                        <div class="row">
                            <!--Fila con los campos nombre y direccion del hospital-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="nombreHospital">Nombre Hospital</label>
                                    <input type="text" class="form-control" id="nombreHospital" aria-describedby="emailHelp"
                                        placeholder="Ingrese el nombre del hospital" value="Hospital Bloom">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="direccionHospital">Dirección</label>
                                    <input type="text" class="form-control" id="direccionHospital" placeholder="Ingrese dirección del hospital" value="Bulevar De Los Heroes, San Salvador">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--Fila con los campos correo y telefono del hospital-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="correo">Correo</label>
                                    <input type="email" class="form-control" id="correoHospital" placeholder="Ingrese correo del hospital" value="hospitalBloom@gmail.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input type="text" class="form-control" id="telefonoHospital" placeholder="Ingrese teléfono del hospital" value="85476389">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--Fila con los campos cantidas de camillas y cantidad de camas-->
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="camillas">Cantidad de camillas</label>
                                    <input type="number" class="form-control" id="cantidadCamillas" placeholder="Ingrese cantidad" value="250">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="camillas">Cantidad de camas</label>
                                    <input type="number" class="form-control" id="cantidadCamas" placeholder="Ingrese cantidad" value="300">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--Fila con el campo para seleccionar archivo de icono-->
                            <div class="col-lg-12">
                                <label for="logo">Logo del hospital</label>
                                <div class="input-group mb-3">
                                    <div class="custom-file">
                                        <label class="custom-file-label" for="icono">Seleccione archivo</label>
                                        <input type="file" class="custom-file-input" id="logoHospital" value="13092483953.jpg">
                                    </div>
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
    <div class="modal fade" id="eliminacionHospital" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Eliminar Hospital</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de registro-->
                    <p>¿Estas seguro de eliminar hospital?
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