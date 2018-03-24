<?php 
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'update_incident.php',  permet la modifcation d'un incident.
---------------------------------------------------------------------------
L'utilisateur :
Autorisé.
---------------------------------------------------------------------------

L'administrateur :
Autorisé.
------------------------------------------------------------------------ */
	require_once('fonctions.php');
    require_once('information-utilisateur.php');
    

    //----- Recuperation de l'id Materiel en cours-----//
    $idIncident= $_GET['idIncident'];

    //-- Passage de l'id Materiel en paramettre dans la fonction getMaterielById ----/
    $incidentById = getIncidentById($idIncident);
    $allMateriel = getallMateriel($pdo);
    

  foreach ($incidentById  as $cle => $listeIncident): 
  
     $typeIncident=$listeIncident['typeIncident']; 
     $idService=$listeIncident['idService']; 
     $nomMateriel= $listeIncident['nomMateriel']; 
     $idMateriel = $listeIncident['idMateriel']; 
     $nomService= $listeIncident['nomService']; 	
     $descriptionIncident=  $listeIncident['descriptionIncident']; 

  endforeach;
?>


<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DUNORD Modification d'incident</title>
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
								<h1><a href="index.html">Modification de l'incident N° <?php echo $idIncident ?> </a></h1>
					
							</div>

							<?php	require_once('navigation.php');  ?>

						

					</div>
				</div>
                <div class="container">
                    <form action="update-incident.php" method="GET" >
           
                   
                      
                    
                        <label class="typeIncident"> type de l'incident : </label><input type="text" name="typeIncident" value="<?= $typeIncident; ?>"></p>

                        <div class="12u$">
												<label for="genre">Description</label>
												<div class="select-wrapper">
													<textarea name="descriptionIncident" rows="4" cols="50"> <?= $descriptionIncident; ?> 
															</textarea>
												</div>
											</div>
                       

                       
                        <input type="hidden" name ="idIncident"  value="<?= $idIncident; ?>"></p>
            	        <input class="log" type="submit" value="Modifier">
            	
                </form>
							
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