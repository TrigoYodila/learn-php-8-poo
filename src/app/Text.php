<?php

namespace App;

class Text extends Field
{
    //redeclare abstract methods comes to abstract class
    public function render():string
    {
        return <<<HTML
        <input type="text" name="{$this->name}" />
        HTML;
    }
}