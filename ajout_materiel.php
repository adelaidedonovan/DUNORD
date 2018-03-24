<?php 
/* ------------------------------------------------------------------------
Crée le 24/10/2017 par Adelaide Donovan


---------------------------------------------------------------------------
Page 'ajout-materiel.php', formulaire d'insertion d'un materiel.
---------------------------------------------------------------------------
L'utilisateur :
Autorisé.
---------------------------------------------------------------------------
L'administrateur :
Autorisé.
------------------------------------------------------------------------ */

	require_once('fonctions.php');
    require_once('information-utilisateur.php');
    

   
?>


<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DUNORD insertion d'un materiel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="right-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper" class="wrapper">
					<div id="header">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Ajout d'un  Materiel au seins de l'entreprise </a></h1>
					
							</div>

							<?php	require_once('navigation.php');  ?>



				<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Ajout Materiel</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Ajout d'un Materiel</h2>
										
									</header>							
								</article>

                                <div class="container">

									<form action="ajout-materiel.php" method="POST" >
						
								
									
									
										<label class="nomMateriel"> Nom du Materiel : </label><input type="text" name="nomMateriel"</p>
										<label class="typeMateriel"> type du Materiel : </label><input type="text" name="typeMateriel" </p>
										
										<div class="6u$ 12u$(xsmall)">
												<label for="genre">Service</label>
												<div class="select-wrapper">
													<select name="service" id="services">
																	<option value="">-</option>
																	<option value="1">Administratif</option>
																	<option value="2">Commercial</option>
																	<option value="3">Production</option>
																</select>
												</div>
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
					<div id="copyright">
						<ul>
							<li>&copy; Untitled.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						</ul>
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