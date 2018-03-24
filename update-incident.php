<?php 
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'update-incident.php',  permet la modifcation d'un incident.
---------------------------------------------------------------------------
L'utilisateur :
Redirection Automatique.
---------------------------------------------------------------------------

L'administrateur :
Redirection Automatique.
------------------------------------------------------------------------ */

require_once('fonctions.php');

 
          //----- Recuperation des élément passer en url ------/

          $idIncident = $_GET['idIncident'];
          $typeIncident = $_GET['typeIncident'];
    //      $idMateriel = $_GET['idMateriel'];
    //      $etat = $_GET['etat'];
    //      $idService= $_GET['service'];
          $descriptionIncident = $_GET['descriptionIncident'];
        
     
     
        //----- Mise a jour d'un Incident -----/
        $sql = "UPDATE INCIDENT SET 
        typeIncident = :typeIncident,
        descriptionIncident = :descriptionIncident
        WHERE idIncident = :idIncident ";

        try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':typeIncident', $typeIncident, PDO::PARAM_STR);
        $stmt->bindValue(':descriptionIncident', $descriptionIncident, PDO::PARAM_STR);
        $stmt->bindValue(':idIncident',$idIncident, PDO::PARAM_STR);
        $stmt->execute();
         }
    catch ( Exception $e ) {
    die ("Erreur dans la requete ".$e->getMessage());
    }   



    



/*

         //----- Mise a jour du Materiel de l'Incident -----/
         $sql = "UPDATE MATERIEL_has_INCIDENT SET 
         MATERIEL_idMateriel = :MATERIEL_idMateriel 
         WHERE  INCIDENT_idIncident = :INCIDENT_idIncident ";

         try {
         $stmt = $pdo->prepare($sql);
         $stmt->bindValue(':INCIDENT_idIncident',$idIncident, PDO::PARAM_STR);
         $stmt->bindValue(':MATERIEL_idMateriel',$idMateriel, PDO::PARAM_STR);
         $stmt->execute();
         }
     catch ( Exception $e ) {
     die ("Erreur dans la requete ".$e->getMessage());
     }   




          //----- Mise a jour de l'etat du Materiel -----/
          $sql = "UPDATE MATERIEL SET 
                  etat = :etat  
                  WHERE idMateriel = :idMateriel ";
          try {
          $stmt = $pdo->prepare($sql);
          $stmt->bindValue(':etat', $etat, PDO::PARAM_STR);
          $stmt->bindValue(':idMateriel',$idMateriel, PDO::PARAM_STR);
          $stmt->execute();
          }
      catch ( Exception $e ) {
      die ("Erreur dans la requete ".$e->getMessage());
      }   
 
 
 
*/

    //----------  Si les requette ont bien été exécuter redirection  avec un état succes sinon avec un etat erreur  ---------/


    if ($sql){
        header ('location: liste_incident.php?succes_update');    
   }
   else {
       header ('location: liste_incident.php?error_update');    
   }
   