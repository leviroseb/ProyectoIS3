<?php
class Producto{
    private $codigo;
    private $nombre;
    private $descripcion;
    private $precio;
    private $tipo;
    
    public function Producto(){
        //se ingresa en tiempo de ejecucion
    }
    //metodos get y set
    public function getCodigo(){
        return $this->codigo;
    }
    public function setCodigo($cod){
        $this->codigo=$cod;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function setNombre($nom){
        $this->nombre=$nom;
    }
    public function getDescripcion(){
        return $this->descripcion;
    }
    public function setDescripcion($des){
        $this->descripcion=$des;
    }
    public function getPrecio(){
        return $this->precio;
    }
    public function setPrecio($pre){
        $this->precio=$pre;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($tip){
        $this->tipo=$tip;
    }
}


