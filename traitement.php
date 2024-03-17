<?php

// Connexion à la base de données

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

require_once 'data_base.php';


$checkEmail = "SELECT * FROM `recreteur` where `email` ='$email';";
$checkEmailExecute = $cnx->query($checkEmail);
$checkEmailResult = $checkEmailExecute->fetchAll();
if(!empty($checkEmailResult)){
    
    echo '<script>alert("Email déjà utilisé")</script>';
    
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
        $_SESSION['id_recruteur'] = $result["id_rec"];
        $_SESSION["id_recruteur"];
        
        header("location: inscrire.php");
    }
    else{
        
        header("location: recruteur.php");
    }
}
}
}
?>
<?php

?>
