	<?php 

class Common_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct(); 
	}

	public function select_data($tb_name, $field, $warr='')
	{
		if ($warr!='') {
			$this->db->where($warr); 
		}
		$res = $this->db->select($field)->from($tb_name)->limit(6)->get(); 
		return $res->result_array(); 
	}

	function update_data($tble_name, $data, $wdata)
	{
		$this->db->where($wdata); 
		
		return $this->db->update($tble_name, $data); 
	}
}


 ?>