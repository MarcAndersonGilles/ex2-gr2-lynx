<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre de Connexion</title>
</head>
<body>
    <h2>Vous êtes connecté</h2>
    <?php
        $codeu= $_POST["courriel"];
        $passe = $_POST["mdp"];

    ?>
    <p>Bienvenu <?= $codeu; ?> !
    Votre mot de passe : <?= $passe; ?>
    </p>
    
</body>
</html>
