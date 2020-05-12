<?php 

class Seller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  

		//$this->load->helper('url');
		$this->load->model('Seller/SellerModel', 'sm'); 
		$this->load->model('Common_model', 'nm');
		
	}

	public function index()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$data['sellers']=$this->nm->select_data('seller', '*');
			
			
			

			$data['sell'] = $this->sm->sell();   
			$this->load->view('seller/index.php', $data);
		} else 
		{
			
			return redirect('Seller/Dashboard'); 
		}
		
	}
	
	public function Create_account()
	{
		
		$response  = $this->sm->CreateAccount(); 


		if ($response) {
			$seller_email = $this->input->post('email'); 
			$seller_pass = $this->input->post('password'); 
			
			$sesstion_data = [
				'seller_username' => $seller_email, 
				'seller_password' => $seller_pass
			]; 
			$this->session->set_userdata($sesstion_data); 
			
			$seller_username = $this->session->userdata('seller_username'); 
			$seller = $this->db->get_where('seller', ['email' => $seller_username]); 
			$status = $seller->row('verification');
			if ($status == '1') {
				return redirect('Seller/Dashboard'); 
			} else 
			{
				$this->load->view('includes/header');
				$this->load->view('Seller/verification_status');
				$this->load->view('includes/footer');
			}
		} else 
		{
			return redirect('Seller/index'); 
		}

	}

	public function Login()
	{
		$response = $this->sm->Login(); 


		if ($response) {
			$seller_email = $this->input->post('seller_username'); 
			$seller_pass = $this->input->post('seller_password'); 
			
			$sesstion_data = [
				'seller_username' => $seller_email, 
				'seller_password' => $seller_pass
			]; 
			$this->session->set_userdata($sesstion_data); 

			$seller_username = $this->session->userdata('seller_username'); 
			$seller = $this->db->get_where('seller', ['email' => $seller_username]); 
			$status = $seller->row('verification');
			if ($status == '1') {
				return redirect('Seller/Dashboard'); 
			} else 
			{
				$this->load->view('includes/header');
				$this->load->view('Seller/verification_status');
				$this->load->view('includes/footer');
			}


		} else 
		{
			
			$this->load->view('Seller/index'); 
		}

	}

	
	public function Dashboard()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{

			$seller_username = $this->session->userdata('seller_username'); 
			$seller = $this->db->get_where('seller', ['email' => $seller_username]); 
			$status = $seller->row('verification');
			if ($status == '1') {
				
				$seller_username = $this->session->userdata('seller_username'); 

				$seller = $this->db->get_where('seller', ['email' => $seller_username]); 

				$data['result'] = $this->GetListingDate(); 

				$data['fresult'] = $this->GetFixedListingDate();

				$seller_id = $seller->row('id');

				$data['lsellers']=$this->nm->select_data('sellers_listing', '*', ['sl_sid'=>$seller_id]); 
				$this->load->view('seller/Dashboard', $data);
			} else 
			{
				$this->load->view('includes/header');
				$this->load->view('Seller/verification_status');
				$this->load->view('includes/footer');
			}


		}
	}

	public function Logout()
	{
		$this->session->unset_userdata('seller_username'); 
		$this->session->unset_userdata('seller_password'); 
		return redirect('Seller/index');
	}

	public function Creat_listing()
	{
		
		$result = $this->sm->Checksellerinfo(); 

		if ($result) {
			return redirect('Seller/insertContacts');
		} else 
		{
			return redirect('Seller/CreateListing');
		}

		
	}

	public function insertContacts()
	{
		$this->load->view('includes/header');
		$this->load->view('seller/addSellerInfo');
		$this->load->view('includes/footer');
		
	}

	public function CreateListing()
	{
		$this->load->view('includes/header');
		$this->load->view('seller/CreateListing');
		$this->load->view('includes/footer');
	}

	public function addMoreInfo()
	{
		$result = $this->sm->InsertMoreInfo(); 

		if ($result) {
			return redirect('Seller/Dashboard'); 
		} else 
		{
			echo "Information note updated";
		}
	}

	public function MobileUpoad()
	{
		$this->load->view('includes/header');
		$this->load->view('seller/add_new_mobile');
		$this->load->view('includes/footer');
	}

	public function InsertGeneralInfo()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$seller_username = $this->session->userdata('seller_username'); 

			$seller = $this->db->get_where('seller', ['email' => $seller_username]); 

			$seller_id = $seller->row('id');

			$_POST['seller_id'] = $seller_id; 
			
			$result = $this->db->insert('mobiles', $_POST);

			if ($result) {
				echo $this->db->insert_id();
				
			} else 
			{
				return false; 
			}
		}

	}

	public function InsertDisplayInfo()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			
			$update = $this->db->where('mobile_id', $_POST['mobile_id'])->update('mobiles', $_POST); 

			if ($update) {
				return true; 
			} else 
			{
				return false; 
			}
		}
	}

	public function InsertProcessorInfo()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			
			$update = $this->db->where('mobile_id', $_POST['mobile_id'])->update('mobiles', $_POST); 

			if ($update) {
				return true; 
			} else 
			{
				return false; 
			}
		}
	}

	public function InsertStorageInfo()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			
			$update = $this->db->where('mobile_id', $_POST['mobile_id'])->update('mobiles', $_POST); 

			if ($update) {
				return true; 
			} else 
			{
				return false; 
			}
		}
	}

	public function InsertCameraInfo()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			
			$update = $this->db->where('mobile_id', $_POST['mobile_id'])->update('mobiles', $_POST); 

			if ($update) {
				return true; 
			} else 
			{
				return false; 
			}
		}
	}

	public function InsertConnectInfo()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			
			$update = $this->db->where('mobile_id', $_POST['mobile_id'])->update('mobiles', $_POST); 

			if ($update) {
				return true; 
			} else 
			{
				return false; 
			}
		}
	}

	public function InsertListingInfo()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			
			$update = $this->db->where('mobile_id', $_POST['mobile_id'])->update('mobiles', $_POST); 

			if ($update) {
				return true; 
			} else 
			{
				return false; 
			}
		}
	}

	public function UloadMultiImage()
	{
		$upload_path = './imgs/'; 


		for ($i=0; $i< count($_FILES['files']['name']); $i++) { 

			$temp_name = $_FILES['files']['tmp_name'][$i]; 
			$file_name = $_FILES['files']['name'][$i];

			$nname = explode('.', $file_name); 
			$genName = rand(0,999999);   
			$ntext = strtolower(end($nname)); 
			$unique =substr($genName.md5(time()), 0, 15).'.'.$ntext; 

			move_uploaded_file($temp_name, $upload_path.$unique); 


			$x[] = $unique; 
		}

		for ($i=0; $i<sizeof($x); $i++) { 
			$update = $this->db->where('mobile_id', $_POST['mobile_id'])
			->update('mobiles', ['image_one'=>$x[0], 'image_two' => $x[1], 'image_three'=>$x[2], 'image_four'=>$x[3]]);
		}

	}

	public function GetImageFromData()
	{
		$mobile_id = $_POST['mobile_id']; 

		$result = $this->sm->GetProductImage($mobile_id); 

		if ($result){
			$output = ''; 
			$output .='<div class="row">
			<div class="col l3 m3 s12">
			<img src="'.base_url().'imgs/'.$result[0]->image_one.'" class="responsive-img">
			</div>
			<div class="col l3 m3 s12">
			<img src="'.base_url().'imgs/'.$result[0]->image_two.'" class="responsive-img">
			</div>
			<div class="col l3 m3 s12">
			<img src="'.base_url().'imgs/'.$result[0]->image_three.'" class="responsive-img">
			</div>
			<div class="col l3 m3 s12">
			<img src="'.base_url().'imgs/'.$result[0]->image_four.'" class="responsive-img"> 
			</div> 
			</div>'; 
			echo $output;
		} else 
		{
			return false; 
		}
	}


	public function GetListingDate()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			
			$check_db = $this->db->get_where('seller', ['email' => $this->session->userdata('seller_username'), 'password' => $this->session->userdata('seller_password')]);


			if ($check_db->num_rows() > 0)
			{
				$seller_id = $check_db->row('id');

				$get_auction_listing = $this->db->get_where('sellers_listing', ['sl_sid'=>$seller_id, 'sl_type'=>'Auction']); 

				$start_date = $get_auction_listing->row('sl_sdate'); 
				$last_date = $get_auction_listing->row('sl_ldate');

				$this->db->or_where(['duration'=>'7 days']); 
				$this->db->or_where(['duration'=>'10 days']);
				$get_mobile = $this->db->get_where('mobiles', ['seller_id'=>$seller_id, 'upload_date >='=>$start_date, 'upload_date <='=>$last_date]);

				//return $get_mobile->result(); 
				
				if ($get_mobile->num_rows() > 0) {
					return $get_mobile->result(); 
				} else 
				{
					return 'not working'; 
				}

			} else 
			{
				return false; 
			}
		}
	}

	public function GetFixedListingDate()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			
			$check_db = $this->db->get_where('seller', ['email' => $this->session->userdata('seller_username'), 'password' => $this->session->userdata('seller_password')]);

			if ($check_db->num_rows() > 0)
			{
				$seller_id = $check_db->row('id');

				$get_fixed_listing = $this->db->get_where('sellers_listing', ['sl_sid'=>$seller_id, 'sl_type'=>'Fixed']); 

				$start_date = $get_fixed_listing->row('sl_sdate'); 
				$last_date = $get_fixed_listing->row('sl_ldate');

				$this->db->or_where(['duration'=>'30 days']); 
				$this->db->or_where(['duration'=>'60 days']);
				$get_mobile = $this->db->get_where('mobiles', ['seller_id'=>$seller_id, 'upload_date >='=>$start_date, 'upload_date <='=>$last_date]);

				//$this->db->or_where(['duration'=>'7 days', 'duration'=>'10 days']); 

				if ($get_mobile->num_rows() > 0) {
					return $get_mobile->result(); 
				} else 
				{
					return false;
				}

			} else 
			{
				return false; 
			}
		}
	}

	public function CheckAuctionOrFixed()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$dur = $_POST['duration']; 

			// $su = $this->session->userdata('seller_username'); 
			// $sp = $this->session->userdata('seller_password'); 

			$check_db = $this->db->get_where('seller', ['email' => $this->session->userdata('seller_username'), 'password' => $this->session->userdata('seller_password')]);

			if ($check_db->num_rows() > 0)
			{
				$seller_id = $check_db->row('id');

				if ($dur == '7 days' OR $dur == '10 days') {

					$get_auction_listing = $this->db->get_where('sellers_listing', ['sl_sid'=>$seller_id, 'sl_type'=>'Auction']); 

					if ($get_auction_listing->num_rows() > 0) {
						$auc_listing = $get_auction_listing->row(); 

						$get_mobile = $this->db->get_where('mobiles', ['seller_id'=>$seller_id, 'upload_date >='=>$auc_listing->sl_sdate, 'upload_date <='=>$auc_listing->sl_ldate]); 

						if ($get_mobile->num_rows() > 0) {
							$countNum = $get_mobile->num_rows(); 
							if ($countNum > $auc_listing->sl_num) {
								
								echo $sl_fee = '50'; 
							} else 
							{
								echo  $sl_fee = '0';
							}
							
						} else 
						{
							return false; 
						}

					} else 
					{
						return false; 
					}
				} else 
				{
					$get_fixed_listing = $this->db->get_where('sellers_listing', ['sl_sid'=>$seller_id, 'sl_type'=>'Fixed']);

					if ($get_fixed_listing->num_rows() > 0) {
						$fix_listing = $get_fixed_listing->row(); 

						$get_mobile = $this->db->get_where('mobiles', ['seller_id'=>$seller_id, 'upload_date >='=>$fix_listing->sl_sdate, 'upload_date <='=>$fix_listing->sl_ldate]);

						if ($get_mobile->num_rows() > 0) {
							$countNum = $get_mobile->num_rows(); 
							if ($countNum > $fix_listing->sl_num) {
								
								echo $sl_fee = '50'; 
							} else 
							{
								echo  $sl_fee = '0';
							}
							
						} else 
						{
							return false; 
						}
						
					} else 
					{
						return false; 
					}

				}

			}   
		}

	}

	public function Preview_Mobile($id)
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$data['result'] = $this->sm->getDataforPreview($id);

			$seller_id = $data['result'][0]->seller_id; 

			$data['seller'] = $this->nm->select_data('seller', '*', array('id'=>$seller_id));


			$this->load->view('includes/header');
			$this->load->view('seller/mobile_preview', $data);
			$this->load->view('includes/footer');
		}	
	}

	public function MobileFeeInsert()
	{
		//print_r($_POST); 

		$update = $this->db->where('mobile_id', $_POST['mobile_id'])->update('mobiles', ['listing_fee'=> $_POST['fee']]); 

		if ($update) {
			
			$data['mobile_info'] = $this->nm->select_data('mobiles', '*', array('mobile_id'=>$_POST['mobile_id']));

		// return	print_r($data['mobile_info'][0]); 

			$mobile_live = $this->db->insert('mobiles_live', $data['mobile_info'][0]); 

			if ($mobile_live) {
				return true; 
			} else 
			{
				return false; 
			}

		}else 
		{
			return false; 
		}


	}

	public function MobileAcessories()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{

			$this->load->view('includes/header');
			$this->load->view('seller/mobiles/add_mobile_accessories');
			$this->load->view('includes/footer');
		}	
	} 

	public function InsertHeadphones()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$seller_username = $this->session->userdata('seller_username'); 

			$seller = $this->db->get_where('seller', ['email' => $seller_username]); 

			$seller_id = $seller->row('id');

			$_POST['seller_id'] = $seller_id; 

			$result = $this->db->insert('headphones', $_POST);

			if ($result) {
				echo $this->db->insert_id();
			} else 
			{
				return false; 
			}
		}	 
	}

	public function UloadAccImage()
	{
		//return print_r($_FILES['files']['name']); 

		$upload_path = './imgs/accessories/';

		for ($i=0; $i< count($_FILES['files']['name']); $i++) { 

			$temp_name = $_FILES['files']['tmp_name'][$i]; 
			$file_name = $_FILES['files']['name'][$i];

			$nname = explode('.', $file_name); 
			$genName = rand(0,999999);   
			$ntext = strtolower(end($nname)); 
			$unique =substr($genName.md5(time()), 0, 15).'.'.$ntext; 

			move_uploaded_file($temp_name, $upload_path.$unique); 


			$x[] = $unique; 


		}

		echo $this->db->insert_id();

		for ($i=0; $i<sizeof($x); $i++) { 
			$update = $this->db->where('headphone_id', $_POST['headphone_id'])
			->update('headphones', ['mobile_image_0'=>$x[0], 'mobile_image_1' => $x[1], 'mobile_image_2'=>$x[2], 'mobile_image_3'=>$x[3]]);
		}
	}

	public function GetAllImageFromData()
	{
		$id = trim($_POST['id']); 

		//print_r($_POST['id']); 

		$result = $this->sm->GetAllProductImage($_POST['id']); 

		//return print_r($result); 

		//$get_data = $this->db->get_where('headphones', ['headphone_id' => $headphone_id]);

		if($result){
			$show = ''; 
			$show .='<div class="table">'; 
			for ($i=0; $i<4; $i++) { 
				
				$name = "mobile_image_$i"; 
				if ($result[0]->$name != '') {
					$show .= '<tr>
					<td><img src="'.base_url().'imgs/products/'.$result[0]->$name.'" class="responsive-img" width=150></td>
					
					</tr>';


				}
				

				
			}
			$show .='</div>'; 
		}
		echo $show;
	}

	public function GetAccImageFromData()
	{
		$headphone_id = $_POST['headphone_id']; 

		$result = $this->sm->GetAccProductImage($headphone_id); 

		//return print_r($result); 

		//$get_data = $this->db->get_where('headphones', ['headphone_id' => $headphone_id]);

		if($result){
			$show = ''; 
			$show .='<div class="table">'; 
			for ($i=0; $i<4; $i++) { 
				
				$name = "mobile_image_$i"; 
				if ($result[0]->$name != '') {
					$show .= '<tr>
					<td><img src="'.base_url().'imgs/accessories/'.$result[0]->$name.'" class="responsive-img" width=150></td>
					</tr>';
				}
				

				
			}
			$show .='</div>'; 
		}
		echo $show; 		

		
	}

	public function active_listing()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$seller_username = $this->session->userdata('seller_username'); 

			$seller = $this->db->get_where('seller', ['email' => $seller_username]); 

			$seller_id = $seller->row('id');

			$listing_type = 'Mobiles'; 
			$data['result'] = $this->sm->GetFromDatabase($listing_type, $seller_id); 
			$data['type'] = 'Mobiles'; 

			$this->load->view('includes/header');
			$this->load->view('seller/active_listings', $data);
			$this->load->view('includes/footer');
		}	 
	}

	public function Get_selected_listings()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$seller_username = $this->session->userdata('seller_username'); 

			$seller = $this->db->get_where('seller', ['email' => $seller_username]); 

			$seller_id = $seller->row('id');

			$listing_type = $_POST['get_listings']; 

			$data['result'] = $this->sm->GetFromDatabase($listing_type, $seller_id); 
			$data['type'] = $_POST['get_listings'];

			$this->load->view('includes/header');
			$this->load->view('seller/active_listings', $data);
			$this->load->view('includes/footer');
		}	 
	}

	public function GetProductPrice()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$output = ""; 
			$result = $this->sm->get_active_mobile_price(); 
			$output .= '
			<div class="modal-content">
		<h6>Listing status</h6>
			<h6 class="orange-text" name="msg" id="msg"></h6>
			<input type="text" name="update_price" id="update_price" value="'.$result->price.'">
			<input type="text" style="display:none;" name="mobile_id" id="mobile_id" value="'.$result->mobile_id.'">
			
			<input type="submit" name="submit" id="update_button" class="btn orange" value="Update">
		
	</div>'; 

	echo $output; 
		}
	}

	public function UpdateProductPrice()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$result = $this->db->where('mobile_id', $_POST['mobile_id'])
			->update('mobiles', ['price'=> $_POST['updated']]);  
			if ($result) {
				
				return true; 

			} else {
				return false; 
			}
		}
	}

	
	public function GetProductPercent()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$output = ""; 
			$result = $this->sm->get_active_mobile_price(); 
			$output .= '
			<div class="modal-content">
		<h6>Listing status</h6>
			<h6 class="orange-text" name="msg" id="msg"></h6>
			<input type="text" name="update_percent" id="update_percent" value="'.$result->offer.'">
			<input type="text" style="display:none;" name="mobile_id" id="mobile_id" value="'.$result->mobile_id.'">
			
			<input type="submit" name="submit" id="percent" class="btn orange" value="Update">
		
	</div>'; 

	echo $output; 
		}
	}

	
	public function UpdateProductPercent()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$result = $this->db->where('mobile_id', $_POST['mobile_id'])
			->update('mobiles', ['offer'=> $_POST['updated']]);  
			if ($result) {
				
				return true; 

			} else {
				return false; 
			}
		}
	}

	public function GetProductQuantity()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$output = ""; 
			$result = $this->sm->get_active_mobile_price(); 
			$output .= '
			<div class="modal-content">
		<h6>Listing status</h6>
			<h6 class="orange-text" name="msg" id="msg"></h6>
			<input type="text" name="update_quantity" id="update_quantity" value="'.$result->quantity.'">
			<input type="text" style="display:none;" name="mobile_id" id="mobile_id" value="'.$result->mobile_id.'">
			
			<input type="submit" name="submit" id="quantity" class="btn orange" value="Update">
		
	</div>'; 

	echo $output; 
		}
	}

	public function UpdateProductQuantity()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$result = $this->db->where('mobile_id', $_POST['mobile_id'])
			->update('mobiles', ['quantity'=> $_POST['updated']]);  
			if ($result) {
				
				return true; 

			} else {
				return false; 
			}
		}	
	}

	public function GetHeadphonePrice()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$output = ""; 
			$result = $this->sm->get_active_headphone_price(); 
			$output .= '
			<div class="modal-content">
		<h6>Listing status</h6>
			<h6 class="orange-text" name="msg" id="msg"></h6>
			<input type="text" name="update_headphone_price" id="update_headphone_price" value="'.$result->headphone_price.'">
			<input type="text" style="display:none;" name="headphone_id" id="headphone_id" value="'.$result->headphone_id.'">
			
			<input type="submit" name="submit" id="headphone_price" class="btn orange" value="Update">
		
	</div>'; 

	echo $output; 
		}
	}

	public function UpdateheadphonePrice()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$result = $this->db->where('headphone_id', $_POST['headphone_id'])
			->update('headphones', ['headphone_price'=> $_POST['updated']]);  
			if ($result) {
				
				return true; 

			} else {
				return false; 
			}
		}	
	}

	public function GetHeadphonePercent()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$output = ""; 
			$result = $this->sm->get_active_headphone_price(); 
			$output .= '
			<div class="modal-content">
		<h6>Listing status</h6>
			<h6 class="orange-text" name="msg" id="msg"></h6>
			<input type="text" name="update_headphone_offer" id="update_headphone_offer" value="'.$result->headphone_offer.'">
			<input type="text" style="display:none;" name="headphone_id" id="headphone_id" value="'.$result->headphone_id.'">
			
			<input type="submit" name="submit" id="headphone_offer" class="btn orange" value="Update">
		
	</div>'; 

	echo $output; 
		}
	}

	public function UpdateheadphoneOffer()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$result = $this->db->where('headphone_id', $_POST['headphone_id'])
			->update('headphones', ['headphone_offer'=> $_POST['updated']]);  
			if ($result) {
				
				return true; 

			} else {
				return false; 
			}
		}	
	}

	public function GetHeadphoneQuantity()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$output = ""; 
			$result = $this->sm->get_active_headphone_price(); 
			$output .= '
			<div class="modal-content">
		<h6>Listing status</h6>
			<h6 class="orange-text" name="msg" id="msg"></h6>
			<input type="text" name="update_headphone_quantity" id="update_headphone_quantity" value="'.$result->quantity.'">
			<input type="text" style="display:none;" name="headphone_id" id="headphone_id" value="'.$result->headphone_id.'">
			
			<input type="submit" name="submit" id="headphone_quantity" class="btn orange" value="Update">
		
	</div>'; 

	echo $output; 
		}
	}

	
	public function UpdateheadphoneQuanity()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$result = $this->db->where('headphone_id', $_POST['headphone_id'])
			->update('headphones', ['quantity'=> $_POST['updated']]);  
			if ($result) {
				
				return true; 

			} else {
				return false; 
			}
		}	
	}

	public function UpdateMobileStatus($Mobile_id)
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$seller_username = $this->session->userdata('seller_username'); 

			$seller = $this->db->get_where('mobiles', ['mobile_id' => $Mobile_id]); 

			$data['product'] = $seller->row('id');


			$this->load->view('includes/header');
			$this->load->view('seller/Edit_mobile', $data);
			$this->load->view('includes/footer');
		}	 
	}

	public function common_listing()
	{
		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$this->load->view('includes/header');
			$this->load->view('seller/common_listing');
			$this->load->view('includes/footer');
		}	 
	}

	public function submit_product(){

		if ($this->session->userdata('seller_username') == "" && $this->session->userdata('seller_password') == "") {
			$this->load->view('seller/index.php');
		} else 
		{
			$seller_username = $this->session->userdata('seller_username'); 

			$seller = $this->db->get_where('seller', ['email' => $seller_username]); 

			$seller_id = $seller->row('id');

			$_POST['seller_id'] = $seller_id;

			$result = $this->db->insert('all_listing', $_POST);

			if ($result) {
				echo $this->db->insert_id(); 
			}
			else 
			{
				return false; 
			}
		}
		
	}

	public function AllUloadAccImage(){
		//return print_r($_FILES['files']['name']); 

		$upload_path = './imgs/products/';

		for ($i=0; $i< count($_FILES['files']['name']); $i++) { 

			$temp_name = $_FILES['files']['tmp_name'][$i]; 
			$file_name = $_FILES['files']['name'][$i];

			$nname = explode('.', $file_name); 
			$genName = rand(0,999999);   
			$ntext = strtolower(end($nname)); 
			$unique =substr($genName.md5(time()), 0, 15).'.'.$ntext; 

			move_uploaded_file($temp_name, $upload_path.$unique); 


			$x[] = $unique; 


		}

		echo $this->db->insert_id();

		for ($i=0; $i<sizeof($x); $i++) { 
			$update = $this->db->where('id', $_POST['id'])
			->update('all_listing', ['mobile_image_0'=>$x[0], 'mobile_image_1' => $x[1], 'mobile_image_2'=>$x[2], 'mobile_image_3'=>$x[3]]);
		}
	}

}