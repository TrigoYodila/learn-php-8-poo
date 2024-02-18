<?php

namespace App;

class Radio extends Boolean
{
    //redeclare abstract methods comes to abstract class
    public function render():string
    {
        return <<<HTML
        <input type="radio" name="{$this->name}" />
        HTML;
    }
}