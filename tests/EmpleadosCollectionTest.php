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
    
    public function testPromedioEdadEmptycollection()
    {
        $collection = new EmpleadosCollection();
        
        $this->assertEquals(0, $collection->promedioEdades());
    }
    
    public function testPromedioEdad()
    {
        $collection = new EmpleadosCollection();

        // Creo un programador
        $programador1 = new Programador();

        $programador1->setId(1)
                     ->setNombre("Prueba")
                     ->setApellido("Primera")
                     ->setEdad(32);
        
        $empleado1 = $collection->add($programador1);
        
        $this->assertEquals($programador1, $empleado1);
        
        // Creo un programador
        $programador2 = new Programador();

        $programador2->setId(2)
                     ->setNombre("Prueba")
                     ->setApellido("Segunda")
                     ->setEdad(34);
        
        $empleado2 = $collection->add($programador2);
        
        $this->assertEquals($programador2, $empleado2);
        
        // Creo un programador
        $programador3 = new Programador();

        $programador3->setId(3)
                     ->setNombre("Prueba")
                     ->setApellido("Tercera")
                     ->setEdad(36);
        
        $empleado3 = $collection->add($programador3);
        
        $this->assertEquals($programador3, $empleado3);
        
        $this->assertEquals(34, $collection->promedioEdades());
    }
    
    public function testGetEmpleadoById()
    {
        $collection = new EmpleadosCollection();

        // Creo un programador
        $programador1 = new Programador();

        $programador1->setId(1)
                     ->setNombre("Prueba")
                     ->setApellido("Primera")
                     ->setEdad(32);
        
        $empleado1 = $collection->add($programador1);
        
        $this->assertEquals($programador1, $empleado1);
        
        // Creo un programador
        $programador2 = new Programador();

        $programador2->setId(2)
                     ->setNombre("Prueba")
                     ->setApellido("Segunda")
                     ->setEdad(34);
        
        $empleado2 = $collection->add($programador2);
        
        $this->assertEquals($programador2, $empleado2);
        
        // Creo un programador
        $programador3 = new Programador();

        $programador3->setId(3)
                     ->setNombre("Prueba")
                     ->setApellido("Tercera")
                     ->setEdad(36);
        
        $empleado3 = $collection->add($programador3);
        
        $this->assertEquals($programador3, $empleado3);
        
        $this->assertEquals($programador2, $collection->getById(2));
    }
    
    public function testGetNonExistingEmpleadoById()
    {
        $collection = new EmpleadosCollection();

        $this->setExpectedException('Gnemes\Summasolutions\examen\Exceptions\EmpleadosCollectionEmpleadoNotExistsException');
        
        try {
            $empleado = $collection->getById(1);
        } catch (Exception $ex) {
            echo $ex->getMessage()."\n";
        }
    }
    
    public function testListEmptyCollection()
    {
        $collection = new EmpleadosCollection();

        $this->setExpectedException('Gnemes\Summasolutions\examen\Exceptions\EmpleadosCollectionEmptyException');
        
        try {
            $empleado = $collection->getAll();
        } catch (Exception $ex) {
            echo $ex->getMessage()."\n";
        }
    }
    
    public function testGetAllCollection()
    {
        $collection = new EmpleadosCollection();

        $reference = array();
        
        // Creo un programador
        $programador1 = new Programador();

        $programador1->setId(1)
                     ->setNombre("Prueba")
                     ->setApellido("Primera")
                     ->setEdad(32);
        
        $empleado1 = $collection->add($programador1);
        
        $this->assertEquals($programador1, $empleado1);
        
        $reference[1] = $programador1;
        
        // Creo un programador
        $programador2 = new Programador();

        $programador2->setId(2)
                     ->setNombre("Prueba")
                     ->setApellido("Segunda")
                     ->setEdad(34);
        
        $empleado2 = $collection->add($programador2);
        
        $this->assertEquals($programador2, $empleado2);
        
        $reference[2] = $programador2;
        
        // Creo un programador
        $programador3 = new Programador();

        $programador3->setId(3)
                     ->setNombre("Prueba")
                     ->setApellido("Tercera")
                     ->setEdad(36);
        
        $empleado3 = $collection->add($programador3);
        
        $this->assertEquals($programador3, $empleado3);
        
        $reference[3] = $programador3;
        
        $this->assertEquals($reference, $collection->getAll());
    }
}
