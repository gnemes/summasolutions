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

use Gnemes\Summasolutions\examen\Empleado;

/**
 * Programador Class
 *
 * @category  ExamenTecnico
 * @package   Summasolutions
 * @author    German Nemes <gnemes@gmail.com>
 * @copyright 2016 German Nemes
 * @license   GNU GPL v3
 * @link      https://github.com/gnemes/summasolutions
 */
class Programador extends Empleado
{
    private $lenguaje = "";
    
    private $lenguajesDisponibles = array("PHP", "Net", "Python");
    
    /**
     * Getter lenguaje
     * 
     * @return string
     */
    public function getLenguaje()
    {
        return $this->lenguaje;
    }
    
    /**
     * Setter lenguaje
     * 
     * @param string $lenguaje Lenguaje
     * 
     * @return \Gnemes\Summasolutions\examen\Programador|boolean
     */
    public function setLenguaje($lenguaje)
    {
        if (!in_array($lenguaje, $this->lenguajesDisponibles)) {
            throw new \Exception("Lenguaje del programador invalido");
        }
        
        $this->lenguaje = $lenguaje;
            
        return $this;
    }
}
