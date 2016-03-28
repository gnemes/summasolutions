<?php

use Gnemes\Summasolutions\examen\Empresa;

$empresa = new Empresa();

$empresa->setId(1)
        ->setNombre("Summa Solutions");

echo "Empresa :: ".var_export($empresa,true)."\n";