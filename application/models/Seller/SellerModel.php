<?php 
/**
 * 
 */
class SellerModel extends CI_Model
{
	
	public function CreateAccount()
	{
		$result = $this->db->insert('seller', $_POST); 

		if ($result) {
			return true; 
		} else 
		{
			return false; 
		}
	}

	public function Login()
	{
		$check_db = $this->db->get_where('seller', ['email' => $_POST['seller_username'], 'password' => $_POST['seller_password']]); 

		if ($check_db->num_rows() > 0) {
			return true;
		} else 
		{
			return false;
		}
	}

	public function Checksellerinfo()
	{
		$check_db = $this->db->get_where('seller', ['email' => $this->session->userdata('seller_username'), 'password' => $this->session->userdata('seller_password')]);
		
		if ($check_db->num_rows() > 0) {
			$seller = $check_db->row('id'); 

			$check_address = $this->db->get_where('seller', ['id' => $seller, 'address' => '']); 

			if ($check_address->num_rows() > 0) {
				return true;  
			} else {
				return false; 
			}
		}

		
	}

	public function InsertMoreInfo()
	{
		$check_db = $this->db->get_where('seller', ['email' => $this->session->userdata('seller_username'), 'password' => $this->session->userdata('seller_password')]);

		if ($check_db->num_rows() > 0)
		{
			$seller = $check_db->row('id');
			$update_seller = $this->db->where('id', $seller)
			->update('seller', ['firstName' => $_POST['firstNmae'], 'lastName' => $_POST['firstNmae'], 'address' => $_POST['address'], 'city' => $_POST['city'] ]); 

			if ($update_seller) {
				return true; 
			} else 
			{
				return false; 
			}	
		} else 
		{
			return false; 
		}


	}

	public function GetProductImage($mobile_id)
	{
		$get_data = $this->db->get_where('mobiles', ['mobile_id' => $mobile_id]);  

		if ($get_data->num_rows() > 0 ) {
			return $get_data->result(); 
		}else 
		{
			return $get_data->result();
		}
	}

	public function getDataforPreview($id)
	{
		$get_data = $this->db->get_where('mobiles', ['mobile_id' => $id]);

		if ($get_data->num_rows() > 0 ) {
			return $get_data->result(); 
		}else 
		{
			return false;
		}
	}

	public function GetAllProductImage($id)
	{
		$get_data = $this->db->get_where('all_listing', ['id' => $id]);  

		if ($get_data->num_rows() > 0 ) {
			return $get_data->result(); 
		}else 
		{
			return $get_data->result();
		}
	}

	public function GetAccProductImage($headphone_id)
	{
		$get_data = $this->db->get_where('headphones', ['headphone_id' => $headphone_id]);  

		if ($get_data->num_rows() > 0 ) {
			return $get_data->result(); 
		}else 
		{
			return $get_data->result();
		}
	}
	
	public function sell(){
		$x = $this->db->select()->from('seller')->order_by('id', 'desc')->limit(3)->get(); 
		if ($x->num_rows>0) {
			return $x->result(); 
		}
	}
	public function GetFromDatabase($listing_type, $seller_id)	
	{
		if ($listing_type == 'Mobiles') {

			$data = $this->db->select()->from('mobiles')->where('seller_id', $seller_id)->get(); 
			if ($data->num_rows() > 0) {
				return $data->result(); 
			} else 
			{
				return $data->result();
			}
			
		} elseif ($listing_type == 'Mobile Accessories') {
			$data = $this->db->select()->from('headphones')->where('seller_id', $seller_id)->get(); 
			if ($data->num_rows() > 0) {
				return $data->result(); 
			} else 
			{
				return $data->result();
			}
		} 
		else 
		{

		}
	}

	public function get_active_mobile_price()
	{
		$mobile_id = $this->input->get('mobile_id'); 
		$get_mobile = $this->db->get_where('mobiles', ['mobile_id'=>$mobile_id]); 
		if ($get_mobile->num_rows()>0) {
			return $get_mobile->row(); 
		}else 
		{
			return false; 
		}
	}

	public function get_active_headphone_price()
	{
		$mobile_id = $this->input->get('headphone_id'); 
		$get_mobile = $this->db->get_where('headphones', ['headphone_id'=>$mobile_id]); 
		if ($get_mobile->num_rows()>0) {
			return $get_mobile->row(); 
		}else 
		{
			return false; 
		}
	}

	public function GetEletronicProducts()
	{
		$get_All = $this->db->get_where('all_listing', ['category'=>'Electronic'], 6); 
		if ($get_All->num_rows()>0) {
			return $get_All->row(); 
		}else 
		{
			return false; 
		}
	}


}