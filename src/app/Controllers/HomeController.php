<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index():View
    {
        // return (new View('index'))->render();
        // on returne l'objet comme une chaine de caractère,
        // ce qui executera la methode render
        return View::make('index');
    }

    public function upload()
    {
       
        //chemin de stockage de l'image, concatène le chemin de stockage
        //avec le name de l'image
        $filePath =  STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        //deplace le fichier vers le chemin
        move_uploaded_file($_FILES['receipt']['tmp_name'],$filePath);

        echo '<pre>';
        var_dump(pathinfo($filePath));
        echo '<pre>';
    }

    
}