<?php
    require 'public/php/lib.inc.php';
    
    // verification de l'adresse email
    if (validateEmail($_POST['email']) == true){
        return $_POST['email'];
    } else{
        $_SESSION['erreur']='L\'adresse email n\'a pas le bon format';
    }

    //username
    $username = $_POST['username'];

    // cryptage du mot de passe
    $options = [
        'cost' => 10,
    ];
    $mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT, $options);

    
    // verification du formulaire et inscription dans la BDD
    $mabd = connexionBDD();

    if (empty($_SESSION['erreur']) && !empty($email) && !empty($username) && !empty($mdp)){
        echo "test";
    } if (!empty($_SESSION['erreur'])){
        header('Location:register.php');
    } else {
        $_SESSION['erreur']='Une erreur s\'est produite';
        header('Location:register.php');
    }

    deconnexionBDD();
?>


