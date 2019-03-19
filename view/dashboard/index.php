<?php 
    require_once '../../core/helpers/mainPages.php';
    mainPages::header("Login");
    print('
        <link rel="stylesheet" href="../../resources/css/login.css">
    ');
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
                                <div class="col-4 align-self-center justify-content-center">
                                    <div id="header-container">
                                        <div id="header-container">
                                            <h2 id="login-header">FarLab</h2>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="container">
                            <div class="row align-self-center justify-content-center">
                                <div class="col-6 align-self-center justify-content-center">
                                    <form id="login-form" action="" method="post">
                                        <div class="form-group">
                                            <label for="userNameInput">Ingrese su nombre de usuario </label>
                                            <input type="text" name="nom_usu" class="form-control" id="userNameInput">
                                        </div>

                                        <br>
                                        <div class="form-group">
                                            <label for="passwordInput">Ingrese su contraseña</label>
                                            <input type="text" name="pass_usu" class="form-control" id="passwordInput">
                                        </div>
                                        <button class="btn btn-info btn-lg align-self-center" type="button" ><a href="dashboard.php">Ingresar</a> </button>
                                    </form>
                                    
                                </div>
                            </div>                            

                            
                        </div>


                    </div>
                </div>

            </div>
        </div>


        <!-- Barra lateral derecha estética -->
        <div id="side-bar" class="col-md-3 justify-content-center align-middle align-middle">
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
                            Si necesita asistencia al usar RoMak-LIS, posee botones de ayuda <i id="help-example" class="fas fa-question-circle"></i> que le proporcionarán la ayuda necesaria.
                        </p>
                    </div>
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