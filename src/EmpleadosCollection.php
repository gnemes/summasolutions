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
     * Agrega un empleado a la empresa
     * 
     * @param \Gnemes\Summasolutions\examen\Empleado $empleado Empleado a agregar a la empresa
     * @throws \Exception
     * 
     * @return void
     */
    public function add(Empleado $empleado)
    {
        if (isset($this->empleados[$empleado->getId()])) {
            throw new \Exception("ID Empleado ya existe en esta empresa");
        } else {
            $this->empleados[$empleado->getId()] = $empleado;
        }        
    }
    
    /**
     * Quita un empleado de la empresa
     * 
     * @param \Gnemes\Summasolutions\examen\Empleado $empleado Empleado a quitar
     * @throws \Exception
     * 
     * @return void
     */
    public function remove(Empleado $empleado)
    {
        if (!isset($this->empleados[$empleado->getId()])) {
            throw new \Exception("Empleado no existe en esta empresa");
        } else {
            unset($this->empleados[$empleado->getId()]);
        }
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
                echo "Nombre: ".$empleado->getNombre()."\n";
                echo "Apellido: ".$empleado->getNombre()."\n";
                echo "Edad: ".$empleado->getNombre()."\n";
                
                switch (get_class($empleado)) {
                    case "Programador":
                        echo "Lenguaje: ".$empleado->getLenguaje()."\n";

                        break;
                    case "Disenador":
                        echo "Tipo: ".$empleado->getTipo()."\n";
                    default:
                        echo "Empleado desconocido.\n";
                        break;
                }
            }
        } else {
            echo "No hay empleados en la empresa.\n";
        }
    }
    
    public function promedioEdades()
    {
        
    }
}
