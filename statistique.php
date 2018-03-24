<?php

/* ------------------------------------------------------------------------
Crée le 24/10/2017 par Adelaide Donovan


---------------------------------------------------------------------------
Page 'statistique.php', Statistique des élément dans la base de donnée .
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
$NumberIncident =getNumberIncident($pdo);
$NumberMateriel= getNumberMateriel($pdo);
$NumberMaterielPanne=getNumberMaterielPanne($pdo);
$NumberAccount=getNumberAccount($pdo);


$NumberIncidentByService = getNumberIncidentByService($pdo);
$NumberMaterielPanneByService=getNumberMaterielPanneByService($pdo);
$NumberIncidentByMonth= getNumberIncidentByMonth($pdo);
$NumberAccountByRole=getNumberAccountByRole($pdo);




?>





<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>DUNORD Statistique</title>
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
								<h1><a href="index.html">Statistique de l'entreprise</a></h1>
								<p>Statistique des differentes données de l'entreprise</p>
							</div>

							<?php	require_once('navigation.php');  ?>

				<!-- Main -->
				<div class="wrapper style2">
					<div class="title">Statistique</div>
					<div id="main" class="container">

						<!-- Content -->
							<div id="content">
								<article class="box post">
									<header class="style1">
										<h2>Statistique</h2>
										
									</header>							
								</article>
					
							

						
									<script type="text/javascript">
								window.onload = function () {
									
								var chart1 = new CanvasJS.Chart("chartContainer1", {
									animationEnabled: true,
									theme: "light2", // "light1", "light2", "dark1", "dark2"
									title:{
										text: "INCIDENT DECLARER SELON LE SERVICE"
									},
									axisY: {
										title: ""
									},
									data: [{        
										type: "column",  
										showInLegend: true, 
										legendMarkerColor: "grey",
										legendText: "Incident déclarer dans un service en pourcentage",
										dataPoints: [  
											
										<?php	foreach ($NumberIncidentByService as $cle=>$valeur): ?>
													
												{ y: <?php echo 100* $valeur['NumberIncidentByService']/ $NumberIncident['NumberIncident']; ?>,  label: "<?php echo $valeur['nomService'] ?>" },
											<?php	endforeach;    ?>
											
											
											
										]
									}]
								});
											
											
								var chart2 = new CanvasJS.Chart("chartContainer2", {
									animationEnabled: true,
									theme: "light2", // "light1", "light2", "dark1", "dark2"
									title:{
										text: "MATERIEL EN ETAT DE PANNE SELON LE SERVICE"
									},
									axisY: {
										title: ""
									},
									data: [{        
										type: "column",  
										showInLegend: true, 
										legendMarkerColor: "grey",
										legendText: "Materiel en etat de  panne  par  service en pourcentage",
										dataPoints: [     
											<?php	foreach ($NumberMaterielPanneByService as $cle=>$valeur): ?> 

												{ y:  <?php echo 100 *  $valeur['NumberMaterielPannebyService']/ $NumberMaterielPanne['NumberMaterielPanne']?>, label: "<?php echo $valeur['nomService'] ?>" },
											<?php	endforeach;    ?>
											
										]
									}]
								});
								

								

							var chart4= new CanvasJS.Chart("chartContainer4", {
								animationEnabled: true,
								title:{
									text: "Accès Compte",
									
								},
								data: [{
									type: "doughnut",
									startAngle: 60,
									//innerRadius: 60,
									indexLabelFontSize: 17,
									indexLabel: "{label} - #percent%",
									toolTipContent: "<b>{label}:</b> {y} (#percent%)",
									dataPoints: [
										<?php	foreach ($NumberAccountByRole as $cle=>$valeur): ?>
										{ y:<?php echo 100 *  $valeur['NumberAccountByRole']/ $NumberAccount['NumberAccount']?>, label: "<?php echo $valeur['role'] ?>" },
										<?php	endforeach;    ?>
									]
								}]
							});
							
	

							var chart5 = new CanvasJS.Chart("chartContainer5", {
								animationEnabled: true,
								exportEnabled: false,
								title:{
									text: "NOMBRE D'INCIDENT PAR MOIS DE L'ANNEE <?php echo date("Y"); ?>"             
								}, 
								axisY:{
									title: ""
								},
								toolTip: {
									shared: true
								},
								legend:{
									cursor:"pointer",
									itemclick: toggleDataSeries
								},
								data: [{        
									type: "spline",  
									name: "Incident",        
									showInLegend: true,
									dataPoints: [
										<?php $mois="";	
											
											foreach ($NumberIncidentByMonth as $cle=>$valeur): 
												if  ($valeur['Mois'] ==1)
													$mois="Janvier";
												elseif 	($valeur['Mois'] ==2)
													$mois="fevrier";											
												elseif 	($valeur['Mois'] ==3)
													$mois="Mars";	
												elseif 	($valeur['Mois'] ==4)
													$mois="Avril";
												elseif 	($valeur['Mois'] ==5)
													$mois="Mais";
												elseif 	($valeur['Mois'] ==6)
													$mois="Juin";
												elseif 	($valeur['Mois'] ==7)
													$mois="Juillet";
												elseif 	($valeur['Mois'] ==8)
													$mois="Aout";													
												elseif 	($valeur['Mois'] ==9)
													$mois="Septembre";
												elseif 	($valeur['Mois'] ==10)
													$mois="Octobre";
												elseif 	($valeur['Mois'] ==11)
													$mois="Novembre";
												elseif 	($valeur['Mois'] ==12)
													$mois="Decembre";		
													?>
												
													
											{  y:  <?php echo $valeur['NumberIncidentByMonth']; ?>, label: "<?php echo $mois ?>" },     
									
										<?php	endforeach;    ?>
											
									]
								
								}]
								
								
							});

							
													
								
											

							function toggleDataSeries(e) {
								if(typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
									e.dataSeries.visible = false;
								}
								else {
									e.dataSeries.visible = true;            
								}
								chart5.render();
							}

							
							

								chart1.render();
								chart2.render();
								chart4.render();
								chart5.render();
								}			
							</script>
							<script src="../DUNORD/canvasjs.min.js"></script>
							<title>CanvasJS Example</title>


							<div id="chartContainer1" style="height: 400px; width: 50%;"></div>
							<div id="chartContainer2" style="height: 400px; width: 50%;"></div>
							<div id="chartContainer3" style="height: 370px; width: 50%;"></div>
							<div id="chartContainer4" style="height: 370px; width: 50%;"></div>
							
							<div id="chartContainer5" style="height: 370px; width: 100%;"></div>
							


							

								
							<table class="pure-table pure-table-horizontal">
    									<thead>
      										<tr>
												<th>Incident declarer</th>
												<td> <?php echo $NumberIncident['NumberIncident']; ?> </td>																				
											</tr>
											<tr>
												<th>Nombre de Materiel</th>
												<td> <?php echo $NumberMateriel['NumberMateriel']; ?> </td>												
											</tr>
											<tr>
												<th>Nombre de Compte</th>
												<td> <?php echo $NumberAccount['NumberAccount']; ?> </td>											
											</tr>
										</thead>																				
									</table>
									

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