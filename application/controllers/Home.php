<?php 

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();  

		$this->load->model('Seller/SellerModel', 'sm');
		$this->load->model('Common_model', 'nm');
	}

	public function index()
	{
		$data['electronic']=$this->nm->select_data('all_listing', '*', array('category'=>'Electronics'));
		$data['men_fashon']=$this->nm->select_data('all_listing', '*', array('category'=>'Men Fashion'));
		$data['women_fashon']=$this->nm->select_data('all_listing', '*', array('category'=>'Women Fashion'));
		$data['home_furniture']=$this->nm->select_data('all_listing', '*', array('category'=>'Home & Firniture'));
		$data['sports_stationary']=$this->nm->select_data('all_listing', '*', array('category'=>'Sports & Stationary'));
		$data['daily_need']=$this->nm->select_data('all_listing', '*', array('category'=>'Daily Need'));

		//$data['electronic'] = $this->db->get_where('all_listing', 10, 20)->row(); 

		$this->load->view('includes/header');
		$this->load->view('home/home.php', $data);
		$this->load->view('includes/footer');
	}
	
	public function electronics()
	{
		$this->load->view('includes/header');
		$this->load->view('home/electronics');
		$this->load->view('includes/footer');
	}
	
	public function men_fastion()
	{
		$this->load->view('includes/header');
		$this->load->view('home/men_fashion');
		$this->load->view('includes/footer');
	}
	public function women_fastion()
	{
		$this->load->view('includes/header');
		$this->load->view('home/women_fastion');
		$this->load->view('includes/footer');
	}

	public function home_furniture()
	{
		$this->load->view('includes/header');
		$this->load->view('home/home_furniture');
		$this->load->view('includes/footer');
	}

	public function sports_stationary()
	{
		$this->load->view('includes/header');
		$this->load->view('home/home_furniture');
		$this->load->view('includes/footer');
	}

	public function daily_need()
	{
		$this->load->view('includes/header');
		$this->load->view('home/daily_need');
		$this->load->view('includes/footer');
	}

	public function single_product($id)
	{

	 

		$data['result'] = $this->nm->select_data('all_listing', '*', array('id'=>$id));

		$this->load->view('includes/header');
		$this->load->view('home/single_product', $data);
		$this->load->view('includes/footer');
	}
}