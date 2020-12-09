<?php


abstract class Poligono
{
    private $color, $altura, $anchura;

    public function __construct($color, $altura, $anchura)
    {
        $this->color = $color;
        $this->altura = $altura;
        $this->anchura = $anchura;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getAnchura()
    {
        return $this->anchura;
    }

    public function setAnchura($anchura)
    {
        $this->anchura = $anchura;
    }

    abstract function area(){

};
}