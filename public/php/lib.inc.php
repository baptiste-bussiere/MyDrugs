<?php

    session_start();

    function connexionBDD(){
        try {
            $mabd = new PDO('mysql:host=localhost;port=8888;dbname=mydrugs;charset=UTF8;', 'root', 'root');
            $mabd->query('SET NAMES utf8;');
        } catch (PDOException $e) {
            print "Erreur : ".$e->getMessage().'<br />'; die();
        }
        return $mabd;
    }



    function deconnexionBDD(){
        $mabd=null;
    }


?>