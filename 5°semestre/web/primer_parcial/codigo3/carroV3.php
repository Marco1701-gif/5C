<?php

/*
    Codigo 3.2
    Objetivo: Agregar funcion viajelibre
    Fecha:12 de septiembre 2024
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
    public $kilometraje;


public function __construct($marca,$modelo,$precio,$año,$pasajeros,$gasolina,$estado,$kilometraje)
    {
        $this->marca=$marca;
        $this->modelo=$modelo;
        $this->precio=$precio;
        $this->año=$año;
        $this->pasajeros=$pasajeros;
        $this->gasolina=$gasolina;
        $this->estado=$estado;
        $this->kilometraje=$kilometraje;
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
            if ($this->gasolina>=5) {
                $this->gasolina=$this->gasolina-5;
                $this->kilometraje=$this->kilometraje+50;
                echo "viaje corto realizado<br>";
            }

            else{
                echo "Gasolina insuficiente para el viaje<br>";
            }

            echo"Gasolina restante: ".$this->gasolina."<br>";
        }

        else {
            echo "El carro esta apagado no se pueden realizar viajes asi<br>";
        }
    }

    public function viajelargo(){
        if ($this->estado==true) {
            if ($this->gasolina>=30) {
                $this->gasolina=$this->gasolina-30;
                $this->kilometraje=$this->kilometraje+300;
                echo " Viaje largo realizado<br>";
            }

            else{
                echo "Gasolina insufuciente para el viaje<br>";
            }

            echo"Gasolina restante: ".$this->gasolina."<br>";
        }

        else{
            echo "El carro esta apagado no se pueden realizar viajes asi<br>";
        }
    }

    public function viajelibre($km){
        $consumogas=$km/10;

        if ($this->gasolina>=$consumogas) {
            $this->gasolina-=$consumogas;
            $this->kilometraje=$this->kilometraje+$km;

            echo "Viaje realizado con exito";
            echo"Gasolina restante: ".$this->gasolina."<br>";
        }

        else{
            echo "Gasolina insuficiente para el viaje<br>";
        }
    }

    public function mostkilo(){
        echo "****************************<br>";
        echo "Tu kilometraje es de :".$this->kilometraje."km<br>";
        echo "****************************<br>";
    }

    public function resetkilo(){
        $this->kilometraje=$this->kilometraje-$this->kilometraje;
        echo "****************************<br>";
        echo "Kilometraje reiniciado<br>Tu kilometraje es de :".$this->kilometraje."km<br>";
        echo "****************************<br>";
    }

    public function tanquefull(){
        $this->gasolina=45;
        echo "****************************<br>";
        echo "Tanque relleno<br>Tu tanque tiene :".$this->gasolina."L de gasolina<br>";
        echo "****************************<br>";
    }
}
?>