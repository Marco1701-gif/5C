<?php

require_once('carro.php');

$mazda=new carro("Mazda","Mazda MX-5",519900,"2024",4,45,false);

$mazda->impdatos();

$mazda->encender();

$mazda->viajecorto();

$mazda->viajelargo();

$mazda->viajelargo();

$mazda->apagar();

$mazda->viajecorto();
?>