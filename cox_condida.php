<?php

// Connexion à la base de données
// function sendemail_verifile($nom,$email,$verify_token) {
//     }  
    if(isset($_POST['submit'])){
        $nom=$_POST['nom'];
        $prenom=$_POST['prenom'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $tel=$_POST['tel'];
        $adress=$_POST['adress'];
        $civilite=$_POST['civilite'];
        $pays=$_POST['pays'];
        $ville=$_POST['ville'];
        $domaine=$_POST['domaine'];
        $cv=$_POST['cv'];
        require_once 'data_base.php'; 

        $checkEmail = "SELECT * FROM `condiat` where `email` ='$email';";
        $checkEmailExecute = $cnx->query($checkEmail);
        $checkEmailResult = $checkEmailExecute->fetchAll();
        if(!empty($checkEmailResult)){
    
            echo '<script>alert("Email déjà utilisé")</script>';
            header("location: condidat.php");
           
       }

       else{
        IF(!empty($nom) || !empty($prenom) || !empty($email)|| 
        !empty($password) || !empty($tel) || !empty($adress) || !empty($civilite) ||
        !empty($pays) ||!empty($ville) || !empty($domaine) || !empty($cv)){
        
        $sql11 = "INSERT INTO `condiat`
        (`nom`,`prenom`,`email`,`password`,`tel`,`adress`,`civilite`,`pays`,`ville`,`domaine`,`cv`) VALUES
        ('$nom','$prenom','$email','$password','$tel','$adress','$civilite','$pays','$ville','$domaine','$cv');";
        $sth = $cnx->query($sql11);
    
        if($sth){
            $sql1 = "SELECT id_condidat FROM `condiat` where `email` = '$email';";
            $sth1 = $cnx->query($sql1);
            $result = $sth1->fetch();
            session_start();
           
        
            header("location: profil.php");
    }
    else{
        
        header("location: index.php");
    }
}
}
}

?>