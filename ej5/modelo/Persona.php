<?php


class Persona
{
    public static $personasEnElMundo = 0;

    public function __construct()
    {
        self::$personasEnElMundo++;
    }
    public function getPersonasEnElMundo()
    {
        return self::$personasEnElMundo;
    }
}