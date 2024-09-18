<?php
require_once('Telefono.php');

echo"Iphone<br>";

$iphone=new telefono();

$iphone->marca="Marca: Apple<br>";

$iphone->modelo="Modelo: Iphone 16 pro max<br>";

$iphone->color="Color: Blue<br>";

$iphone->almacenamiento="Almacenamiento: 256gb<br>";

$iphone->precio="Precio: $5000<br><br>";

$iphone->encender();

$iphone->apagar();

$iphone->caracteristicas();

echo"*******************************<br>";
echo"Motorola<br>";

$moto=new telefono();

$moto->marca="Marca: Motorola<br>";

$moto->modelo="Modelo: Motorola G51 5G<br>";

$moto->color="Color: Black<br>";

$moto->almacenamiento="Almacenamiento: 128GB<br>";

$moto->precio="Precio: $4500<br>";

$moto->encender();

$moto->apagar();

$moto->caracteristicas();

echo"*******************************<br>";
echo"Xiaomi<br>";

$xiaomi=new telefono();

$xiaomi->marca="Marca: Xiaomi<br>";

$xiaomi->modelo="Modelo: Poco X6<br>";

$xiaomi->color="Color: White<br>";

$xiaomi->almacenamiento="Almacenamiento: 256GB<br>";

$xiaomi->precio="Precio: $5000<br>";

$xiaomi->encender();

$xiaomi->apagar();

$xiaomi->caracteristicas();

echo"*******************************<br>";
echo"Nokia<br>";

$nokia=new telefono();

$nokia->marca="Marca: Nokia<br>";

$nokia->modelo="Modelo: Noia G10<br>";

$nokia->color="Color: Black<br>";

$nokia->almacenamiento="Almacenamiento: 64GB<br>";

$nokia->precio="Precio: $3700<br>";

$nokia->encender();

$nokia->apagar();

$nokia->caracteristicas();
?>