<?php
    include("../config/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<!-- Basic page needs
	============================================ -->
	<title>Expert-Gaming | Panier</title>
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
				<li><a href="Panier">Panier</a></li>
			</ul>
			
			<div class="row">
				<!--Middle Part Start-->
			<div id="content" class="col-sm-12">
			<h2 class="title">Panier</h2>
			<div class="table-responsive form-group">
				<table class="table table-bordered">
					<thead>
						<tr>
							<td class="text-center">Image</td>
							<td class="text-left">Nom du Produit</td>
							<td class="text-left">Référence</td>
							<td class="text-left">Quantité</td>
							<td class="text-right">Prix Unitaire</td>
							<td class="text-right">Total</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="text-center"><a href="product.html"><img width="70px" src="image/demo/shop/product/E3.jpg" alt="Aspire Ultrabook Laptop" title="Aspire Ultrabook Laptop" class="img-thumbnail"></a></td>
							<td class="text-left"><a href="product.html">Emasa rumas gacem</a><br>
							</td>
							<td class="text-left">Pt 001</td>
							<td class="text-left" width="200px"><div class="input-group btn-block quantity">
								<input type="text" name="quantity" value="1" size="1" class="form-control">
								<span class="input-group-btn">
								<button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-clone"></i></button>
								<button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
								</span></div></td>
							<td class="text-right">$120.00</td>
							<td class="text-right">$120.00</td>
						</tr>
						<tr>
							<td class="text-center"><a href="product.html"><img width="70px" src="image/demo/shop/product/E1.jpg" alt="Xitefun Causal Wear Fancy Shoes" title="Xitefun Causal Wear Fancy Shoes" class="img-thumbnail"></a></td>
							<td class="text-left"><a href="product.html">Comas samer rumas</a></td>
							<td class="text-left">Pt 002</td>
							<td class="text-left" width="200px"><div class="input-group btn-block quantity">
								<input type="text" name="quantity" value="1" size="1" class="form-control">
								<span class="input-group-btn">
								<button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-clone" <="" i=""></i></button><i class="fa fa-clone" <="" i="">
								<button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="" data-original-title="Remove"><i class="fa fa-times-circle"></i></button>
								</i></span></div></td>
							<td class="text-right">$150.00</td>
							<td class="text-right">$150.00</td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- <h3 class="subtitle no-margin">What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
			<div class="panel-group" id="accordion">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a href="#collapse-coupon" class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" aria-expanded="true">Use Coupon Code 
								
								<i class="fa fa-caret-down"></i>
							</a>
						</h4>
					</div>
					<div id="collapse-coupon" class="panel-collapse collapse in" aria-expanded="true">
						<div class="panel-body">
							<label class="col-sm-2 control-label" for="input-coupon">Enter your coupon here</label>
							<div class="input-group">
								<input type="text" name="coupon" value="" placeholder="Enter your coupon here" id="input-coupon" class="form-control">
								<span class="input-group-btn"><input type="button" value="Apply Coupon" id="button-coupon" data-loading-text="Loading..." class="btn btn-primary"></span>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a href="#collapse-shipping" class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" aria-expanded="false">Estimate Shipping &amp; Taxes 
								
								<i class="fa fa-caret-down"></i>
							</a>
						</h4>
					</div>
					<div id="collapse-shipping" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
						<div class="panel-body">
							<p>Enter your destination to get a shipping estimate.</p>
							<div class="form-horizontal">
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-country">Country</label>
									<div class="col-sm-10">
										<select name="country_id" id="input-country" class="form-control">
											<option value=""> --- Please Select --- </option>
											<option value="244">Aaland Islands</option>
											<option value="1">Afghanistan</option>
											<option value="2">Albania</option>
											<option value="3">Algeria</option>
										</select>
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-zone">Region / State</label>
									<div class="col-sm-10">
										<select name="zone_id" id="input-zone" class="form-control">
											<option value=""> --- Please Select --- </option>
											<option value="3513">Aberdeen</option>
											<option value="3514">Aberdeenshire</option>
											<option value="3515">Anglesey</option>
											<option value="3516">Angus</option>
											<option value="3517">Argyll and Bute</option>
											<option value="3518">Bedfordshire</option>
											<option value="3519">Berkshire</option>
										</select>
									</div>
								</div>
								<div class="form-group required">
									<label class="col-sm-2 control-label" for="input-postcode">Post Code</label>
									<div class="col-sm-10"><input type="text" name="postcode" value="" placeholder="Post Code" id="input-postcode" class="form-control"></div>
								</div>
									<button type="button" id="button-quote" data-loading-text="Loading..." class="btn btn-primary">Get Quotes</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						<h4 class="panel-title">
							<a href="#collapse-voucher" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false">Use Gift Certificate 
								
								<i class="fa fa-caret-down"></i>
							</a>
						</h4>
					</div>
					<div id="collapse-voucher" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
						<div class="panel-body">
							<label class="col-sm-2 control-label" for="input-voucher">Enter your gift certificate code here</label>
							<div class="input-group">
								<input type="text" name="voucher" value="" placeholder="Enter your gift certificate code here" id="input-voucher" class="form-control">
								<span class="input-group-btn"><input type="submit" value="Apply Gift Certificate" id="button-voucher" data-loading-text="Loading..." class="btn btn-primary"></span>
							</div>
						</div>
					</div>
				</div>
			</div> -->
			
			<div class="row">
				<div class="col-sm-4 col-sm-offset-8">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<td class="text-right">
									<strong>Total HT:</strong>
								</td>
								<td class="text-right">168.71 TND</td>
							</tr>
							<tr>
								<td class="text-right">
									<strong>Frais de Port:</strong>
								</td>
								<td class="text-right">7.00 TND</td>
							</tr>
							<tr>
								<td class="text-right">
									<strong>Tva %:</strong>
								</td>
								<td class="text-right">5.62 TND</td>
							</tr>
							<tr>
								<td class="text-right">
									<strong>Total TTC:</strong>
								</td>
								<td class="text-right">213.70 TND</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="buttons">
				<div class="pull-left"><a href="Accueil" class="btn btn-primary">Revenir sur le site</a></div>
				<div class="pull-right"><a href="#" class="btn btn-primary">Commander</a></div>
			</div>
			</div>
			<!--Middle Part End -->
				
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