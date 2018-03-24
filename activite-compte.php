<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'activite-compte.php', permet la modification d'un Utilisateur
---------------------------------------------------------------------------
L'utilisateur :
Autorisé (seulement pour son compte).
---------------------------------------------------------------------------

L'administrateur :
Autorisé.
------------------------------------------------------------------------ */

    
    require_once('fonctions.php');

 
          //----- Recuperation des élément passer en url ------/
          $out = $_GET['out'];
          $idUtilisateur = $_GET['idUtilisateur'];

         
        //----- Changement de l'activité du compte de 0 a 1      ou de  1 a 0 ------/
          if ($out==0){
              $out=1;          
          }
          else{
              $out=0;
          }

            
        //----- Mise a jour d'un Utilisateur-----/
        $sql = "UPDATE `UTILISATEUR` SET `out` = :out WHERE idUtilisateur = :idUtilisateur ";
    
        try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':out',$out, PDO::PARAM_STR);
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




