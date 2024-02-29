<?php

declare(strict_types = 1);

namespace App\Classes;

class Home
{
    public function index():string
    {
        // return 'Home';

        // echo '<pre>';
        //    var_dump($_REQUEST);
        // echo '</pre>';

        // echo '<pre>';
        //     var_dump($_GET);
        // echo '</pre>';

        // echo '<pre>';
        //     var_dump($_POST);
        // echo '</pre>';

        // mise à jour de la valeur de la session
        // $_SESSION['count'] = ($_SESSION['count'] ?? 0) + 1;

        //création du cookie
        // setcookie(
        //     'user',
        //     'Kolas',
        //     time() + 10
        // );

        //return '<form action="/?foo=bar&amount=250" method="post"><label>Amount</label><input type="text" name="amount" /></form>';

        return <<<FORM
        
        <form action="/upload" method="post" enctype="multipart/form-data">
            <input type="file" name="receipt" />
            <button type="submit">Upload</button>
        </form>
        FORM;
    }

    public function upload()
    {
        echo '<pre>';
        var_dump($_FILES);

        var_dump(pathinfo($_FILES['receipt']['tmp_name']));
        echo '<pre>';

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