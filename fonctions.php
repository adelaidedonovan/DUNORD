<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'fonctions.php', Création de fonctions nécessaire a le gestion du site.
---------------------------------------------------------------------------
L'utilisateur :

---------------------------------------------------------------------------

L'administrateur :

------------------------------------------------------------------------ */
require_once('connexion.php');
session_start ();
header('Content-Type: text/html; charset=UTF-8');


/*
------------------------------------------------------------------------
Fonction : getAuthentification
---------------------------------------------------------------------------
Description :
Permet de ce connecter avec son identifiant et mot de passe.
---------------------------------------------------------------------------
Arguments :
$login : Identifiant.
$pass : Mot de passe.
---------------------------------------------------------------------------
Retour : True si utilisateur et mot de passe correct, sinon False
------------------------------------------------------------------------ */
function getAuthentification($login, $pass) {
	global $pdo;
    $query = "SELECT * FROM UTILISATEUR WHERE login=:login and password=:pass";
    try {
        $prep = $pdo->prepare($query);
        $prep->bindValue(':login', $login);
        $prep->bindValue(':pass', $pass);
        $prep->execute();

        if($prep->rowCount() == 1){
            $result = $prep->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
        else{
            return false;
        }
    }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
      }
      }
    
/*
------------------------------------------------------------------------
Fonction : getAllMateriel
---------------------------------------------------------------------------
Description :
Permet de sélectionner tout les materiel de la base
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : idMateriel, nomMateriel, typeMateriel, etat.
------------------------------------------------------------------------ */

function getAllMateriel(){
    global $pdo;
    
      $query = 'SELECT idMateriel,nomMateriel,typeMateriel,etat,nomService FROM MATERIEL,SERVICE WHERE`SERVICE_idService` = idService ;' ;
    try {
      $result = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
    }
     
    /*
------------------------------------------------------------------------
Fonction : getAllIncident
---------------------------------------------------------------------------
Description :
Permet de sélectionner tout les incidents de la base
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : idIncident, typeIncident, dateIncident, descriptionIncident.
------------------------------------------------------------------------ */

function getAllIncident(){
    global $pdo;
    
      $query = 'SELECT nomUtilisateur,`idIncident`,`typeIncident`,`dateIncident`,`descriptionIncident`,nomMateriel,INCIDENT.etat,nomService 
      FROM `INCIDENT`,UTILISATEUR,UTILISATEUR_has_INCIDENT,MATERIEL,MATERIEL_has_INCIDENT,SERVICE 
      WHERE UTILISATEUR.idUtilisateur = UTILISATEUR_has_INCIDENT.UTILISATEUR_idUtilisateur 
      AND INCIDENT.idIncident = UTILISATEUR_has_INCIDENT.INCIDENT_idIncident 
      AND MATERIEL.idMateriel = MATERIEL_has_INCIDENT.MATERIEL_idMateriel 
      AND INCIDENT.idIncident = MATERIEL_has_INCIDENT.INCIDENT_idIncident 
      AND `SERVICE_idService` = idService';
              
              
    try {
      $result = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
    }
  
   /*
------------------------------------------------------------------------
Fonction : getMaterielById
---------------------------------------------------------------------------
Description :
Permet de sélectionner les element d'un materiel selon son Id
---------------------------------------------------------------------------
Arguments :
$idMateriel : Identifiant unique du Materiel .
---------------------------------------------------------------------------
Retour : idMateriel, nomMateriel, typeMateriel, etat.
------------------------------------------------------------------------ */

function getMaterielById($idMateriel){
    global $pdo;
    
      $query = 'SELECT `nomMateriel`,`typeMateriel`,`etat` FROM MATERIEL WHERE idMateriel=:idMateriel' ;
      try {
        $prep= $pdo->prepare($query);
        $prep-> bindValue(':idMateriel',$idMateriel);
        $prep->execute();
        $result = $prep->fetchall(PDO::FETCH_ASSOC);
        return $result;
      }
          catch ( Exception $e ) {
            die ("Erreur dans la requete ".$e->getMessage());
          }
      }
       
   /*
------------------------------------------------------------------------
Fonction : getIncidentById
---------------------------------------------------------------------------
Description :
Permet de sélectionner les element d'un incident selon son Id
---------------------------------------------------------------------------
Arguments :
$idIncident : Identifiant unique de l'incident .
---------------------------------------------------------------------------
Retour :typeIncident,descriptionIncident,nomMateriel,INCIDENT.etat ,nomService,idService,idMateriel.
------------------------------------------------------------------------ */

function getIncidentById($idIncident){
    global $pdo;
    
      $query = 'SELECT typeIncident,descriptionIncident,nomMateriel,INCIDENT.etat ,nomService,idService,idMateriel  FROM MATERIEL,INCIDENT,SERVICE WHERE idIncident=:idIncident' ;
      try {
        $prep= $pdo->prepare($query);
        $prep-> bindValue(':idIncident',$idIncident);
        $prep->execute();
        $result = $prep->fetchall(PDO::FETCH_ASSOC);
        return $result;
      }
          catch ( Exception $e ) {
            die ("Erreur dans la requete ".$e->getMessage());
          }
      }

      /*
------------------------------------------------------------------------
Fonction : getAllUser
---------------------------------------------------------------------------
Description :
Permet de sélectionner tout les utilisateur de la base
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : idUtilisateur, nomUtilisateur, Email, login, Password , role , out.
------------------------------------------------------------------------ */

function getAllUser(){
    global $pdo;
    
      $query = 'SELECT * FROM UTILISATEUR;' ;
    try {
      $result = $pdo->query($query)->fetchAll(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
    }
  
   /*
------------------------------------------------------------------------
Fonction : getUserById
---------------------------------------------------------------------------
Description :
Permet de sélectionner les information d'un utilisateur  selon son Id
---------------------------------------------------------------------------
Arguments :
$idUtilisateur : Identifiant unique d'utilisateur .
---------------------------------------------------------------------------
Retour : nomUtilisateur`,`idUtilisateur`,`out`,`prenomUtilisateur`,`login`,`password`,`email`,`role.
------------------------------------------------------------------------ */


function getUserById($idUtilisateur){
    global $pdo;
    
      $query = 'SELECT `nomUtilisateur`,`idUtilisateur`,`out`,`prenomUtilisateur`,`login`,`password`,`email`,`role` FROM UTILISATEUR WHERE idUtilisateur=:idUtilisateur' ;
      try {
        $prep= $pdo->prepare($query);
        $prep-> bindValue(':idUtilisateur',$idUtilisateur);
        $prep->execute();
        $result = $prep->fetchall(PDO::FETCH_ASSOC);
        return $result;
      }
          catch ( Exception $e ) {
            die ("Erreur dans la requete ".$e->getMessage());
          }
      }
  
         /*
------------------------------------------------------------------------
Fonction : getNumberIncident
---------------------------------------------------------------------------
Description :
Permet de sélectionner  le nombre d'incident declarer dans la base de donnée
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : NumberIncident .
------------------------------------------------------------------------ */

function getNumberIncident(){
    global $pdo;
    
      $query = 'SELECT COUNT(*) as NumberIncident FROM INCIDENT;' ;
    try {
      $result = $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
    }  

         /*
------------------------------------------------------------------------
Fonction : getNumberMateriel
---------------------------------------------------------------------------
Description :
Permet de sélectionner  le nombre de Materiel dans la base de donnée
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : NumberMateriel.
------------------------------------------------------------------------ */
function getNumberMateriel(){
    global $pdo;
    
      $query = 'SELECT COUNT(*) as NumberMateriel FROM MATERIEL;' ;
    try {
      $result = $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
    }    
         /*
------------------------------------------------------------------------
Fonction : NumberAccountByRole
---------------------------------------------------------------------------
Description :
Permet de sélectionner  le nombre d'utilisateur  par role dans la base de donnée
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : NumberAccountByRole.
------------------------------------------------------------------------ */

function getNumberAccountByRole(){
    global $pdo;
    
      $query = 'SELECT COUNT(*) as NumberAccountByRole,`role` FROM UTILISATEUR GROUP BY `role` ' ;
    try {
      $result = $pdo->query($query)->fetchall(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
    }

         /*
------------------------------------------------------------------------
Fonction : getNumberIncidentByService
---------------------------------------------------------------------------
Description :
Permet de sélectionner  le nombre d'incident déclarer par service  dans la base de donnée
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : NumberIncidentAdministratif ,NumberIncidentProduction , NumberIncidentCommercial .
------------------------------------------------------------------------ */

function getNumberIncidentByService(){
    global $pdo;
    
      $query = 'SELECT COUNT(DISTINCT INCIDENT_idIncident)  AS NumberIncidentByService, nomService FROM MATERIEL,MATERIEL_has_INCIDENT,SERVICE
                WHERE MATERIEL_has_INCIDENT.MATERIEL_idMateriel = MATERIEL.idMateriel
                AND   MATERIEL.SERVICE_idService =SERVICE.idService
                GROUP BY nomService';
    try {
      $result = $pdo->query($query)->fetchall(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
    }   

 /*
------------------------------------------------------------------------
Fonction :   getNumberMaterielPanneByService
---------------------------------------------------------------------------
Description :
Permet de sélectionner  le nombre de materiel actuellement en panne  par servicedans la base de donnée
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : NumberMaterielPanneAdministratif,NumberMaterielPanneProduction,NumberMaterielPanneCommercial,
------------------------------------------------------------------------ */

function getNumberMaterielPanneByService(){
    global $pdo;
    
      $query = ' SELECT COUNT(DISTINCT `idMateriel`) AS NumberMaterielPannebyService ,nomService FROM MATERIEL,SERVICE WHERE `etat` ="panne" 
      AND   MATERIEL.SERVICE_idService =SERVICE.idService GROUP BY nomService';
    try {
      $result = $pdo->query($query)->fetchall(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
    }   

 /*
------------------------------------------------------------------------
Fonction : getNumberMaterielPanne
---------------------------------------------------------------------------
Description :
Permet de sélectionner le nombre de Materiel en panne.
---------------------------------------------------------------------------
Arguments :
---------------------------------------------------------------------------
Retour : NumberMaterielPanne
------------------------------------------------------------------------ */
function getNumberMaterielPanne(){
    global $pdo;
    
      $query = 'SELECT COUNT(*) as NumberMaterielPanne FROM MATERIEL WHERE `etat`="panne";';
    try {
      $result = $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
    }
 
     /*
------------------------------------------------------------------------
Fonction : getNumberMaterielEnCour
---------------------------------------------------------------------------
Description :
Permet de sélectionner  le nombre de Materiel en cours de réparation dans la base de donnée
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : NumberMaterielEnCour
------------------------------------------------------------------------ */

function  getNumberMaterielEnCour(){
    global $pdo;
    
      $query = 'SELECT COUNT(*) as NumberMaterielEnCour FROM MATERIEL WHERE `etat`="enCours";';
    try {
      $result = $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
}

     /*
------------------------------------------------------------------------
Fonction : getNumberAccount
---------------------------------------------------------------------------
Description :
Permet de sélectionner  le nombre de compte   dans la base de donnée
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : NumberAccount
------------------------------------------------------------------------ */

function  getNumberAccount(){
    global $pdo;
    
      $query = 'SELECT COUNT(*) as NumberAccount FROM UTILISATEUR ;';
    try {
      $result = $pdo->query($query)->fetch(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
}

 /*
------------------------------------------------------------------------
Fonction : getNumberIncidentByMonth
---------------------------------------------------------------------------
Description :
Permet de sélectionner  le nombre d'incident par mois   dans la base de donnée
---------------------------------------------------------------------------
Arguments : Aucun.
---------------------------------------------------------------------------
Retour : NumberIncidentByMonth
------------------------------------------------------------------------ */

function  getNumberIncidentByMonth(){
    global $pdo;
    
      $query = "SELECT MONTH(`dateIncident`) as Mois, COUNT(*) as NumberIncidentByMonth FROM `INCIDENT` GROUP BY MONTH(`dateIncident`)";
    try {
      $result = $pdo->query($query)->fetchall(PDO::FETCH_ASSOC);
    return $result;

        }
    catch ( Exception $e ) {
        die ("Erreur dans la requete ".$e->getMessage());
    }
}