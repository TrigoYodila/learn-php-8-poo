<?php

declare(strict_types=1);

namespace App;

use App\Exceptions\ViewNotFoundException;

class View
{
   
    public function __construct(protected string $view, protected array $params = [])
    {
        
    }

    public static function make(string $view, array $params = []):static
    {
        return new static($view, $params);
    }

    public function render():string
    {
        $viewPath = VIEW_PATH . '/' . $this->view . '.php';
        //construction du chemin relatif du fichier à inclure
        
        if(!file_exists($viewPath))
        {
            throw new ViewNotFoundException();
        }

        // gestion de sortie de la memoire tampon
        // demarre la mise en memoire tampon
        ob_start();

        include $viewPath;

        // return la chaine stocké dans la memoire tampon
        // et clean la memoire
        return (string) ob_get_clean();

    }

    //si l'objet est traitée comme une chaine de caractère
    //execute la méthode render
    public function __toString():string 
    {
        return $this->render();
    }
}