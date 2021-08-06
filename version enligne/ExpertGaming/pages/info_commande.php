<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Mon compte - Expert Gaming</title>
	<meta charset="utf-8">
	<meta name="keywords" content="" />
	<meta name="robots" content="index, follow" />

	<!-- Mobile specific metas
	============================================ -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- Favicon
	============================================ -->
	<link rel="shortcut icon" href="ico/favicon.png">
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">

	<!-- Google web fonts
	============================================ -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- font awesome
	============================================ -->
	<link href="css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" rel="stylesheet">

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
				<li><a href="Suivi_commande">Suivi de commande</a></li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
				<div id="content" class="col-sm-12">
					<h2 class="title">Ma dernière commande</h2>

					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td colspan="2" class="text-left">Détails de la commande</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td style="width: 50%;" class="text-left"> 
								<b>ID de la Commande :</b> #214521
									<br><br>
								<b>Date de la commande:</b> 20/06/2016
								</td>

								<td style="width: 50%;" class="text-left"> 
								<b>Mode de paiement :</b> En espèce lors de la livraison
									<br><br>
								<b>Mode de livraison :</b> Via Aramex 
								</td>
							</tr>
						</tbody>
					</table>
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<td style="width: 50%; vertical-align: top;" class="text-left">Adresse de la livraison</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="text-left">
									<div class="name">Jhone Cary</div>
									<div class="adresse1">Central Square</div>
									<div class="adresse2">22 Hoi Wing Road</div>
									<div class="ville">New Delhi</div>
								</td>
							</tr>
						</tbody>
					</table>
					<div class="table-responsive">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<td class="text-left">Nom du produit</td>
									<td class="text-left">Référence</td>
									<td class="text-right">Quantité</td>
									<td class="text-right">Prix</td>
									<td class="text-right">Total</td>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td class="text-left">iPhone5 </td>
									<td class="text-left">product 11</td>
									<td class="text-right">1</td>
									<td class="text-right">123.20 TND</td>
									<td class="text-right">123.20 TND</td>
								</tr>

							</tbody>
							<tfoot>
								<tr>
									<td colspan="3"></td>
									<td class="text-right"><b>Total HT</b>
									</td>
									<td class="text-right">101.00 TND</td>
								</tr>
								<tr>
									<td colspan="3"></td>
									<td class="text-right"><b>Remise</b>
									</td>
									<td class="text-right">5.00 TND</td>
								</tr>
								<tr>
									<td colspan="3"></td>
									<td class="text-right"><b>Frais de port</b>
									</td>
									<td class="text-right">6.00 TND</td>
								</tr>
								<tr>
									<td colspan="3"></td>
									<td class="text-right"><b>TVA %</b>
									</td>
									<td class="text-right">21.20 TND</td>
								</tr>
								<tr>
									<td colspan="3"></td>
									<td class="text-right"><b>Total TTC</b>
									</td>
									<td class="text-right">133.20 TND</td>
								</tr>
							</tfoot>
						</table>
					</div>
					<!-- <div class="buttons clearfix">
						<div class="pull-right"><a class="btn btn-primary" href="#">Continuer</a>
						</div>
					</div> -->
				</div>
				<!--Middle Part End-->
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