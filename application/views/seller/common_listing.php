<main>
	<section class="listing-main">
		<div class="container">
			<h4>Listing Details</h4>
			<div class="row">
				<h5>General Details</h5>
				<div class="input-field common_feild col s9">

					<h6>Title <span class="red-text">*</span></h6>
					<input id="title" name="title" type="text" data-length="80">
					
				</div>
				<div class="input-field common_feild col s9">
					<h6>Sub Title <span class="green-text"><i>If it has</i></span></h6>
					<input id="sub_title" name="sub_title" type="text" data-length="80">
					
				</div>
				<div class="input-field common_feild col s9">
					<h6>Custom Label <span class="green-text"><i>SKU</i></span></h6>
					<input id="sku" type="text">
					
				</div>
			</div>
				<div class="category col s9">
					<h5>Category</h5>
					<br>
					<div class="row">
						<div class="col s4">
							<p>
								<label>
									<input type="radio" class="category" value="Electronics" name="group" />
									<span>Electronics</span>
								</label>
							</p>
							
						</div>
						<div class="col s4">
							<p>
								<label>
									<input type="radio" class="category" value="Men Fashion" name="group" />
									<span>Men Fashion</span>
								</label>
							</p>

						</div>
						<div class="col s4">
							<p>
								<label>
									<input type="radio" class="category" value="Women Fashion" name="group" />
									<span>Women Fashion</span>
								</label>
							</p>

						</div>
					</div>

					<div class="row">
						<div class="col s4">
							<p>
								<label>
									<input type="radio" class="category" value="Home & Firniture" name="group" />
									<span>Home & Firniture</span>
								</label>
							</p>
							
						</div>
						<div class="col s4">
							<p>
								<label>
									<input type="radio" class="category" value="Sports & Stationary" name="group" />
									<span>Sports & Stationary</span>
								</label>
							</p>

						</div>
						<div class="col s4">
							<p>
								<label>
									<input type="radio" class="category" value="Daily Need" name="group" />
									<span>Daily Need</span>
								</label>
							</p>

						</div>
					</div>
					
					
				

				<div class="category col s9">
					<h5>Sub Category</h5>
					<br>
					<div class="row">
						<div class="col s4">
							<p>
								<label>
									<input type="radio"  class="sub_category" value="Mobiles" name="group1" />
									<span>Mobiles</span>
								</label>
							</p>
							
						</div>
						<div class="col s4">
							<p>
								<label>
									<input type="radio"  class="sub_category" value="Computers" name="group1" />
									<span>Computers</span>
								</label>
							</p>

						</div>
						<div class="col s4">
							<p>
								<label>
									<input type="radio"  class="sub_category" value="Mobile Accessories" name="group1" />
									<span>Mobile Accessories</span>
								</label>
							</p>

						</div>
					</div>

					<div class="row">
						<div class="col s4">
							<p>
								<label>
									<input type="radio"  class="sub_category" value="Tablets" name="group1" />
									<span>Tablets</span>
								</label>
							</p>
							
						</div>
						<div class="col s4">
							<p>
								<label>
									<input type="radio"  class="sub_category" value="Computer Accessories" name="group1" />
									<span>Computer Accessories</span>
								</label>
							</p>

						</div>
						
					</div>
					
					
				</div>

				<div class="category col s9">
					<h5>Condition <span class="red-text">*</span></h5>
					<br>
					<div class="col s4">
						<p>
							<label>
								<input type="radio" class="condition" value="New" name="group2" />
								<span>New</span>
							</label>
						</p>

					</div>
					<div class="col s4">
						<p>
							<label>
								<input type="radio" class="condition" value="Used" name="group2" />
								<span>Used</span>
							</label>
						</p>

					</div>
					
					
				</div>

				
			</div>

			<h5>Item Specifics</h5>

			<div class="row">
				
				<div class="col s5">
					<h6>Brand</h6>
					<select id="brand">
						<option disabled selected>Select Brand</option>
						<option>Brand one</option>
						<option>Brand two</option>
						<option>Brand three</option>
					</select>
				</div>
			
				
				<div class="col s5">
					<h6>Type</h6>
					<select id="type">
						<option disabled selected>Select Type</option>
						<option>Brand one</option>
						<option>Brand two</option>
						<option>Brand three</option>
					</select>
				</div>

				<div class="col s5">
					<h6>Color</h6>
					<select id="color">
						<option disabled selected>Select Color</option>
						<option>Brand one</option>
						<option>Brand two</option>
						<option>Brand three</option>
					</select>
				</div>
				<div class="col common_feild s5">
					<h6>Model</h6>
					<input type="text" id="model" name="model">
				</div>
			</div>

			<h5>Item Description</h5>

			<div class="row">
				
				<div class="col s9">
					<h6>Description</h6>

				
					<textarea id="desc">
						
					</textarea>

				

				</div>
			
				
			</div>

			<h5>Selling Details</h5>

			<div class="row" id="selling">
				
				<div class="col s6">
					<h6>Format <span class="red-text">*</span></h6>
					<select required id="format">
						<option disabled selected>Select format</option>
						<option>Auction</option>
						<option>Fixed Price</option>
						
					</select>
					<div class="auction">
						<p class="green-text">If you have seleted Auction type fill this form out</p>
						Duration: <select id="auc_day">
							<option>1 Day</option>
							<option>2 Days</option>
							<option>3 Days</option>
							<option>4 Days</option>
							<option>5 Days</option>
							<option>6 Days</option>
							<option>7 Days</option>
							<option>10 Days</option>
						</select>
						Starting Price: TK <input type="number" id="starting_price" name="number">
						Buy it Now Price: TK <input type="number" id="buy_price" name="number">
					</div>
				</div>
			</div>
			<div class="row">	
				<div class="col s6">

					<h6>Price <span class="red-text">*</span></h6>
					<div class="input-field common_feild col s9">
					<div id="price_unknow">
						<input id="price" type="text" required>
					</div>
					
					
				</div>
				</div>
			</div>	

			<div class="row">	
				<div class="col s6">
					<h6>Quantity <span class="red-text">*</span></h6>
					<div class="input-field common_feild col s9">
					
					<input id="quantity" type="text" required>
					
				</div>
				</div>
			</div>	

			<h5>Shipping Details</h5>

			<div class="row">
				
				<div class="col before_sub s6">
					<h6>Business policies</h6>
					<p>Payment Policy</p>
					<select id="payment_policy">
						<option disabled selected>Select Payment Policy</option>
						<option>bkash</option>
						<option>card</option>
						<option>rocket</option>
						
					</select>
					<button class="btn">View</button>
					<p>Shipping Policy</p>
					<select id="shipping_policy">
						<option disabled selected>Select Shipping Policy</option>
						<option>bkash</option>
						<option>card</option>
						<option>rocket</option>
						
					</select>
					<button class="btn">View</button>
					<p>Return Policy</p>
					<select id="return_policy">
						<option disabled selected>Select Return Policy</option>
						<option>bkash</option>
						<option>card</option>
						<option>rocket</option>
						
					</select>
					<button class="btn">View</button>

					<h6>Package weight & dimensions</h6>
					<p>Weight</p>
					<input type="number" id="weight" name="">KG
					<p>Dimenstions</p>
			<input type="number" id="s1" class="dim" name=""> in X <input type="number" id="s2" class="dim" name=""> in X<input type="number" id="s3" class="dim" name="">
				</div>
			</div>
			<div class="row">
				<div class="s9">
					<center>
						<button class="btn" type="submit" id="all_listing_update">Publish</button>
					</center>
				
			</div>
			</div>
				
			</div> <!-- End of main container --> 
		</section>
	</main>

<div class="modal" id="acc_show">
	<div class="modal-content">
		<h6>Upload upto 4 images</h6>
		<br>
		<div class="row">
			<div class="col l4 m4 s12">
				<input type="file" name="upload[]" id="upload" multiple accept=".jpg, .png, .gif, .jpeg">
				<br>
				<br>
				<button id="all_products_upload_images" class="btn waves-effect waves-light">Upload Images</button>
			</div>

			<div class="col l8 m5 s12">
				<div id="uploaded_image">
				
				</div>
				
			</div>
			<a href="<?= base_url('index.php/seller/dashboard'); ?>" class="btn">Back to Dashboard</a>
			<a href="<?= base_url('index.php/Seller/common_listing'); ?>" class="btn">List Another Product</a>
		</div>
		
	</div>
</div>	