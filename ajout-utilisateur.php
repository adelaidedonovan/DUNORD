<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'ajout-utilisateur.php', permet l'insertion d'un utilisateur
---------------------------------------------------------------------------
L'utilisateur :
Redirection Automatique.
---------------------------------------------------------------------------

L'administrateur :
Redirection Automatique.
------------------------------------------------------------------------ */

    
    require_once('fonctions.php');

 
          //----- Recuperation des élément passer en url ------/
          
        
          $nomUtilisateur = $_GET['nomUtilisateur'];
          $prenomUtilisateur = $_GET['prenomUtilisateur'];
          $login = $_GET['login'];
          $password = $_GET['password'];
          $email = $_GET['email'];
          $role = $_GET['role'];
          $out = $_GET['out'];
      

        
     
          $sql = "INSERT INTO `UTILISATEUR` (`idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `email`, `login`, `password`, `out`, `role`) VALUES  (NULL,'$nomUtilisateur','$prenomUtilisateur','$email','$login','$password','$out','$role')";
        try {
        $prep = $pdo->prepare($sql);
        $prep->execute();
    }
    catch ( Exception $e ) {
    die ("Erreur dans la requete ".$e->getMessage());
    }   

    //----------  Si les requette ont bien été exécuter redirection  avec un état succes sinon avec un etat erreur  ---------/


    if ($sql){
        header ('location: gestion_compte.php?succes_add');    
   }
   else {
       header ('location: gestion_compte.php.php?error_add');    
   }