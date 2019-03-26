<?php
    require_once '../../core/helpers/mainPages.php';
    mainPages::header("Calculadora");
    mainPages::navbars();
?>

<div class="container-fluid" id="bodyWrapper">
    <div class="row" id="mains">
        <!-- Primera división -->
        <div class="col-12" id="calc-exam-data">
            <!-- Ingresa los datos necesarios sobre el examen calculado nuevo -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <h2 id="section-header">Datos de examen calculado</h2>
                    </div>
                    <!-- Primer grupo de datos -->
                    <div class="col-md-6" >
                        <div class="container-fluid">
                            <div class="row justify-content-center">
                                <div class="col-md-12 col-lg-6" id="ex-data">
                                    <input type="text" name="name_exam" id="name-exam " class="form-control"
                                        placeholder="Nombre examen">
                                </div>
                                <div class="col-md-12 col-lg-3" id="ex-data">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="exam-enabled" class="custom-control-input">
                                        <label for="exam-enabled" class="custom-control-label">Habilitado</label>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-3" id="ex-data">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="indic-enabled" class="custom-control-input">
                                        <label for="indic-enabled" class="custom-control-label">Indic</label>
                                    </div>
                                </div>
                                <div class="col-md-12" id="ex-data">
                                    <div class="mb-3">
                                        <select name="measure_unit_select" id="measure-unit-select"
                                            class="form-control">
                                            <option value="0" selected disabled>Unidad</option>
                                            <option value="1"></option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Segundo grupo de datos -->
                    <div class="col-md-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-6" id="ex-data">
                                    <div class="mb-3">
                                        <select name="selectSample" id="sample-select" class="form-control">
                                            <option value="0" selected disabled>Tipo de muestra</option>
                                            <option value="1">Orina</option>
                                            <option value="2">Sangre</option>
                                            <option value="3">Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6" id="ex-data">
                                    <div class="mb-3">
                                        <select name="decim_num" id="decim-num-select" class="form-control">
                                            <option value="0" selected disabled>Decimales</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12" id="ex-data">
                                    <input class="form-control" type="text" name="imprim_name" id="imprim-name"
                                        placeholder="Imprim nombre">
                                </div>
                                
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Segunda división -->
        <!-- Sección donde se muestra la fórmula actual de dicho examen calculado -->
        <div class="col-12">
            <label for="exam-formula" id="exam-formula-lbl">Fórmula del examen</label>
            <input class="form-control" type="text" name="exam_formula" id="exam-formula">
        </div>
        <br>

        <!-- Tercera división -->
        <!-- En esta parte contiene todos los valores númericos y parámetros bioquímicos con los que armar la fórmula -->
        <div class="col-12" id="params">
            <div class="container-fluid">
                <div class="row">

                    <!-- Sección con los parámetros bioquímicos -->
                    <div class="col-md-6">
                        <div class="container">
                            <div class="row" id="biochem-param">
                                <div class="col-12">
                                    <h2 id="section-header">Parámetros bioquímicos</h2>
                                </div>
                                <div class="col-12">
                                    <!-- Contiene todos los diferentes parámetros bioquímicos -->
                                    <div class="container-fluid">
                                        <div class="row justify-content-center test-scroll">
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">CHOL
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">Bili-D
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">H</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">N</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">CHOL
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">Bili-D
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">H</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">N</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">CHOL
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">Bili-D
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">H</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">N</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">CHOL
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">Bili-D
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">H</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">N</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">CHOL
                                                </h3>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Sección con los operandos normales -->
                    <div class="col-md-6">
                        <div class="container">
                            <div class="row" id="normal-param">
                                <div class="col-12">
                                    <h2 id="section-header" class="biochem-cont">Símbolos matemáticos</h2>
                                </div>
                                <div class="col-12">
                                    <div class="container-fluid">
                                        <div class="row justify-content-center test-scroll">
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">7
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">8
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">9</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">/</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">4
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">5
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">6</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">*</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">1
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">2
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">3</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">-</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">,
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">0
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">.</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">+</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">abs
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">log
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">(</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">)</h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param"><i class="fas fa-backward"></i>
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">AC
                                                </h3>
                                            </div>
                                            <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                                                <h3 class="justify-content-center text-center" id="indiv-param">Pow</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            
        </div>

        <div class="col-12">
            <div class="container-fluid">
                <div class="row justify-content-end">
                    <div class="col-md-12 col-lg-4">
                        <button type="button" class="btn btn-danger btn-lg">Aceptar</button>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <button type="button" class="btn btn-danger btn-lg">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
    mainPages::script();

?>