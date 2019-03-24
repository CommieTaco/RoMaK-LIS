<?php 
    class mainPages
    {
        public static function header($title){
            print('<!DOCTYPE html>
            <html>
            
            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <title>RoMak | '.$title.' </title>
                <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
                <link rel="stylesheet" href="../../resources/css/dashboard.css">
            <!-- Pepe Lives-->
            </head>
            <body>');
        }

            public static function navbars(){
                print('
                <header>
                    <div class="wrapper">
                        <nav id="sidebar" class="active scrollbar-info">
                            <div class="force-overflow">
                                <div id="sideBar" class="sidebar-header">
                                <strong>RL</strong>
                            </div>
                            <ul class="list-unstyled components">
                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Principal">
                                        <i class="fas fa-home fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="requests.php" data-toggle="tooltip" data-placement="top" title="Solicitud">
                                        <i class="fa fa-briefcase fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="searchRequest.php" data-toggle="tooltip" data-placement="top" title="Búsqueda">
                                        <i class="fas fa-search fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="historyRequest.php" data-toggle="tooltip" data-placement="top" title="Historial">
                                        <i class="fas fa-clipboard fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#Mantenimiento" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                                        <span data-toggle="tooltip" data-placement="top" title="Mantenimiento"><i class="fas fa-cogs fa-2x"></i></span>
                                    </a>
                                    <ul class="collapse list-unstyled" id="Mantenimiento">
                                        <li>
                                            <a href="exam.php" data-toggle="tooltip" data-placement="top" title="Exámen">
                                                <i class="fas fa-file-medical fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="hospitals.php" data-toggle="tooltip" data-placement="top" title="Hospital">
                                                <i class="fas fa-hospital fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="services.php" data-toggle="tooltip" data-placement="top" title="Servicios">
                                                <i class="fas fa-briefcase-medical fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="users.php" data-toggle="tooltip" data-placement="top" title="Usuarios">
                                                <i class="fas fa-user-md fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="profiles.php" data-toggle="tooltip" data-placement="top" title="Perfiles">
                                                <i class="fas fa-paste fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="origin.php" data-toggle="tooltip" data-placement="top" title="Procedencia">
                                                <i class="fas fa-ambulance fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="calculator.php" data-toggle="tooltip" data-placement="top" title="Calculadora">
                                                <i class="fas fa-calculator fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="connection.php" data-toggle="tooltip" data-placement="top" title="Conexion">
                                                <i class="fas fa-broadcast-tower fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="equipment.php" data-toggle="tooltip" data-placement="top" title="Equipo">
                                                <i class="fas fa-vials fa-2x"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="typeUser.php" data-toggle="tooltip" data-placement="top" title="Roles">
                                                <i class="fas fa-user fa-2x"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Reportes">
                                        <i class="fa fas fa-file-pdf fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="contacts.php" data-toggle="tooltip" data-placement="top" title="Contactos">
                                        <i class="fas fa-address-book fa-2x"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="connect.php" data-toggle="tooltip" data-placement="top" title="Conexiones">
                                        <i class="fas fa-broadcast-tower fa-2x"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
                <main>
                    <div class="wrapper">
                        <div id="content">
                            <nav class="navbar navbar-expand-lg navbar-light bg-light nav-pills flex-column flex-sm-row fixed-top" id="navbar">
                                <div class="container-fluid">
                                    <button type="button" class="btn btn-info" id="sidebarCollapse">
                                    <i class="fas fa-align-left"></i>
                                </button>
                                <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <i class="fas fa-align-justify"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="nav navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a href="personalInformation.php">
                                                Rolin Azmitia
                                                <img src="../../resources/img/user/user_id1.jpg" width="50px" heigth="50px" class="img-fluid rounded-circle">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>    
            ');
            }
            public static function script(){
                print('   
                        </div>
                    </div>
                <main>
                <footer> 
                    <script src="../../resources/js/jquery-3.3.1.min.js"></script>
                    <script src="../../resources/js/popper.min.js"></script>
                    <script src="../../resources/js/bootstrap.min.js"></script>
                    <script defer src="../../resources/js/solid.js"></script>
                    <script defer src="../../resources/js/fontawesome.js"></script>
                    <script src="../../resources/js/dashboard.js"></script> 
                </footer>
            </body>
            
            </html>');
            }
        }
        
    ?>