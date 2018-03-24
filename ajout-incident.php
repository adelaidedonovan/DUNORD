<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'ajout-incident.php', (Traitement) permet l'insersion d'un nouveau incident.
---------------------------------------------------------------------------
L'utilisateur :
Redirection automatique
---------------------------------------------------------------------------

L'administrateur :
Redirection automatique
------------------------------------------------------------------------ */

    
    require_once('fonctions.php');

    //----- Recuperation des élément passer en url ------/

        $typeIncident = $_POST['typeIncident'];
        $idMateriel = $_POST['idMateriel'];
       
        $description = $_POST['description'];
        $idUtilisateur = $_POST['idUtilisateur'];


        $sql = "INSERT INTO `INCIDENT` (idIncident, typeIncident, dateIncident, descriptionIncident) VALUES 	(NULL,'$typeIncident', NOW(), '$description')";
        try {
        $prep = $pdo->prepare($sql);
        $prep->execute();
    }
    catch ( Exception $e ) {
    die ("Erreur dans la requete ".$e->getMessage());
    }   
        //------- Recuperation de l'id Incident en cours
        $idIncident =$pdo->lastInsertId();




        $sql = "INSERT INTO `UTILISATEUR_has_INCIDENT` (UTILISATEUR_idUtilisateur,INCIDENT_idIncident) VALUES 	('$idUtilisateur','$idIncident')";
        try {
        $prep = $pdo->prepare($sql);
        $prep->execute();
    }
    catch ( Exception $e ) {
    die ("Erreur dans la requete ".$e->getMessage());
    }   



    
        $sql = "INSERT INTO `MATERIEL_has_INCIDENT` (MATERIEL_idMateriel,INCIDENT_idIncident) VALUES ('$idMateriel','$idIncident')";
        try {
        $prep = $pdo->prepare($sql);
        $prep->execute();
    }
    catch ( Exception $e ) {
    die ("Erreur dans la requete ".$e->getMessage());
    }

        //----- Redirection vers la page declaration incident  avec un état succes si les requete ont bien été exécuté sinon redirection avec un etat erreur
    if($sql){
        header('Location: liste_incident.php?succes');
    }
    else{
        header('Location: liste_incident.php?error');
    }
       
      
?>
