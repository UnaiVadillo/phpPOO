<?php


class Triangulo extends Poligono
{
    public function area(){
        return ((parent::getAltura()*parent::getAnchura())/2);
    }
}