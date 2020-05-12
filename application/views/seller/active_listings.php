<nav>
	<div class="nav-wrapper container">
		<a href="" class="brand-logo">Active Listings</a>
		<ul class="right">
			<li><a href="<?= base_url('index.php/Seller/Dashboard'); ?>"><i class="fa fa-reply"></i> Back To Dashboard</a></li>
		</ul>
	</div>
</nav>
<section class="container">
	<div class="box" style="border:1px solid orange; padding: 15px; width: 250px; margin-top: 10px;">
		<h5><?php echo sizeof($result); ?> Active</h5>
	</div>
	<?= form_open('Seller/Get_selected_listings'); ?>
	<select style="width: 350px; display: inline;" required id="get_listings" name="get_listings">
		<option selected disabled>Select Listing Type</option>
		<option <?php if($type=='Mobiles') echo 'selected'; ?> selected>Mobiles</option>
		<option <?php if($type=='Mobile Accessories') echo 'selected'; ?>>Mobile Accessories</option>
	</select>
	<button type="submit" class="btn orange" style="margin-top: -8px;">Show Listings</button>
	<?= form_close(); ?>
</section>
<section class="container">
	<table class="striped" id="all_listings">
		<tr>
			
			<th>Image</th>
			<th>Title</th>
			<th>Price</th>
			<th>Offer</th>
			<th>Current Price</th>
			<th>Quantity</th>
			<th>Format</th>
			<th>View</th>
			<th>Action</th>

		</tr>
		<?php if($type=='Mobiles'): ?>
		<?php foreach($result as $key) {
			?>

			<tr>
				
			
				<td><img src="<?= base_url().'imgs/'.$key->image_one; ?>" width=50 height=50 style="border:1px solid silver; "></td>
							
				<td>
					<h6><a href="" title="<?= $key->title; ?>"><?= substr($key->title, 0,25); ?></a></h6>
					<h6>ID: <?= $key->mobile_id; ?></h6>
				</td>
				<td><?= number_format($key->price); ?> TK <a href="" id="update_active_price" data="<?= $key->mobile_id; ?>"><i class="fa fa-pen"></i></a><input type="hidden" name="inprice" id="inprice" value="<?= $key->price; ?>"></td>
				<td><?= $key->offer; ?>% <a href="" id="percent" data="<?= $key->mobile_id; ?>"><i class="fa fa-pen"></i></a></td>
				<td><?php $cp = ($key->offer)*($key->price/100); $np =$key->price - $cp; echo $np;  ?> TK </td>
				<td><?= $key->quantity; ?> <a href="" id="quantity" data="<?= $key->mobile_id; ?>"><i class="fa fa-pen"></i></td>
				<td><?= $key->duration; ?></td>
				<td><i class="fa fa-link"></i></td>
				<td><a href="" class="btn">Edit</a><a href="<?php echo base_url().'index.php/Seller/UpdateMobileStatus/'.$key->mobile_id; ?>" class="btn orange">De-Activate</a></td>
			</tr>

		<?php	
		}
		?>
		<?php else: ?>
			<?php foreach($result as $key) {
			?>
			<tr>
				
			
				<td><img src="<?= base_url().'imgs/accessories/'.$key->mobile_image_0; ?>" width=50 height=50 style="border:1px solid silver; "></td>
							
				<td>
					<h6><a href="" title="<?= $key->headphone_title; ?>"><?= substr($key->headphone_title, 0,25); ?></a></h6>
					<h6>ID: <?= $key->headphone_id; ?></h6>
				</td>
				<td><?= number_format($key->headphone_price); ?> TK <a href="" id="acc_active_price" data="<?= $key->headphone_id; ?>"><i class="fa fa-pen"></i></a></td>
				<td><?= $key->headphone_offer; ?>% <a href="" id="headphone_percent" data="<?= $key->headphone_id; ?>"><i class="fa fa-pen"></i></a></td>
				<td><?php $cp = ($key->headphone_offer)*($key->headphone_price/100); $np =$key->headphone_price - $cp; echo $np;  ?> TK</td>
				<td><?= $key->quantity; ?> <a href="" id="head_quantity" data="<?= $key->headphone_id; ?>"><i class="fa fa-pen"></i></td>
				<td><?= $key->headphone_duration; ?></td>
				<td><i class="fa fa-link"></i></td>
				<td><a href="" class="btn">Edit</a><a href="" class="btn orange">De-Activate</a></td>
			</tr>
			<?php	
		}
		?>
		<?php endif; ?>	
	</table>
</section>

<div class="modal" id="show_mobile_price"></div>
<div class="modal" id="show_mobile_percent"></div>
<div class="modal" id="show_mobile_quantity"></div>
<div class="modal" id="show_headphone_price"></div>
<div class="modal" id="show_headphone_percent"></div>
<div class="modal" id="show_headphone_quantity"></div>