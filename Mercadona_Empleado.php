<?php

class Empleado {
    var $nombre;
    var $edad;

    function __construct ($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
    }
    function getNombre (){
        return $this->nombre;
    }
    
    function setNombre ($nombre){
        $this->nombre = $nombre;
    }
    function getEdad (){
        return $this->edad;
    }
    
    function setEdad ($edad){
        $this->edad = $edad;
    }
    
    function mostrar () {
        echo "nombre:".$this->nombre."<br>";
        echo "edad:".$this->edad."<br>";
    }
}   
