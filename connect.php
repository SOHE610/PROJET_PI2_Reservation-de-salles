<?php
try{
    //conection a la base 
    $db = new PDO('mysql:host=localhost;dbname=booking_app' , 'root' , '');
    $db->exec('SET NAMES "UTF8"');
} catch (PDOException $e){
    echo 'Erreur : '. $e->getMessage();
    die();
}
