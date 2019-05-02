<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 15/3/2019
 * Time: 19:40
 */

namespace Clases;

class Gestor_de_archivos{

    static public $CARPETA_PADRE = '../../proyectos';

    static public function cargarCarpeta(){
        if(is_dir(self::$CARPETA_PADRE)):
            if($recurso = opendir(self::$CARPETA_PADRE)):
                echo '<ul>';
                while($file = readdir($recurso)):
                    if($file!='.' && $file!='..'):
                    echo "<li>$file</li>";
                    endif;
                endwhile;
                echo '</ul>';
             endif;
        else:
            return false;
        endif;
    } // esto es solo para probar la carpeta padre

    static public function obtenerModificado($carpeta){
       return filemtime(self::$CARPETA_PADRE."/$carpeta");
    }

    static public function test($algo){
        return self::$CARPETA_PADRE."----$algo";
    }

    static public function crearCarpetaProyecto($nombre_carpeta,$tipo){
        chmod(self::$CARPETA_PADRE,777);

        if(!is_dir(self::$CARPETA_PADRE."/$nombre_carpeta")):
            mkdir(self::$CARPETA_PADRE."/$nombre_carpeta");
            copy('../res/generico.lez','.'/index.'.$tipo');
            return true;
        else:
            return false;
        endif;
    }

    public static function configIni(){
        return parse_ini_file("config.ini",true);
    }





}
