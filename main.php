<?php
require __DIR__ . '/vendor/autoload.php';

use Gnemes\Summasolutions\examen\Empresa;
use Gnemes\Summasolutions\examen\Programador;
use Gnemes\Summasolutions\examen\Disenador;

// Creo un programador
$programador = new Programador();

$programador->setId(1)
            ->setNombre("German")
            ->setApellido("Nemes")
            ->setEdad(32)
            ->setLenguaje("PHP");

// Creo un diseñador
$disenador = new Disenador();

$disenador->setId(2)
          ->setNombre("Marina")
          ->setApellido("Muras")
          ->setEdad(32);

try {
    $disenador->setTipo("Invalid");
} catch (Exception $ex) {
    echo $ex->getMessage()."\n";
}

// Creo una empresa
$empresa = new Empresa();

$empresa->setId(1)
        ->setNombre("Summa Solutions")
        ->addEmpleado($programador)
        ->addEmpleado($disenador);

echo "Empresa :: ".var_export($empresa,true)."\n";