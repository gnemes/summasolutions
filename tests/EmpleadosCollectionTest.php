<?php

namespace Gnemes\Summasolutions\tests;

use Gnemes\Summasolutions\examen\EmpleadosCollection;
use Gnemes\Summasolutions\examen\Programador;

class EmpleadosCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testInvalidMoreOperationsQuantity()
    {
        $collection = new EmpleadosCollection();

        // Creo un programador
        $programador = new Programador();

        $programador->setId(1)
                    ->setNombre("German")
                    ->setApellido("Nemes");
        
        $this->assertEquals($programador, $collection->add($programador));
    }
}
