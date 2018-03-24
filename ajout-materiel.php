<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'ajout-materiel.php', (Traitement) permet l'insertion d'un Materiel.
---------------------------------------------------------------------------
L'utilisateur :
Redirection Automatique.
---------------------------------------------------------------------------

L'administrateur :
Redirection Automatique.
------------------------------------------------------------------------ */

    
    require_once('fonctions.php');

 
          //----- Recuperation des élément passer en url ------/

        
          $nomMateriel = $_POST['nomMateriel'];
          $typeMateriel = $_POST['typeMateriel'];
          $idService = $_POST['service'];
      
     
          $sql = "INSERT INTO `MATERIEL` (idMateriel, nomMateriel, typeMateriel,SERVICE_idService) VALUES 	(NULL,'$nomMateriel', '$typeMateriel','$idService')";
        try {
        $prep = $pdo->prepare($sql);
        $prep->execute();
    }
    catch ( Exception $e ) {
    die ("Erreur dans la requete ".$e->getMessage());
    }   

    //----------  Si les requette ont bien été exécuter redirection  avec un état succes sinon avec un etat erreur  ---------/


    if ($sql){
        header ('location: liste_materiel.php?succes_add');    
   }
   else {
       header ('location: liste_materiel.php?error_add');    
   }