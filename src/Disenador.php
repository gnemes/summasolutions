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
 * Diseñador Class
 *
 * @category  ExamenTecnico
 * @package   Summasolutions
 * @author    German Nemes <gnemes@gmail.com>
 * @copyright 2016 German Nemes
 * @license   GNU GPL v3
 * @link      https://github.com/gnemes/summasolutions
 */
class Disenador extends Empleado
{
    private $tipo = "";
    
    private $tiposDisponibles = array("Grafico", "Web");
    
    /**
     * Getter tipo
     * 
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }
    
    /**
     * Setter tipo
     * 
     * @param string $tipo Tipo de diseñador
     * 
     * @return \Gnemes\Summasolutions\examen\Disenador|boolean
     */
    public function setTipo($tipo)
    {
        if (!in_array($tipo, $this->tiposDisponibles)) {
            return false;
        }
        
        $this->tipo = $tipo;
            
        return $this;
    }
}
