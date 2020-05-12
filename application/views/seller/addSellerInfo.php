<div class="container">
	<div class="row" style="margin-top: 8%;">
		<div class="col l4 m4 s12">
		</div>
		<div class="col l4 m4 s12" style="background-color: orange; padding: 10px;">
			<h5 class="white-text">Insert Seller Information</h5>
			<p class="white-text">We need more information from you to list your first product</p>
			<?= form_open('Seller/addMoreInfo'); ?>
			<input type="text" name="firstNmae" placeholder="First Name" required>
			<input type="text" name="lastName" placeholder="Last Name">
			<textarea class="materialize-textarea" name="address" placeholder="Full address"></textarea>
			<select name="city" required style="display: block;">
				<option disabled>Select City</option>
				<option>Rangpur</option>
				<option>Dinajpur</option>
			</select>
			<br>
			<button style="submit" class="btn">Submit</button>
			<?= form_open(); ?>
		</div>
		<div class="col l4 m4 s12">
		</div>
	</div>
</div>