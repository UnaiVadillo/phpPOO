<?php


class Cuadrado extends Poligono
{
 public function area(){
     return (parent::getAltura()*parent::getAnchura());
 }
}