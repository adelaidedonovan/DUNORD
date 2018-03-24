<?php 
/* ------------------------------------------------------------------------
Crée le 24/07/2017 par Adelaide Donovan
---------------------------------------------------------------------------
Page 'update_materiel.php',  permet la modifcation d'un materiel.
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
    $idMateriel= $_GET['idMateriel'];

    //-- Passage de l'id Materiel en paramettre dans la fonction getMaterielById ----/
    $allMaterielById = getMaterielById($idMateriel);

    

  foreach ($allMaterielById as $cle => $listeMateriel): 
  
     $nomMateriel=$listeMateriel['nomMateriel']; 
     $typeMateriel= $listeMateriel['typeMateriel']; 			
     $etat=  $listeMateriel['etat']; 

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
		<title>DUNORD Modification materiel</title>
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
								<h1><a href="index.html">Modification du Materiel N° <?php echo $idMateriel ?> </a></h1>
					
							</div>

							<?php	require_once('navigation.php');  ?>

						

					</div>
				</div>
                <div class="container">
                    <form action="update-materiel.php" method="GET" >
           
                   
                      
                    
                        <label class="nomMateriel"> Nom du Materiel : </label><input type="text" name="nomMateriel" value="<?= $nomMateriel; ?>"></p>
                        <label class="nomMateriel"> type du Materiel : </label><input type="text" name="typeMateriel" value="<?= $typeMateriel; ?>"></p>

                        <div class="12u$">
                            <label for="genre">Etat</label>
                            <div class="select-wrapper">
                                <select name="etat" id="etat">
                                        <option id="select1" value="<?= $etat; ?>"><?php echo $etat?></option>
                                        <option id="select2"value="1">En Panne</option>
                                        <option id="select3"value="2">Résolue</option>
                                        <option id="select4" value="3">traité</option>
                                        <option id="select5"value="4">En cours</option>
                                    </select>
                            </div>
                        
                        </div>
                        <input type="hidden" name ="idMateriel"  value="<?= $idMateriel; ?>"></p>
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