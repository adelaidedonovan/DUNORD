


						<!-- Nav -->
						<nav id="nav">
							<ul>
								<li class="current"><a href="index.php">Accueil</a></li>
								<li><a href="ajout_incident.php">Ajout d'un incident</a></li>
								<li><a href="liste_incident.php">Liste incidents</a></li>
                         <?php	if(($_SESSION['role'] =="Admin")){ ?>
								<li><a href="liste_materiel.php">Liste Materiel</a></li>
								<li><a href="ajout_materiel.php">Ajout Materiel</a></li>
								<li><a href="statistique.php">Statistique(s)</a></li>
                                <?php } ?>
							</ul>
						</nav>

					</div>
				</div>

            