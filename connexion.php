<?php
$username = "";
$password = "";
$host = "";
$db = "";
$dsn = "mysql:host=$host;dbname=$db";

try{
    $cnx = new PDO($dsn,$username,$pass);
    if($cnx){
        echo "cnx sucess";
    }
}catch(PDOEXception $e){
    $error_cnx = $e->getMessage();
    echo "<br>".$error_cnx;
    exit;
}
?>