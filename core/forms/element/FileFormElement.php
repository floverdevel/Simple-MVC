<?php
/**
 * TODO: short description.
 * 
 * TODO: long description.
 * 
 */
class FileFormElement extends FormElement
{
    /**
     * TODO: short description.
     * 
     * @return TODO
     */
    public function render()
    {
        echo '<input name="' . $this->getName() . '" type="' . $this->getType() . '" value="' . $this->getValue().'" ' . $this->getAttributesString() . '/>';
    }    
}    
