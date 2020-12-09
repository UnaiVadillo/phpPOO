<?php
include_once ("Publicacion.php");
$publi1= new Publicacion("Pepe", 2005,"Planeta", "Las aventuras del gato", "Gran libro ");
$publi1->leer();
$publi1->escribir("escrito por Pepe");
$publi1->leer();