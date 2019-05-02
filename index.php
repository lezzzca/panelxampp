<!DOCTYPE html>

<?php
    require_once 'vendor/autoload.php';
    require_once 'config/config.php';
    require_once 'php/funciones.php';

?>
<html lang="es">

<head>
	<meta charset="ufg-8">
	<title>Panel De Proyectos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Panel Dedicado a crear y administrar Proyectos Web">
	<meta name="author" content="Lezzzca">

	<!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
	<!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

	<!-- Link to your CSS file -->
	<link rel="stylesheet" href="css/mauDesign.css">

    <!-- favicon icono de pestaña -->
    <link rel="shortcut icon" href="res/cat-solid.png" type="image">

</head>

<body class="p-0 blue lighten-5">

    <nav class="navbar navbar-expand-md navbar-dark blue-gradient sticky-top">
        <div class="container">
            <img src="res/img/avatar.jpg" class="img-fluid rounded-circle mr-2" height="60" width="60" alt="avatar lezzzca">
            <a class="navbar-brand" href="index.php">Lezzzca</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Panel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="http://localhost/phpmyadmin/" target="_blank">Mysql</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../dashboard/" target="_blank">DashBoard</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                           href="#" id="dropOpciones"
                           data-toggle="dropdown"
                           aria-haspopup="true"
                           aria-expanded="false">
                            Recursos Web
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropOpciones">
                            <a class="dropdown-item" href="#">link1</a>
                            <a class="dropdown-item" href="#">link2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Agregar link</a>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="blue-gradient jumbotron text-white">
		<h1 class="text-center">Panel de Proyectos</h1>
        <hr class="my-4">
        <div class="text-center">
            <a href="" class="btn indigo accent-1 btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Proyecto Nuevo</a>
        </div>
	</header>

    <main id="main">
        <section id="contenedor" class="d-flex my-4 justify-content-center">
            <article id="spinner">
                <i class="blue-text fa-5x fas fa-cat fa-spin"></i>
            </article>
        </section>
    </main>

    <footer></footer>

    <!-- pop crear -->
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-info text-white">
                    <h3 class="modal-title w-100 font-weight-bold">Proyecto Nuevo</h3>
                    <button type="button" class="text-white close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <form action="formularios/form_crear_proyecto.php" method="post">
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="far fa-folder prefix grey-text"></i>
                            <input type="text" id="proyecto_form" name="proyecto" class="form-control validate" maxlength="20" required>
                            <label data-error="wrong" data-success="Correcto" for="proyecto_form">Nombre del Proyecto</label>
                        </div>

                        <div class="md-form mb-5">
                            <div class="d-flex justify-content-start">
                                <i class="far fa-file-code prefix grey-text"></i>
                                <label data-error="wrong" data-success="right" for="ext">Tipo de archivo</label>
                            </div>
                            <div class="d-flex justify-content-center align-items-center flex-column">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="tipohtml" name="tipo" value="html">
                                    <label class="custom-control-label" for="tipohtml">HTML</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="tipophp" name="tipo" value="php" checked>
                                    <label class="custom-control-label" for="tipophp">PHP</label>
                                </div>
                            </div>
                        </div>

                        <div class="md-form">
                            <i class="far fa-file-alt prefix grey-text"></i>
                            <textarea id="descript_form" name="descript" class="form-control md-textarea" rows="2"></textarea>
                            <label for="descript_form">Descriptcion</label>
                        </div>
                    </div>

                    <div class="modal-footer d-flex justify-content-center">
                        <button type="submit" class="btn btn-info">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


	<!-- Coding End -->

	<!-- JQuery -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.js"></script>

    <script type="text/javascript" src="java/superJava.js"></script>

</body>

</html>
