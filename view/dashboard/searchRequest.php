<?php 
    //inclusion de header y navbars a la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Búsqueda de solicitudes');
    mainPages::navbars();
?>
<!--Creación de container donde se encuentran todos los elementos de la pagina-->
<div class="container-fluid" id="bodyWrapper">
    <!--Container donde se encuentran los campos para filtrar busqueda-->
    <div class="row">
        <!---->
        <div class="mb-3">
            <h3>Búsquedas de solicitudes</h3>
        </div>
    </div>
    <div class="row">
        <!--Fila con todos los campos para realizar busqueda-->
        <div class="col-lg-3 col-md-6">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Búsqueda">
            </div>
        </div>
        <div class="col-lg-2 col-md-6">
            <div class="input-group mb-3">
                <select class="form-control" id="tiempo">
                    <option>2 días</option>
                    <option>3 días</option>
                    <option>4 días</option>
                    <option>5 días o más</option>
                </select>
            </div>
        </div>
        <div class="col-lg-2 col-sm-5 col-md-5 ">
            <div class="input-group mb-3">
                <input type="date" class="form-control" id="fechaInicio">
            </div>
        </div>
        <h2 id="guion-center">-</h2>
        <div class="col-lg-2 col-sm-5 col-md-5">
            <div class="input-group mb-3">
                <input type="date" class="form-control" id="fechaFin">
            </div>
        </div>
        <div class="col-lg-2 col-xs-12 offset-xs-6">
            <div class="mb-3">
                <button type="button" class="btn btn-success" id="button-center">Buscar </a><i
                        class="fas fa-search"></i></button>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <!--Fila donde se encuentran 2 contenedores uno con todas las solicitudes realizadas y otro con los detalles de la solicitud seleccionada-->
        <div class="col-lg-6">
            <div class="container-fluid" id="request-container">
                <div class="container" id="c1">
                    <div class="row">
                        Solicitudes
                    </div>
                </div>
                <div class="container">
                    <!--Contenedor donde se encuentran las solicitudes-->
                    <div class="card style mb-3">
                        <!--Creacion de carta donde se muestran los datos de la solicitud-->
                        <div class="card-body">
                            <!--Creacion y colocacion de la informacionn de la solicitud en el cuerpo de la carta-->
                            <div class="row">
                                <div class="offset-lg-4 offset-md-4">
                                    <p class="text-center">Manuel Araniva</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <p>Tipo de muestra: Sanguinea</p>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-2">
                                    <p>N° sol: 1</p>
                                </div>
                                <div class="col-1">
                                    <a href="modifyRequests.php">
                                        <button type="button" class="btn" id="button-center" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-pencil-alt"></i></button>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-lg-1 col-md-5">
                                    <p>19/3/2019 3:22 pm</p>
                                </div>
                                <div class="offset-lg-1 col-md-4">
                                    <p>N° Reg: 5412</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card style mb-3">
                        <!--Creacion de carta donde se muestran los datos de la solicitud-->
                        <div class="card-body">
                            <!--Creacion y colocacion de la informacionn de la solicitud en el cuerpo de la carta-->
                            <div class="row">
                                <div class="offset-lg-4 offset-md-4">
                                    <p class="text-center">Rolin Azmitia</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <p>Tipo de muestra: Orina</p>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-2">
                                    <p>N° sol: 2</p>
                                </div>
                                <div class="col-1">
                                    <a href="modifyRequests.php">
                                        <button type="button" class="btn" id="button-center" href="modifyRequest.php" data-toggle="tooltip" data-placement="top" title="Editar"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-lg-1 col-md-5">
                                    <p>20/3/2019 4:32 pm</p>
                                </div>
                                <div class="offset-lg-1 col-md-4">
                                    <p>N° Reg: 5413</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card style mb-3">
                        <!--Creacion de carta donde se muestran los datos de la solicitud-->
                        <div class="card-body">
                            <!--Creacion y colocacion de la informacionn de la solicitud en el cuerpo de la carta-->
                            <div class="row">
                                <div class="offset-lg-4 offset-md-4">
                                    <p class="text-center">Jazmin Flores</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"></label>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <p>Tipo de muestra: Sanguinea</p>
                                </div>
                                <div class="col-lg-2 col-sm-12 col-md-2">
                                    <p>N° sol: 3</p>
                                </div>
                                <div class="col-1">
                                    <a href="modifyRequests.php">
                                        <button type="button" class="btn" id="button-center" data-toggle="tooltip" data-placement="top" title="Editar"><i
                                            class="fas fa-pencil-alt"></i></button>
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="offset-lg-1 col-md-5">
                                    <p>20/3/2019 5:00 pm</p>
                                </div>
                                <div class="offset-lg-1 col-md-4">
                                    <p>N° Reg: 5414</p>
                                </div>
                            </div>
                        </div>
                    </div>&nbsp
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="container-fluid" id="table-container">
                <!--Contenedor que posee la tabla donde se muestran los detalles de las solicitud-->
                <div class="row">
                    <!--Fila con los datos personales del paciente al que pertenece la solicitud-->
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <p>Manuel Araniva</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <p>18 años</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <p>Hombre</p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                        <p>N°R:5412</p>
                    </div>
                </div>
                <div class="row">
                    <!--Fila donde se ubica la tabla con los detalles de la solicitud-->
                    <div class="container-fluid">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <!--Encabezado de la tabla-->
                                    <tr>
                                        <th>Examen</th>
                                        <th>Tipo de examen</th>
                                        <th>Resultado</th>
                                        <th>Valores normales</th>
                                        <th>Unidad</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="examen1">
                                                <label class="custom-control-label" for="examen1"> Sodio</label>
                                            </div>
                                        </th>
                                        <td>Quimica Urinaria</td>
                                        <td>6.53</td>
                                        <td>0.90-1.20</td>
                                        <td>mg/dL</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="examen2">
                                                <label class="custom-control-label" for="examen2"> Bilirubina</label>
                                            </div>
                                        </th>
                                        <td>Quimica Urinaria</td>
                                        <td>8.93</td>
                                        <td>0.60-1.40</td>
                                        <td>mg/dL</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="examen3">
                                                <label class="custom-control-label" for="examen2"> Potasio</label>
                                            </div>
                                        </th>
                                        <td>Quimica Urinaria</td>
                                        <td>7.12</td>
                                        <td>0.7-2.40</td>
                                        <td>mg/dL</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid ">
        <!--Container para la colocación de los botones de la vista-->
        <div class="row">
            <div class="col-lg-6 col-sm-12 col-md-6">
                <div class="container-fluid">
                    <div class="offset-lg-7 mb-3">
                        <button type="button" class="btn btn-danger">Imprimir codigos de barra </a></button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-sm-12 col-md-6 ">
                <div class="container-fluid">
                    <div class="offset-lg-6 mb-3">
                            <button type="button" class="btn btn-danger">Imprimir</a></button>                        
                            <button type="button" class="btn btn-danger">Validar e imprimir</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======

>>>>>>> fb706c6510ed801259bea2073dff95cb942f5ba3
<?php 
    //Inclusión de 
    mainPages::script();
?>