<?php

/*
    Codigo 2
    Objetivo:Constrcuctor y comportamientos
    Fecha:5 de sepiembre 2024
    Autor:Marco Antonio Gomez Muñoz
*/

class Telefono{
    public $color;
    public $almacenamiento=128;
    public $marca;
    public $modelo;
    public $precio;
    public $estado;

    public function __construct($color,$almacenamiento,$marca,$modelo,$precio,$estado)
    {
        $this->color=$color;
        $this->almacenamiento=$almacenamiento;
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->precio=$precio;
        $this->estado=$estado;
    }
    public function encender(){
        if (!$this->estado) {
            echo"El telefono ".$this->marca." fue encendido<br>";
            $this->estado=true;
        }
    }

    public function apagar(){
        if ($this->estado) {
            echo"El telefono ".$this->marca." fue apagado<br>";
            $this->estado=false;
        }
    }

    public function caracteristicas(){
        echo"********************************<br>";
        echo"Color: ".$this->color."<br>";
        echo"Almacenamiento: ".$this->almacenamiento."GB<br>";
        echo"Marca: ".$this->marca."<br>";
        echo"Modelo: ".$this->modelo."<br>";
        echo"Precio: ".$this->precio."<br>";
        echo"********************************<br>";
    }
    
    public function fotos(){
        
        if ($this->almacenamiento<=0) {
            echo"Almacenamiento lleno";
        
        }
        else{
        $peso=.1;
        }
        $z=$this->almacenamiento-$peso;

        echo"Tu espacio restante es de :".$z."GB<br>";

    }

    public function fotosHD(){

        if ($this->almacenamiento<=0) {
            echo"Almacenamiento lleno";
        
        }
        else{
        $peso=1;
        }
        $z=$this->almacenamiento-$peso;

        echo"Tu espacio restante es de :".$z."GB<br>";
    }
}
?>