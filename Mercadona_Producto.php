<?php

class Producto {
    var $nombre;
    var $precio;

    function __construct ($nombre, $precio){
        $this->nombre = $nombre;
        $this->precio = $precio;
    }
    function getNombre (){
        return $this->nombre;
    }
    
    function setNombre ($nombre){
        $this->nombre = $nombre;
    }
    function getPrecio (){
        return $this->Precio;
    }
    
    function setPrecio ($precio){
        $this->precio = $precio;
    }
    function mostrar () {
        echo "nombre:".$this->nombre."<br>";
        echo "precio:".$this->precio."<br>";
    }
}   

class ProductoCongelado extends Producto {
    var $temperatura;

    function __construct ($nombre, $precio, $temperatura) {
        parent::__construct ($nombre, $precio);
        $this->temperatura = $temperatura;
        
    }

    function getTemperatura (){
        return $this->temperatura;
    }
    
    function setTemperatura ($temperarura){
        $this->temperatura = $temperatura;
    }
    function mostrar () {
        echo "temperatura:".$this->temperatura."<br>";
    }
}   

class ProductoFresco extends Producto {
    var $fechacad;

    function __construct ($nombre, $precio, $fechacad) {
        parent::__construct ($nombre, $precio);
        $this->fechacad = $fechacad;
    }

    function getFechacad (){
        return $this->fechacad;
    }
    
    function setFechacad ($fechacad){
        $this->fechacad = $fechacad;
    }
    function mostrar () {
        parent::__mostrar ();
        echo "fechacad:".$this->fechacad."<br>";
    }
}   
