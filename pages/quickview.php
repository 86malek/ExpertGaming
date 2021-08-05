<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
     <!-- Basic page needs
	============================================ -->
	 <title>Market - Premium Multipurpose HTML5/CSS3 Theme</title>
	 <meta charset="utf-8" />
     <meta name="keywords" content="boostrap, responsive, html5, css3, jquery, theme, multicolor, parallax, retina, business" />
     <meta name="author" content="Magentech" />
     <meta name="robots" content="index, follow" />
   
	 <!-- Mobile specific metas
	============================================ -->
	 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	
	 <!-- Favicon
	============================================ -->
     <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
     <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
     <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
     <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
     <link rel="shortcut icon" href="ico/favicon.png" />
	
	 <!-- Google web fonts
	============================================ -->
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
	
     <!-- Libs CSS
	============================================ -->
     <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	 <link href="../css/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	 <link href="../js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" />
     <link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet" />
	 <link href="../css/themecss/lib.css" rel="stylesheet" />
	 <link href="../js/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
	 <!-- Theme CSS
	============================================ -->
   	 <link href="../css/themecss/so_megamenu.css" rel="stylesheet" />
     <link href="../css/themecss/so-categories.css" rel="stylesheet" />
	 <link href="../css/themecss/so-listing-tabs.css" rel="stylesheet" />
	 <link href="../css/footer1.css" rel="stylesheet">
	 <link href="../css/header1.css" rel="stylesheet">
	 <link href="../css/theme.css" rel="stylesheet" id="color_scheme" />
	 <link id="color_scheme" href="../css/home8.css" rel="stylesheet">
	 <link id="color_scheme" href="../css/home4.css" rel="stylesheet">
	 <link href="../css/responsive.css" rel="stylesheet"/>
	
   
	

 </head>

 <body class="res layout-subpage">
     <div id="wrapper" class="wrapper-full ">
	<!-- Main Container  -->
	 <div class="main-container container">
		
		 <div class="row">
			 <!--Middle Part Start-->
			 <div id="content" class="col-md-12 col-sm-12">

				 <div class="product-view row">
					 <div class="left-content-product col-lg-12 col-xs-12">
						 <div class="row">
							 <div class="content-product-left  col-sm-6 col-xs-12 ">

								<!--Large Image Start-->
								<div class="large-image">

									<?php

										$PDO_query_quickview = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id LIMIT 1");
										$PDO_query_quickview->bindParam(":eg_produit_id", $_GET['produit_id']);
										$PDO_query_quickview->execute();
											while ($quickview_product = $PDO_query_quickview->fetch()){

												echo '

													<img itemprop="image" class="product-image-zoom" src="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$quickview_product['eg_image_produit_nom'].'" data-zoom-image="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$quickview_product['eg_image_produit_nom'].'" title="' . $quickview_product['eg_image_produit_title'] . '" alt="' . $quickview_product['eg_image_produit_title'] . '" />

												';

											}
										$PDO_query_quickview->closeCursor();

									?>
									 

								</div>
								<!--Large Image End-->

								 <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider">
										<?php

											$PDO_query_quickview = Bdd::connectBdd()->prepare("SELECT * FROM eg_image_produit WHERE eg_image_produit_statut = 1 AND eg_produit_id = :eg_produit_id");
											$PDO_query_quickview->bindParam(":eg_produit_id", $_GET['produit_id']);
											$PDO_query_quickview->execute();
												while ($quickview_product = $PDO_query_quickview->fetch()){

													if(!empty($quickview_product['eg_image_produit_nom'])){

														echo '
															<a data-index="0" class="img thumbnail " data-image="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$quickview_product['eg_image_produit_nom'].'" title="' . $quickview_product['eg_image_produit_title'] . '">
															<img src="http://'.$_SERVER['SERVER_NAME'].'/ExpertGaming/admin/upload_images/'.$quickview_product['eg_image_produit_nom'].'" title="' . $quickview_product['eg_image_produit_title'] . '" alt="' . $quickview_product['eg_image_produit_title'] . '" />
															</a>

														';

													}

												}
											$PDO_query_quickview->closeCursor();

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
													<a class="reviews_button" href="quickview.php.html" onclick="$(\'a[href=\'#tab-review\']\').trigger(\'click\'); return false;">0 Avis</a>	
												</div>
			   
												<div class="product-label form-group">
												';

												if($quickview_product_description['eg_produit_promo'] > 0){

													echo'

													<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
														<span class="price-new" itemprop="price">' . $quickview_product_description['eg_produit_promo'] . ' TND</span>
														<span class="price-old">' . $quickview_product_description['eg_produit_prix'] . ' TND</span>
													</div>
											';


												}else{

													echo'
													<div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
														<span class="price">' . $quickview_product_description['eg_produit_prix'] . ' TND</span>
													</div>
													';

												}



												if($quickview_product_description['eg_produit_disponibilite'] == 0){

													echo'

													<div class="stock"><span class="status-outofstock">Hors stock</span></div>

											';


												}elseif($quickview_product_description['eg_produit_disponibilite'] == 1){

													echo'
													
													<div class="stock"><span class="status-stock">Disponible</span></div>

													';

												}elseif($quickview_product_description['eg_produit_disponibilite'] == 2){
	
													echo'
													
													<div class="stock"><span class="status-commande">Sur commande 48H</span></div>

													';

												}elseif($quickview_product_description['eg_produit_disponibilite'] == 3){
	
													echo'
													
													<div class="stock"><span class="status-commande">Sur commande 48H</span></div>

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
														<div class="brand"><span>Marque : </span>' . $quickview_marque['eg_marque_nom'] . '</div>
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
															<input type="button" data-toggle="tooltip" title="" value="Ajouter au panier" onclick="cart.add(\'42\', \'1\');" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Ajouter au panier" disabled="disabled" />
															</div>
		
															';
		
		
														}else{


															// PANIER
		
															echo'
															
															<div class="cart">
															<input type="button" data-toggle="tooltip" title="" value="Ajouter au panier" onclick="cart.add(\'42\', \'1\');" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" data-original-title="Ajouter au panier" />
															</div>
		
															';
		
														}




														// COMPARE & WISHLIST

														echo'

														<div class="add-to-links wish_comp">
															<ul class="blank list-inline">
																<li class="wishlist">
																	<a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add(\'50\');" data-original-title="Liste des favories"><i class="fa fa-heart"></i>
																	</a>
																</li>
																<li class="compare">
																	<a class="icon" data-toggle="tooltip" title="" onclick="compare.add(\'50\');" data-original-title="Comparer ce produit"><i class="fa fa-exchange"></i>
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
				
				 <script type="text/javascript">
					// Cart add remove functions
					var cart = {
						'add': function(product_id, quantity) {
							parent.addProductNotice('Product added to Cart', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3><a href="#">Apple Cinema 30"</a> added to <a href="#">shopping cart</a>!</h3>', 'success');
						}
					}

					var wishlist = {
						'add': function(product_id) {
							parent.addProductNotice('Product added to Wishlist', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>You must <a href="#">login</a>  to save <a href="#">Apple Cinema 30"</a> to your <a href="#">wish list</a>!</h3>', 'success');
						}
					}
					var compare = {
						'add': function(product_id) {
							parent.addProductNotice('Product added to compare', '<img src="image/demo/shop/product/e11.jpg" alt="">', '<h3>Success: You have added <a href="#">Apple Cinema 30"</a> to your <a href="#">product comparison</a>!</h3>', 'success');
						}
					}

					
				</script>

				
			 </div>
			
			
		 </div>
		 <!--Middle Part End-->
	 </div>
	 <!-- //Main Container -->
	
 <style type="text/css">
	#wrapper{box-shadow:none;}
	#wrapper > *:not(.main-container){display: none;}
	#content{margin:0}
	.container{width:100%;}
	
	.product-info .product-view,.left-content-product,.box-info-product{margin:0;}
	.left-content-product .content-product-right .box-info-product .cart input{padding:12px 16px;}

	.left-content-product .content-product-right .box-info-product .add-to-links{ width: auto;  float: none; margin-top: 0px; clear:none; }
	.add-to-links ul li{margin:0;}
	
</style></div>

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
 

 <!-- Theme files
============================================ -->

 
 <script type="text/javascript" src="../js/themejs/so_megamenu.js"></script>
 <script type="text/javascript" src="../js/themejs/addtocart.js"></script>
 <script type="text/javascript" src="../js/themejs/application.js"></script>

</body>

</html>