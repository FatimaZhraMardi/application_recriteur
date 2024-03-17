<?php
session_start();

// Vérification si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération du code de vérification saisi par l'utilisateur
    $userVerificationCode = $_POST['verification_code'];

    // Récupération du code de vérification enregistré dans la session
    $verificationCode = $_SESSION['verification_code'];

    // Vérification si les codes correspondent
    if ($userVerificationCode == $verificationCode) {
        // Codes correspondants
        echo "Le code de vérification est correct.";
        // Réinitialisation de la session
        session_unset();
        session_destroy();
    } else {
        // Codes ne correspondant pas
        echo "Le code de vérification est incorrect.";
    }
}
?>
