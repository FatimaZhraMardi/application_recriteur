<?php

$host = "localhost";
$utilisateur = "root";
$motDePasse = "";
$nomBaseDeDonnees = "recritement";
$dsn = "mysql:host=$host;dbname=$nomBaseDeDonnees";

try{
    $cnx = new PDO($dsn, $utilisateur, $motDePasse);
    if($cnx)
    {
        echo "";
    }
}
catch(PDOException $e){
    $error = $e -> getMessage();
    echo $error;
    exit();
}
?>