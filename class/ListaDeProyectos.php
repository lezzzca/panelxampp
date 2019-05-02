<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 14/3/2019
 * Time: 18:36
 */

namespace Clases;
require_once '../php/funciones.php';

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
        $this->proyectos = new \ArrayObject();
        $this->cargarProyectos();

    }

    private function cargarProyectos(){
        $dbase = new \mysqli('localhost','root','','proyectos');
        $db = $dbase->query("SELECT * FROM proyectos.tabla_proyectos");
      //  $db =DB_Proyectos::getInstance(); // metodo roto
        //if($lista = $db->recuperarProyectos()):
        if($lista = $db):
            while ($p = $lista->fetch_assoc()):
                $proyecto = new Proyecto($p['id_proyecto'],$p['nombre'],$p['descripcion']);
                $this->proyectos->append($proyecto);
            endwhile;
        endif;
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
        $db = DB_Proyectos::getInstance();
        $consulta = $db->recuperarProyecto($id_proyecto);
        $buf = $consulta->fetch_assoc(); // retorna un objeto Proyecto
        return new Proyecto($buf['id_proyecto'],$buf['nombre'],$buf['descripcion']);
    }
}