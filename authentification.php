<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'authentification.php', Verification de l'utilisateur se connectant au site Internet.
---------------------------------------------------------------------------
L'utilisateur :
Autorisé
---------------------------------------------------------------------------

L'administrateur :
Autorisé 
------------------------------------------------------------------------ */ 
require_once('fonctions.php');
require_once('connexion.php');
?>


<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DUNORD Authentification</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">authentification</a></h1>
								<p>Entrez votre login et votre mot de passe</p>
								<p>Essayer le site web ? Login : userTest  , Mot de passe : userTest</p>
							</div>

						

					</div>
				</div>
				</br>
				</br>
			
                <div class="container">
                    <form action="login.php" method="GET" class="connexion">
           
                   
                      
                    <!--  Champ d'insertion de l'identifiant  de l'utilisateur -->
                        <label class="autentification">Votre login : </label><input id="autentification" type="text" name="login" placeholder="Identifiant"></p>

                    <!--  Champ d'insertion du mot de passe   de l'utilisateur -->
                        <label class="autentification">Votre mot de passe : </label><input id="autentification" type="password" name="pwd" placeholder="Mot de Passe"></p>


            	        <input class="log" type="submit" value="Se connecter">
            	
                </form>
				</br>
				</br>
				<hr />	

				
				
		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/skel-viewport.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>