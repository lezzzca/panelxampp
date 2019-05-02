<?php
/**
 * Created by PhpStorm.
 * User: lezzz
 * Date: 14/3/2019
 * Time: 18:35
 */

namespace Clases;

class Proyecto
{
    private $nombre;
    private $carpeta;
    private $id;
    private $descripcion;
    private $modificado;

    public function __construct($id,$nombre,$descripcion){
      //  global $path_proyectos;
         $this->id = $id;
         $this->nombre = $nombre;
         $this->carpeta = $this->crearCarpeta();
         $this->modificado = Gestor_de_archivos::obtenerModificado($this->carpeta);
         $this->descripcion = $descripcion;
    }

    public function mostrarFecha(){
        return strftime('%A %d de %B del %Y',$this->modificado);
    }

    private function crearCarpeta(){
        $carpeta = Gestor_de_archivos::ponerEnMinusculas($this->nombre);
        $carpeta = Gestor_de_archivos::cabiarEspaciosPorGuiones($carpeta);
        return $carpeta;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return string
     */
    public function getCarpeta()
    {
        return $this->carpeta;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @return mixed
     */
    public function getModificado()
    {
        return $this->modificado;
    }

    /**
     * @param mixed $modificado
     */
    public function setModificado($modificado)
    {
        $this->modificado = $modificado;
    }
    
}