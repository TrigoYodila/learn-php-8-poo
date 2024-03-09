<?php

declare(strict_types = 1);

namespace App\Controllers;

use App\View;
//import pdo
use PDO;

class HomeController
{
    public function index():View
    {

       // connect to db
       try {
         $db = new PDO('mysql:host=db;dbname=my_db','root','root', [
            //mode de recuperation des données
           // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
         ]);

         //defined query
         //$query = 'SELECT * FROM users';
         //$email = $_GET['email'];
         //$query = 'SELECT * FROM users WHERE email = "' . $email . '"';

         $email = 'zephy@yod.com';
         $name = 'Zephy Manya ';
         $isActive = 1;
         $createdAt = date('Y-m-d H:m:i', strtotime('07/03/2024 9:00PM'));

        //utilisation d'espace renversé
        //  $query = 'INSERT INTO users (email, full_name, is_active, created_at)
        //            VALUES (?,?,?,?)';
         
        //utilisation des paramètres nommés
        $query = 'INSERT INTO users (email, full_name, is_active, created_at)
                  VALUES (:email,:name,:active,:date)';
         
         //prepare request
         $stmt = $db->prepare($query);

         //$stmt->execute([$email]);
        //$stmt->execute([$email, $name, $isActive, $createdAt]);

        // paramètre nommé
        // $stmt->execute(
        //     [
        //         'name' => $name,
        //         'email' => $email,
        //         'active' => $isActive,
        //         'date' => $createdAt
        //     ]
        //     );

        // utilisation de bindValue + paramètre nommée
        $stmt->bindValue('name', $name);
        $stmt->bindValue('email', $email);
        $stmt->bindValue('active', $isActive, PDO::PARAM_BOOL);
        $stmt->bindValue('date', $createdAt);

        $stmt->execute();

        //recuperation du dernier user
        $id = (int) $db->lastInsertId();

        $user = $db->query('SELECT * FROM users WHERE id= ' . $id)->fetch();

        echo '<pre>';
        var_dump($user);
        echo '</pre>';

        //  foreach ($db->query($query) as $user) {
        //     echo '<pre>';
        //     var_dump($user);
        //     echo '<pre/>';
        //  }
        // foreach ($stmt->fetchAll() as $user) {
        //     echo '<pre>';
        //     var_dump($user);
        //     echo '<pre/>';
        // }

       } catch (\PDOException $e) {
        throw new \PDOException($e->getMessage(), $e->getCode());
       }

        return View::make('index');
    }

    public function download()
    {
        //envoyer le type du contenu
        header('Content-Type:application/image');
        //disposition du contenu avec nom du fichier qu'on veut télécharger
        header('Content-Disposition:attachment;filename="myfile.png"');

        readfile(STORAGE_PATH . '/ACCUEIL.png');
    }

    public function upload()
    {
       
        //chemin de stockage de l'image, concatène le chemin de stockage
        //avec le name de l'image
        $filePath =  STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        //deplace le fichier vers le chemin
        move_uploaded_file($_FILES['receipt']['tmp_name'],$filePath);

        header('Location: /');

        exit;

        // echo '<pre>';
        // var_dump(pathinfo($filePath));
        // echo '<pre>';

        //supprimer un fichier

        //unlink(STORAGE_PATH . '/ACCUEIL.png');
    }

    
}