<?php 

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  
		$this->load->model('Admin/AdminModel', 'am');
			 

	}

	public function index()
	{

		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			$this->load->view('includes/header');
			$this->load->view('Admin/index');
			$this->load->view('includes/footer');
		} else 
		{
			$this->load->view('includes/header');
			$this->load->view('Admin/Dashboard'); 
			$this->load->view('includes/footer');
		}
		
	}

	public function Login()
	{
		$username = $this->input->post('user_name'); 
		$password = $this->input->post('password'); 

		$result = $this->am->Login($username, $password);

		if ($result) {

			$admin_session = [
				'admin_username' => $username, 
				'admin_password' => $password
			]; 
			$this->session->set_userdata($admin_session); 	
			return redirect('Admin/Dashboard'); 


		} else 
		{
			$this->session->set_flashdata('msg', 'Username or Password is not correct'); 
			return redirect('Admin/index'); 
		}


		
	}

	public function Logout()
	{

		$this->session->unset_userdata('admin_username'); 
		$this->session->unset_userdata('admin_password'); 
		return redirect('Admin/index'); 
	}

	public function Dashboard()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else 
		{
			$this->load->view('includes/header');
			$this->load->view('Admin/Dashboard'); 
			$this->load->view('includes/footer');
		}
	}

	public function AddNewProduct()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else 
		{

			
			$result = $this->am->AddProduct();
			if ($result) {
				return true; 
			}else 
			{
				return false; 
			}
			
			
		}
	}

	public function GetItems()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else 
		{

			$output = ''; 	
			$result = $this->am->AllItems();
			if ($result){
				$output .='<select name="item_select" id="item_select">'; 
				foreach ($result as $items) {
					$output .='<option value='.$items->item_id.'>'.$items->item_name.'</option>';
				}
				$output .='</select>';
			}




		}
		echo $output; 
	}

	public function InsertBrandItem()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else 
		{
			$result = $this->am->InsertBrands();

			if ($result) {
				return true; 
			} else {
				return false; 
			}
		}

	}

	public function GetAllBrand()
	{
		$output = ''; 	
			$result = $this->am->GetBrands(); 
			if ($result){
				if (count($result)) {
					$output .='<select name="mobile_brand" id="mobile_brand">'; 
				foreach ($result as $items) {
					$output .='<option>'.$items->brand_name.'</option>';
				}
				$output .='</select>';
				}
				else 
				{
					$output .='<select disabled><option>No Brand Found</option></select>';
				}
				
			}
			echo $output; 
	}

	public function GetAllSeller()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else 
		{
			$output = ''; 
			$result = $this->am->GetAllSellersM();
			$output = count($result); 

			echo $output;

			
		}
	}

	public function Sellers()
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else 
		{
			$data['sellers']=$this->nm->select_data('seller', '*'); 

			$this->load->view('includes/header');
			$this->load->view('Admin/Sellers', $data); 
			$this->load->view('includes/footer');
		}
	}

	public function VerifySeller($id)
	{
		if ($this->session->userdata('admin_username') == "" && $this->session->userdata('admin_password') == "") {
			return redirect('Admin/index');
		} else 
		{
			$result = $this->am->SellerVerifyID($id); 

			if ($result) {
			return redirect('Admin/Sellers');
			}

		}
	}
}