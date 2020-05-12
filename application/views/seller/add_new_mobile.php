<div style="background-color: rgba(0,0,0,0.05);">
	<section>
		<div class="container" id="general_info_scroll">
			<div class="row" style="background-color: white; padding: 10px;">
				<div class="col l8 m8 s12">
					<h5 class="sec_head">General Details</h5>

					<input placeholder="Title of your product" id="title" name="title" max="40" type="text" class="validate">
					<div class="row">
						<div class="input-field col s4">
						<!-- <select style="display: block;">
							<option>Select Brand</option>
							<option>none</option>
							<option>None</option>
							<option>None</option>
							<option>None</option>
						</select> -->

						<div id="brand_name_here">
							
						</div>
						
					</div>
					<div class="input-field col s4">
						<input id="model_no" name="model_no" type="text" class="validate">
						<label for="model_no">Model No</label>
					</div>
					<div class="input-field col s4">
						<input id="model_name" name="model_name" type="text" class="validate">
						<label for="model_name">Model Name</label>
					</div>
				</div>

				<div class="row" style="padding: 10px;">
					<h6>Color</h6>
					<p>
						<label>
							<input name="group1" type="radio" value="red" />
							<span>Red</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group1" type="radio" value="yellow" />
							<span>Yellow</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group1" type="radio" value="green"  />
							<span>Green</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group1" type="radio" value="brown" />
							<span>Brown</span>
						</label>
					</p>

				</div>
				<div class="row" style="padding: 10px;">
					<h6>Sim</h6>
					<p>
						<label>
							<input name="group2" type="radio" value="sing sim" />
							<span>Single Sim</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group2" type="radio" value="double sim" />
							<span>Doual Sim</span>
						</label>
					</p>
					
				</div>
				<div class="row" style="padding: 10px;">
					<h6>Sim Type</h6>
					<p>
						<label>
							<input name="group3" type="radio" value="micro" />
							<span>Micro</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group3" type="radio" value="nano" />
							<span>Nano</span>
						</label>
						<label style="margin-left: 25px;">
							<input name="group3" type="radio" value="pico" />
							<span>Pico</span>
						</label>
					</p>
					
				</div>
				<div class="row" style="padding: 10px;">
					<h6>OTG Support</h6>
					<p>
						<label>
							<input name="group4" type="radio" value="yes" />
							<span>Yes</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group4" type="radio" value="no" />
							<span>No</span>
						</label>
						
					</p>
					
				</div>
				<button type="submit" id="general_info" class="btn waves-effect waves-light">Save & Continue</button>

			</div>
			<div class="col l4 m4 s12">
				<h5 class="sec_head">Preview</h5>
				<p style="font-size: 13px; color: sliver">Title</p>
				<p id="show_title"></p>
				<p style="font-size: 13px; color: sliver">Brand</p>
				<p id="show_model"></p>

				<p style="font-size: 13px; color: sliver">Model Name</p>
				<p id="show_name"></p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" id="display">
		<div class="row" style="background-color: white; padding: 10px;">
			<div class="col l8 m8 s12">
				<h5 class="sec_head">Display Details</h5>
				
				<div class="row">
					<div class="input-field col s6">
						<select style="display: block;" id="dis_size" name="dis_size">
							<option disabled selected>Select Display Size</option>
							<option>4.0</option>
							<option>4.50</option>
							<option>5.0</option>
							<option>5.50</option>
							<option>6.0</option>
							<option>6.50</option>
						</select>
						
					</div>

					<div class="input-field col s6">
						<select style="display: block;" id="dis_reg" name="dis_reg">
							<option disabled selected>Select Display Resolation</option>
							<option>720px</option>
							<option>1080px</option>
							<option>4K</option>
							<option>8K</option>
						</select>
						
					</div>
					
				</div>

				<div class="row" style="padding: 10px;">
					<h6>Resolution Type</h6>
					<p>
						<label>
							<input name="group5" type="radio" value="HD" />
							<span>HD</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group5" type="radio" value="Full HD" />
							<span>Full HD</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group5" type="radio" value="2K"  />
							<span>2K</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group5" type="radio" value="4K" />
							<span>4K</span>
						</label>
					</p>

				</div>
				<div class="row" style="padding: 10px;">
					<h6>Display Type</h6>
					<p>
						<label>
							<input name="group6" type="radio" value="TFT" />
							<span>TFT</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group6" type="radio" value="OLED" />
							<span>OLED</span>
						</label>
						<label style="margin-left: 25px;">
							<input name="group6" type="radio" value="TFD" />
							<span>TFD</span>
						</label>
					</p>
					
				</div>
				<button type="submit" id="display_info" class="btn waves-effect waves-light">Save & Continue</button>
			</div>
			<div class="col l4 m4 s12">
				<h5 class="sec_head">Preview</h5>
				<p style="font-size: 13px; color: sliver">Display Size</p>
				<p id="show_size"></p>
				<p style="font-size: 13px; color: sliver">Display Resolution</p>
				<p id="show_reso"></p>

			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" id="processor">
		<div class="row" style="background-color: white; padding: 10px;">
			<div class="col l8 m8 s12">
				<h5 class="sec_head">Processor Details</h5>
				
				<div class="row">
					<div class="input-field col s6">
						<select style="display: block;" id="system" name="system">
							<option disabled selected>Operating System</option>
							<option>Apple</option>
							<option>Anroid</option>
							
						</select>
						
					</div>

					<div class="input-field col s6">
						<input placeholder="version" id="version" type="text" class="validate">
						
					</div>
					
				</div>

				<div class="row" style="padding: 10px;">
					<h6>Processor Type</h6>
					<p>
						<label>
							<input name="group7" type="radio" value="Octa Core" />
							<span>Octa Core</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group7" type="radio" value="Hexa Core" />
							<span>Hexa Core</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group7" type="radio" value="Snapdragon" />
							<span>Snapdragon</span>
						</label>

						
					</p>

				</div>
				
				<button type="submit" id="processor_sub" class="btn waves-effect waves-light">Save & Continue</button>
			</div>
			<div class="col l4 m4 s12">
				<h5 class="sec_head">Preview</h5>
				<p style="font-size: 13px; color: sliver">Processor</p>
				<p id="show_pro"></p>
				

			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" id="storage">
		<div class="row" style="background-color: white; padding: 10px;">
			<div class="col l8 m8 s12">
				<h5 class="sec_head">Storage Details</h5>
				
				<div class="row">
					<div class="input-field col s4">
						<select style="display: block;" id="internat_storage">
							<option disabled selected>Internal Storage</option>
							<option>8GB</option>
							<option>16GB</option>
							<option>32GB</option>
							<option>64GB</option>
						</select>
						
					</div>

					<div class="input-field col s4">
						<select style="display: block;" id="ram">
							<option disabled selected>Ram</option>
							<option>512MB</option>
							<option>1GB</option>
							<option>2GB</option>
							<option>3GB</option>
						</select>
						
					</div>

					<div class="input-field col s4">
						<select style="display: block;" id="card_slot">
							<option disabled selected>Memory Card Type</option>
							<option>Card Slot</option>
							<option>Fixed</option>
							
						</select>
						
					</div>
					
				</div>

				<div class="row" style="padding: 10px;">
					<h6>Expandable</h6>
					<p>
						<label>
							<input name="group8" type="radio" value="yes" />
							<span>Yes</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group8" type="radio" value="no" />
							<span>No</span>
						</label>

						
					</p>

				</div>
				<div class="row" style="padding: 10px;">
					<h6>Memory Card Slot</h6>
					<p>
						<label>
							<input name="group9" type="radio" value="yes" />
							<span>Yes</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group9" type="radio" value="no" />
							<span>No</span>
						</label>
					</p>
					
				</div>
				<button type="submit" id="storage_sub" class="btn waves-effect waves-light">Save & Continue</button>
			</div>

			<div class="col l4 m4 s12">
				<h5 class="sec_head">Preview</h5>
				<p style="font-size: 13px; color: sliver">Internal Storage</p>
				<p id="internal"></p>
				<p style="font-size: 13px; color: sliver">Ram</p>
				<p id="ram_show"></p>

				<p style="font-size: 13px; color: sliver">Memory Card Type</p>
				<p id="card"></p>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" id="camera">
		<div class="row" style="background-color: white; padding: 10px;">
			<div class="col l8 m8 s12">
				<h5 class="sec_head">Camera Details</h5>
				
				<div class="row" style="padding: 10px;">
					<h6>Primary Camera</h6>
					<p>
						<label>
							<input name="group10" type="radio" value="yes" />
							<span>Yes</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group10" type="radio" value="no" />
							<span>No</span>
						</label>

						
					</p>

					<h6>Secondary Camera</h6>
					<p>
						<label>
							<input name="group11" type="radio" value="yes" />
							<span>Yes</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group11" type="radio" value="no" />
							<span>No</span>
						</label>

						
					</p>

					<h6>Flash</h6>
					<p>
						<label>
							<input name="group12" type="radio" value="yes" />
							<span>Yes</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group12" type="radio" value="no" />
							<span>No</span>
						</label>

						
					</p>

				</div>
				<button type="submit" id="camera_sub" class="btn waves-effect waves-light">Save & Continue</button>				
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" id="connect">
		<div class="row" style="background-color: white; padding: 10px;">
			<div class="col l8 m8 s12">
				<h5 class="sec_head">Connectivity Details</h5>
				
				<div class="row" style="padding: 10px;">
					<input placeholder="Network Type" id="net_type" type="text" class="validate">
					
					<h6>Micro USB Slot</h6>
					<p>
						<label>
							<input name="group13" type="radio" value="yes" />
							<span>Yes</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group13" type="radio" value="no" />
							<span>No</span>
						</label>

						
					</p>

					<h6>Blutooth</h6>
					<p>
						<label>
							<input name="group14" type="radio" value="yes" />
							<span>Yes</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group14" type="radio" value="no" />
							<span>No</span>
						</label>

						
					</p>

					<h6>Wifi</h6>
					<p>
						<label>
							<input name="group15" type="radio" value="yes" />
							<span>Yes</span>
						</label>

						<label style="margin-left: 25px;">
							<input name="group15" type="radio" value="no" />
							<span>No</span>
						</label>

						
					</p>

					<h6>Battery</h6>
					<p>
						<input placeholder="Battery Type" id="bet_type" type="text" class="validate">

						
					</p>

				</div>
				<button type="submit" id="connect_sub" class="btn waves-effect waves-light">Save & Continue</button>				
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" id="listing">
		<div class="row" style="background-color: white; padding: 10px;">
			<div class="col l8 m8 s12">
				<h5 class="sec_head">Listing Details</h5>
				
				<div class="row">
					<div class="input-field col s4">
						<select style="display: block;" id="duration">
							<option disabled selected>Duration Format</option>
							<option>7 days</option>
							<option>10 days</option>
							<option>30 days</option>
							<option>60 days</option>
							<option>6 months</option>
						</select>
						
						
					</div>

					<div class="input-field col s4">
						<select style="display: block;" id="offer">
							<option disabled selected>Offer</option>
							<option>5%</option>
							<option>10%</option>
							<option>20%</option>
							<option>50%</option>
						</select>
						
					</div>

					<div class="input-field col s4">
						<select style="display: block;" id="return_p">
							<option disabled selected>Return Policy</option>
							<option>Policy 1</option>
							<option>Policy 2</option>
							<option>Policy 3</option>
							<option>Policy 4</option>
						</select>
						
					</div>
					
				</div>

				<div class="row" style="padding: 10px;">
					<h6>Shipping Charge</h6>
					<p>

						<input placeholder="Shipping Charge" id="ship_charge" type="text" class="validate">
					</p>

				</div>
				<div class="row" style="padding: 10px;">
					<h6>Price</h6>
					<p>
						<input placeholder="Price" id="price" type="text" class="validate">
					</p>
					
				</div>
				<button type="submit" id="listing_sub" class="btn waves-effect waves-light">Save & Continue</button>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container" id="image">
		<div class="row" style="background-color: white; padding: 10px;">
			<div class="col l8 m8 s12">
				<h5 class="sec_head">Upload Images</h5>
				<input type="file" name="upload[]" id="upload" multiple accept=".jpg, .png, .gif, .jpeg">
				<button id="btn_upload" class="btn waves-effect waves-light">Upload Images</button>
			</div>
			
		</div>
		<div id="uploaded_image">
				
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row" style="background-color: white; padding: 10px;">
				<div class="col l8 m8 s12">
					<h5 class="sec_head">Listing fee</h5>
					Listing Fee: <span id="show_fee">0</span>	
					<input type="text" name="fee" id="fee" style="display: none;">			
				</div>
			</div>
		</div>
	</section>

	<section>
		<div class="container">
			<div class="row" style="background-color: white; padding: 10px;">
				<button type="submit" id="submit_listing" class="btn waves-effect waves-light" style="display: none;">List Your Products</button>
				<button type="submit" id="preview" class="btn waves-effect waves-light" style="display: none;">Preview</button>
			</div>
		</div>
	</section>

</div>

<div class="modal" id="show_cong">
	<div class="modal-content">
		<h6>Listing status</h6>
		<center>
			<h1 style="color: orange;"><i class="fa fa-check"></i> Congratulation</h1>
			<h5 style="color: silver; margin-top: 10px; ">Your Mobile is successfully uploaded and ready for purchasing!</h5>
			<a href="<?= base_url('index.php/seller/dashboard'); ?>" class="btn">Back to Dashboard</a>
			<a href="<?= base_url('index.php/Seller/CreateListing'); ?>" class="btn">Creating New Listing</a>
		</center>
	</div>
</div>