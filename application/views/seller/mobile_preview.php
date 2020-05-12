<?php print_r($result); ?>
<?php echo "<pre>"; print_r($seller); echo "</pre>"?>

<section>
	<div class="container">
		<div class="row">
			<div class="col l5 m5 s12" style="border: 1px solid rgba(0,0,0,0.2); ">
				<center><img src="<?= base_url().'imgs/'. $result[0]->image_one; ?>" class="responsive_img" width=250></center> 

				<center>
					<ul class="list_imgs">
						<li style="border:1px solid silver;"><img src="<?= base_url().'imgs/'. $result[0]->image_one; ?>" class="responsive_img" width=80></li>
						<li><img src="<?= base_url().'imgs/'. $result[0]->image_two; ?>" class="responsive_img" width=80></li>
						<li><img src="<?= base_url().'imgs/'. $result[0]->image_three; ?>" class="responsive_img" width=80></li>
						<li><img src="<?= base_url().'imgs/'. $result[0]->image_four; ?>" class="responsive_img" width=80></li>
					</ul>
				</center>

				<center>
					<a href="#" class="btn-large waves-effect waves-light orange" style="width: 40%;"><i class="fa fa-shopping-cart"></i> Add to cart</a>
					<a href="#" class="btn-large waves-effect waves-light black" style="width: 40%;"><i class="fa fa-shopping-bag"></i> Buy Now</a>
				</center>
			</div>
			<div class="col l7 m7 s12">
				<p><a href="" class="silver">Home </a><i class="fa fa-angle-right"></i><a href="" class="silver"> Mobiles </a> <i class="fa fa-angle-right"></i><a href="" class="silver"> <?= $result[0]->mobile_brand; ?> </a><i class="fa fa-angle-right"></i><a href="" class="silver"> <?= $result[0]->title; ?> </a></p> 
				<h5><?= $result[0]->title; ?></h5>
				<h6><span class="badge green white-text left"><?= $result[0]->offer; ?> Off</span></h6><br>
				<h5><i class="fa fa-id-card" aria-hidden="true"></i> <?= number_format($result[0]->price); ?></h5>
				<h6 style="color: gray; font-weight: bold;">Highlith</h6>
				<ul class="highlight">
					<li><i class="fa fa-circle"></i> <?= $result[0]->ram; ?> | <?= $result[0]->card_slot; ?></li>
					<li><i class="fa fa-circle"></i> <?= $result[0]->dis_size; ?> | <?= $result[0]->dis_reg; ?></li>
					<li><i class="fa fa-circle"></i> <?= $result[0]->pre_camera; ?> | <?= $result[0]->sec_camera; ?></li>
					<li><i class="fa fa-circle"></i> <?= $result[0]->bet_type; ?> mAh Battery</li>
					<li><i class="fa fa-circle"></i> <?= $result[0]->version; ?> | <?= $result[0]->pros_type; ?></li>
				</ul>

				<h6 style="color: gray; font-weight: bold;">Seller</h6>
				<ul class="highlight">
					<li><i class="fa fa-circle"></i> Name: <a href="#"><?= strtoupper($seller[0]['cname']); ?></a></li>
					<li><i class="fa fa-circle"></i> City: <?= $seller[0]['city'] ?> </li>
					<li><i class="fa fa-circle"></i> Return Policy: <?= $result[0]->return_p; ?> </li>
				</ul>

				<h5 style="color: gray; font-weight: bold;">Product Specification</h5>
				
				<table class="table table-bordered">
					<tr>
						<td><b>General Details</b></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Model Number</td>
						<td><?= $result[0]->model_no; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Model Name</td>
						<td><?= $result[0]->model_name; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Mobile Color</td>
						<td><?= $result[0]->color; ?></td>
					</tr>

					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">SIM</td>
						<td><?= $result[0]->sim; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">SIM Type</td>
						<td><?= $result[0]->sim_type; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">OTG</td>
						<td><?= $result[0]->otg; ?></td>
					</tr>

					<tr>
						<td><b>Display Features</b></td>
					</tr>

					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Display Size</td>
						<td><?= $result[0]->dis_size; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Resolution</td>
						<td><?= $result[0]->dis_reg; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Resoluation Type</td>
						<td><?= $result[0]->res_type; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Display Type</td>
						<td><?= $result[0]->dis_type; ?></td>
					</tr>

					<tr>
						<td><b>Processor Details</b></td>
					</tr>

					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Operayting System</td>
						<td><?= $result[0]->system; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Version</td>
						<td><?= $result[0]->version; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Processor Type</td>
						<td><?= $result[0]->pros_type; ?></td>
					</tr>
					
					<tr>
						<td><b>Storage Details</b></td>
					</tr>

					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Internal Storage</td>
						<td><?= $result[0]->internat_storage; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Ram</td>
						<td><?= $result[0]->ram; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Memory Card</td>
						<td><?= $result[0]->card_slot; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Expandable</td>
						<td><?= $result[0]->expandable; ?></td>
					</tr>

					<tr>
						<td><b>Camera Details</b></td>
					</tr>

					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Primary Camera</td>
						<td><?= $result[0]->pre_camera; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Secondary Camera</td>
						<td><?= $result[0]->sec_camera; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Flash</td>
						<td><?= $result[0]->flash; ?></td>
					</tr>

					<tr>
						<td><b>Connectivity Details</b></td>
					</tr>

					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Network Type</td>
						<td><?= $result[0]->net_type; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Micro USB Slot</td>
						<td><?= $result[0]->micro_sub_slot; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Blutooth</td>
						<td><?= $result[0]->blutooth; ?></td>
					</tr>

					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Wifi</td>
						<td><?= $result[0]->wifi; ?></td>
					</tr>
					<tr>
						<td style="width: 150px; background:rgba(0,0,0,0.2); color: gray">Battery</td>
						<td><?= $result[0]->bet_type; ?></td>
					</tr>					
				</table>
			</div>
		</div>
	</div>
</section>
