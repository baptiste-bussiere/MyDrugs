<?php
    require 'public/php/lib.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <form action="connexion_verif.php" method="post">
        <label for="email">adresse email</label>
        <input type="text" name="email">

        <label for="mdp">mot de passe</label>
        <input type="password" name="mdp">

        <input type="submit" value="envoyer">
    </form>
    <?php
        if (!empty($_SESSION['name_users']))

    ?>
</body>
</html>