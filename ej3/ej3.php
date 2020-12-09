<?php

include "modelo/Poligono.php";
include "modelo/Triangulo.php";
include "modelo/Cuadrado.php";

$cuadr1= new Cuadrado("rojo",20,20);
echo $cuadr1->area();
echo "<br>";
$trian1= new Triangulo("verde", 20,10);
echo $trian1->area();