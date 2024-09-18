<?php

/*
    Codigo 3
    Objetivo: Repaso
    Fecha:09 de septiembre 2024
    Autor:Marco Antonio Gomez Muñoz
*/

class carro{
    public $marca;
    public $modelo;
    public $precio;
    public $año;
    public $pasajeros;
    public $gasolina;
    public $estado;


public function __construct($marca,$modelo,$precio,$año,$pasajeros,$gasolina,$estado)
    {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->precio=$precio;
        $this->año=$año;
        $this->pasajeros=$pasajeros;
        $this->gasolina=$gasolina;
        $this->estado=$estado;
    }

    public function encender(){
        if (!$this->estado) {
            echo "El carro fue encendido<br>";
            $this->estado=true;
        }
    }

    public function apagar(){
        if ($this->estado) {
            echo "El carro fue apagado<br>";
            $this->estado=false;
        }
    }

    public function impdatos(){
        echo "****************************<br>";
        echo "Marca: ".$this->marca."<br>";
        echo "Modelo: ".$this->modelo."<br>";
        echo "Precio: $".$this->precio."<br>";
        echo "Año: ".$this->año."<br>";
        echo "Pasajeros: ".$this->pasajeros."<br>";
        echo "Gasolina: ".$this->gasolina."<br>";
        echo "****************************<br>";
    }

    public function viajecorto(){
        if ($this->estado==true) {
            if ($this->gasolina<5) {
                echo "Gasoliona insuficiente<br>";
            }

            else{
                $n=5;
            }
            $a=$this->gasolina-$n;

            echo"Viaje corto realizado, gasolina restante: ".$a."<br>";
        }

        else {
            echo "El carro esta apagado no se pueden realizar viajes asi<br>";
        }
    }

    public function viajelargo(){
        if ($this->estado==true) {
            if ($this->gasolina<30) {
                echo "Gasoliona insuficiente<br>";
            }

            else{
                $n=30;
            }
            $a=$this->gasolina-$n;

            echo"Viaje largo realizado, gasolina restante: ".$a."<br>";
        }

        else{
            echo "El carro esta apagado no se pueden realizar viajes asi<br>";
        }
    }
}
?>