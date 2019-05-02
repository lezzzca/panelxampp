<?php

require_once  '../vendor/autoload.php';

use \Clases\Proyecto as ProyectosNamed;
if(!empty($_POST['proyecto']) && !empty($_POST['descript'])):
    $nombreProyecto = $_POST['proyecto'];
    $decripcionProyecto = $_POST['descript'];

    if(isset($_POST['tipo'])):
        $tipoArchivo = $_POST['tipo'];
    endif;

    


    //
endif;