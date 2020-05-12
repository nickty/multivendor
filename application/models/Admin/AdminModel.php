<?php 
/**
 * Admin Model
 */
class AdminModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct(); 
	}

	public function Login($username, $password)
	{
		$check_admin = $this->db->get_where('admin', ['username' => $username, 'password' => $password]); 

		if ($check_admin->num_rows() > 0) {
			return true;
		} else 
		{
			return false;
		}
	}

	public function AddProduct()
	{
		// print_r($_POST); 
		// die(); 
		$pname = $this->input->post('item_name'); 
		$check_name = $this->db->get_where('items', ['item_name' => $pname]); 

		if ($check_name->num_rows() > 0) {
			return false; 
		}
		else 
		{
			$result = $this->db->insert('items', $_POST); 

			if ($result) {
				return true; 
			} else 
			{
				return false; 
			}
		}
	}

	public function AllItems()
	{
		$get_data = $this->db->select()->from('items')->get(); 

		if ($get_data->num_rows() > 0 ) {
			return $get_data->result(); 
		}else 
		{
			return $get_data->result();
		}
	}

	public function GetBrands()
	{
		$get_item = $this->db->get_where('items',['item_name'=>'Mobile']); 

		if ($get_item->num_rows() > 0 ) {

			$get_item_id = $get_item->row('item_id'); 

			$get_brands = $this->db->get_where('brands', ['item_id'=>$get_item_id]); 
			if ($get_brands->num_rows() > 0) {
				return $get_brands->result();
			}else 
			{
				return false; 
			}

		}else 
		{
			return $get_data->result();
		}
	}


	public function InsertBrands()
	{
		$result = $this->db->insert('brands', $_POST); 

		if ($result) {
			return true; 
		} else 
		{
			return false; 
		}
	}

	public function GetAllSellersM(){
		$get_data = $this->db->select()->from('seller')->get(); 
		if ($get_data->num_rows() > 0) {
			return $get_data->result(); 
		}
	}

	public function SellerVerifyID($id)
	{
		$check = $this->db->get_where('seller', ['id'=>$id, 'verification'=> '0']); 
		if ($check->num_rows() > 0 ) {
			$upate_verify = $this->db->where('id', $id)->update('seller',['verification'=>'1']); 

			if ($upate_verify) {
				$insert_listing = $this->db->insert('sellers_listing', ['sl_sid' => $id, 'sl_sdate'=>date('Y-m-d'), 'sl_ldate' => date('Y-m-d', strtotime("+7 days")), 'sl_num' => '10', 'sl_type'=>'Auction', 'sl_month' =>date('m'), 'sl_year'=>date('Y') ]); 
				if ($insert_listing) {
					$insert_fixed_listing = $this->db->insert('sellers_listing', ['sl_sid' => $id, 'sl_sdate'=>date('Y-m-d'), 'sl_ldate' => date('Y-m-d', strtotime("+7 days")), 'sl_num' => '10', 'sl_type'=>'Fixed', 'sl_month' =>date('m'), 'sl_year'=>date('Y') ]);
					if ($insert_fixed_listing) {
						return true; 
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
				return false; 
			}
		} else 
		{
			return false; 
		}
	}

}