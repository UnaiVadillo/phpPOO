<?php


class Cuadrado extends Poligono
{
 function area(){
     return (parent::getAltura()*parent::getAnchura());
 }
}