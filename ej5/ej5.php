<?php
require "modelo/Persona.php";

//Devuelve 0 porque no se ha creado todavia ninguna persona
echo "Total de personas en el mundo: " . Persona::$personasEnElMundo . "<br>";


$persona1 = new Persona();
$persona2 = new Persona();
$persona3 = new Persona();
$persona4 = new Persona();
$persona5 = new Persona();

//Devuelve el total de personas creadas
echo "Total de personas en el mundo: " . Persona::$personasEnElMundo . "<br>";
