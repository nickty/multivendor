<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
	<title>home</title>

	<!-- Connect with metarialize -->
	<?= link_tag('asset/css/materialize.css'); ?>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?= link_tag('asset/fonts/css/all.css'); ?>
	<style type="text/css">
		#top-bar {
			background-color: black; 
		}
		#electronics, #men-fasion, #women-fasion, #home-furniture {
			width: 100% !important; 
			left: 1px !important; 
		}
		#electronics h6, #men-fasion h6, #women-fasion h6, #home-furniture h6 {
			color: orange; 
		}
		.sub-menu li {
			min-height: 20px; 
		}
		ul.sub-menu li {color: silver;}
		#set_search {
			width: 35%; 
			border: 1px solid white;
			box-shadow: none;
			margin-left: 25%; 
			height: 42px; 
			padding-left: 2px; 
			background-color: white; 
			border-radius: 3px; 
		}
		#set_btn_search {
			height: 44px; 
			line-height: 44%; 
			margin-top: -4px; 
			box-shadow: none; 
			margin-left: -4px;
			background-color: black;
			border-radius: 3px; 
			width: 10%;  
		}
		#mobile_search_box {
			border:1px solid white; 
			background-color: white; 
			color: black; 
			border-radius: 3px; 
			box-shadow: none; 
		}
		form{display: inline;}
	</style>
</head>
<body>
	<div id="top-bar" class="hide-on-med-and-down">
		<div class="container">
		<span class="white-text"><span class="fa fa-phone"></span>  1234567890     |     <span class="fa fa-envelope"></span>  info@shop.com</span><span class="right white-text"><span class="fa fa-gift"></span>  Gift Card     |     Sell On Shop   </span>
	</div>
	</div>

	<!-- navbar section -->
	<nav>
		<div class="container">
		<div class="nav-wrapper">
			<a href="<?= base_url('index.php/Home/index'); ?>" class="brand-logo left">Multi Vendor Shop</a>
			<?= form_open(); ?>
			<input type="text" id="set_search" placeholder="Search for Product or Brand" class="hide-on-med-and-down" name="search">
			<button type="submit" id="set_btn_search" class="btn waves-effect waves-light hide-on-med-and-down">Search</button>
			<?= form_close(); ?>
			<a href="#" data-target="slide-out" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
			<ul id="slide-out" class="sidenav text-black">
				<li class="orange"><a href="#!">Product Categories</a></li>
				<li><a href="<?= base_url('home/electronics'); ?>">Electronics</a></li>
				<li><a href="<?= base_url('index.php/Home/mmenfasion'); ?>">Men Fashion</a></li>
				<li><a href="<?= base_url('index.php/Home/wmmenfasion'); ?>">Women Fashion</a></li>
				<li><a href="#!">Home $ Furniture</a></li>
				<li><a href="#!">Sports</a></li>
				
			</ul>
			<ul class="right hide-on-med-and-down">
				<li><a href="">Cart</a></li>
				<li><a href="">Sign Up</a></li>
				<li><a href="">Login</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<!-- navbar seciton -->

	

	<!-- navbar section -->
	<nav class="orange text-black hide-on-med-and-down" style="height: 35px; line-height: 35px; box-shadow: none;">
		<div class="container">
			<div class="nav-wrapper"> 
				<ul class="left">
					<li><a href="<?= base_url('home/electronics'); ?>" class="dropdown-trigger" data-target="electronics">Electronics</a></li>
					<ul class="dropdown-content" id="electronics">
						<div class="row">
							<div class="col l3 m3 s12">
								<h6>Mobiles</h6>
								<ul class="sub-menu">
									<li>iPhone</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l3 m3 s12">
								<h6>Mobiles Accessories</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l3 m3 s12">
								<h6>Mobiles Parts</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l3 m3 s12">
								<img src="<?= base_url('asset/img/1.jpg'); ?>" class="responsive-img">
							</div>
							<div class="col l3 m3 s12">
								<h6>Computers</h6>
								<ul class="sub-menu">
									<li>Computer Components & Parts</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l3 m3 s12">
								<h6>Tablets</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l3 m3 s12">
								<h6>Computer Accessories</h6>
								<ul class="sub-menu">
									<li>Laptop Batteries</li>
									<li>Laptop Power Adapters/Chargers</li>
									<li>Memory Card Readers & Adapters</li>
									<li>Headsets</li>
									<li>Cleaning Equipment & Kits</li>
								</ul>
							</div>
							<div class="col l3 m3 s12">
								<img src="<?= base_url('asset/img/2.jpg'); ?>" class="responsive-img">
							</div>
						</div>
					</ul>
					<li><a href="<?= base_url('home/men_fastion'); ?>" class="dropdown-trigger" data-target="men-fasion">Men Fashion</a></li>
					<ul class="dropdown-content" id="men-fasion">
						<div class="row">
							<div class="col l4 m4 s12">
								<h6>Mobiles</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<h6>Mobiles Accessories</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<img src="<?= base_url('asset/img/1.jpg'); ?>" class="responsive-img">
							</div>
							<div class="col l4 m4 s12">
								<h6>Computers</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<h6>Tablets</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<h6>Computer Accessories</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
						</div>
					</ul>
					<li><a href="<?= base_url('home/women_fastion'); ?>" class="dropdown-trigger" data-target="women-fasion">Women Fashion</a></li>
					<ul class="dropdown-content" id="women-fasion">
						<div class="row">
							<div class="col l4 m4 s12">
								<h6>Mobiles</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<h6>Mobiles Accessories</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<img src="<?= base_url('asset/img/1.jpg'); ?>" class="responsive-img">
							</div>
							<div class="col l4 m4 s12">
								<h6>Computers</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<h6>Tablets</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<h6>Computer Accessories</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
						</div>
					</ul>

					<li><a href="<?= base_url('home/home_furniture'); ?>" class="dropdown-trigger" data-target="home-furniture">Home & Furniture</a></li>
					<ul class="dropdown-content" id="home-furniture">
						<div class="row">
							<div class="col l4 m4 s12">
								<h6>Mobiles</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<h6>Mobiles Accessories</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<img src="<?= base_url('asset/img/1.jpg'); ?>" class="responsive-img">
							</div>
							<div class="col l4 m4 s12">
								<h6>Computers</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<h6>Tablets</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
							<div class="col l4 m4 s12">
								<h6>Computer Accessories</h6>
								<ul class="sub-menu">
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
									<li>sub menu</li>
								</ul>
							</div>
						</div>
					</ul>


					<li><a href="<?= base_url('home/sports_stationary'); ?>">Sports & Stationary</a></li>
					<li><a href="<?= base_url('home/daily_need'); ?>">Daily Need</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- navbar seciton -->

	<!-- MObile search box -->
	<div class="orange hide-on-med-and-up" style="padding:10px; ">
		<center>
			<?= form_open(); ?>
			<input type="text" id="mobile_search_box" placeholder="Search For Products & Brands" name="">
			<?= form_close(); ?>
		</center>
	</div>