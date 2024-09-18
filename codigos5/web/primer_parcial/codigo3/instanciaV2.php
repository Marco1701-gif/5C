<?php

require_once('carroV2.php');

$mazda=new carro("Mazda","Mazda MX-5",519900,"2024",4,45,false,0);

$mazda->impdatos();

$mazda->encender();

$mazda->viajecorto();

$mazda->viajelargo();

$mazda->mostkilo();

$mazda->resetkilo();

$mazda->tanquefull();

$mazda->apagar();

?>