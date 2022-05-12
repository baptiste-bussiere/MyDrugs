<?php
    require 'public/php/lib.inc.php';
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $mabd = connexionBDD();

    $req='SELECT * FROM users WHERE users_mail LIKE "'.$email.'"';
    $resultat=$mabd->query($req);
    $lignes_resultat=$resultat->rowCount();
    if ($lignes_resultat>0) {
        $ligne=$resultat->fetch(PDO::FETCH_ASSOC);
        if(password_verify($mdp, $ligne['users_pass'])){
            $_SESSION['name_users'] = $ligne['users_name'];
            $_SESSION['id_users'] = $ligne['users_id'];
            header('Location:connexion.php')
        } else{
            $_SESSION['erreur'] ='<p class="erreur">Le mot de passe est incorrecte.</p>';
            header('Location:connexion.php')
        }
    } else{
        $_SESSION['erreur']='<p class="erreur">Utilisateur inconnu.</p>';
        header('Location: connexion.php');
    }
    deconnexionBDD();
?>