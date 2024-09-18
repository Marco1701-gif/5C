<?php
require_once('Telefono.php');

$iphone=new telefono("Blue",128,"Apple","Iphone 16 pro",5000,false);

$iphone->caracteristicas();

$iphone->encender();

$iphone->fotos();

$iphone->fotosHD();
?>