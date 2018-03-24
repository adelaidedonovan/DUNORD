<?php
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'index.php', Presentation du site.
---------------------------------------------------------------------------
L'utilisateur :
Autorisé.
---------------------------------------------------------------------------

L'administrateur :
Autorisé.
------------------------------------------------------------------------ */


session_start ();
require_once('information-utilisateur.php');
?>



<!DOCTYPE HTML>

<html>
	
<head>
	<title>DUNORD</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body class="homepage">
	<div id="page-wrapper">

		<!-- Header -->
		<div id="header-wrapper" class="wrapper">
			<div id="header">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="index.php">Bienvenue sur le site de l'entreprise DUNORD</a></h1>
					<p>Gestion, suivi et traçabilité d'équipements de l'entreprise</p>
				</div>

				<?php	require_once('navigation.php');  ?>



		<!-- Main -->
		<div class="wrapper style2">
			<div class="title">En résumé</div>
			<div id="main" class="container">

				<!-- Image -->
				<a href="#" class="image featured">
								<img src="images/presentation.PNG" alt="" />
							</a>

				<!-- Features -->
				<section id="features">
					<header class="style1">
						<h2>DUNORD un Site Dynamique</h2>
						
					</header>
					<div class="feature-list">
						<div class="row">
							<div class="6u 12u(mobile)">
								<section>
									<h3 class="icon fa-comment">Communication IT</h3>
									<p> La communication dans son ensemble se développe et s'adapte en permanence à de nouveaux besoins.</p>
								</section>
							</div>
							<div class="6u 12u(mobile)">
								<section>
									<h3 class="icon fa-refresh">Application dynamique</h3>
									<p>Une page web dynamique est une page web générée à la demande, Le contenu d'une page web dynamique peut donc varier en fonction d'informations 
									(nom de l'utilisateur, formulaire rempli par l'utilisateur, etc.) qui ne sont connues qu'au moment de sa consultation.</p>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="6u 12u(mobile)">
								<section>
									<h3 class="icon fa-list">Liste des incidents</h3>
									<p>La gestion des incidents est un processus de gestion du cycle de vie de tous les incidents. Elle s’assure que l'exploitation normale des services soit rétablie le plus rapidement possible et que l’impact sur le business soit réduit au minimum.</p>
								</section>
							</div>
							<div class="6u 12u(mobile)">
								<section>
									<h3 class="icon fa-cog">Configuration</h3>
									<p>La configuration, c'est l'activité qui consiste à modifier des paramètres de configuration. C'est une activité typique de l'administration système.</p>
								</section>
							</div>
						</div>
						<div class="row">
							<div class="6u 12u(mobile)">
								<section>
									<h3 class="icon fa-bar-chart">Statistiques utiles a l'entreprise</h3>
									<p>La statistique est l'étude de la collecte de données, leur analyse, leur traitement, 
									l'interprétation des résultats et leur présentation afin de rendre les données compréhensibles par tous. </p>
								</section>
							</div>
							<div class="6u 12u(mobile)">
								<section>
									<h3 class="icon fa-check">Résolution des anomalies</h3>
									<p>Chaque résolution créée pour une anomalie se voit attribuer un statut décrivant sa progression. 
									Il existe quatre statuts de résolution : édition en cours, traité, résolue et panne . Le statut évolue au cours du traitement de l'anomalie..</p>
								</section>
							</div>
						</div>
					</div>
					<ul class="actions actions-centered">
						<li><a href="#" class="button style2 big">More Info</a></li>
					</ul>
				</section>

			</div>
		</div>

		<!-- Highlights -->
		<div class="wrapper style3">
			<div class="title">Gestion DUNORD</div>
			<div id="highlights" class="container">
				<div class="row 150%">
					<div class="4u 12u(mobile)">
						<section class="highlight">
							<a href="liste_incident.php" class="image featured"><img src="images/liste.PNG" alt="" /></a>
							<h3><a href="#">Référencement des incidents</a></h3>
							<p>Gestion des incidents du parc informatique...</p>
							<ul class="actions">
								<li><a href="liste_incident.php" id="plus"class="button style1">En savoir plus</a></li>
							</ul>
						</section>

						<!-- Modal -->
						<div class="modal fade" id="enSavoir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">
								
									<div class="modal-body">
										<img id='iPlan' class="iPlan center-block" src="../img/banner2.jpg" />
									</div>
									<div class="modal-footer">
									</div>
								</div>

								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</div>


					<div class="4u 12u(mobile)">
						<section class="highlight">
							<a href="statistique.php" class="image featured"><img src="images/stats.PNG" alt="" /></a>
							<h3><a href="#">Statistiques évolutifs pour l'entreprise</a></h3>
							<p> Permettant une gestion optimisée du parc</p>
							<ul class="actions">
								<li><a href="statistique.php" class="button style1">En savoir plus</a></li>
							</ul>
						</section>
					</div>
					<div class="4u 12u(mobile)">
						<section class="highlight">
							<a href="ajout_incident.php" class="image featured"><img src="images/simple.PNG" alt="" /></a>
							<h3><a href="#">Simplicité d'utilisation</a></h3>
							<p>Application simple</p>
							<ul class="actions">
								<li><a href="ajout_incident.php" class="button style1">En savoir plus</a></li>
							</ul>
						</section>
					</div>
				</div>
			</div>



		</div>
		<!-- Footer -->
		<div id="footer-wrapper" class="wrapper">
			<div class="title">CONTACT</div>
			<div id="footer" class="container">
				<header class="style1">
					<h2>Un beug dans l'application ?</h2>
					<p>
						N'hésitez pas à nous le signaler <br />

					</p>
				</header>
				<hr />



				<div class="row 50%">
					<div class="12u 12u(mobile)">

						<!-- Contact Form -->
						<section>
							<form method="post" action="traitement-mail.php">
								<div class="row 50%">
									<div class="6u 12u(mobile)">
										<input type="text" name="sujet" id="contact-name" placeholder="sujet" />
									</div>
									<div class="6u 12u(mobile)">
										<input type="text" name="email" id="contact-email" placeholder="Email" />
									</div>
								</div>
								<div class="row 50%">
									<div class="12u">
										<textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="12u">
										<ul class="actions">
											<li><input type="submit" class="style1" value="Send" /></li>
											<li><input type="reset" class="style2" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

					</div>
				</div>

				<hr />
			</div>
			

				<div id="copyright">
					<ul>
						<li>&copy; Untitled</li>
						<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
						<li> <a href="mentions_legales.html">Mentions légales</a></li>
					</ul>
				</div>
			
		</div>

		<!-- Scripts -->
		<script type="text/javascript" src="index.js"></script>
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/skel-viewport.min.js"></script>
		<script src="assets/js/util.js"></script>
		<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
		<script src="assets/js/main.js"></script>

</body>

</html>