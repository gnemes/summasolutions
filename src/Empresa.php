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
 * Empresa Class
 *
 * @category  ExamenTecnico
 * @package   Summasolutions
 * @author    German Nemes <gnemes@gmail.com>
 * @copyright 2016 German Nemes
 * @license   GNU GPL v3
 * @link      https://github.com/gnemes/summasolutions
 */
class Empresa
{
    /**
     * Empresa ID
     *
     * @var integer
     */
    private $id;
    
    /**
     * Empresa nombre
     *
     * @var string
     */
    private $nombre;
    
    /**
     * Lista de empleados
     *
     * @var Gnemes\Summasolutions\examen\EmpleadosCollection
     */
    private $empleados = null;
    
    /**
     * Constructor
     * 
     * @return void
     */
    public function __construct()
    {
        $this->empleados = new Collection();
    }
    
    /***************** GETTERS AND SETTERS ********************/
    
    /**
     * Getter Id
     * 
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Setter Id
     * 
     * @param integer $id Empresa ID
     * 
     * @return \Gnemes\Summasolutions\examen\Empresa
     */
    public function setId($id)
    {
        $this->id = $id;
        
        return $this;
    }
    
    /**
     * Getter nombre
     * 
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }
    
    /**
     * Setter nombre
     * 
     * @param string $nombre Empresa nombre
     * 
     * @return \Gnemes\Summasolutions\examen\Empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        
        return $this;
    }
    
    /**
     * Adds one Empleado to Empresa empleados
     * 
     * @param \Gnemes\Summasolutions\examen\Empleado $empleado Empleado
     * 
     * @return \Gnemes\Summasolutions\examen\Empleado
     */
    public function addEmpleado(Empleado $empleado)
    {
        $this->empleados->add($empleado);
        
        return $this;
    }
}
