<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'update-utilisateur.php', permet la modification d'un Utilisateur
---------------------------------------------------------------------------
L'utilisateur :
Autorisé.
---------------------------------------------------------------------------

L'administrateur :
Autorisé.
------------------------------------------------------------------------ */

    
    require_once('fonctions.php');

 
          //----- Recuperation des élément passer en url ------/

          $idUtilisateur = $_POST['idUtilisateur'];
          $nomUtilisateur = $_POST['nomUtilisateur'];
          $prenomUtilisateur= $_POST['prenomUtilisateur'];
          $login = $_POST['login'];
          $password = $_POST['password'];
          $email = $_POST['email'];
          $role = $_POST['role'];
      
          
     
        //----- Mise a jour d'un Utilisateur-----/
        $sql = "UPDATE UTILISATEUR SET 
        nomUtilisateur = :nomUtilisateur,
        prenomUtilisateur = :prenomUtilisateur,
        login = :login,
        password = :password,
        email = :email,
        role = :role  
        WHERE idUtilisateur = :idUtilisateur ";

        try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nomUtilisateur', $nomUtilisateur, PDO::PARAM_STR);
        $stmt->bindValue(':prenomUtilisateur', $prenomUtilisateur, PDO::PARAM_STR);
        $stmt->bindValue(':login', $login, PDO::PARAM_STR);
        $stmt->bindValue(':password', $password, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':role', $role, PDO::PARAM_STR);
        $stmt->bindValue(':idUtilisateur',$idUtilisateur, PDO::PARAM_STR);
        $stmt->execute();
         }
    catch ( Exception $e ) {
    die ("Erreur dans la requete ".$e->getMessage());
    }   

    //----------  Si les requette ont bien été exécuter redirection  avec un état succes sinon avec un etat erreur  ---------/


    if ($sql){
        header ('location: gestion_compte.php?succes_update');    
   }
   else {
       header ('location:  gestion_compte.php?error_update');    
   }


   





