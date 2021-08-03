<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <title>Expert-Gaming | Actualités</title>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />

    <!-- Mobile specific metas
    ============================================ -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Favicon
    ============================================ -->
    <link rel="shortcut icon" href="../ico/favicon.png">

    <!-- Google web fonts
    ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

    <!-- font awesome
    ============================================ -->
    <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">

    <!-- Libs CSS
    ============================================ -->
    <link rel="stylesheet" href="../css/bootstrap/css/bootstrap.min.css">
    <link href="../js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="../css/themecss/lib.css" rel="stylesheet">
    <link href="../js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

      <!-- Theme CSS
    ============================================ -->
    <link href="../css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="../css/themecss/so-categories.css" rel="stylesheet">
    <link href="../css/themecss/so-listing-tabs.css" rel="stylesheet">
    <link href="../css/header8.css" rel="stylesheet">
    <link href="../css/footer5.css" rel="stylesheet">
    <link id="color_scheme" href="../css/home8.css" rel="stylesheet">
    <link id="color_scheme" href="../css/home4.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link id="color_scheme" href="../css/theme.css" rel="stylesheet">
    <link href="../css/responsive.css" rel="stylesheet">
    <link href="../css/404.css" rel="stylesheet">

</head>

<body>
<div id="wrapper" class="wrapper-full">

  <!-- Header Container  -->
  <?php
      include("../include/top.php");
    ?>

    <!-- Main container begin-->
  <div class="main-container container">
    <ul class="breadcrumb">
				<li><a href="Accueil"><i class="fa fa-home"></i></a></li>
					<?php

							if($marque_id != 0){

								$PDO_query_breadcrumb_marque = Bdd::connectBdd()->prepare("SELECT * FROM eg_marque WHERE eg_marque_statut = 1 AND eg_marque_id = :eg_marque_id");
								$PDO_query_breadcrumb_marque->bindParam(":eg_marque_id", $marque_id);
								$PDO_query_breadcrumb_marque->execute();
								$breadcrumb_marque = $PDO_query_breadcrumb_marque->fetch();

									echo'<li><a href="#">'.$breadcrumb_marque['eg_marque_nom'].'</a></li>';

								$PDO_query_breadcrumb_marque->closeCursor();

							}

							

							if($menu_id != 0){

									$PDO_query_breadcrumb_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 AND eg_menu_id = :eg_menu_id");
									$PDO_query_breadcrumb_menu->bindParam(":eg_menu_id", $menu_id);
									$PDO_query_breadcrumb_menu->execute();
									$breadcrumb_menu = $PDO_query_breadcrumb_menu->fetch();

										echo'<li><a href="#">'.$breadcrumb_menu['eg_menu_titre'].'</a></li>';

									$PDO_query_breadcrumb_menu->closeCursor();

							}


							if($cat_id != 0){

								$PDO_query_breadcrumb_cat = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_categorie_id = :eg_categorie_id");
								$PDO_query_breadcrumb_cat->bindParam(":eg_categorie_id", $cat_id);
								$PDO_query_breadcrumb_cat->execute();
								$breadcrumb_cat = $PDO_query_breadcrumb_cat->fetch();

								$PDO_query_breadcrumb_cat->closeCursor();



									$PDO_query_breadcrumb_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 AND eg_menu_id = :eg_menu_id");
									$PDO_query_breadcrumb_menu->bindParam(":eg_menu_id", $breadcrumb_cat['eg_menu_id']);
									$PDO_query_breadcrumb_menu->execute();
									$breadcrumb_menu = $PDO_query_breadcrumb_menu->fetch();

										echo'<li><a href="#">'.$breadcrumb_menu['eg_menu_titre'].'</a></li>';

									$PDO_query_breadcrumb_menu->closeCursor();



								echo'<li><a href="#">'.$breadcrumb_cat['eg_categorie_nom'].'</a></li>';
							}

							if($sous_cat_id != 0){

								$PDO_query_breadcrumb_sous_cat = Bdd::connectBdd()->prepare("SELECT * FROM eg_sous_categorie WHERE eg_sous_categorie_statut = 1 AND eg_sous_categorie_id = :eg_sous_categorie_id");
								$PDO_query_breadcrumb_sous_cat->bindParam(":eg_sous_categorie_id", $sous_cat_id);
								$PDO_query_breadcrumb_sous_cat->execute();
								$breadcrumb_sous_cat = $PDO_query_breadcrumb_sous_cat->fetch();

								$PDO_query_breadcrumb_sous_cat->closeCursor();



									$PDO_query_breadcrumb_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 AND eg_menu_id = :eg_menu_id");
									$PDO_query_breadcrumb_menu->bindParam(":eg_menu_id", $breadcrumb_sous_cat['eg_menu_id']);
									$PDO_query_breadcrumb_menu->execute();
									$breadcrumb_menu = $PDO_query_breadcrumb_menu->fetch();

										echo'<li><a href="#">'.$breadcrumb_menu['eg_menu_titre'].'</a></li>';

									$PDO_query_breadcrumb_menu->closeCursor();



										$PDO_query_breadcrumb_cat = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_categorie_id = :eg_categorie_id");
										$PDO_query_breadcrumb_cat->bindParam(":eg_categorie_id", $breadcrumb_sous_cat['eg_sous_categorie_id_categorie']);
										$PDO_query_breadcrumb_cat->execute();
										$breadcrumb_cat = $PDO_query_breadcrumb_cat->fetch();

											echo'<li><a href="#">'.$breadcrumb_cat['eg_categorie_nom'].'</a></li>';

										$PDO_query_breadcrumb_cat->closeCursor();

								echo'<li><a href="#">'.$breadcrumb_sous_cat['eg_sous_categorie_nom'].'</a></li>';
							}
						
					?>
		</ul>
		
		<div class="row">
			<!--Left Part Start -->
			<aside class="col-sm-4 col-md-3" id="column-left">

        <div class="module latest-product titleLine">
						<h3 class="modtitle">Produits récents</h3>
						<div class="modcontent ">

							<?php

									$PDO_query_produits_recents = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_date >= '2021-06-20' ORDER BY RAND() LIMIT 3");
									$PDO_query_produits_recents->execute();

										while ($produits_recents = $PDO_query_produits_recents->fetch()){

											echo '

												<div class="product-latest-item">
													<div class="media">
														<div class="media-left">
															<a href="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/pages/product_view.php?produit_id='.$produits_recents['eg_produit_id'].'">
											';

												$PDO_query_produits_recents_img = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
												$PDO_query_produits_recents_img->bindParam(":eg_produit_id", $produits_recents['eg_produit_id'], PDO::PARAM_INT);
												$PDO_query_produits_recents_img->execute();
													while ($produits_recents_img = $PDO_query_produits_recents_img->fetch()){

														echo '

																<img src="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$produits_recents_img['eg_image_produit_nom'].'" style="width: 100px;">

														';

													}
												$PDO_query_produits_recents_img->closeCursor();

														echo'

														
																	</a>
																</div>
																<div class="media-body">
																	<div class="caption">
																		<h4><a href="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/pages/product_view.php?produit_id='.$produits_recents['eg_produit_id'].'">' . $produits_recents['eg_produit_nom'] . '</a></h4>

																		<div class="price">
																			<span class="price-new">' . $produits_recents['eg_produit_prix'] . ' TND</span>
																		</div>

																	</div>

																</div>
															</div>
														</div>

												';
										}
									$PDO_query_produits_recents->closeCursor();
							?>

						</div>

				</div>
      </aside>
			<!--Left Part End -->
			
			<!--Middle Part Start-->
			<div id="content" class="col-md-9 col-sm-8">
				<div class="blog-header">
					<h3>ACTUALITÉS</h3>
					<p>Ac tincidunt Suspendisse malesuada velit in Nullam elit magnis netus Vestibulum.</p>
				</div>
				<div class="blog-listitem">
					<div class="blog-item ">
						<div class="itemBlogImg col-md-4 col-sm-12">
							<div class="article-image banners">
								<div>
								<a class="popup-gallery" href="image/demo/blog/blog4.jpg"><img src="../image/demo/blog/blog4.jpg" alt="Kire tuma demonstraverunt lector"></a>
								</div>
							</div>
						</div>
						<div class="itemBlogContent col-md-8 col-sm-12">
							<div class="article-title">
								<h4>
									<a href="blog-detail.html">Kire Tuma Demonstraverunt Lector</a>
								</h4>
								
							</div>
							<div class="article-sub-title">
								<span class="article-date">
									<i class="fa fa-calendar"></i>Tue, Feb 16, 2016								
								</span>
							</div>
							<div class="article-description">
									Morbi tempus, non ullamcorper euismod, erat odio suscipit purus, nec ornare lacus turpis ac purus. Mauris cursus in mi vel dignissim. Morbi mollis elit ipsum, a feugiat lectus gravida non. Aenean molestie justo sed aliquam euismod. Maecenas laoreet b								    </div>
							<div class="blog-meta">
								<span class="author">
									<span>Post by </span>Admin
								</span>
							</div>
						</div>
					</div>

					<ul class="pagination">
						<li class="active"><span>1</span></li>
						<li><a href="#">2</a></li>
						<li><a href="#>&gt;</a></li>
						<li><a href="#">&gt;|</a></li>
					</ul>
					
				</div>
			</div>
			
			
		</div>
		<!--Middle Part End-->
	</div>
    <!-- Main container end -->

  <!-- Footer Container -->
  <?php
      include("../include/footer.php");
    ?>
  <!-- //end Footer Container -->

  <!-- Include Libs & Plugins
============================================ -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="../js/themejs/libs.js"></script>
	<script type="text/javascript" src="../js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" src="../js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" src="../js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" src="../js/datetimepicker/moment.js"></script>
	<script type="text/javascript" src="../js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" src="../js/modernizr/modernizr-2.6.2.min.js"></script>


	<!-- Theme files
============================================ -->
	<script type="text/javascript" src="../js/themejs/application.js"></script>
	<script type="text/javascript" src="../js/themejs/homepage.js"></script>
	<script type="text/javascript" src="../js/themejs/so_megamenu.js"></script>

  </body>

</html>