<?php

class Autos{

    protected $placa;
    protected $modelo;
    protected $marca;
    protected $capacidad;
    protected $color;
    protected $montorentadia;
    protected $estatus;
    protected $caracteristicas;

    function setPlaca($placa){
        $this->placa=$placa;
    }

    function getPlaca(){
        return $this->placa;
    }

    function setModelo($modelo){
        $this->modelo=$modelo;
    }

    function getModelo(){
        return $this->modelo;
    }

    function setMarca($marca){
        $this->marca=$marca;
    }

    function getMarca(){
        return $this->marca;
    }

    function setCapacidad($capacidad){
        $this->capacidad=$capacidad;
    }

    function getCapacidad(){
        return $this->capacidad;
    }

    function setColor($color){
        $this->color=$color;
    }

    function getColor(){
        return $this->color;
    }

    function setMonto($montorentadia){
        $this->montorentadia=$montorentadia;
    }

    function getMonto(){
        return $this->montorentadia;
    }

    function setstatus($estatus){
        $this->estatus=$estatus;
    }

    function getstatus(){
        return $this->estatus;
    }
    
    function setCaracteristicas($caracteristicas){
        $this->caracteristicas=$caracteristicas;
    }

    function getCaracteristicas(){
        return $this->caracteristicas;
    }


} 