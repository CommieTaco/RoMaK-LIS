<?php 
        require_once '../../core/helpers/loginPages.php';
        mainPages::header("Login");
?>
<div class="container-fluid">
    <div id="main-form" class="row">
        <div class="col-md-9 align-self-center justify-content-center">
            <div class="container">
                <!-- Donde está ubicado el form para ingresar sesión -->
                <div class="row">
                    <div class="col-12 align-self-center justify-content-center">
                        <div class="container">
                            <div class="row align-self-center justify-content-center">
                                <img class="img-responsive" src="../../resources/img/logo/farlab.png" alt="Responsive image"
                                    width="350" height="150" /> </div>
                        </div>
                        <div class="container">
                            <div class="row align-self-center justify-content-center">
                                <div class="col-6 align-self-center justify-content-center">
                                    <form id="login-form" action="requests.php" method="post">
                                        <div class="form-group">
                                            <label for="userNameInput">Usuario:</label>
                                            <input type="text" name="nom_usu" class="form-control" id="userNameInput"
                                                placeholder="Ingrese su usuario">
                                        </div>

                                        <br>
                                        <div class="form-group">
                                            <label for="passwordInput">Contraseña:</label>
                                            <input type="password" name="pass_usu" class="form-control" id="passwordInput"
                                                placeholder="Ingrese su contraseña">
                                        </div>

                                        <div class="">
                                            <button class="btn btn-info btn-block btn-lg align-self-center mb-3" type="submit"
                                                id="btnIngresar">Ingresar</button>
                                        </div>
                                    </form>
                                    <a href="" data-toggle="modal" data-target="#recuperarContra" id="recu-link">Recuperar contraseña</a>
                                </div>
                            </div>


                        </div>


                    </div>
                </div>

            </div>
        </div>
        <!-- Barra lateral derecha estética -->
        <div id="side-bar" class="col-md-3 justify-content-center align-middle align-middle d-none d-lg-block">
            <div class="container-fluid">
                <div class="row justify-content-center align-middle">
                    <div class="col-sm-12 justify-content-center align-middle">
                        <h1 id="welcome-header" class="justify-content-center align-middle">¡Bienvenido!</h1>
                    </div>
                    <br>
                    <div class="col-sm-12 justify-content-center align-middle align-middle">
                        <p id="welcome-msg" class="text-center justify-content-center align-middle align-middle">
                            Ingrese los datos en los espacios correspondientes.
                        </p>
                        <br>
                        <p id="welcome-msg" class="text-center justify-content-center align-middle align-middle">
                            Si necesita asistencia al usar RoMak-LIS, posee botones de ayuda <i id="help-example" class="fas fa-question-circle"></i>
                            que le proporcionarán la ayuda necesaria.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal para recuperar contraseña -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="recuperarContra">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Recuperar Contraseña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!--Cuerpo del modal donde se encuentran los campos de recuperar contraseña-->
                    <form>
                        <div class="form-row">
                            <!--Fila con los todos los campos-->

                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="usuario" class="col-form-label">Usuario:</label>
                                <input type="text" class="form-control" id="usuario" placeholder="Ingrese nombre de usuario">
                            </div>
                            <div class="form-group col-lg-6 col-md-6 col-sm-6">
                                <label for="correo" class="col-form-label">Correo:</label>
                                <input type="email" class="form-control" id="correo" placeholder="nombre@ejemplo.com">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!--footer del modal donde se encuentra el boton de regresar y de enviar-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip"
                        data-placement="bottom" title="Salir"><i class="fas fa-arrow-left"></i></button>
                    <span data-toggle="tooltip" data-placement="left" title="Enviar">
                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#codigoContra">
                            <i class="fas fa-sign-in-alt"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true" id="codigoContra">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Código de verficación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-row">
                            <!--Fila con el campo del código-->
                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <label for="codigo" class="col-form-label">Código:</label>
                                <input type="text" class="form-control" id="codigo" placeholder="Ingrese el código enviado a su correo">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <!--footer del modal donde se encuentra el boton de regresar y verificar código-->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" data-toggle="tooltip"
                        data-placement="bottom" title="Salir"><i class="fas fa-arrow-left"></i></button>
                    <span data-toggle="tooltip" data-placement="left" title="Verificar">
                        <a href="changePassword.php">
                            <button type="button" class="btn btn-success">
                                <i class="fas fa-check"></i>
                            </button>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
            mainPages::script();
        ?>
</body>

</html>