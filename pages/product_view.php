<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Expert-Gaming | Détails du produit</title>
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


</head>

<body class="res layout-subpage">


	<div id="wrapper" class="wrapper-full">

		<!-- Header Container  -->
		<?php
				include("../include/top.php");
			?>
		<!-- //Header Container  -->



		<!-- Main Container  -->
		<div class="main-container container">
			<ul class="breadcrumb">
				<li><a href="Accueil"><i class="fa fa-home"></i></a></li>
				<li><a href="#">Casque</a></li>
				<li><a href="#">Casque gaming</a></li>

			</ul>

			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-md-12 col-sm-12">

					<div class="product-view row">
						<div class="left-content-product col-lg-12 col-xs-12">
							<div class="row">
								<div class="content-product-left class-honizol col-sm-6 col-xs-12 ">

								<!--Large Image Start-->

								<?php

									$PDO_query_verif_product = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
									$PDO_query_verif_product->bindParam(":eg_produit_id", $_GET['produit_id']);
									$PDO_query_verif_product->execute();
										while ($verif_product = $PDO_query_verif_product->fetch()){

											echo '
											<div class="large-image">
												<img id="myImg" src="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$verif_product['eg_image_produit_nom'].'" title="' . $verif_product['eg_image_produit_title'] . '" alt="' . $verif_product['eg_image_produit_title'] . '">
											</div>

											';

										}
									$PDO_query_verif_product->closeCursor();

								?>

								<!-- The Modal -->
								<div id="myModal" class="modal">

								<!-- The Close Button -->
								<span class="close">&times;</span>

								<!-- Modal Content (The Image) -->
								<img class="modal-content" id="img01">

								<!-- Modal Caption (Image Text) -->
								<div id="caption"></div>
								</div>

								<!--Large Image End-->

									<div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">


										<?php

											$PDO_query_verif_product = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id");
											$PDO_query_verif_product->bindParam(":eg_produit_id", $_GET['produit_id']);
											$PDO_query_verif_product->execute();
												while ($verif_product = $PDO_query_verif_product->fetch()){

													if(!empty($verif_product['eg_image_produit_nom'])){

														echo '
														<a data-index="' . $verif_product['eg_image_produit_id'] . '" class="img thumbnail " data-image="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$verif_product['eg_image_produit_nom'].'" title="' . $verif_product['eg_image_produit_title'] . '">
														<img src="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$verif_product['eg_image_produit_nom'].'" title="' . $verif_product['eg_image_produit_title'] . '" alt="' . $verif_product['eg_image_produit_title'] . '">
														</a>

														';
													}

												}
											$PDO_query_verif_product->closeCursor();

										?>


										

									</div>

								</div>

								<?php

										$PDO_query_quickview_product_description = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_id = :eg_produit_id");
										$PDO_query_quickview_product_description->bindParam(":eg_produit_id", $_GET['produit_id']);
										$PDO_query_quickview_product_description->execute();
											while ($quickview_product_description = $PDO_query_quickview_product_description->fetch()){

												echo '
												<div class="content-product-right col-sm-6 col-xs-12">
												<div class="title-product">
													<h1>' . $quickview_product_description['eg_produit_nom'] . '</h1>
												</div>
												<!-- Review ---->
												<div class="box-review form-group">
													<div class="ratings">
														<div class="rating-box">';
															$nb_etoile = $quickview_product_description['eg_produit_etoiles'];
															for ($i=1 ; $i<=$nb_etoile ; $i++)
															{
															echo '<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> ';
															}
															echo'
														</div>
													</div>
													';

														//	<a class="reviews_button" href="quickview.php.html" onclick="$(\'a[href=\'#tab-review\']\').trigger(\'click\'); return false;">0 Avis</a>	

													echo'
												</div>
			   
												<div class="product-label form-group">
												';

												if($quickview_product_description['eg_produit_promo'] > 0){

													echo'

													<div class="product_page_price price" itemprop="offerDetails">
														<span class="price-new" itemprop="price">' . $quickview_product_description['eg_produit_promo'] . ' TND</span>
														<span class="price-old">' . $quickview_product_description['eg_produit_prix'] . ' TND</span>
													</div>
											';


												}else{

													echo'
													<div class="product_page_price price" itemprop="offerDetails">
														<span class="price">' . $quickview_product_description['eg_produit_prix'] . ' TND</span>
													</div>
													';

												}



												if($quickview_product_description['eg_produit_dispo'] == 0){

													echo'

													<div class="stock"><span class="status-outofstock">Hors stock</span></div>

												';


												}elseif($quickview_product_description['eg_produit_dispo'] == 1){

													echo'
													
													<div class="stock"><span class="status-stock">Disponible</span></div>

													';

												}elseif($quickview_product_description['eg_produit_dispo'] == 2){

													echo'
													
													<div class="stock"><span class="status-commande">Sur commande 48H</span></div>

													';

												}else{

													echo'
													
													<div class="stock"><span class="status-commande">Sur commande</span></div>

													';

												}
											
													echo'
													</div>

												<div class="product-box-desc">
													<div class="inner-box-desc">
													';


													$PDO_query_quickview_marque = Bdd::connectBdd()->prepare("SELECT * FROM eg_marque WHERE eg_marque_statut = 1 AND eg_marque_id = :eg_marque_id");
													$PDO_query_quickview_marque->bindParam(":eg_marque_id", $quickview_product_description['eg_marque_id']);
													$PDO_query_quickview_marque->execute();
													$quickview_marque = $PDO_query_quickview_marque->fetch();

													echo'
														<div class="brand"><span>Marque : </span><u><a href="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/pages/products.php?marque_id='.$quickview_marque['eg_marque_id'].'" class="cutom-parent">' . $quickview_marque['eg_marque_nom'] . '</u></a> </div>
													';
													
													$PDO_query_quickview_marque->closeCursor();

													

													echo'
													   
													   <div class="reward"><span>Modéle : </span> ' . $quickview_product_description['eg_produit_modele'] . '</div>
													   <div class="model"><span>Réf. Produit : </span>' . $quickview_product_description['eg_produit_reference'] . '</div>
													</div>
												</div>
			   
			   
												<div id="product">

													<div class="form-group box-info-product">
														<div class="option quantity">
															<div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
																<label>Qt<sup>é</sup> </label>
																<input class="form-control" type="text" name="quantity" value="1"/>
																<input type="hidden" name="product_id" value="50"/>
																<span class="input-group-addon product_quantity_down">− </span>
																<span class="input-group-addon product_quantity_up">+ </span>
															</div>
														</div>
														';

														if($quickview_product_description['eg_produit_disponibilite'] == 0){

															echo'
		
															<div class="cart">
															<input type="button" data-toggle="tooltip" title="" value="Bientot disponible" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Ajouter au panier" disabled="disabled" />
															</div>
		
															';
		
		
														}else{
		
															echo'
															
															<div class="cart">
															<input type="button" data-toggle="tooltip" title="" value="Bientot disponible" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Ajouter au panier" />
															</div>
		
															';
		
														}

															
														echo'
														
														<div class="add-to-links wish_comp">
															<ul class="blank list-inline">
																<li class="wishlist">
																	<a class="icon" data-toggle="tooltip" title="" data-original-title="Bientot disponible"><i class="fa fa-heart"></i>
																	</a>
																</li>
																<li class="compare">
																	<a class="icon" data-toggle="tooltip" title="" data-original-title="Bientot disponible"><i class="fa fa-exchange-alt"></i>
																	</a>
																</li>
															</ul>
														</div>
			   
													</div>
			   
												</div>
			   
												<div class="com-sm-6">
			   
											   <!--Blockquote Part Start-->
											   <h2 class="text-uppercase">DESCRIPTION</h2>
											   <blockquote>
												   <p>' . $quickview_product_description['eg_produit_description'] . '
												   </p>
											   </blockquote>
											   <!--Blockquote Part End-->
			   
												</div>
												<!-- end box info product -->
			   
											</div>
											';

									}
									$PDO_query_quickview_product_description->closeCursor();
								?>




							</div>
						</div>

					</div>

					<!-- Product Tabs -->
					<div class="producttab ">
						<div class="tabsslider  vertical-tabs col-xs-12">
							<ul class="nav nav-tabs col-lg-2 col-sm-3">
								<li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
								<!-- <li class="item_nonactive"><a data-toggle="tab" href="#tab-review">Avis (1)</a></li> -->
								<!-- <li class="item_nonactive"><a data-toggle="tab" href="#tab-4">Tags</a></li> -->
								<!-- <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a></li> -->
							</ul>
							<div class="tab-content col-lg-10 col-sm-9 col-xs-12">


							<?php

											$PDO_query_product_description = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_produit_id = :eg_produit_id");
											$PDO_query_product_description->bindParam(":eg_produit_id", $_GET['produit_id']);
											$PDO_query_product_description->execute();
												while ($product_description = $PDO_query_product_description->fetch()){

													echo '

														<div id="tab-1" class="tab-pane fade active in">
															<p>
															' . $product_description['eg_produit_description'] . '
															</p>
														</div>

													';

											}
											$PDO_query_product_description->closeCursor();

									?>

								

								<!-- <div id="tab-review" class="tab-pane fade">
									<form>
										<div id="review">
											<table class="table table-striped table-bordered">
												<tbody>
													<tr>
														<td style="width: 50%;"><strong>Super Administrator</strong>
														</td>
														<td class="text-right">01/06/2021</td>
													</tr>
													<tr>
														<td colspan="2">
															<p>Best this product opencart</p>
															<div class="ratings">
																<div class="rating-box">
																	<span class="fa fa-stack">
																		<i class="fa fa-star-o fa-stack-1x"></i>
																	</span>
																	<span class="fa fa-stack">
																		<i class="fa fa-star fa-stack-1x"></i>
																		<i class="fa fa-star-o fa-stack-1x"></i>
																	</span>
																	<span class="fa fa-stack">
																		<i class="fa fa-star fa-stack-1x"></i>
																		<i class="fa fa-star-o fa-stack-1x"></i>
																	</span>
																	<span class="fa fa-stack">
																		<i class="fa fa-star fa-stack-1x"></i>
																		<i class="fa fa-star-o fa-stack-1x"></i>
																		</span>
																	<span class="fa fa-stack">
																		<i class="fa fa-star-o fa-stack-1x"></i>
																	</span>
																</div>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
											<div class="text-right"></div>
										</div>
										<h2 id="review-title">Donnez votre avis</h2>
										<div class="contacts-form">

											<div class="form-group">
												<span class="icon icon-user"></span>
												<input type="text" name="name" class="form-control" value="Your Name"
													onblur="if (this.value == '') {this.value = \'Your Name\';}"
													onfocus="if(this.value == \'Your Name\') {this.value = '';}">
											</div>

											<div class="form-group">
												<span class="icon icon-bubbles-2"></span>
												<textarea class="form-control" name="text" onblur="if (this.value == '') {this.value = \'Your Review\';}" onfocus="if(this.value == \'Your Review\') {this.value = '';}">Your Review</textarea>
											</div>


											<div class="form-group">
												<b>Rating</b> <span>Bad</span>&nbsp;
												<input type="radio" name="rating" value="1"> &nbsp;
												<input type="radio" name="rating" value="2"> &nbsp;
												<input type="radio" name="rating" value="3"> &nbsp;
												<input type="radio" name="rating" value="4"> &nbsp;
												<input type="radio" name="rating" value="5"> &nbsp;
												<span>Good</span>
											</div>

											<div class="buttons clearfix"><a id="button-review"
													class="btn buttonGray">Continue</a></div>
										</div>
									</form>
								</div> -->

							</div>
						</div>
					</div>
					<!-- //Product Tabs -->

					<!-- Related Products -->
					<div class="related titleLine products-list grid module ">
						<h3 class="modtitle">Autres produits de la marque :</h3>
						<div class="releate-products ">
								<?php

										$PDO_query_produits_lies = Bdd::connectBdd()->prepare("SELECT * FROM eg_produit WHERE eg_produit_statut = 1 AND eg_marque_id = :eg_marque_id AND   eg_produit_id != :eg_produit_id ");
										$PDO_query_produits_lies->bindParam(":eg_marque_id", $quickview_marque['eg_marque_id']);
										$PDO_query_produits_lies->bindParam(":eg_produit_id", $_GET['produit_id']);
										$PDO_query_produits_lies->execute();
											while ($produits_lies = $PDO_query_produits_lies->fetch()){

												echo '

												<div class="product-layout">
												<div class="product-item-container">
													<div class="left-block">
														<div class="product-image-container lazy second_img ">
														';
														$PDO_query_produits_lies_img = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
														$PDO_query_produits_lies_img->bindParam(":eg_produit_id", $produits_lies['eg_produit_id'], PDO::PARAM_INT);
														$PDO_query_produits_lies_img->execute();
															while ($produits_lies_img = $PDO_query_produits_lies_img->fetch()){

																echo '

																<img data-src="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$produits_lies_img['eg_image_produit_nom'].'"
																src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" alt="' . $produits_lies_img['eg_image_produit_title'] . '" class="img-responsive" />


																';
																

																if($produits_lies['eg_produit_promo'] > 0){

																	echo '
																	<span class="label label-sale">Promotion</span>
																	';
																}	

																if($produits_lies['eg_produit_new'] == 1){

																	echo '
																	<span class="label label-new">Nouveau</span>
																	';
																}

																if($produits_lies['eg_produit_promo'] > 0 & $produits_lies['eg_produit_new'] == 1){

																	echo '
																	<span class="label label-new">Nouveau</span>
																	<span class="label label-sale">Promotion</span>
																	';
																}	

															}
														$PDO_query_produits_lies_img->closeCursor();
																		
														echo'
															
														</div>
														<!--Sale Label-->
														';
														

															if($produits_lies['eg_produit_promo'] > 0){

																echo '
																<span class="label label-sale">Promotion</span>
																';
															}	

														echo'
														<a class="quickview iframe-link visible-lg" data-fancybox-type="iframe" href="quickview.php?produit_id='.$produits_lies['eg_produit_id'].'">Aperçu rapide</a>
													</div>
				
				
													<div class="right-block">
													
														<div class="caption">
															<h4><a href="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/pages/product_view.php?produit_id='.$produits_lies['eg_produit_id'].'">' . $produits_lies['eg_produit_nom'] . '</a></h4>
															<h5>Référence: ' . $produits_lies['eg_produit_reference'] . '</h5>  
															<div class="ratings">
																<div class="box-review form-group">
																	<div class="ratings">
																		<div class="rating-box">';
																			$nb_etoile = $produits_lies['eg_produit_etoiles'];
																			for ($i=1 ; $i<=$nb_etoile ; $i++)
																			{
																			echo '<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> ';
																			}
																			if($produits_lies['eg_produit_dispo'] == 0){

																				echo'
			
																					<div class="stock"><span class="status-outofstock">Hors stock</span></div>
			
																				';
			
			
																			}elseif($produits_lies['eg_produit_dispo'] == 1){
			
																				echo'
																				
																					<div class="stock"><span class="status-stock">Disponible</span></div>
			
																				';
			
																			}elseif($produits_lies['eg_produit_dispo'] == 2){
				
																				echo'
																				
																					<div class="stock"><span class="status-commande">Sur commande 48H</span></div>
							
																				';
							
																			}else{
							
																				echo'
																				
																					<div class="stock"><span class="status-commande">Sur commande</span></div>
							
																				';
							
																			}
																			echo'
																		</div>
																	</div>
																</div>
															</div>
				
															<div class="price">
															';
															

															if($produits_lies['eg_produit_promo'] > 0){

																echo '
																<span class="price-new">' . $produits_lies['eg_produit_promo'] . ' TND</span>
																<span class="price-old">' . $produits_lies['eg_produit_prix'] . ' TND</span>
																';
																
															}else{

																echo '
																<span class="price">' . $produits_lies['eg_produit_prix'] . ' TND</span>
																';
																
															}
	

															echo'
															</div>
															<div class="description item-desc hidden">
																<p>' . $produits_lies['eg_produit_description'] . '</p>
															</div>
														</div>
				
														<div class="button-group">
															<button class="addToCart" type="button" data-toggle="tooltip" title="Bientot disponible" >
																<i class="fa fa-shopping-cart"></i> 
																<span class="hidden-xs">Ajouter au panier</span>
															</button>
															<button class="wishlist" type="button" data-toggle="tooltip" title="Bientot disponible">
																<i class="fa fa-heart"></i>
															</button>
															<button class="compare" type="button" data-toggle="tooltip" title="Bientot disponible" >
																<i class="fa fa-exchange-alt"></i>
															</button>
														</div>
													</div><!-- right block -->
				
														</div>
													</div>
														';
													}
													$PDO_query_produits_lies->closeCursor();
								?>
						</div>
					</div>
					<!-- end Related  Products-->

				</div>

			</div>
			<!--Middle Part End-->
		</div>
		<!-- //Main Container -->

		<!-- Footer Container -->
		<?php
				include("../include/footer.php");
			?>
		<!-- //end Footer Container -->

	</div>


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

	<script>
		// Get the modal
		var modal = document.getElementById("myModal");

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById("myImg");
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		img.onclick = function(){
		modal.style.display = "block";
		modalImg.src = this.src;
		captionText.innerHTML = this.alt;
		}

		// Get the <span> element that closes the modal
		var span = document.getElementsByClassName("close")[0];

		// When the user clicks on <span> (x), close the modal
		span.onclick = function() {
		modal.style.display = "none";
		}		
	</script>


</body>

</html>