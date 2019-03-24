<?php 
//Inclusion de header y navbars de la pagina
    include '../../core/helpers/mainPages.php';
    mainPages::header('Información Personal');
    mainPages::navbars();
?>
<div class="container">
    <form action="index.php">
        <div class="form-row">
            <div class="form-group col-sm-6">
                <label for="nombreUsuario" class="col-form-label">Nombre:</label>
                <input type="text" class="form-control" id="nombreUsuario" value="Rolin Alberto" disabled>
            </div>
            <div class="form-group col-sm-6">
                <label for="apellidoUsuario" class="col-form-label">Apellido:</label>
                <input type="text" class="form-control" id="apellidoUsuario" value="Azmitia Maldonado" disabled>
            </div>
            <div class="form-group col-sm-4">
                <label for="generoUsuario" class="col-form-label">Género:</label>
                <select id="generoUsuario" class="form-control" disabled>
                    <option selected>Masculino</option>
                    <option>Femenino</option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label for="correoUsuario" class="col-form-label">Correo:</label>
                <input type="text" class="form-control" id="correoUsuario" placeholder="Ingrese correo" value="rolinazmitia@gmail.com">
            </div>
            <div class="form-group col-sm-4">
                <label for="fechaNacimiento" class="col-form-label">Fecha de Nacimiento:</label>
                <input type="date" class="form-control" id="fechaNacimiento" value="2000-09-24" disabled>
            </div>
            <div class="form-group col-sm-4">
                <label for="logo" class="col-form-label">Foto de Perfil</label>
                <div class="input-group mb-6">
                    <div class="custom-file">
                        <label class="custom-file-label" for="icono">Seleccione archivo</label>
                        <input type="file" class="custom-file-input" id="fotoUsuario">
                    </div>
                </div>
            </div>
            <div class="form-group col-sm-4">
                <label for="generoUsuario" class="col-form-label">Hospital:</label>
                <select id="generoUsuario" class="form-control">
                    <option selected>Hospital Bloom</option>
                    <option>Hospital Rosales</option>
                </select>
            </div>
            <div class="form-group col-sm-4">
                <label for="generoUsuario" class="col-form-label">Tipo de Usuario:</label>
                <select id="generoUsuario" class="form-control" disabled>
                    <option selected>Administrador</option>
                    <option>Secretario</option>
                </select>
            </div>
        </div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registroHospital"><a>Actualizar </a><i class="fas fa-sync-alt"></i></button> &nbsp
        <button type="submit" class="btn btn-dark" href="index.php"><a>Cerrar Sesión </a><i class="fas fa-sign-in-alt"></i></button>
    </form>
</div>
<?php 
    mainPages::script();
?>