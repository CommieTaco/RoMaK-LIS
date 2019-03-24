<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Conexión');
    mainPages::navbars();
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <h3>Datos de la conexión</h3>
        </div>&nbsp
        <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <p>
                <strong>Nombre del equipo: </strong>Equipo 1</p>
            <p>
                <strong>Hospital: </strong>Hospital Bloom</p>
            <p>
                <strong>Direccion IP: </strong>192.168.1.1</p>
            <p>
                <strong>Puerto: 443</strong>
            </p>
            <p>
                <strong>Tiempo de Conexión: 00:00:00 </strong>
            </p>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <button class="btn btn-success">
                <a href="connect.php">Desconectar
                    <i class="fas fa-power-off"></i>
                </a>
            </button>
        </div>
        <?php 
    mainPages::script();
?>