<?php

namespace Gnemes\Summasolutions\tests;

use Gnemes\Summasolutions\examen\EmpleadosCollection;
use Gnemes\Summasolutions\examen\Programador;

class EmpleadosCollectionTest extends \PHPUnit_Framework_TestCase
{
    public function testAddProgramerToEmpleadosCollection()
    {
        $collection = new EmpleadosCollection();

        // Creo un programador
        $programador = new Programador();

        $programador->setId(1)
                    ->setNombre("German")
                    ->setApellido("Nemes");
        
        try {
            $empleado = $collection->add($programador);
        } catch (Exception $ex) {
            echo $ex->getMessage()."\n";
        }  
        
        $this->assertEquals($programador, $empleado);
    }
    
    public function testAddProgramerToEmpleadosCollectionThatAlreadyExists()
    {
        $collection = new EmpleadosCollection();

        // Creo un programador
        $programador = new Programador();

        $programador->setId(1)
                    ->setNombre("German")
                    ->setApellido("Nemes");
        
        try {
            $empleado = $collection->add($programador);
        } catch (Exception $ex) {
            echo $ex->getMessage()."\n";
        }
        
        $this->assertEquals($programador, $empleado);
        
        $this->setExpectedException('Gnemes\Summasolutions\examen\Exceptions\EmpleadosCollectionAddException');
        
        try {
            $empleado = $collection->add($programador);
        } catch (Exception $ex) {
            echo $ex->getMessage()."\n";
        }
    }
    
    public function testRemoveProgramerToEmpleadosCollection()
    {
        $collection = new EmpleadosCollection();

        // Creo un programador
        $programador = new Programador();

        $programador->setId(1)
                    ->setNombre("German")
                    ->setApellido("Nemes");
        
        try {
            $empleado = $collection->add($programador);
        } catch (Exception $ex) {
            echo $ex->getMessage()."\n";
        }  
        
        $this->assertEquals($programador, $empleado);
        
        try {
            $removed = $collection->remove($programador);
        } catch (Exception $ex) {
            echo $ex->getMessage()."\n";
        } 
        
        $this->assertEquals($programador, $removed);
    }
    
    public function testRemoveNotExistingEmpleadoFromEmpleadosCollection()
    {
        $collection = new EmpleadosCollection();

        // Creo un programador
        $programador = new Programador();

        $programador->setId(1)
                    ->setNombre("German")
                    ->setApellido("Nemes");
        
        $this->setExpectedException('Gnemes\Summasolutions\examen\Exceptions\EmpleadosCollectionRemoveException');
        
        try {
            $empleado = $collection->remove($programador);
        } catch (Exception $ex) {
            echo $ex->getMessage()."\n";
        }
    }
}
