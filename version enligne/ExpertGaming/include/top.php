<header id="header" class="variantleft type_8">
	
	<!-- Header Top -->
	<!-- <div class="header-top compact-hidden">
		<div class="container">
			<div class="row">
				<div class="header-top-left form-inline col-sm-5 col-xs-12 compact-hidden">
					
				</div>
				<div class="header-top-right collapsed-block text-right  col-sm-7 col-xs-12 compact-hidden">
					<h5 class="tabBlockTitle visible-xs">More<a class="expander " href="#TabBlock-1"><i class="fa fa-angle-down"></i></a></h5>
					<div class="tabBlock" id="TabBlock-1">
						<ul class="top-link list-inline">
							<li class="account" id="my_account"><a href="https://<?php echo $_SERVER['SERVER_NAME']?>/Mon_compte" title="My Account" class="btn btn-xs dropdown-toggle" > <i class="fa fa-user" ></i> Mon Compte </a></li>
							<li class="checkout"><a href="https://<?php echo $_SERVER['SERVER_NAME']?>/Inscription" class="" title="S'inscrire"><i class="fa fa-sign-in-alt"></i> S'inscrire</a></li>
							<li class="wishlist"><a href="https://<?php echo $_SERVER['SERVER_NAME']?>/Liste_des_favoris" class="top-link-wishlist" title="Wish List (2)"><i class="fa fa-heart"></i><span> Favoris (2) </span></a></li>
							<li class="checkout"><a href="checkout.html" class="top-link-checkout" title="Checkout"><i class="fa fa-check-square" ></i> Checkout</a></li>
							<li class="signin"><a href="https://<?php echo $_SERVER['SERVER_NAME']?>/Identification" class="top-link-checkout" title="S'identifier"><i class="fa fa-lock" ></i> S'identifier </a></li>	
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- //Header Top -->

	<!-- Header center -->
	<div class="header-center">
		<div class="container">
			<div class="row" style="display: flex; justify-content: center; align-items: center; align-content: center; flex-wrap: wrap;">
				<!-- Logo -->
				<div class="navbar-logo col-md-3 col-sm-12 col-xs-12">
					<a href="https://<?php echo $_SERVER['SERVER_NAME']?>/">
					<img src="https://<?php echo $_SERVER['SERVER_NAME']?>/image/logo/EXPERT_GAMING_logo.png" title="Expert Gaming" alt="Logo Expert Gaming" width="200">
					</a>
				</div>
				<!-- //end Logo -->
				
				<!-- Search -->
				<div id="sosearchpro" class="col-md-7 col-sm-7 search-pro">
					<form method="POST" action="//<?php echo $_SERVER['SERVER_NAME']?>/pages/recherche.php">
						<div id="search0" class="search input-group">
							<div class="select_category filter_type icon-select">
								<select class="no-border" name="categorieid">
									<option value="">Toutes les catégories</option>
									
										<?php

											$PDO_query_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 ORDER BY eg_categorie_nom ASC");
											$PDO_query_categorie->execute();

											while ($categorie = $PDO_query_categorie->fetch()){
												

												echo '

													<option value="cc ' . $categorie['eg_categorie_id'] . '">' . $categorie['eg_categorie_nom'] . '</option>

												';

													$PDO_query_sous_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_sous_categorie WHERE eg_sous_categorie_statut = 1 AND eg_sous_categorie_id_categorie = :eg_categorie_id ORDER BY eg_sous_categorie_nom ASC");

													$PDO_query_sous_categorie->bindParam(":eg_categorie_id", $categorie['eg_categorie_id'], PDO::PARAM_INT);

													$PDO_query_sous_categorie->execute();
		
													while ($sous_categorie = $PDO_query_sous_categorie->fetch()){
														

														echo '
		
															<option value="ss ' . $sous_categorie['eg_sous_categorie_id'] . '">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' . $sous_categorie['eg_sous_categorie_nom'] . '</option>
		
														';
													}
													$PDO_query_sous_categorie->closeCursor();

											}
											$PDO_query_categorie->closeCursor();

										?>

								</select>
							</div>

							<input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Saisissez des mots clés à rechercher ..." name="recherche">
							<span class="input-group-btn">
							<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
				</div>
				<!-- //Search -->
				
				<!-- Main Menu -->
				<!-- <div class="phone-contact col-md-2 hidden-md hidden-sm hidden-xs">
						
				</div> -->
				<!-- //Main Menu -->

				<!-- Shopping Cart -->
					<div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 shopping_cart pull-right">
					<!--panier-->
					<div class="btn-group btn-shopping-cart">
						<a href="#" class="top_cart dropdown-toggle">
							<div class="shopcart">
								<span class="handle pull-left"><i class="bi bi-cart3"></i></span>
								<!-- <span class="cart-counter">1</span> -->
							</div>
						</a>
					</div>
					<!--//panier-->

					<!--favoris-->
					<div class="btn-group btn-shopping-cart">
						<a href="#" class="top_cart dropdown-toggle">
							<div class="shopcart">
								<span class="handle pull-left"><i class="bi bi-heart"></i></span>
								<!-- <span class="cart-counter">2</span> -->
							</div>
						</a>				
					</div>
					<!--//favoris-->

					<!--Identification-->
					<div class="btn-group btn-shopping-cart">
						<a href="#" class="top_cart dropdown-toggle">
							<div class="shopcart">
								<span class="handle pull-left"><i class="bi bi-person"></i></span>
							</div>
						</a>				
					</div>
					<!--//Identification-->
				</div>
				<!-- //Shopping Cart -->
			</div>

		</div>
	</div>
	<!-- //Header center -->

	<!-- Header Bottom -->
	<div class="header-bottom">
		<div class="container">
			<div class="row">
				
				<!-- Main menu -->
				<div class="megamenu-hori  col-xs-12 ">
					<div class="responsive so-megamenu ">
							<nav class="navbar-default">
								<div class=" container-megamenu  horizontal">
									<div class="navbar-header">
										<button type="button" id="show-megamenu" data-toggle="collapse" class="navbar-toggle">
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
										Menu		
									</div>
									
									<div class="megamenu-wrapper">
										<span id="remove-megamenu" class="fa fa-times"></span>
										<div class="megamenu-pattern">
											<div class="container">
												<ul class="megamenu " data-transition="slide" data-animationtime="250">
													<li class="home">
														<a href="https://<?php echo $_SERVER['SERVER_NAME']?>">Accueil</a>
													</li>
													<?php

														$PDO_query_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_menu WHERE eg_menu_statut = 1 ORDER BY eg_menu_ordre ASC");
														$PDO_query_menu->execute();
													
														while ($menu = $PDO_query_menu->fetch()){
															
															$PDO_query_count_menu = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_menu_id = :eg_menu_id ORDER BY eg_categorie_id ASC");
															$PDO_query_count_menu->bindParam(":eg_menu_id", $menu['eg_menu_id'], PDO::PARAM_INT);

															$PDO_query_count_menu->execute();

															$count_menu = $PDO_query_count_menu->fetchColumn();
															$PDO_query_count_menu->closeCursor();

																if($count_menu == 0){

																	if($menu['eg_menu_id'] == 227){

																		echo '
																	

															<li class="">
															<a href="https://'.$_SERVER['SERVER_NAME'].'/pages/promo.php?menu_id='.$menu['eg_menu_id'].'" class="clearfix">

															<strong>' . $menu['eg_menu_titre'] . '</strong>

															';

																	}else{

																	echo '
																	

															<li class="">
															<a href="https://'.$_SERVER['SERVER_NAME'].'/pages/products.php?menu_id='.$menu['eg_menu_id'].'" class="clearfix">

															<strong>' . $menu['eg_menu_titre'] . '</strong>

															';

																	}
																	
															if($menu['eg_menu_hot'] == 1){
															
															echo '

															<img class="label-hot" src="https://'.$_SERVER['SERVER_NAME'].'/image/theme/icons/hot-icon.png" alt="icon items">

															';

															}

															echo '

															</a>
															</li>
															';

																}else{
															
															echo '

															<li class="with-sub-menu hover">
															<p class="close-menu"></p>
															<a href="https://'.$_SERVER['SERVER_NAME'].'/pages/products.php?menu_id='.$menu['eg_menu_id'].'" class="clearfix">

															<strong>' . $menu['eg_menu_titre'] . '</strong>

															';

															if($menu['eg_menu_hot'] == 1){
															
															echo '

															<img class="label-hot" src="https://'.$_SERVER['SERVER_NAME'].'/image/theme/icons/hot-icon.png" alt="icon items">

															';

															}	

															echo '

															<b class="caret"></b>

															';

															echo '

															</a>
															';

															echo '
															<div class="sub-menu" style="width: 100%; right: auto;">
																<div class="content" >
																	<div class="row">

															';

															$PDO_query_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_categorie WHERE eg_categorie_statut = 1 AND eg_menu_id = :eg_menu_id
															ORDER BY eg_categorie_id ASC");

															$PDO_query_categorie->bindParam(":eg_menu_id", $menu['eg_menu_id'], PDO::PARAM_INT);

															$PDO_query_categorie->execute();
														
															while ($categorie = $PDO_query_categorie->fetch()){

																echo '
																		<div class="col-md-3">
																			<div class="column">

																				<a href="https://'.$_SERVER['SERVER_NAME'].'/pages/products.php?cat_id='.$categorie['eg_categorie_id'].'" class="title-submenu">'.$categorie['eg_categorie_nom'].'</a>

																				<div>
																					<ul class="row-list">
																';



																$PDO_query_sous_categorie = Bdd::connectBdd()->prepare("SELECT * FROM eg_sous_categorie WHERE eg_sous_categorie_statut = 1 AND eg_sous_categorie_id_categorie = :eg_sous_categorie_id_categorie
																ORDER BY eg_sous_categorie_id ASC");

																$PDO_query_sous_categorie->bindParam(":eg_sous_categorie_id_categorie", $categorie['eg_categorie_id'], PDO::PARAM_INT);

																$PDO_query_sous_categorie->execute();
															
																while ($sous_categorie = $PDO_query_sous_categorie->fetch()){
																echo '
																						<li>
																						
																						<a href="https://'.$_SERVER['SERVER_NAME'].'/pages/products.php?sous_cat_id='.$sous_categorie['eg_sous_categorie_id'].'">'.$sous_categorie['eg_sous_categorie_nom'].'</a>

																						</li>

																					
																';

															}

															$PDO_query_sous_categorie->closeCursor();

																echo'

																</ul>
																				</div>
																			</div>
																		</div>
																';
																
															}

															$PDO_query_categorie->closeCursor();

															echo '
																	</div>
																</div>
															</div>
																';

															echo '

															</li>	

															';

														}
														}
														$PDO_query_menu->closeCursor();

													?>
													
													<li class="hidden-md">
														<p class="close-menu"></p>
														<a href="https://<?php echo $_SERVER['SERVER_NAME']?>/pages/promo.php" class="clearfix">
															<strong>Promotions</strong>
															
														</a>
													</li>
													
													<li class="pull-right">
														<a href="Configurateur"><strong>configurateur</strong>
															<!-- <img class="label-hot" src="https://<?php echo $_SERVER['SERVER_NAME']?>/image/theme/icons/hot-icon.png" alt="icon items"> -->
															<span class="tooltips"><strong>Coming soon</strong></span>
														</a>
													</li>
												</ul>
												
											</div>
										</div>
									</div>
								</div>
							</nav>
						</div>
					</div>
				<!-- //end Main menu -->
				
			</div>
		</div>

	</div>

	<!-- Navbar switcher -->
	<!-- //end Navbar switcher -->
</header>