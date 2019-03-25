<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Cambiar contraseña');
    mainPages::navbars();
?>

<div class="container" id="bodyWrapper">
    <form>
      <h3> Modificar contraseña </h3>
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="nuevaContra" class="col-form-label">Nueva contraseña</label>
                <input type="password" class="form-control" id="nombreUsuario">
            </div>
            <div class="form-group col-sm-6">
                <label for="verificarContra" class="col-form-label">Verificar nueva contraseña</label>
                <input type="password" class="form-control" id="verificarContra">
            </div>
            <button type="button" class="btn btn-primary" data-placement="bottom"><a> Guardar cambios</a><i class="fas fa-save"></i> </button>
    </form>
</div>

<?php 
    mainPages::script();
?>