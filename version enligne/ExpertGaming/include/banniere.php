<section class="so-slideshow ">
		<div class="container">
		<div class="row">
			<div id="so-slideshow">
				<div class="module slideshow--home8 no-margin">
					<?php

						$PDO_query_banniere = Bdd::connectBdd()->prepare("SELECT * FROM eg_banniere ORDER BY eg_banniere_id ASC");
						$PDO_query_banniere->execute();
					
						while ($banniere = $PDO_query_banniere->fetch()){
							
							//rendre la banniere dynamique

							echo '

								<div class="item">
								<a href="#"><img src="https://betatest.expert-gaming.tn' . $banniere['eg_banniere_image'] . '" alt="' . $banniere['eg_banniere_nom'] . '" class="img-responsive"></a>
								</div>
					
							';
						}
						$PDO_query_banniere->closeCursor();

					?>
					
				</div>
				<div class="loadeding"></div>
			</div>
		</div>
		</div>		
	</section>