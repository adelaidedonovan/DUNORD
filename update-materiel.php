<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'update_Materiel.php', (Traitement) permet la modification d'un Materiel.
---------------------------------------------------------------------------
L'utilisateur :
Redirection Automatique.
---------------------------------------------------------------------------

L'administrateur :
Redirection Automatique.
------------------------------------------------------------------------ */

    
    require_once('fonctions.php');

 
          //----- Recuperation des élément passer en url ------/

          $idMateriel = $_GET['idMateriel'];
          $nomMateriel = $_GET['nomMateriel'];
          $typeMateriel = $_GET['typeMateriel'];
          $etat = $_GET['etat'];
     
        //----- Mise a jour d'un Materiel -----/
        $sql = "UPDATE MATERIEL SET 
        nomMateriel = :nomMateriel,
        typeMateriel = :typeMateriel,
        etat = :etat  
        WHERE idMateriel = :idMateriel ";

        try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':nomMateriel', $nomMateriel, PDO::PARAM_STR);
        $stmt->bindValue(':typeMateriel', $typeMateriel, PDO::PARAM_STR);
        $stmt->bindValue(':etat', $etat, PDO::PARAM_STR);
        $stmt->bindValue(':idMateriel',$idMateriel, PDO::PARAM_STR);
        $stmt->execute();
         }
    catch ( Exception $e ) {
    die ("Erreur dans la requete ".$e->getMessage());
    }   

    //----------  Si les requette ont bien été exécuter redirection  avec un état succes sinon avec un etat erreur  ---------/


    if ($sql){
        header ('location: liste_materiel.php?succes_update');    
   }
   else {
       header ('location: liste_materiel.php?error_update');    
   }