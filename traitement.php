<?php

// Connexion à la base de données
function sendemail_verifile($nom,$email,$verify_token) {
    

}  


if(isset($_POST["valid"])){
$nom_entreprise=$_POST['nom_entreprise'];
$adresse=$_POST['adresse'];
$ville=$_POST['ville'];
$pays=$_POST['pays'];
$civilite=$_POST['civilite'];
$prenom=$_POST['prenom'];
$nom=$_POST['nom'];
$tel=$_POST['tel'];
$email=$_POST['email'];
$password=$_POST['password'];
$confirm_password=$_POST['confirm_password'];
// $verify_token= md5(rand());

require_once 'data_base.php';


$checkEmail = "SELECT * FROM `recreteur` where `email` ='$email';";
$checkEmailExecute = $cnx->query($checkEmail);
$checkEmailResult = $checkEmailExecute->fetchAll();
if(!empty($checkEmailResult)){
    
     echo '<script>alert("Email déjà utilisé")</script>';
    //  header("location: recruteur.php");
    
}

else{
    IF(!empty($nom_entreprise) || !empty($adresse) || !empty($ville)|| 
    !empty($pays) || !empty($civilite) || !empty($prenom) || !empty($nom) ||
    !empty($tel) ||!empty($email) || !empty($password) || !empty($confirm_password)){
    
    $sql10 = "INSERT INTO `recreteur`
    (`nom_entreprise`,`adresse`,`ville`,`pays`,`civilite`,`prenom`,`nom`,`tel`,`email`,`password`,`confirm_password`) VALUES
    ('$nom_entreprise','$adresse','$ville','$pays','$civilite','$prenom','$nom','$tel','$email','$password','$confirm_password');";
    $sth = $cnx->query($sql10);

    if($sth){
        $sql1 = "SELECT id_rec FROM `recreteur` where `email` = '$email';";
        $sth1 = $cnx->query($sql1);
        $result = $sth1->fetch();
        session_start();
        // cree email
        sendemail_verifile("$nom","$email","$verify_token"); 
        $_SESSION['id_recruteur'] = "register successfull.!please verfiy your email adress";
        $_SESSION['id_recruteur'] = $result["id_rec"];
        $_SESSION["id_recruteur"];
        
        header("location: inscrire.php");
    }
    else{
        
        header("location: index.php");
    }
}
}
}


?>



