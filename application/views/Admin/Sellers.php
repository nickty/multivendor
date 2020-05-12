<nav>
	<div class="nav-wrapper container">
		<a href="" class="brand-logo">Sellers</a>
		<ul class="right">
			<li><a href="<?= base_url('index.php/Admin/Dashboard'); ?>"><i class="fa fa-reply"></i> Back To Dashboard</a></li>
		</ul>
	</div>
</nav>

<section class="container">
	<h5>Seller Overview (<?php echo sizeof($sellers) ?>)</h5>
	
	<table class="striped responsive-table">
		<thead>
			<tr>
				<th>Seller Id</th>
				<th>Company Name</th>
				<th>Seller Email</th>
				<th>Phone Number</th>
				<th>License Number</th>
				<th>Registration Date</th>
				<th>Verified / Un-verified</th>
				<th>Action</th>
			</tr>
		</thead>

		<tbody>
			<?php foreach ($sellers as $seller) {
				?>
				<tr>
					<td><?php echo $seller['id']; ?></td>
					<td><?php echo $seller['cname']; ?></td>
					<td><?php echo $seller['email']; ?></td>
					<td><?php echo $seller['mobile_no']; ?></td>
					<td><?php echo $seller['firstName']; ?></td>
					<td><?php echo $seller['Created_at']; ?></td>
					<td><?php if ($seller['verification']==0) {
						echo "Un-Verified"; ?> <a href="<?= base_url('index.php/Admin/VerifySeller/'.$seller['id']); ?>" class="btn red">Verify</a><?php 
					} else { echo "<b>Verified</b>"; } ?></td>
					<td><button class="btn">More</button></td>
				</tr>
				<?php
			}
			?>

		</table>


	</section>