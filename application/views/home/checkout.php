<section>
	<div class="container">
		<div class="row">
			<div class="step_one">
				<h3>Step 1 - My Shopping Checkout - Review Your Cart Items </h3>
				<div id="order_items" class="collection">
					
				</div>

				<table>
					<thead>
						<tr>
							<th>Name</th>
							<th>Quantity</th>
							<th>Price</th>
						</tr>
					</thead>

					<tbody id="from_script">
						
						
					</tbody>
				</table>

				<nav>
					<div class="nav-wrapper">
						<div class="col s12">
							<a href="#!" class="breadcrumb right">Your Shopping Total Is: 
								<span id="total_price"></span> Taka</a>
							</div>
						</div>
					</nav>

				</div>
			</div>
			<div class="step_one">
				<h3>Step 2 - Enter Address and other details </h3>



				<div class="row">
					<form class="col s12">
						<div class="row">
							<input type="hidden" id="itemsJson" name="itemsJson">
							<div class="input-field col s6">
								<input placeholder="First Name" id="first_name" type="text" class="validate">
								<label for="first_name">First Name</label>
							</div>
							<div class="input-field col s6">
								<input id="last_name" type="text" class="validate">
								<label for="last_name">Last Name</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="email" id="email" name="email" class="validate">
								<label for="email">Email</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input type="text" id="address" name="address" class="validate">
								<label for="address">Address</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="city" type="text" class="validate">
								<label for="city">City</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="division" type="text" class="validate">
								<label for="division">Division</label>
							</div>
						</div>
						<div class="row">
							<div class="col s12">
								Phone Number:
								<div class="input-field inline">
									<input id="phone" type="number" class="validate">
									<label for="phone">Mobile Number</label>
									<span class="helper-text" data-error="wrong"  data-success="right">Provide your active phone number</span>
								</div>
							</div>
						</div>
						<button class="btn" id="new_order">Place Order</button>
					</form>
				</div>

			</div>

		</div>
	</section>

	<div class="modal" id="after_order">
		<div class="modal-content">
			<h6>Order status</h6>
			<center>
				<h1 style="color: orange;"><i class="fa fa-check"></i> Congratulation</h1>
				<h5 style="color: silver; margin-top: 10px; ">Check your email for order ID which can be used to track order!</h5>
				<a href="<?= base_url('index.php/home/index'); ?>" class="btn">Back to Homepage</a>

			</center>
		</div>
	</div>