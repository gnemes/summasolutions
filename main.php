<?php
require __DIR__ . '/vendor/autoload.php';

use Gnemes\Summasolutions\examen\Empresa;
use Gnemes\Summasolutions\examen\Programador;

$programador = new Programador();

$programador->setId(1)
            ->setNombre("German")
            ->setApellido("Nemes")
            ->setEdad(32);

$empresa = new Empresa();

$empresa->setId(1)
        ->setNombre("Summa Solutions")
        ->addEmpleado($programador);

echo "Empresa :: ".var_export($empresa,true)."\n";