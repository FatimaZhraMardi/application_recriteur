<?php
include_once('data_base.php');
$sql = 'SELECT * FROM annonce';
$sth = $cnx->query($sql);
$result = $sth->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Annonce</title>
    <ink href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="offre.css">
</head>
<body>
    <h1>récente offre d'emploi</h1>
    <br>
    <div class="job-list-container">
        <h2>obtenir la liste de toutes les offres d'emploi récentes </h2>
    <?php  
            foreach($result as $row){
                echo '
                <div class="job">
                    <i class="fa fa-briefcase"></i>
                    <h3 class="job-title">' . $row['titre'] . '</h3>
                    <div class="details">
                      ' . $row['description'] . '
                    </div>
                    <span class="salaire">' . $row['salaire'] . '</span>
                </div>
                ';
            }
        ?>
       </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>