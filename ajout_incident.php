<?php
/* ------------------------------------------------------------------------
Crée le 24/10/2017 par Adelaide Donovan


---------------------------------------------------------------------------
Page 'ajout-incident.php', formulaire d'insertion d'un incident.
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
$allMateriel = getallMateriel($pdo);

?>


<!DOCTYPE HTML>

<html>

<head>
	<title>DUNORD insertion d'incident</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>


<body class="left-sidebar">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper" class="wrapper">
			<div id="header">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="index.html">Déclaration d'un incident</a></h1>
					<p>Veuillez remplir le formulaire ci-joint</p>
				</div>

				<?php	require_once('navigation.php');  ?>
			
		<!-- Main -->
		<div class="wrapper style2">
			<div class="title">Formulaire</div>
			<div id="main" class="container">
				<div class="row 150%">
					<div class="4u 12u(mobile)">

						<!-- Sidebar -->
						<div id="sidebar">
							<section class="box">
								<header>
									<h2>Pour signaler une anomalie : </h2>
								</header>
								<ul class="style2">
									<li>
										<article class="box post-excerpt">
											<a href="#" class="image left"><img src="images/precis.PNG" alt="" /></a>
											<h3><a href="#">Soyez clair et précis</a></h3>
											<p>Expliquer clairement l'incident que vous rencontrer sur votre matériel informatique.</p>
										</article>
									</li>
									<li>
										<article class="box post-excerpt">
											<a href="#" class="image left"><img src="images/temps.PNG" alt="" /></a>
											<h3><a href="#">Compléter entiérement le formualaire</a></h3>
											<p>Prenez votre temps et vérifier vos fautes. Une declaration d'incident mal rédigé sera refusé.</p>
										</article>
									</li>
									<li>
										<article class="box post-excerpt">
											<a href="#" class="image left"><img src="images/it.PNG" alt="" /></a>
											<h3><a href="#">Contact </a></h3>
											<p>Dès réception de la déclaration, vous serez contacté par le service IT.</p>
										</article>
									</li>
								</ul>
							</section>

						</div>

					</div>
					<div class="8u 12u(mobile) important(mobile)">

						<!-- Content -->
						<div id="content">
							<article class="box post">
								<header class="style1">
									<div class="logo"><span class="icon fa-desktop"></span></div>
									<h2>Ajout</h2>
									<p>Formulaire de déclaration d'un incident.</p>
								</header>


								<section>
									<form method="POST" action="ajout-incident.php">
										<div class="row uniform">

											<div class="6u 12u$(xsmall)">
												<label for="nom">Type d'incident</label>
												<div class="select-wrapper">
													<select name="typeIncident" id="typeIncident">
														<option value="logiciel"> Logiciel </option>
														<option value="materiel"> Materiel </option>
														<option value="réseaux"> Réseaux </option>
														<option value="autre"> Autre</option>
													</select>
											</div>


									<!-- Recherche par fournisseur  (Menue deroulant) -->
											<div class="6u$ 12u$(xsmall)">
												<label id="ajout_element">Materiel: </label> 
												<div class="select-wrapper">
													<select id="materiel" name="idMateriel">
														<option value=NULL>--Materiel--</option>
														<?php   foreach ($allMateriel as $cle=>$valeur):
														?>
													<?php	if(($valeur['etat'] !="panne")){ ?>		
															<option value="<?php echo $valeur['idMateriel']; ?>"><?php echo $valeur['nomMateriel']; ?></option>
															<?php } ?>
														<?php
														endforeach;
														?>
															
													</select>
												</div>	
											</div>	
											

										

										
												
											</div>

											<div class="12u$">
												<label for="genre">Description</label>
												<div class="select-wrapper">
													<textarea name="description" rows="4" cols="50">
															</textarea>
												</div>
											</div>
											
											<input type="hidden" name="idUtilisateur" value="<?php  echo $_SESSION['idUtilisateur']  ?>" />


											<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Envoi des donn&eacute;es" class="special" /></li>
													<li><input type="reset" value="Reset" /></li>
												</ul>
											</div>
										</div>
									</form>
								</section>
								<hr/>
						</div>
					</div>
				</div>
			</div>
												
	
			
		</div>
		
			</div>
		</div>
													
		<!-- Scripts -->

		<style>
			#select2 {
				margin: 40px;
				background: #8EF030;
				color:#FFFFFF;
				text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
			}
			#select3 {
				margin: 40px;
				background: #FAAC6B;
				color:#FFFFFF;
				text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
			}

			#select4 {
				margin: 40px;
				background: #FA5959;				
				color:#FFFFFF;
				text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
			}
			#select5 {
				margin: 40px;
				background: #000000;				
				color:#FFFFFF;
				text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
			}

		</style>




		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/skel-viewport.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

</body>

</html>