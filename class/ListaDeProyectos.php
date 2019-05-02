<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 14/3/2019
 * Time: 18:36
 */

namespace Clases;
require_once '../php/funciones.php';

use ArrayObject;

class ListaDeProyectos
{
    private $proyectos;
    private static $instance;
    static public $MAS_NUEVO = 'MAS_NUEVO';
    static public $MAS_VIEJO = 'MAS_VIEJO';

    public static function getInstance(){
        if(!self::$instance):
            self::$instance = new self();
        endif;
            return self::$instance;
    }

    private function __construct(){
        $this->proyectos = new ArrayObject();
        $this->cargarProyectos();

    }

    private function cargarProyectos(){
        $this->proyectos = DB_Proyectos::recuperarProyectos();
    }

    private function __clone()
    {
        //  Implement __clone() method.
    }

    public function ordenar($modo='MAS_NUEVO'){
        if(!$modo == 'MAS_NUEVO'):
            $this->proyectos->uasort('ordenarMasNuevo');
        elseif ($modo == 'MAS_VIEJO'):
            $this->proyectos->uasort('ordenarMasViejo');
        endif;
    }

    public function size(){
        return $this->proyectos->count();
    }

    public function getProyectos()
    {
        return $this->proyectos;
    }

    public static function buscarProyecto($id_proyecto){
        /*
         * esto queda pendiente para futuras versiones
         *
        $db = DB_Proyectos::getInstance();
        $consulta = $db->recuperarProyecto($id_proyecto);
        $buf = $consulta->fetch_assoc(); // retorna un objeto Proyecto
        return new Proyecto($buf['id_proyecto'],$buf['nombre'],$buf['descripcion']);
        */
    }
}