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
 * Empleado Class
 *
 * @category  ExamenTecnico
 * @package   Summasolutions
 * @author    German Nemes <gnemes@gmail.com>
 * @copyright 2016 German Nemes
 * @license   GNU GPL v3
 * @link      https://github.com/gnemes/summasolutions
 */
abstract class Empleado
{
    /**
     * ID
     *
     * @var integer
     */
    private $id;
    
    /**
     * Nombre
     *
     * @var string
     */
    private $nombre;
    
    /**
     * Apellido
     *
     * @var string
     */
    private $apellido;
    
    /**
     * Edad
     *
     * @var integer
     */
    private $edad = 0;
    
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
     * @param integer $id ID
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
     * @param string $nombre nombre
     * 
     * @return \Gnemes\Summasolutions\examen\Empresa
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
        
        return $this;
    }
    
    /**
     * Getter apellido
     * 
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }
    
    /**
     * Setter apellido
     * 
     * @param string $apellido Apellido
     * 
     * @return \Gnemes\Summasolutions\examen\Empleado
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
        
        return $this;
    }
    
    /**
     * Getter edad
     * 
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }
    
    /**
     * Setter edad
     * 
     * @param integer $edad Edad
     * 
     * @return boolean|\Gnemes\Summasolutions\examen\Empleado
     */
    public function setEdad($edad)
    {
        if (!is_int($edad) || $edad <= 0) {
            throw new \Exception("Edad invalida");
        }
        
        $this->edad = $edad;
        
        return $this;
    }
}
