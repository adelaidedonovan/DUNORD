<?php
/* ------------------------------------------------------------------------
Crée le 24/10/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'logout.php'. Déconnexion de la session active
---------------------------------------------------------------------------
L'utilisateur :
Redirection Automatique.
---------------------------------------------------------------------------
L'administrateur :
Redirection Automatique.
------------------------------------------------------------------------ */

// On démarre la session
session_start ();

// On détruit les variables de notre session
session_unset ();

// On détruit notre session
session_destroy ();

// On redirige le visiteur vers la page d'accueil
header ('location: authentification.php');

?>
