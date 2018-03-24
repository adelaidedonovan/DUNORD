<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'information-utilisateur.php', (Traitement) de la session active
---------------------------------------------------------------------------
L'utilisateur :
Redirection automatique
---------------------------------------------------------------------------

L'administrateur :
Redirection automatique
------------------------------------------------------------------------ */

	if (($_SESSION['nom']) && ($_SESSION['role'] && $_SESSION['out']!="0")) {
        echo "<p style=text-align:right; margin-top: 10px;>Bienvenue : ".$_SESSION['nom']." ".$_SESSION['prenom']." (".$_SESSION['role'].")";
        echo '<br><a href="./logout.php">Deconnexion/</a>';
        echo '<a href="./gestion_compte.php">Gestion de compte</a></p>';
    }

    else
        header ('location: authentification.php');
?>
