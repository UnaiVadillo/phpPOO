<?php

require_once "Poligono.php";

class Cuadrado extends Poligono
{
    function area(){
        if($this->getAltura() < 0 || $this->getAnchura() < 0) {
            // Al estar dentro de un namespace, que utilizar \Exception para referirnos al root namespace
            // Si no intentaría buscar la clase Exception en en namespace actual.
            throw new \Exception("Uno de los lados es negativo.");
        }
        return $this->getAnchura() * $this->getAltura();
    }
}