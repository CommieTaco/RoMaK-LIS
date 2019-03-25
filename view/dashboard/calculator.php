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
                    <div class="col-md-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-7" id="ex-data">
                                    <input type="text" name="name_exam" id="name-exam " class="form-control"
                                        placeholder="Nombre examen">
                                </div>
                                <div class="col-md-3" id="ex-data">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="exam-enabled" class="custom-control-input">
                                        <label for="exam-enabled" class="custom-control-label">Habilitado</label>
                                    </div>
                                </div>
                                <div class="col-md-2" id="ex-data">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="indic-enabled" class="custom-control-input">
                                        <label for="indic-enabled" class="custom-control-label">Indic</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Segundo grupo de datos -->
                    <div class="col-md-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4" id="ex-data">
                                    <div class="mb-3">
                                        <select name="selectSample" id="sample-select" class="form-control">
                                            <option value="0" selected disabled>Tipo de muestra</option>
                                            <option value="1">Orina</option>
                                            <option value="2">Sangre</option>
                                            <option value="3">Otros</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4" id="ex-data">
                                    <input class="form-control" type="text" name="imprim_name" id="imprim-name"
                                        placeholder="Imprim nombre">
                                </div>
                                <div class="col-md-4" id="ex-data">
                                    <div class="mb-3">
                                        <select name="decim_num" id="decim-num-select" class="form-control">
                                            <option value="0" selected disabled>Decimales</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>


                    <!-- Tercer grupo de datos -->
                    <div class="col-md-6">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-4">
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
                    <div class="col-md-6" id="biochem-param">
                        <h2 id="section-header">Parámetros bioquímicos</h2>
                    </div>

                    <!-- Sección con los operandos normales -->
                    <div class="col-md-6" id="normal-param">
                        <h2 id="section-header">Símbolos matemáticos</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
    mainPages::script();

?>