<?php
include "modelo/Cuadrado.php";

$cuadrado1 = new Cuadrado("rojo", 20, 5);

try {
    echo $cuadrado1->area();
}catch (Exception $e){
    echo "EXCEPCIÓN!! " . $e->getMessage();
}
