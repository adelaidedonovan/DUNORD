<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'connexion.php',  Connexion a la base de donnée de l'entreprise
---------------------------------------------------------------------------
L'utilisateur :

---------------------------------------------------------------------------

L'administrateur :

------------------------------------------------------------------------ */

  $host='localhost';
  $bd='DUNORD';
  $login='root';
  $password='sio';


      $pdo = new PDO('mysql:host='.$host.'; dbname='.$bd, $login, $password);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

?>
