<?php

namespace App;

class ToasterPro extends Toaster
{
    // public int $size = 4;

    /**
     * redefinition du constructeur
     */
    public function __construct()
    {
        //appel du constructeur parent
        parent::__construct();

        $this->size = 4;
    }

    // redefinition de la methode addslice
    
    /*public function addSlice(string $slice):void
    {
        //call parent method addslice
        parent::addSlice($slice);
    }*/

    public function toastBagel()
    {
        foreach ($this->slices as $i => $slice) {
            echo ($i + 1) . ': Toasting ' . $slice . 'With Bagel Options' . PHP_EOL;
        }
    }

}