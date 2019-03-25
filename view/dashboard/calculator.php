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
                                <div class="col-md-6">
                                    <input type="text" name="name_exam" id="name-exam" class="form-control"
                                        placeholder="Nombre examen">
                                </div>
                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="exam-enabled" class="custom-control-input">
                                        <label for="exam-enabled" class="custom-control-label">Habilitado</label>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" id="indic-enabled" class="custom-control-input">
                                        <label for="indic-enabled" class="custom-control-label">Indic</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- Segundo grupo de datos -->
                    <div class="col-md-6">
                        
                    </div>

                    </div>
                    <div class="col-md-6">

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
    </div>
    <h1>Sup</h1>
</div>

<?php
    mainPages::script();

?>