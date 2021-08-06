<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Expert-Gaming | À propos de nous</title>
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="ico/favicon.png">

	<!-- Google web fonts
	============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- font awesome
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
	<link href="css/responsive.css" rel="stylesheet">
	<link id="color_scheme" href="css/theme.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">


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
				<li><a href="A_propos_de_nous">À propos de nous</a></li>
			</ul>
			
			<div class="row">
				<div id="content" class="col-sm-12">
				
					<div class="about-us about-demo-1">
						<div class="row">
							<div class="col-lg-5 col-md-5 about-image"> 
								<img src="https://<?php echo $_SERVER['SERVER_NAME']?>/image/banner/about_us.jpg" alt="About Us"> 
							</div>

							<div class="col-lg-7 col-md-7 about-info">
								<h2 class="about-title">
									<span>À propos de nous</span>
								</h2>

								<div class="about-text">
									<p>EXPERT GAMING TUNISIE votre site spécialisé du jeu vidéo sur PC, de montage de setups et de tous types d'accessoires gaming en Tunisie, né de la passion de ses fondateurs, nous vous proposons un service personnalisé ou l'écoute du client est la clé, notre entreprise à taille humaine a su garder son côté convivial pour mieux vous guider et vous servir. <b>Jouer mieux, jouer comme un EXPERT.</b></p>
								</div>

							</div>

						</div>

						<div class="row">
							<div class="col-lg-12 col-md-12 what-client-say">
								<div class="client-say-content">
									<h2 class="about-title line-hori">
										<span>Témoignages des clients</span>
									</h2>

									<div class="client-say-slider">
										<div id="ytcs579bfc965e489183711469840534" class="yt-content-slider owl-theme yt-content-slider-style-1 arrow-default owl2-carousel owl2-theme owl2-loaded" data-autoplay="no" data-autoheight="no" data-delay="4" data-speed="0.6" data-margin="30" data-item_lg="1" data-item_sm="1" data-item_xs="1" data-arrows="no" data-pagination="yes" data-lazyload="yes" data-loop="no" data-hoverpause="no">
											<div class="yt-content-slide yt-clearfix yt-content-wrap">
												<div class="item">
													<p class="des-member des-client">“Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.”</p>
													<h3 class="name-member">Jennifer lawrence</h3>
													<p class="job-member">Co Founder</p>
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
	<script type="text/javascript" href="js/jquery-2.2.4.min.js"></script>
	<script type="text/javascript" href="js/bootstrap.min.js"></script>
	<script type="text/javascript" href="js/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" href="js/themejs/libs.js"></script>
	<script type="text/javascript" href="js/unveil/jquery.unveil.js"></script>
	<script type="text/javascript" href="js/countdown/jquery.countdown.min.js"></script>
	<script type="text/javascript" href="js/dcjqaccordion/jquery.dcjqaccordion.2.8.min.js"></script>
	<script type="text/javascript" href="js/datetimepicker/moment.js"></script>
	<script type="text/javascript" href="js/datetimepicker/bootstrap-datetimepicker.min.js"></script>
	<script type="text/javascript" href="js/jquery-ui/jquery-ui.min.js"></script>
	<script type="text/javascript" href="js/modernizr/modernizr-2.6.2.min.js"></script>


	<!-- Theme files
============================================ -->
	<script type="text/javascript" href="js/themejs/application.js"></script>
	<script type="text/javascript" href="js/themejs/homepage.js"></script>
	<script type="text/javascript" href="js/themejs/so_megamenu.js"></script>


</body>

</html>