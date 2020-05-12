<?php print_r($result); ?>
<section>
	<div class="container">
		<div class="row">
			<div class="col l5 m5 s12" style="border: 1px solid rgba(0,0,0,0.2); ">
				<center><img src="<?= base_url().'imgs/products/'.$result[0]['mobile_image_0']; ?>" class="responsive_img" width=250></center> 

				<center>
					<ul class="list_imgs">
						<li style="border:1px solid silver;"><img src="<?= base_url().'imgs/products/'.$result[0]['mobile_image_1']; ?>" class="responsive_img" width=80></li>
						<li><img src="<?= base_url().'imgs/products/'.$result[0]['mobile_image_1']; ?>" class="responsive_img" width=80></li>
						<li><img src="<?= base_url().'imgs/products/'.$result[0]['mobile_image_2']; ?>" class="responsive_img" width=80></li>
						<li><img src="<?= base_url().'imgs/products/'.$result[0]['mobile_image_3']; ?>" class="responsive_img" width=80></li>
					</ul>
				</center>

				<center>
					<a href="#" class="btn-large waves-effect waves-light orange" style="width: 40%;"><i class="fa fa-shopping-cart"></i> Add to cart</a>
					<a href="#" class="btn-large waves-effect waves-light black" style="width: 40%;"><i class="fa fa-shopping-bag"></i> Buy Now</a>
				</center>
			</div>
			<div class="col l7 m7 s12">
				<p><a href="" class="silver">Home </a><i class="fa fa-angle-right"></i><a href="" class="silver"> Electronics </a> <i class="fa fa-angle-right"></i><a href="" class="silver"> <i class="fa fa-angle-right"></i><a href="" class="silver"> <?= $result[0]['title']; ?> </a></p> 
				<h5><?= $result[0]['title']; ?></h5>
				<h6><span class="badge green white-text left">10% Off</span></h6><br>
				<h5><i class="fa fa-id-card" aria-hidden="true"></i> <?= $result[0]['price']; ?></h5>
				<h6 style="color: gray; font-weight: bold;">Highlight</h6>
				<ul class="highlight">
					<li><i class="fa fa-circle"></i> <?= $result[0]['price']; ?> | <?= $result[0]['price']; ?></li>
					<li><i class="fa fa-circle"></i> <?= $result[0]['price']; ?> | <?= $result[0]['price']; ?></li>
					<li><i class="fa fa-circle"></i> <?= $result[0]['price']; ?> | <?= $result[0]['price']; ?></li>
					<li><i class="fa fa-circle"></i> <?= $result[0]['price']; ?> | <?= $result[0]['price']; ?></li>
					<li><i class="fa fa-circle"></i> <?= $result[0]['price']; ?> | <?= $result[0]['price']; ?></li>
				</ul>

				<h6 style="color: gray; font-weight: bold;">Seller</h6>
				<ul class="highlight">
					<li><i class="fa fa-circle"></i> Name: <a href="#"><?= strtoupper($result[0]['seller_id']); ?></a></li>
					<li><i class="fa fa-circle"></i> City: <?= $result[0]['title']; ?> </li>
					<li><i class="fa fa-circle"></i> Return Policy: <?= $result[0]['title']; ?> </li>
				</ul>
			</div>
			<hr>
			<br>
			<div class="row">	

				<h5 style="color: gray; font-weight: bold;">Product Specification</h5>
				
				<table class="table table-bordered">
					<tr>
						<td><b>General Details</b></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Model Number</td>
						<td><?= $result[0]['model']; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Model Name</td>
						<<td><?= $result[0]['format']; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Mobile Color</td>
						<td><?= $result[0]['quantity']; ?></td>
					</tr>

					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Height</td>
						<td><?= $result[0]['height']; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Width</td>
						<td><?= $result[0]['width']; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Length</td>
						<td><?= $result[0]['length']; ?></td>
					</tr>

					<tr>
						<td><b>Display Features</b></td>
					</tr>

					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Color</td>
						<td><?= $result[0]['color']; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Weight</td>
						<td><?= $result[0]['color']; ?></td>
					</tr>
					

				</table>
				<div class="description">
					<p><?= $result[0]['desc']; ?></p>
				</div>
			</div>
			<h5 class="center">Related Products</h5>

			<div class="row">
				<?php foreach($electronic as $product) : ?>

					<div class="col l2 s6 m4">
						<div class="card"  style="height: 280px;">
							<div class="card-image">
								<img style="height: 120px;" src="<?= base_url().'imgs/products/'.$product['mobile_image_0']; ?>" class="responsive-img">

							</div>
							<div class="card-content">
								<span class="card-title" style="font-size: 16px;"><?= substr($product['title'], 0, 20);  ?></span>
								<span class="badge left"><b><?= $product['price']; ?></b> Taka</span>

							</div>

							<a href="<?= base_url().'home/single_product/'.$product['id']; ?>" class="btn orange" style="width: 100%;">View More</a>

							<a class="btn" style="width: 100%;">Add to Cart</a>



						</div>
					</div>


				<?php endforeach; ?>

			</div>
		</div>
	</div>
</section>