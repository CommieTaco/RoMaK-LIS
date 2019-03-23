<?php 
    include '../../core/helpers/mainPages.php';
    mainPages::header('Busqueda de solicitudes');
    mainPages::navbars();
?>
    <div class="container-fluid">
        <div class="row">
            <h3>Búsquedas de solicitudes</h3>
        </div>&nbsp
        <div class="row">
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
            </div>&nbsp 
            <div class="col-lg-2 col-sm-5 col-md-5 ">
                <div class="input-group mb-3">
                    <input type="date" class="form-control" id="fechaInicio"> 
                </div>    
            </div>               
                <h2 id="guion-center">-</h2>              
            <div class="col-lg-2 col-sm-5  col-md-5">
                <div class="input-group mb-3">    
                    <input type="date" class="form-control" id="fechaFin"> 
                </div>    
            </div>&nbsp
            <div class="col-lg-2 col-xs-12 offset-xs-6">
                <button type="button" class="btn btn-success" id="button-center">Buscar </a><i class="fas fa-search"></i></button>
            </div>            
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="container-fluid" id="request-container">
                    <div class="container" id="c1">
                        <div class="row">
                            Solicitudes
                        </div>
                    </div>
                    <div class="container">
                        <div class="card style">
                            <div class="card-body">
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
                                         <button type="button" class="btn" id="button-center"><i class="fas fa-pencil-alt"></i></button>
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
                        </div>&nbsp
                        <div class="card style">
                            <div class="card-body">
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
                                         <button type="button" class="btn" id="button-center"><i class="fas fa-pencil-alt"></i></button>
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
                        </div>&nbsp
                        <div class="card style">
                            <div class="card-body">
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
                                         <button type="button" class="btn" id="button-center"><i class="fas fa-pencil-alt"></i></button>
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
                    <div class="row">
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
                        <div class="container-fluid">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
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
        </div> &nbsp
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-6 col-sm-4">
                    <button type="button" class="btn btn-danger">Imprimir codigos de barra </a></button>
                </div>
                <div class="col-lg-4 col-sm-4">
                    <button type="button" class="btn btn-danger">Imprimir</a></button>                  
                </div> 
                <div class="col-lg-2 col-sm-4">
                    <button type="button" class="btn btn-danger">Validar e imprimir</a></button>
                </div>
            </div>
        </div>     
    </div>
<?php 
    mainPages::script();
?>
