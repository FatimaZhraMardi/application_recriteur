<?php
if(isset($_POST['submit'])){
    $titre = filter_var($_POST['titre'], FILTER_SANITIZE_STRING);
    $description = filter_var($_POST['description'], FILTER_SANITIZE_STRING);
    $salaire = filter_var($_POST['salaire'], FILTER_SANITIZE_NUMBER_INT);

    if(!isset($cnx)){
        include_once('data_base.php');
    }

    $pdoQuery = "INSERT INTO `annonce`(`titre`, `description`, `salaire`) VALUES (:titre,:description,:salaire)";

    $pdoResult = $cnx->prepare($pdoQuery);

    if($titre == '' || $description == '' || $salaire == ''){
        echo 'All fields are required';
        exit();
    }
    else{
        $pdoExec = $pdoResult->execute(array(":titre"=> $titre,":description"=>$description,":salaire"=>$salaire));

        if($pdoExec){
            echo 'Data inserted successfully';
           header("Location: offre.php");
            exit();
        }
        else{
            echo 'Error inserting data';
            echo "Error: " . $pdoResult->errorInfo();
            header("Location:annonce.php");

            exit();
        }
    }
}
$cnx = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recrutement</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="annonce.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Recrutement</a>
        
        
    </nav>
    <br>
    <h1>Publier une annonce</h1>
    <div class="container-fluid">
    <form  id="maforme" method="post"  action="annonce.php">       
        <label>Titre: </label>
        <br>
        <input type="text" name="titre">
        <br>
        <label>Description :</label>
        <br>
        <textarea name="description" id="textarea"rows="4" cols="50" placeholder="Entrer votre description"></textarea>
        <br>
        <label>Salaire :</label>
        <br>
        <input type="text" name="salaire">
        <br>
        <input type="reset" value="Annuler" id="reset">
        <input type="submit" value="Publier mon annonce" id="submit" name="submit">
     </form> 
    </div>
    <br>
    <footer>
        <div class="container">
            <div class="footer-content">
                <h3>Contact</h3>
                <p>Email:Recrutement
                  @example
                  .com</p>
                <p>Phone:+121 56556 565556</p>
                <p>Address: Address 123 street</p>
            </div>
            <div class="footer-content">
                <h3>Liens</h3>
                 <ul class="list">
                    <li><a href="">Accueil</a></li>
                    <li><a href="">Qui sommes-nous ?</a></li>
                    <li><a href="">Contact</a></li>
                 </ul>
            </div>
            <div class="footer-content">
                <h3>Suivez-nous</h3>
                <ul class="social-icons">
                 <li><a href=""><i class="fa fa-facebook"></i></a></li>
                 <li><a href=""><i class="fa fa-twitter"></i></a></li>
                 <li><a href=""><i class="fa fa-instagram"></i></a></li>
                 <li><a href=""><i class="fa fa-linkedin"></i></a></li>
                </ul>
                </div>
        </div>
        <div class="bottom-bar">
            <p>&copy; 2023 your company . All rights reserved</p>
        </div>
      </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>