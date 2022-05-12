<?php
    require 'public/php/lib.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="public/css/style.css">

</head>

<body>
    <section>
        <a href="index.php">accueil</a>
    </section>
    <section>
        <form action="login_verif.php" method="post">
            <label for="email">adresse email</label>
            <input type="text" name="email">

            <label for="mdp">mot de passe</label>
            <input type="password" name="mdp">

            <input type="submit" value="envoyer">
        </form>
        <?php
            if (!empty($_SESSION['erreur'])){
                echo $_SESSION['erreur'];
                unset ($_SESSION['erreur']);
            }
        ?>
    </section>
</body>
</html>