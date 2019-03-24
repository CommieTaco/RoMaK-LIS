<?php 
    require_once '../../core/helpers/mainPages.php';
    mainPages::header("Principal");
    mainPages::navbars();
?>
<div class="container-fluid" id="bodyWrapper">
    <div class="row" id="mains">
        <div class="col-12">
            <!-- Sección "header" o superior -->
            <div class="container-fluid" id="headers">
                <div class="row justify-content-start">
                    <div class="col-md-3 justify-content-start">
                        <div class="mb-3">
                            <h3>Solicitud N° 3405</h3>
                        </div>
                    </div>
                    <div class="col-md-3 justify-content-start">
                        <div class="mb-3">
                            <input type="text" class="form-control form-control" name="registerNum" id="regi-num"
                                placeholder="N° de registro">
                        </div>
                    </div>
                    <div class="col-md-3 justify-content-start">
                        <div class="mb-3">
                            <select name="selectSample" id="sample-select" class="form-control">
                                <option value="0" selected disabled>Tipo de muestra</option>
                                <option value="1">Orina</option>
                                <option value="2">Sangre</option>
                                <option value="3">Otros</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <input type="search" class="form-control form-control" name="searchTest" id="test-search"
                            placeholder="Buscar exámen...">
                    </div>
                </div>
            </div>
            <!-- Termina el header -->

            <!-- Sección "body" o el contenido/cuerpo -->
            <div class="container-fluid">
                <div class="row" id="requests-body">

                    <!-- Datos del paciente y del hospital -->
                    <div class="col-lg-3">
                        <div class="container-fluid">
                            <div class="row">
                                <!-- Datos demográficos del paciente -->
                                <div class="col-md-12" id="demographic-data">
                                    <div class="container-fluid">
                                        <div class="row justify-content-between">
                                            <div class="col-md-12">
                                                <h2 id="section-header">Datos demográficos</h2>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center">
                                            <div class="col-md-12" id="demo-header">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="STAT" class="custom-control-input">
                                                    <label for="STAT" class="custom-control-label">STAT</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Ingresa nombres de paciente -->
                                        <div class="row" id="entry-field">
                                            <div class="col">
                                                <input type="text" class="form-control" name="namePatient"
                                                    id="patient-name" placeholder="Nombres">
                                            </div>

                                        </div>
                                        <!-- Ingresa apellidos de paciente -->
                                        <div class="row" id="entry-field">
                                            <div class="col">
                                                <input type="text" class="form-control" name="lastNamesPatient"
                                                    id="last-name-patient" placeholder="Apellidos">
                                            </div>
                                        </div>
                                        <div class="row" id="entry-field">
                                            <!--  <div class="col-md-12">
                                                        <input type="text" class="form-control" name="agePatient" id="age-patient"
                                                            placeholder="Edad paciente">
                                                    </div> -->
                                            <div class='input-group date col-md-12' id='datetimepicker1'>
                                                <input type='date' class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-calendar"></span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="row" id="entry-field">
                                            <div class="col-md-12">
                                                <select name="genderPatient" id="gender-patient" class="form-control">
                                                    <option value="0" selected disabled>Género</option>
                                                    <option value="1">Masculino</option>
                                                    <option value="2">Femenino</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Datos del hospital -->
                                <div class="col-md-12" id="hospital-data">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <h2 id="section-header">Datos del hospital</h2>
                                            </div>
                                        </div>
                                        <div class="row" id="entry-field">
                                            <div class="col-md-12">
                                                <select name="origin" id="origin" class="form-control">
                                                    <option value="0" selected disabled>Origen</option>
                                                    <option value="1">Consulta externa</option>
                                                    <option value="2">Consulta interna</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" id="entry-field">
                                            <div class="col-md-12">
                                                <select name="hospital" id="hospital" class="form-control">
                                                    <option value="0" selected disabled>Hospital</option>
                                                    <option value="1">Hospital Rosales</option>
                                                    <option value="2">Hospital Bloom</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" id="entry-field">
                                            <div class="col-md-12">
                                                <select name="medicName" id="medic-name" class="form-control">
                                                    <option value="0" selected disabled>Médico</option>
                                                    <option value="1">Rolin Azmitia</option>
                                                    <option value="2">Bryan Amaya</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row" id="entry-field">
                                            <div class="col-md-12">
                                                <input type="text" name="ticketNumber" id="ticket-num"
                                                    class="form-control" placeholder="N° boleta">
                                            </div>
                                        </div>
                                        <div class="row" id="entry-field">
                                            <div class="col-md-12 form-group">
                                                <textarea name="observations" id="observations-hosp"
                                                    class="form-control" rows="3"
                                                    placeholder="Observaciones"></textarea>
                                            </div>
                                        </div>
                                        <div class="row" id="entry-field">
                                            <div class="col-md-12">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" id="barcode" class="custom-control-input">
                                                    <label for="barcode" class="custom-control-label">Imprimir
                                                        código de barras</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Lista de exámenes a realizar dependiendo del tipo de muestra escogido -->
                    <div class="col-md-6" id="pepe">
                        <div class="container-fluid">
                            <div class="row">

                                <!-- Todos los tipos de exámenes -->
                                <div class="col-md-12" id="tests-types">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                <h2 id="section-header">Exámenes</h2>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center test-scroll" id="tests-list">
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bili-D
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    H
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    N
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Cl
                                                </h3>
                                            </div>

                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bili-T
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    CHOL
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    H
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    He
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Lol
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    H
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    S
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Au
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Brrr
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bbcita
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bbcita
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bbcita
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bbcita
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bbcita
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bbcita
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bbcita
                                                </h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <!-- Tipos de exámenes externos -->
                                <div class="col-md-12" id="external-tests">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col">
                                                <h2 id="section-header">Exámenes externos</h2>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center test-scroll" id="tests-list">
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bili-D
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    H
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    N
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Cl
                                                </h3>
                                            </div>

                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Bili-T
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    CHOL
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    CHOL
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    H
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    He
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    Lol
                                                </h3>
                                            </div>
                                            <div class="col-md-3 col-sm-4 col-xs-4">
                                                <h3 class="justify-content-center text-center" id="indiv-test">
                                                    H
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Perfiles de exámenes; es decir, agrupaciones de exámenes predeterminadas -->
                    <div class="col-md-3">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12" id="tests-profiles">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <h2 id="section-header">Perfiles</h2>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-warning btn-lg btn-block">Perfil 1</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-warning btn-lg btn-block">Perfil 2</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-warning btn-lg btn-block">Perfil 3</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-warning btn-lg btn-block">Perfil 4</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-warning btn-lg btn-block">Perfil 5</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-warning btn-lg btn-block">Perfil 6</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-warning btn-lg btn-block">Perfil 7</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button class="btn btn-warning btn-lg btn-block">Perfil 8</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Botón para guardar solicitud -->
                                <div class="col-md-12">
                                    <button type="button" class="btn btn-danger btn-lg btn-block">Guardar
                                        solicitud</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
    mainPages::script();
?>