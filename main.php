<?php
require __DIR__ . '/vendor/autoload.php';

use Gnemes\Summasolutions\examen\Empresa;
use Gnemes\Summasolutions\examen\Programador;
use Gnemes\Summasolutions\examen\Disenador;

// Creo un programador
$programador = new Programador();

$programador->setId(1)
            ->setNombre("German")
            ->setApellido("Nemes");

try {
    $programador->setEdad(32);
} catch (Exception $ex) {
    echo $ex->getMessage()."\n";
}                  
                  
try {
    $programador->setLenguaje("PHP");
} catch (Exception $ex) {
    echo $ex->getMessage()."\n";
}

// Creo un diseñador
$disenador = new Disenador();

$disenador->setId(2)
          ->setNombre("Marina")
          ->setApellido("Muras");

try {
    $disenador->setEdad(32);
} catch (Exception $ex) {
    echo $ex->getMessage()."\n";
}                  
                  
try {
    $disenador->setTipo("Web");
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