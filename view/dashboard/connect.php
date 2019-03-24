<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Conectar');
    mainPages::navbars();
?>
<div class="container" id="bodyWrapper">
    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <h3>Conexión de Equipos</h3>
        </div>
        <div class="col-xs-12 col-md-12 col-lg-12 col-sm-12">
            <form action="connectionData.php">
                <div class="form-row">
                    <!--Fila con los todos los campos-->
                    <div class="form-group col-lg-8 col-md-8 col-sm-8">
                        <label for="direccionIP" class="col-form-label">Equipo:</label>
                        <select class="form-control" id="sel1">
                            <option selected>Seleccione un equipo</option>
                            <option>Equipo 1</option>
                            <option>Equipo 2</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success"><a>Conectar </a><i class="fas fa-sign-in-alt"></i></button>
            </form>
        </div>
    </div>
</div>
<?php 
    mainPages::script();
?>