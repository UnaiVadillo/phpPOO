<?php
namespace models;
class Publicacion{

    private $autores, $año, $editorial, $titulo, $texto;

    public function __construct($autores, $año, $editorial, $titulo, $texto){
        $this->autores=$autores;
        $this->año=$año;
        $this->editorial=$editorial;
        $this->titulo=$titulo;
        $this->texto=$texto;
    }
    public function leer(){
        echo $this->texto;
    }
    public function escribir($mensaje){
        $this->texto += $mensaje;
    }
}
