<?php
/* ------------------------------------------------------------------------
Crée le 24/10/2017 par Adelaide Donovan


---------------------------------------------------------------------------
Page 'ajout_utilisateur.php', Insertion d'un nouvelle utilisateur .
---------------------------------------------------------------------------
L'utilisateur :
Ne peut rien faire.
---------------------------------------------------------------------------
L'administrateur :
Autorisé.
------------------------------------------------------------------------ */


    

	require_once('fonctions.php');
	require_once('information-utilisateur.php');

//-------- Appel de fonction via le fichier fonctions.php -------/
$allUser = getAllUser($pdo);

?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DUNORD insertion d'utilisateur</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Ajout d'un utilisateur</a></h1>
								<p>Ajout d'un nouveau utilisateur</p>
							</div>

							<?php	require_once('navigation.php');  ?>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Ajout Utilisateur</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Ajout d'un utilisateur</h2>
										
									</header>							
								</article>

                                <div class="container">
                                <form action="ajout-utilisateur.php" method="GET" >
                       
                               
                                  
                                
                                    <label class="nomUtilisateur"> Nom de L'utilisateur : </label><input type="text" name="nomUtilisateur"</p>
                                    <label class="PrenomUtilisateur"> Prenom de L'utilisateur : </label><input type="text" name="prenomUtilisateur"</p>
                                    <label class="login"> Login Utilisateur : </label><input type="text" name="login" </p>
                                    <label class="password"> Mot de passe Utilisateur : </label><input type="text" name="password" </p>
                                    <label class="email">email Utilisateur: </label><input type="text" name="email" </p>
                                    

									<div class="12u$">
                                        <label for="genre">role</label>
                                        <div class="select-wrapper">
                                            <select name="role" id="role">
                                                    <option id="select1"value="">--</option>
                                                    <option id="select2"value="Admin">Admin</option>
                                                    <option id="select3"value="Utilisateur">Utilisateur</option>
                                                    
                                                </select>
                                        </div>
                                    
                                    </div>
                                
            
                                    <div class="12u$">
                                        <label for="genre">Active</label>
                                        <div class="select-wrapper">
                                            <select name="out" id="out">
                                                    <option id="select1"value="">--</option>
                                                    <option id="select2"value="1">Compte Actif</option>
                                                    <option id="select3"value="0">Compte non Actif</option>
                                                    
                                                </select>
                                        </div>
                                    
                                    </div>
                                    <br>
                                    <input class="log" type="submit" value="Ajouter">
                                    
                                    <input class="log" type="reset" value="Annuler">
                            
                            </form>
                        
				

		
							</div>
						</div>
						<hr />
					</div>
					
				</div>

		</div>

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