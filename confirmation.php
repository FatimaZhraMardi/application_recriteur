<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <h1>Code de confirmation envoyé</h1>
    <p>Veuillez vérifier votre e-mail pour obtenir le code de confirmation.</p>
    <p>Une fois que vous avez reçu le code, veuillez le saisir ci-dessous :</p>
    <form action="verification.php" method="post">
        <label for="confirmation_code">Code de confirmation :</label>
        <input type="text" id="confirmation_code" name="confirmation_code" required>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
