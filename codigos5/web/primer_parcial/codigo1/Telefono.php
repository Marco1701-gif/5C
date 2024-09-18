<?php

/*
    Codigo 1
    Objetivo:Declarar clases basicas
    Fecha:30 de agosto 2024
    Fecha de modificacion:04 de septiembre 2024
    Modificacion:Se agrego la propiedad precio,se incremento en numero
    Autor:Marco Antonio Gomez Muñoz
*/

class Telefono{
    public $color;
    public $almacenamiento;
    public $marca;
    public $modelo;
    public $precio;

    public function encender(){
        echo "El telefono fue encendido<br><br>";
    }

    public function apagar(){
        echo"El telefono fue apagado<br><br>";
    }

    public function caracteristicas(){
        echo$this->color."<br>";
        echo$this->marca."<br>";
        echo$this->almacenamiento."<br>";
        echo$this->modelo."<br>";
        echo$this->precio."<br>";
    }
}
?>