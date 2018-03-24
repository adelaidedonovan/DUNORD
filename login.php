<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'login.php', (Traitement) enregistrement de information de la session .
---------------------------------------------------------------------------
L'utilisateur :
Redirection automatique
---------------------------------------------------------------------------

L'administrateur :
Redirection automatique
------------------------------------------------------------------------ */

    require_once('fonctions.php');
    // on teste si nos variables sont définies et remplies
    if (isset($_GET['login']) && isset($_GET['pwd']) ) {
    // on appele la fonction getAuthentification en lui passant en paramètre le login et password
    $result = getAuthentification($_GET['login'], $_GET['pwd']);

        // si le résulat est VRAI
        if($result != false){
            // on la démarre la session
            session_start ();
            // on enregistre les paramètres de notre visiteur comme variables de session
            $_SESSION['nom'] = $result['nomUtilisateur'];
            $_SESSION['prenom'] = $result['prenomUtilisateur'];
            $_SESSION['idUtilisateur'] = $result['idUtilisateur'];
            $_SESSION['email']=$result['email'];
            $_SESSION['role'] = $result['role'];
            $_SESSION['login'] = $result['login'];
            $_SESSION['password'] = $result['password'];
            $_SESSION['out'] = $result['out'];
            // on redirige notre visiteur vers une page de notre section membre
            header ('location: index.php');

        }
        //si le résultat est false on redirige vers la page d'authentification
        else{
            header ('location: authentification.php?erreur');
        }
    }
    //si nos variables ne sont pas renseignées on redirige vers la page d'authentification
    else {
        header ('location: authentification.php?erreur');
    }
?>
