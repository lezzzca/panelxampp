<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 18/3/2019
 * Time: 15:57
 */

namespace Clases;

use ArrayObject;
use PDO;
use PDOException;

class DB_Proyectos{

    /**
     * @var PDO
     */
    private static $instance;

    // The db connection is established in the private constructor.
    private function __construct(){
        //constructor generico
    }

    private static function conect(){
        $config = Gestor_de_archivos::configIni();
        try{
            $host = $config['database']['host'];
            $db = $config['database']['db_proyectos'];
            $charset = $config['database']['charset'];
            $user = $config['database']['usuario'];
            $pass = $config['database']['pass'];

            self::$instance = new PDO("mysql:host=$host;dbname=$db;charset=$charset",$user,$pass);

        }catch (PDOException $PDOExceptione){
            $PDOExceptione->getMessage();
        }
    }

    public static function getConection(){
        if(empty(self::$instance)):
            self::conect();
        endif;

        return self::$instance;
    }

    public static function recuperarProyectos(){
        $db = self::getConection();

        $consulta = "SELECT * FROM proyectos.proyectos";

        $stat = $db->prepare($consulta);
        $stat->execute();

        $array = new ArrayObject();

        while ($proyecto = $stat->fetchObject()):
            $array->append(new Proyecto($proyecto->id_proyecto,$proyecto->nombre,$proyecto->descripcion));
        endwhile;

        return $array;
    }

}