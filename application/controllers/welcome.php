<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Welcome extends CI_Controller 
{
	public function __construct()
       {
            parent::__construct();
	    $this->load->model('logic');
	    $this->load->helper(array('form', 'url'));
	    $this->load->library('form_validation');
       }
	
	public function index()
	{
		//$data['home_content'] = "home";
		$this->load->view('page');
	}

	public function form_validation()
	{
		$data['page_containt'] = 'form_validation';
		$this->load->view('template/main_body' , $data);
	}
	public function submit_data()
	{
		echo "ok";
	}
	
	public function for_value($value, $value1)
	{
		echo "".$value;
		echo "<br/>".$value1;
	}
	public function registration()
	{
		$this->load->view('registration_form');
	}
	
	//database access
	public function db_access()
	{
		$data['result'] = $this->logic->get_data();
		$this->load->view('db_access', $data);
	}
	//form validatiom//
	public function validation_success()
	{
		$data['body_content'] = 'validation_success';
		$this->load->view('simple_form',$data);		
	}
	public function form_vali()
	{
		$this->form_validation->set_rules('name', 'Name', 'required|trim|strtoupper');
		$this->form_validation->set_rules('email', 'E-mail', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('repassword', 'Re-Password', 'required|matches[password]');
		if($this->form_validation->run() == false)
		{
			$this->validation_success();
		}
		else
		{
			echo $this->input->post('name');
		}
	}
	//login_page
	public function login()
	{
		$data['page_containt'] = 'login_body';
		$this->load->view('template/containt', $data);
	}
	public function zone()
	{
		$data['page_containt'] = 'zone_body';
		$this->load->view('template/containt', $data);
		$data = array('id' => 'zone_id' ,'name' => "zone_name" ,);
		$this->db->insert('zone', $data); 
	}
	public function complex()
	{
		
		
		$data['page_containt'] = 'complex_body';
		$data['title'] = 'complex body';
		$this->load->view('template/containt', $data);
		
	}
	public function shop()
	{
		$data['page_containt'] = 'shop_body';
		$this->load->view('template/containt', $data);
	}
	public function owner()
	{
		$data['page_containt'] = 'owner_body';
		$this->load->view('template/containt', $data);
	}
	public function rent()
	{
		$data['page_containt'] = 'rent_body';
		$this->load->view('template/containt', $data);
	}
	public function about()
	{
		$data['page_containt'] = 'about_body';
		$this->load->view('template/containt', $data);
	}
	public function home()
	{
		$data['page_containt'] = 'home_body';
		$this->load->view('template/containt', $data);
	}
	public function hom()
	{
		$data['page_containt'] = 'example1';
		$this->load->view('template/containt', $data);
	}
	//-- data insert -->//
	public function complex_insert()
	{
		$data= array(
			//'complex_id'=>$this->input->post('complex_id'),
			'complex_name'=>$this->input->post('complex_name'),
			'zone_name'=>$this->input->post('zone_name'),
			'ward_name'=>$this->input->post('shop_name'),
			'hall'=>$this->input->post('hall'),
			'room'=>$this->input->post('room'),
			'canteen'=>$this->input->post('canteen'),
			'loudge'=>$this->input->post('lauge'),
			'total'=>$this->input->post('total_shop'),
			'alloted'=>$this->input->post('alloted'),
			'unalloted'=>$this->input->post('unalloted'),
		);
		
		$this->logic->cinsert_db('complex',$data);
	}
	
}
		/*
	//home page
	//public function home1()
	//{
	//	$data['home_contant'] = 'index';
	//	$this->load->view('page', $data);
	//}
	
	public function form1 ()
	{
		$this->load->view('my_form');
	}
	
	public function login()
	{
		$data['title'] = "login";
		$this->load->view('login',$data);
	}
	
	public function zone()
	{
		$this->load->view('zone');
	}
	
	public function complex()
	{
		$this->load->view('complex');
	}
	
	public function shop()
	{
		$this->load->view('shop');
	}
	
	public function page()
	{
		$data['name'] = "Alok";
		$data['address'] ="Raipur";
		$data['title'] ="MCK|home";
		$data['mobile'] ="9907225101";
		$this->load->view('page', $data);
	}
	public function example()
	{
		
		$data['result'] = $this->logic->example();
		//$data['name'] = "alok";
		$this->load->view('example', $data);		
	}
	
	public function get_data()
	{
		
		$data['result'] = $this->logic->get_data();
		$this->load->view('get_data', $data);
		echo "ok";		
	}
	public function page_ex()
	{
		$data['page_contant'] = 'complex';
		$this->load->view('template/main_body' , $data);
	}
	*/

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */