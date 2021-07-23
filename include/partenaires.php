<div class="module titleLine">
	<h3 class="modtitle">Nos partenaires</h3>
		<div class="yt-content-slider yt-content-slider--arrow2"  data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="35" data-items_column0="5" data-items_column1="4" data-items_column2="3"  data-items_column3="2" data-items_column4="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="yes" data-hoverpause="yes">
					<?php

									$PDO_query_partenaire = Bdd::connectBdd()->prepare("SELECT * FROM eg_partenaire WHERE eg_partenaire_statut = 1 ORDER BY eg_partenaire_id ASC");
									$PDO_query_partenaire->execute();

									while ($partenaire = $PDO_query_partenaire->fetch()){
										
										//rendre la partie nos partenaires dynamique

										echo '

											<div class="item">
											<a href="#"><img src="image/logo/' . $partenaire['eg_partenaire_logo'] . '" alt="' . $partenaire['eg_partenaire_nom'] . '" class="img-responsive"></a>
											</div>

										';
									}
									$PDO_query_partenaire->closeCursor();

					?>

		</div>
						
</div>
