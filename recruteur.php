<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style33.css">
</head>
<body>

    <fieldset class="border1">
    <div class="intro">
        <p>Recruteurs, inscrivez-vous et publiez vos offres d'emploi !</p>
    </div>
</fieldset>
    <br><br/>
    <form   action="traitement.php" method="post">
    <!-- Votre entreprise -->
    <fieldset class="border">
        <legend class="sous_border" >Votre entreprise</legend>
    
   
        <!-- pour aligne les case  -->
        <div class="form-row">
            <label for="nom_entreprise">Nom de l'entreprise :</label>
            <input type="text" id="nom_entreprise" name="nom_entreprise" required>
            <label for="adresse">Adresse :</label>
            <input type="text" id="adresse" name="adresse" required>
        </div>
        <br><br/>
        <div class="form-row">
            <label for="code_postal">Code postal :</label>
            <input type="text" id="code_postal" name="code_postal" required>
      
            <label for="ville">Ville :</label>
            <input type="text" id="ville" name="ville" required>
      
            <label for="pays">Pays :</label>
            <input type="text" id="pays" name="pays" required>
        </div>
        
        <!-- <input type="submit" value="S'inscrire"> -->
    
   </fieldset> <br/>
<!--  vos coordonnees de contact  -->
   <fieldset class="border">
    <legend class="sous_border" >vos coordonnees de contact</legend>


    <div class="form-row">
        <label for="civilite"> civilité :</label>
        <select id="civilite" name="civilite">
            <option value="monsieur">Monsieur</option>
            <option value="madame">Madame</option>
        </select>
        <label for="prenom">prenom :</label>
        <input type="text" id="prenom" name="prenom" required placeholder="prenom">
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required placeholder=" nom">
    </div>
    <br><br/>
    <div class="form-row">
       
            <label for="fonction">Quelle est votre fonction ?</label>
            <select id="fonction" name="fonction">
                <option value="" disabled selected>Sélectionnez une fonction</option>
                <option value="directeur_general">Directeur général</option>
                <option value="directeur_general">Directeur général</option>
                <option value="directeur_general">Directeur général</option>
                <option value="directeur_general">Directeur général</option>
                <!-- Ajoutez d'autres options ici -->
            </select>
           
  
        <label for="page">page Linkedin :</label>
      <input type="text" id="page" name="page" required placeholder="page Linkedin">
     </div>
     <br><br/>
    <div class="form-row">
        <label  for="tel" >Tel 1  :</label>
        <input type="tel" id="tel" name="tel" required placeholder="(611111111)">
        <label  for="tel" >Tel 2  :</label>
        <input type="tel" id="tel" name="tel" required placeholder="(611111111)">
    
    </div>

            <!-- Ajoutez d'autres options ici -->
        </select>
    <!-- <input type="submit" value="S'inscrire"> -->

</fieldset>
<br><br/>



<fieldset class="border">
    <legend class="sous_border">Vos identifiants</legend>
    <label for="secteur_activite">Secteur d'activité (max. 5 choix) :</label><br>
    <div id="secteur_activite">
        <input type="checkbox" id="activites_associatives" name="secteur" value="activites_associatives">
        <label for="activites_associatives">Activités associatives</label><br>
        
        <input type="checkbox" id="administration_publique" name="secteur" value="administration_publique">
        <label for="administration_publique">Administration publique</label><br>
        
        <input type="checkbox" id="aeronautique_navale" name="secteur" value="aeronautique_navale">
        <label for="aeronautique_navale">Aéronautique, navale</label><br>
        
        <input type="checkbox" id="Agriculture, pêche, aquaculture" name="secteur" value="Agriculture, pêche, aquaculture">
        <label for="Agriculture, pêche, aquaculture">Agriculture, pêche, aquaculture</label><br>
        
        <input type="checkbox" id="Agroalimentaire" name="secteur" value="Agroalimentaire">
        <label for="Agroalimentaire">Agroalimentaire</label><br>
        
        <input type="checkbox" id="Ameublement, décoration" name="secteur" value="aeronautique_navale">
        <label for="aeronautique_navale">Aéronautique, navale</label><br>
        
        <input type="checkbox" id="Automobile, matériels de transport, réparation" name="secteur" value="Automobile, matériels de transport, réparation">
        <label for="Automobile, matériels de transport, réparation">Automobile, matériels de transport, réparation</label><br>
        
        <input type="checkbox" id="Banque, assurance, finances" name="secteur" value="Banque, assurance, finances">
        <label for="Banque, assurance, finances">Banque, assurance, finances</label><br>
        
        <input type="checkbox" id="industrie_pharmaceutique" name="secteur" value="industrie_pharmaceutique">
        <label for="industrie_pharmaceutique">Industrie pharmaceutique</label><br>
        
        <input type="checkbox" id="industrie_production_fabrication_autres" name="secteur" value="industrie_production_fabrication_autres">
        <label for="industrie_production_fabrication_autres">Industrie, production, fabrication, autres</label><br>
        
        <input type="checkbox" id="informatique_ssii_internet" name="secteur" value="informatique_ssii_internet">
        <label for="informatique_ssii_internet">Informatique, SSII, Internet</label><br>
        <br/>
    <label for="description" class="hhhh">Description de l'entreprise</label>
    <p>*Attention : si vous faites un copier-coller de Word, veuillez utiliser le bouton ci-dessous "Coller depuis Word"</p>
    <textarea class="sous_border" id="description" name="description" rows="10" cols="100"></textarea><br>

    </div>
  
</fieldset>
<br><br/>

<!--  email -->
<fieldset class="border">
    <legend class="sous_border">Votre entreprise</legend>
    

        <!-- pour aligne les case  -->
        <div class="form-row">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required placeholder="votre email"  >
        </div>
        <div class="form-row">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required placeholder="votre mot de passe"><br> <br/>
     
            <label for="confirm_password">Confirmez le mot de passe :</label> <br> <br/>
            <input type="password" id="confirm_password" name="confirm_password" required placeholder="confirm  mot de passe" >
        </div>
        <br>
        <!-- <input type="submit" value="Valider"> -->
   
</fieldset>
<br><br/>
<div class="container">
<input class="valide" type="submit" name="valid" value="Valider" onclick="return validateForm()">
</div>
</form>
<script>
    function validateForm() {
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;

        if (password !== confirm_password) {
            alert("Les mots de passe ne correspondent pas !");
            return false; // Annuler la soumission du formulaire
        }

        var fields = document.querySelectorAll('input[type="text"], input[type="password"], input[type="email"], select, textarea');
        var isValid = true;

        fields.forEach(function(field) {
            if (!field.value.trim()) {
                isValid = false;
            }
        });

        if (!isValid) {
            alert("Veuillez remplir tous les champs.");
            return false; // Annuler la soumission du formulaire
        }
        // window.location.href = "verification.html";
        return true; // Soumettre le formulaire si les mots de passe correspondent et si tous les champs sont remplis
    }
</script>

</body> 
</html>