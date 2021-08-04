<?php
	include("config/fonction.php");
?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- Basic page needs
	============================================ -->
	<title>Expert Gaming | Accueil</title>
	<meta charset="utf-8">
    <meta name="keywords" content="Expert Gaming, Vente Pc Gamer, Carte Graphique, Processeur en Tunisie, Vente Pc Gamer et accessoires en Tunisie" />
    <meta name="robots" content="index, follow" />
	<meta name="description" content="Expert Gaming : Vente Pc Gamer, Carte Graphique, Processeur en Tunisie, Vente Pc Gamer et accessoires en Tunisie"/>
	
	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
	<!-- Favicon
	============================================ -->
    <link rel="icon" type="image/png" sizes="16x16" href="ico/favicon.png">

	
	<!-- Google web fonts
	============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- font-awesome
	============================================ -->
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
	
    <!-- Libs CSS
	============================================ -->
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
	
	<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
	<link href="css/themecss/lib.css" rel="stylesheet">
	<link href="js/jquery-ui/jquery-ui.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	
	<!-- Theme CSS
	============================================ -->
   	<link href="css/themecss/so_megamenu.css" rel="stylesheet">
    <link href="css/themecss/so-categories.css" rel="stylesheet">
	<link href="css/themecss/so-listing-tabs.css" rel="stylesheet">
	<link href="css/header8.css" rel="stylesheet">
	<link href="css/footer5.css" rel="stylesheet">
	<link id="color_scheme" href="css/home8.css" rel="stylesheet">
	<link id="color_scheme" href="css/home4.css" rel="stylesheet">
	<link id="color_scheme" href="css/theme.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	
	
	<style>
	.no-js #loader { display: none;  }
	.js #loader { display: block; position: absolute; left: 100px; top: 0; }
	.se-pre-con {
		position: fixed;
		left: 0px;
		top: 0px;
		width: 100%;
		height: 100%;
		z-index: 9999;
		background: url(image/loader/Preloader_1.gif) center no-repeat #010002;
	}
	</style>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
	<script>
		$(window).load(function() {
			// Animate loader off screen
			$(".se-pre-con").fadeOut("slow");;
		});
	</script>	

</head>

<body class="common-home res layout-home8 ">

	<div class="se-pre-con"></div>
	
	<div id="wrapper" class="wrapper-full banners-effect-1">

		<!-- Header Container  -->
			<?php
				include("include/top.php");
			?>
		<!-- //Header Container  -->
		
		<!-- Block slideshow  -->
			<?php
				include("include/banniere.php");
			?>
		<!-- //Block slideshow  -->
		
		<!-- Main Container  -->
		<div class="main-container ">
			<div class="container">
				<div class="row">
				
					<div id="content" class="clearfix">
						<div class="col-xs-12 clearfix">

							<?php
								
								include('include/nouveau_produit.php');

							?>
							
							<?php
								
								include('include/promo_produit.php');

							?>
							
							<?php

								include('include/configuration.php');

							?>

							<?php

								include("include/actualites.php");

							?>
							
							<!-- Section module so-extraslider -->
							<?php

								include("include/top_vente.php");
								
							?>
							<!-- End Section module so-extraslider -->
								
							<!-- Section Ambassadeurs -->
							<div class="module titleLine">
								<h3 class="modtitle modtitle--small">Ambassadeurs</h3>

								<div class="about-us about-demo-2">
									<div class="col-lg-12 col-md-12 our-team">
										<div class="our-team-content">
											<!-- <h2 class="about-title line-hori">
												<span>Our Team</span>
											</h2> -->
											<div class="our-team-slider mt-40">
												<div id="ytcs579bfc965e78d103041469840534" class="yt-content-slider owl-theme yt-content-slider-style-1 arrow-default owl2-carousel owl2-theme owl2-loaded" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-item_lg="4" data-item_sm="3" data-item_xs="1" data-arrows="yes" data-pagination="no" data-lazyload="yes" data-loop="no" data-hoverpause="no">
													<div class="yt-content-slide yt-clearfix yt-content-wrap">
														<div class="item">
															<div class="member">
																<div class="member-image"> <img src="image/malek.jpg" alt="Image Client"> </div>
																<div class="member-info">
																	<h3 class="name-member">Malek Menchaoui</h3>
																	<p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
																	<ul class="social-member">
																		<li class="social-icon youtube"><a class="fab fa-youtube" href="#" title="Youtube"><span>youtube</span></a>
																		</li>
																		<li class="social-icon facebook"><a class="fab fa-facebook-f" href="#" title="Facebook"><span>Facebook</span></a>
																		</li>
																		<li class="social-icon instagram"><a class="fab fa-instagram" href="#" title="Instagram"><span>Instagram</span></a>
																		</li>
																		<li class="social-icon tiktok"><a class="fab fa-tiktok" href="#" title="Tiktok"><span>Tiktok</span></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												
													<div class="yt-content-slide yt-clearfix yt-content-wrap">
														<div class="item">
															<div class="member">
																<div class="member-image"> <img src="image/Zied_expert.jpg" alt="Image Client"> </div>
																<div class="member-info">
																	<h3 class="name-member">Zied Expert</h3>
																	<p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
																	<ul class="social-member">
																		<li class="social-icon youtube"><a class="fab fa-youtube" href="#" title="Youtube"><span>youtube</span></a>
																		</li>
																		<li class="social-icon facebook"><a class="fab fa-facebook-f" href="#" title="Facebook"><span>Facebook</span></a>
																		</li>
																		<li class="social-icon instagram"><a class="fab fa-instagram" href="#" title="Instagram"><span>Instagram</span></a>
																		</li>
																		<li class="social-icon tiktok"><a class="fab fa-tiktok" href="#" title="Tiktok"><span>Tiktok</span></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												
													<div class="yt-content-slide yt-clearfix yt-content-wrap">
														<div class="item">
															<div class="member">
																<div class="member-image"> <img src="image/inaam.jpg" alt="Image Client"> </div>
																<div class="member-info">
																	<h3 class="name-member">Inaam Rachdi</h3>
																	<p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
																	<ul class="social-member">
																		<li class="social-icon youtube"><a class="fab fa-youtube" href="#" title="Youtube"><span>youtube</span></a>
																		</li>
																		<li class="social-icon facebook"><a class="fab fa-facebook-f" href="#" title="Facebook"><span>Facebook</span></a>
																		</li>
																		<li class="social-icon instagram"><a class="fab fa-instagram" href="#" title="Instagram"><span>Instagram</span></a>
																		</li>
																		<li class="social-icon tiktok"><a class="fab fa-tiktok" href="#" title="Tiktok"><span>Tiktok</span></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												
													<div class="yt-content-slide yt-clearfix yt-content-wrap">
														<div class="item">
															<div class="member">
																<div class="member-image"> <img src="image/demo/about/ourmember04.png" alt="Image Client"> </div>
																<div class="member-info">
																	<h3 class="name-member">Med Zied Jlassi</h3>
																	<p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
																	<ul class="social-member">
																		<li class="social-icon youtube"><a class="fab fa-youtube" href="#" title="Youtube"><span>youtube</span></a>
																		</li>
																		<li class="social-icon facebook"><a class="fab fa-facebook-f" href="#" title="Facebook"><span>Facebook</span></a>
																		</li>
																		<li class="social-icon instagram"><a class="fab fa-instagram" href="#" title="Instagram"><span>Instagram</span></a>
																		</li>
																		<li class="social-icon tiktok"><a class="fab fa-tiktok" href="#" title="Tiktok"><span>Tiktok</span></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												
													<div class="yt-content-slide yt-clearfix yt-content-wrap">
														<div class="item">
															<div class="member">
																<div class="member-image"> <img src="image/demo/about/ourmember01.png" alt="Image Client"> </div>
																<div class="member-info">
																	<h3 class="name-member">Nagi</h3>
																	<p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
																	<ul class="social-member">
																		<li class="social-icon youtube"><a class="fab fa-youtube" href="#" title="Youtube"><span>youtube</span></a>
																		</li>
																		<li class="social-icon facebook"><a class="fab fa-facebook-f" href="#" title="Facebook"><span>Facebook</span></a>
																		</li>
																		<li class="social-icon instagram"><a class="fab fa-instagram" href="#" title="Instagram"><span>Instagram</span></a>
																		</li>
																		<li class="social-icon tiktok"><a class="fab fa-tiktok" href="#" title="Tiktok"><span>Tiktok</span></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												
													<div class="yt-content-slide yt-clearfix yt-content-wrap">
														<div class="item">
															<div class="member">
																<div class="member-image"> <img src="image/demo/about/ourmember03.png" alt="Image Client"> </div>
																<div class="member-info">
																	<h3 class="name-member">Test</h3>
																	<p class="des-member">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer condimentum</p>
																	<ul class="social-member">
																		<li class="social-icon youtube"><a class="fab fa-youtube" href="#" title="Youtube"><span>youtube</span></a>
																		</li>
																		<li class="social-icon facebook"><a class="fab fa-facebook-f" href="#" title="Facebook"><span>Facebook</span></a>
																		</li>
																		<li class="social-icon instagram"><a class="fab fa-instagram" href="#" title="Instagram"><span>Instagram</span></a>
																		</li>
																		<li class="social-icon tiktok"><a class="fab fa-tiktok" href="#" title="Tiktok"><span>Tiktok</span></a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>

												</div>
												
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- End Section Ambassadeurs -->

							<!-- Section nos partenaires -->
							<?php
								include('include/partenaires.php');
							?>
						</div>
					</div>

				</div>
			</div>	
		</div>
		<!-- //Main Container -->

		<script type="text/javascript"><!--
			var $typeheader = 'header-home1';
			//-->
		</script>

		<!-- Footer Container -->
			<?php
				include("include/footer.php");
			?>
		<!-- //end Footer Container -->

	</div>

<!-- Include Libs & Plugins
============================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="js/themejs/libs.js"></script>
<script type="text/javascript" src="js/unveil/jquery.unveil.js"></script>
<script type="text/javascript" src="js/countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
<script type="text/javascript" src="js/datetimepicker/moment.js"></script>
<script type="text/javascript" src="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/modernizr/modernizr-2.6.2.min.js"></script>

<!-- Theme files
============================================ -->
<script type="text/javascript" src="js/themejs/application.js"></script>
<script type="text/javascript" src="js/themejs/homepage.js"></script>
<script type="text/javascript" src="js/themejs/so_megamenu.js"></script>


</body>
</html>
