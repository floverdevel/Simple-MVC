<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file 
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of 
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        HiddenFormElement.php
 * 
 * @author      Anis BEREJEB
 * @version     0.1
 */

/**
 * Represents a Hidden form element
 * 
 */
class HiddenFormElement extends FormElement
{
    /**
     * No label for hidden fields
     * 
     * @return string an empty string
     */
    public function getLabel()
    {
        return '';
    }    

    /**
     * Echoes a Hidden form element
     * 
     * @return string
     */
    public function render()
    {
        $id = $this->getId();
        $id = (!empty($id)) ? $id : $this->getName();
        echo '<input name="' . $this->getName() . '"  id="' . $id . '" type="hidden" value="' . $this->getValue() . '" ' . $this->getAttributesString() . '/>';
    }    
}    
