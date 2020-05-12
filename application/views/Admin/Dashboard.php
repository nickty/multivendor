<nav>
	<div class="container">
		<div class="nav-wrapper">
			<ul class="right">
				<li><a href=""><span class="fa fa-envelope"></span> Message</a></li>
				<li><a href=""><span class="fa fa-cogs"></span> Settings</a></li>
				<li><a href=""><span class="fa fa-user"></span> Profile</a></li>
				<li><a href="<?= base_url('index.php/Admin/Logout'); ?>"><i class="fas fa-sign-out-alt"></i> Sign Out</a></li>
			</ul>
		</div>
	</nav>

	<section class="container">
		<h5>Admin Control</h5>
		<p>Welcome to Online Shopping Dashboard</p>

		<nav>
			<div class="nav-wrapper">
				<ul class="left">
					<li><a href="">Overview</a></li>
					<li><a href="" class="modal-trigger" data-target="show_product_modal">Product</a></li>
					<li><a href="" class="modal-trigger" data-target="show_brand_modal">Brand</a></li>
					<li><a href="">One</a></li>
					<li><a href="">One</a></li>
				</ul>
			</div>
		</nav>

		<div class="modal" id="show_product_modal">
			<div class="modal-content">
				<h6><span class="fa fa-cubes"></span>Add Product <span class="right modal-close">X</span></h6>
				<input placeholder="Add Product" name="add_product" id="add_product" type="text" class="validate">
				<button type="submit" id="brand_product" class="btn ">Add Product</button>
			</div>
		</div>

		<div class="modal" id="show_brand_modal">
			<div class="modal-content">
				<h6><span class="fa fa-cubes"></span>Add Brand <span class="right modal-close">X</span></h6>
				<div id="show_selected_item">
					
				</div>
				<input placeholder="Add Brand" name="add_brand" id="add_brand" type="text" class="validate">
				<button type="submit" id="brand_brand" class="btn">Add Brand</button>
			</div>
		</div>
	</section>

	<section class="container">
		<div class="row">
			<div class="col l3 m6 s12">
				<div class="main_box">
					<div class="row">
						<div class="col l8 m8 s8">
							<center><h4><span id="show_seller_numer">0</span></h4></center>
							<a href="<?= base_url('index.php/Admin/Sellers'); ?>"><h6 align="center">Total Sellers</h6></a>
						</div>
						<div class="col l4 m4 s4">
							<h4><i class="fa fa-users" aria-hidden="true"></i></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="col l3 m6 s12">
				<div class="main_box">
					<div class="row">
						<div class="col l8 m8 s8">
							<center><h4>1,25,000</h4></center>
							<h6 align="center">Total Users</h6>
						</div>
						<div class="col l4 m4 s4">
							<h4><i class="fa fa-users" aria-hidden="true"></i></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="col l3 m6 s12">
				<div class="main_box">
					<div class="row">
						<div class="col l8 m8 s8">
							<center><h4>1,25,000</h4></center>
							<h6 align="center">Total Products</h6>
						</div>
						<div class="col l4 m4 s4">
							<h4><i class="fa fa-cubes" aria-hidden="true"></i></h4>
						</div>
					</div>
				</div>
			</div>

			<div class="col l3 m6 s12">
				<div class="main_box">
					<div class="row">
						<div class="col l8 m8 s8">
							<center><h4>1,25,000</h4></center>
							<h6 align="center">Total Income</h6>
						</div>
						<div class="col l4 m4 s4">
							<h4><i class="fa fa-cubes" aria-hidden="true"></i></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

