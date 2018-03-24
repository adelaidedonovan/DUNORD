<?php
/* ------------------------------------------------------------------------
Crée le 24/10/2017 par Adelaide Donovan


---------------------------------------------------------------------------
Page 'liste_materiel.php', Liste des materiel présent au seins de l'entreprise .
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
$allMateriel = getAllMateriel($pdo);

?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DUNORD Liste materiel</title>
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
								<h1><a href="index.html">Liste des Materiel</a></h1>
								<p>Liste des Materiel au seins de l'entreprise</p>
							</div>

							<?php	require_once('navigation.php');  ?>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Materiel</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Liste des Materiels</h2>
										
									</header>							
								</article>

								
									<table class="table table-bordered">
    									<thead>
      										<tr>
        										<th>Id Materiel</th>
        										<th>Nom Materiel</th>
												<th>Type Materiel</th>
												<th>Etat</th>
												<th>Service</th>	
												<th>Modification</th>									
      										</tr>
										</thead>
																			
								   		<?php foreach ($allMateriel as $cle => $listeMateriel): ?>
    										<tr>
     		 									<td><?php echo $listeMateriel['idMateriel']; ?></td>
												<td><?php echo $listeMateriel['nomMateriel']; ?></td>
												<td><?php echo $listeMateriel['typeMateriel']; ?></td>				
												<td><?php echo $listeMateriel['etat']; ?></td>
												<td><?php echo $listeMateriel['nomService'];?></td>
												<td><a href=update_materiel.php?idMateriel=<?php echo $listeMateriel['idMateriel'];?>> <i class="fa fa-pencil" aria-hidden="true"></i> </a> </td>												
											</tr>
								 		<?php endforeach;?>
	
									</table>		
																					
							</div>
							<a href="ajout_materiel.php"> <i class="fa fa-plus" aria-hidden="true"></i> Ajouter un nouveau Materiel </a>	
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