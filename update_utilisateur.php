<?php
/* ------------------------------------------------------------------------
Crée le 24/10/2017 par Adelaide Donovan


---------------------------------------------------------------------------
Page 'update_utilisateur.php', permet la modification de son compte (utilisateur) ou des comptes(Admin) .
---------------------------------------------------------------------------
L'utilisateur :
Autorisé.
---------------------------------------------------------------------------
L'administrateur :
Autorisé.
------------------------------------------------------------------------ */


    

	require_once('fonctions.php');
	require_once('information-utilisateur.php');


 //----- Recuperation de l'id User en cours-----//
 $idUtilisateur= $_GET['idUtilisateur'];
 
     //-- Passage de l'id User en paramettre dans la fonction getMaterielById ----/
     $allUserById = getUserById($idUtilisateur);
 
     
 
   foreach ($allUserById as $cle => $listeUser): 
   
      $nomUtilisateur=$listeUser['nomUtilisateur']; 
      $prenomUtilisateur= $listeUser['prenomUtilisateur'];
      $login=$listeUser['login'];
      $password=$listeUser['password'];
      $email=$listeUser['email'];
      $role=$listeUser['role'];


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
		<title>DUNORD Modifcation utilisateur</title>
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
								<h1><a href="index.html">Escape Velocity</a></h1>
								<p>A free responsive site template by HTML5 UP</p>
							</div>

						<?php	require_once('navigation.php');  ?>
			<!-- Main -->
				<div class="wrapper style2">
					<div class="title">No Sidebar</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>		Modification de l'utilisateur N° <?php echo $idUtilisateur ?> </h2>
										
									</header>							
								</article>

                                <div class="container">
                                <form action="update-utilisateur.php" method="POST" >
                       
                               
                                  
                                        <label class="nomMateriel"> Nom Utilisateur: </label><input type="text" name="nomUtilisateur" value="<?= $nomUtilisateur; ?>"></p>
                                        <label class="prenomUtilisateur"> Prenom Utilisateur : </label><input type="text" name="prenomUtilisateur" value="<?= $prenomUtilisateur; ?>"></p>
                                        <label class="login"> Login: </label><input type="text" name="login" value="<?= $login; ?>"></p>
                                        <label class="password">  Mot de passe: </label><input type="text" name="password" value="<?= $password; ?>"></p>
                                        <label class="email"> Email : </label><input type="text" name="email" value="<?= $email; ?>"></p>
									
									<?php	if(($_SESSION['role'] =="Admin")){ ?>
                                        <div class="12u$">
                                            <label for="genre">Role</label>
                                            <div class="select-wrapper">
                                                <select name="role" id="role">
                                                        <option id="select1" value="<?= $role; ?>"><?php echo $role?></option>
                                                        <option id="select2"value="Admin">Admin</option>
                                                        <option id="select3"value="Utilisateur">Utilisateur</option>
                                                        
                                                    </select>
                                            </div>
									<?php } ?>

                                       

                                        </div>
                                        <input type="hidden" name ="idUtilisateur"  value="<?= $idUtilisateur; ?>"></p>
                                        <input class="log" type="submit" value="Modifier">
            	
                            </form>
                        
				</div>

		
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