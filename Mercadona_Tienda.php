<?php

class Tienda {
    var $ciudad;
    var $empleado;
    var $producto;

    function __construct ($ciudad,$empleado, $producto){
        $this->ciudad = $ciudad;
        $this->empleado = $empleado;
        $this->producto = $producto;
    }
    function getCiudad (){
        return $this->ciudad;
    }
    function setCiudad ($ciudad){
        $this->ciudad = $ciudad;
    }
    function getEmpleado (){
        return $this->empleado;
    }
    function setEmpleado ($empleado){
        $this->empleado = $empleado;
    }
    function getProducto (){
        return $this->producto;
    }
    function setProducto ($producto){
        $this->producto = $producto;
    }

    function mostrar () {
        echo "ciudad:".$this->ciudad."<br>";
        for ($i=0; $i < count($this->getEmpleados()); $i++) { 
            $this->empleados[$i]->mostrar();
        }
        for ($i=0; $i < count($this->getProductos()); $i++) { 
            $this->productos[$i]->mostrar();
        }
    }
   
    function mostrarEmpleadoMasJoven (){
        $minimo=100;
        $pos=0;
        for ($i=0; $i<count($this->empleados); $i++){
            if ($this->empleados[$i]->getEdad<$minimo){
                $minimo=$this->empleados[$i]->getEdad;
                $pos=i;
            }
        } 
        return $this->EmpleadoMAsJoven [pos];
    }   

    //POLITICA ALTA-> PRIMER HUECO LIBRE O AL FINAL

    function addProductos ($producto){
            $enc = false;
            for ($i=0; ($i < count($this->productos)) && ($enc == false); $i++) { 
                if ($this->productos[$i] == null) {
                    $this->productos[$i] = $producto;
                    $enc = true;
                }
            }
            if ($enc == false) { 
                $this->productos[] = $producto;
            }
        
    }

    //POLITICA BORRAR-> LO MARCAMOS A NULL
    function borrarProducto ($nombreproducto){
        $enc = false;
        for ($i = 0; $i < count ($this->productos) && ($enc == false); $i++){
            if ($this->productos[$i]->getNombre() == $nomproducto){
                $this->productos[$i] = null;
                $enc = true;
            }
        }
    }

    function listado (){
        for ($i=0; $i < count ($productos) ; $i++) { 
            echo $this->productos[$i]->mostrar();
        }
    }
}
