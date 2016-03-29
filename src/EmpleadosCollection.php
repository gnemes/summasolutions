<?php
/**
 * Gnemes Summa Solutions
 * Copyright (C) 2016  German Nemes
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * PHP VERSION 5.6
 *
 * @category  ExamenTecnico
 * @package   Summasolutions
 * @author    German Nemes <gnemes@gmail.com>
 * @copyright 2016 German Nemes
 * @license   GNU GPL v3
 * @link      https://github.com/gnemes/summasolutions
 */

namespace Gnemes\Summasolutions\examen;

use Gnemes\Summasolutions\examen\Exceptions\EmpleadosCollectionAddException;
use Gnemes\Summasolutions\examen\Exceptions\EmpleadosCollectionRemoveException;

/**
 * Empleado collection Class
 *
 * @category  ExamenTecnico
 * @package   Summasolutions
 * @author    German Nemes <gnemes@gmail.com>
 * @copyright 2016 German Nemes
 * @license   GNU GPL v3
 * @link      https://github.com/gnemes/summasolutions
 */
class EmpleadosCollection
{
    /**
     * Lista de empleados
     *
     * @var array
     */
    private $empleados = array();
    
    /**
     * Imprime los datos de un empleado
     * Esta funcion deberia cambiarse para que haga lo que se desee
     * 
     * @param \Gnemes\Summasolutions\examen\Empleado $empleado Empleado a mostrar
     * 
     * @return void
     */
    private function printEmpleado(Empleado $empleado)
    {
        echo "Nombre: ".$empleado->getNombre().PHP_EOL;
        echo "Apellido: ".$empleado->getApellido().PHP_EOL;
        echo "Edad: ".$empleado->getEdad().PHP_EOL;

        if (is_a($empleado, 'Gnemes\\Summasolutions\\examen\\Programador')) {
            echo "Area: Programador".PHP_EOL;
            echo "Lenguaje: ".$empleado->getLenguaje().PHP_EOL;
        } else if (is_a($empleado, 'Gnemes\\Summasolutions\\examen\\Disenador')) {
            echo "Area: Diseñador".PHP_EOL;
            echo "Tipo: ".$empleado->getTipo().PHP_EOL;
        } else {
            echo "Area: desconocida.".PHP_EOL;
        }
        echo "-----------------------------".PHP_EOL;        
    }
    
    /**
     * Agrega un empleado a la empresa
     * 
     * @param \Gnemes\Summasolutions\examen\Empleado $empleado Empleado a agregar a la empresa
     * @throws Gnemes\Summasolutions\examen\Exceptions\EmpleadosCollectionAddException
     * 
     * @return Gnemes\Summasolutions\examen\Empleado
     */
    public function add(Empleado $empleado)
    {
        if (isset($this->empleados[$empleado->getId()])) {
            throw new EmpleadosCollectionAddException("ID Empleado ya existe en esta empresa");
        }
        
        $this->empleados[$empleado->getId()] = $empleado;
        
        return $this->empleados[$empleado->getId()];
    }
    
    /**
     * Quita un empleado de la empresa
     * 
     * @param \Gnemes\Summasolutions\examen\Empleado $empleado Empleado a quitar
     * @throws \Gnemes\Summasolutions\examen\Exceptions\EmpleadosCollectionRemoveException
     * 
     * @return \Gnemes\Summasolutions\examen\Empleado
     */
    public function remove(Empleado $empleado)
    {
        if (!isset($this->empleados[$empleado->getId()])) {
            throw new EmpleadosCollectionRemoveException("Empleado no existe en esta empresa");
        }
        
        $removed = $this->empleados[$empleado->getId()];
        unset($this->empleados[$empleado->getId()]);
        
        return $removed;
    }
    
    /**
     * Lista los empleados
     * 
     * @return void
     */
    public function listar()
    {
        if (count($this->empleados) > 0) {
            foreach ($this->empleados as $empleado) {
                $this->printEmpleado($empleado);
            }
        } else {
            echo "No hay empleados en la empresa.".PHP_EOL;
        }
    }
    
    /**
     * Obtienen el promedio de edad de los empleados
     * 
     * @return integer
     */
    public function promedioEdades()
    {
        $promedio = 0;
        
        $cantidadEmpleados = count($this->empleados);
        if ($cantidadEmpleados > 0) {
            $suma = 0;
            foreach ($this->empleados as $empleado) {
                $suma += $empleado->getEdad();
            }
            $promedio = $suma / $cantidadEmpleados;
        }
        
        return $promedio;
    }
    
    /**
     * Muestra los datos de un empleado
     * 
     * @param integer $id ID empleado
     * @throws \Exception
     * 
     * @return void
     */
    public function getById($id)
    {
       if (!isset($this->empleados[$id])) {
            throw new \Exception("Empleado no existe en esta empresa");
        } else {
            $this->printEmpleado($this->empleados[$id]);
        } 
    }
}
