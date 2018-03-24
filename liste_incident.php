<?php
/* ------------------------------------------------------------------------
Crée le 24/10/2017 par Adelaide Donovan


---------------------------------------------------------------------------
Page 'liste_incident.php', Liste d'incident .
---------------------------------------------------------------------------
L'utilisateur :
Autorisé.
---------------------------------------------------------------------------

L'administrateur :
Autorisé.
------------------------------------------------------------------------ */


    

	require_once('fonctions.php');
	require_once('information-utilisateur.php');

//-------- Appel de fonction via le fichier fonctions.php -------/
$allIncident = getallIncident($pdo);

?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DUNORD Liste d'incident</title>
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
								<h1><a href="index.html">Liste d'incident</a></h1>
								<p>Liste des incidents declarer par les utilisateur</p>
							</div>

							<?php	require_once('navigation.php');  ?>
			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Incident</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Liste des incidents déclarer</h2>
										
									</header>							
								</article>

								<div class="row 150%">
									<table class="table table-bordered">
    									<thead>
      										<tr>
											  
												<th>Id Incident</th>
												<th>Nom d'utilisateur</th>
        										<th>Type Incident</th>
												<th>Date Incident</th>
												<th>Description Incident</th>
												<th>Nom du Materiel </th>										
												<th>Nom du Service </th>
												<th>Modification</th>
												
											
											
      										</tr>
										</thead>
										
									
								   <?php foreach ($allIncident as $cle => $listeIncident): ?>
								   <?php	if(($_SESSION['nom'] ==$listeIncident['nomUtilisateur'] or $_SESSION['role'] =="Admin")){ ?>		
    								<tr>

										
										<td><?php echo $listeIncident['idIncident']; ?></td>
										<td><?php echo $listeIncident['nomUtilisateur']; ?></td>
										<td><?php echo $listeIncident['typeIncident']; ?></td>
										<td><?php echo $listeIncident['dateIncident']; ?></td>				
										<td><?php echo $listeIncident['descriptionIncident']; ?></td>
										<td><?php echo $listeIncident['nomMateriel']; ?></td>				
										<td><?php echo $listeIncident['nomService']; ?></td>
									<?php	if(($_SESSION['nom'] ==$listeIncident['nomUtilisateur'] or $_SESSION['role'] =="Admin")){ ?>		
												<td><a href=update_incident.php?idIncident=<?php echo $listeIncident['idIncident'];?>> <i class="fa fa-pencil" aria-hidden="true"></i> </a> </td>		
									<?php } ?>
									<?php } ?>	
										
									</tr>
								 <?php endforeach;?>
								 
								

									</table>
									
								</div>
							</div>
							<hr />
					</div>
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