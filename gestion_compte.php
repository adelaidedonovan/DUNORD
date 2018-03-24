<?php
/* ------------------------------------------------------------------------
Crée le 24/10/2017 par Adelaide Donovan


---------------------------------------------------------------------------
Page 'gestion_compte.php', Page Permettant la gestion de son compte (utilisateur) ou de tous les compte (Admin) .
---------------------------------------------------------------------------
L'utilisateur :
Autorisé 
---------------------------------------------------------------------------
L'administrateur :
Autorisé.
------------------------------------------------------------------------ */


    

	require_once('fonctions.php');
	require_once('information-utilisateur.php');

//-------- Appel de fonction via le fichier fonctions.php -------/
$allUser = getAllUser($pdo);
$userById = getUserById($_SESSION['idUtilisateur']);
?>
<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DUNORD Gestion de compte</title>
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
								<h1><a href="index.html">Liste Utilisateur</a></h1>
								<p>Affichage , modifiction de l'utilisateur</p>
							</div>

							<?php	require_once('navigation.php');  ?>

			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Utilisateur</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Liste des utilisateur</h2>
										
									</header>							
								</article>


						<div class="container">
								
								<table class="table table-bordered">
    									<thead>
      										<tr>
        										<th>Id Utilisateur</th>
        										<th>Nom Utilisateur</th>
												<th>Prenom Utilisateur</th>
												<th>Email </th>
												<th>login</th>
												<th>Mot de passe</th>
												<th>Role</th>								
												<th>Out</th>
									<?php	if(($_SESSION['login'] !="USERTEST")){ ?>									
												<th>Modification</th>
									<?php } ?>		

									<?php	if(($_SESSION['role'] =="Admin")){ ?>		
												<th>In/Out</th>	
									<?php } ?>									
      										</tr>
										</thead>
										
								<?php	if(($_SESSION['role'] =="Admin")){ ?>										
											<?php foreach ($allUser as $cle => $listeUser): ?>
										<tr>	
													<td><?php echo $listeUser['idUtilisateur']; ?></td>
													<td><?php echo $listeUser['nomUtilisateur']; ?></td>
													<td><?php echo $listeUser['prenomUtilisateur']; ?></td>
													<td><?php echo $listeUser['email']; ?></td>				
													<td><?php echo $listeUser['login']; ?></td>
													<td><?php echo $listeUser['password']; ?></td>
													<td><?php echo $listeUser['role']; ?></td>
													<td><?php echo $listeUser['out']; ?></td>
													<td><a href=update_utilisateur.php?idUtilisateur=<?php echo $listeUser['idUtilisateur'];?>> <i class="fa fa-pencil" aria-hidden="true"></i> </a> </td>					
													<td><a href=activite-compte.php?idUtilisateur=<?php echo $listeUser['idUtilisateur']; ?>&out=<?php echo $listeUser['out'] ;?>> <i class="fa fa-ban" aria-hidden="true"></i> </a> </td>												
										</tr>
											<?php endforeach;?>
		
										</table>																							
							</div>				
											<a href="ajout_utilisateur.php"> <i class="fa fa-plus" aria-hidden="true"></i> Ajouter un nouveau User </a>
								<?php } ?>


								<?php	if(($_SESSION['role'] =="Utilisateur")){ ?>										
											<?php foreach ($userById as $cle => $listeUser): ?>
											<tr>	
													<td><?php echo $listeUser['idUtilisateur']; ?></td>
													<td><?php echo $listeUser['nomUtilisateur']; ?></td>
													<td><?php echo $listeUser['prenomUtilisateur']; ?></td>
													<td><?php echo $listeUser['email']; ?></td>			
													<td><?php echo $listeUser['login']; ?></td>
													<td><?php echo $listeUser['password']; ?></td>
													<td><?php echo $listeUser['role']; ?></td>
													<td><?php echo $listeUser['out']; ?></td>
													<?php	if(($_SESSION['login'] !="USERTEST")){ ?>		
														<td><a href=update_utilisateur.php?idUtilisateur=<?php echo $listeUser['idUtilisateur'];?>> <i class="fa fa-pencil" aria-hidden="true"></i> </a> </td>
													<?php } ?>																						
										</tr>
											<?php endforeach;?>
									</table>																														
								<?php } ?>

								<hr />
					</div>		
					</div>
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