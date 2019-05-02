<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 18/3/2019
 * Time: 15:57
 */

namespace Clases;

use Clases\Gestor_de_archivos;
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

}