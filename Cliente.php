<?php

class Cliente{
    private $idcliente;
    private $email;
    private $clave;
    public function Cliente(){
        //se ingresa en tiempo de ejecucion
    }
    //metodos get y set
    public function getIdcliente(){
        return $this->idcliente;
    }
    public function setIdcliente($idc){
        $this->idcliente=$idc;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($ema){
        $this->email=$ema;
    }
    public function getClave(){
        return $this->clave;
    }
    public function setClave($cla){
        $this->clave=$cla;
    }    
}

