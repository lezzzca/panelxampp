<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 28/3/2019
 * Time: 17:32
 */

require_once '../vendor/autoload.php';

if(!empty($_POST['proyecto_id'])):

    $id_proyecto = $_POST['proyecto_id'];

    $bufProyect = \Clases\ListaDeProyectos::buscarProyecto($id_proyecto);

    if(is_dir('../../'.$bufProyect->getCarpeta())):
        if(file_exists('../../'.$bufProyect->getCarpeta().'/index.php')):

        elseif(file_exists('../../'.$bufProyect->getCarpeta().'/index.html')):
            echo 'index html abierto';
        else:
            echo 'archivo index no encontrado';
        endif;

    else:
        echo 'no se encontro la carpeta';
    endif;

 else:
    header('Location:../index.php?error=form_open');
    die();
 endif;

