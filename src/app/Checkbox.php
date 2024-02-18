<?php

namespace App;

class Checkbox extends Boolean
{
    //redeclare abstract methods comes to abstract class
    public function render():string
    {
        return <<<HTML
        <input type="checkbox" name="{$this->name}" />
        HTML;
    }
}