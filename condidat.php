

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploi</title>
    <Link rel="stylesheet" href="style6.css">
</head>
<body>
<section class="container"> 
    <header> Inscription Candidat</header><hr>
    <form action="cox_condida.php" Class="form" method="post">
        <div class="input-box">
            <label for="nom">Nom complet:</label><br>
            <input type="text" placeholder="Enter votre nom "name="nom" id="nom">
        </div>
        <div class="input-box">
            <label for="prenom">prenom:</label><br>
            <input type="text" placeholder="Enter votre prenom"name="prenom" id="prenom">
        </div>

        <div class="input-box">
            <label for="email">Email:</label><br>
            <input type="email" placeholder="Enter email" name="email" id="email">
        </div>
        <div class="input-box">
            <label for="password">password:</label><br>
            <input type="password" placeholder="Enter password" name="password" id="password">
        </div>
        <div class="column">
            <div class="input-box">
                <label for="tel">Tel:</label>
                <input type="text" placeholder="Entrer votre telephone" name="tel" id="tel">
            </div>
           </div>
        <div class="gender-box">
            <h3>Gender</h3>
        <div class="gender-option">
            <div class="gender">
         <input type="radio"  name="civilite" id="civilite">
         <label for="civilite">Male </label>
            </div>
            <div class="gender">
                <input type="radio" name="civilite" id="civilite">
                <label for="civilite">Female</label>
            </div>
            <div class="gender">
                <input type="radio"  name="civilite" id="civilite">
                <label for="civilite">Other </label>
                   </div>
        </div>
        </div>

       <div class="input-box">
                <label for="adress">Adresse:</label><br>
                <input type="text" placeholder="Entrer votre adresse" name="adress" id="adress">
            </div>
            <div class="input-box">
                <label for="pays"> Pays :</label><br>
                <input type="text" placeholder="Enter pays" name="pays" id="pays">
            </div>
            <div class="input-box">
                <label for="ville">ville :</label><br>
                <input type="text" placeholder="Enter votre ville" name="ville" id="ville">
            </div>
            <Br>
                <div class="input-box">
                    <label for="domaine">Domaine:</label>
                    <input type="text" placeholder="Entrer votre domaine" name="domaine" id="domaine">
                </div>
                <div class="input-box">
                    <label for="fonction">fonction:</label>
                    <input type="text" placeholder="Entrer votre fonction" name="fonction" id="fonction">
                </div>
                <div class="input-box">
                    <label for="formation">Formation:</label>
                    <input type="text" placeholder="Entrer votre formation" name="formation" id="formation">
                </div>
            <div class="input-box">
                <label for="cv"> Deposer votre CV </label>
                <input type="file"  name="cv" id="cv">
               
                   </div>
        </div>
        <button name="submit"> S'inscrire   </button>
    </form>
</section>