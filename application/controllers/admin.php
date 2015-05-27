<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/****************************************************
 * Class Name :Admin
 * 
*/
class Admin extends CI_Controller 
{
	public function __construct()
       {
            parent::__construct();
	    $this->load->model('logic');
	    $this->load->helper(array('form', 'url'));
	    $this->load->library('form_validation');
	    $this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
		
		$this->load->library('mck');
	    
       }
	
	public function index()
	{
		if(!$this->tank_auth->is_logged_in())
		    {
			redirect('auth');
		    }
		    else
		    {
			//$data['home_content'] = "home";
			$this->load->view('page');
		    }
	}

	
	
	
	
	public function registration()
	{
		$this->load->view('registration_form');
	}
	
	//database access
	public function db_access()
	{
		 echo validation_errors();
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
	public function zone($message=NULL)
	{
		if(!$this->tank_auth->is_logged_in())
		   {
			redirect('auth');
		   }
		   else
		   {
		$data['title'] = 'Complex detail';
		$data['page_containt'] = 'zone_body';
		$this->load->view('template/containt', $data);
		   }
		
	}
	public function insert_zone()
	{
		if(!$this->tank_auth->is_logged_in())
		   {
			redirect('auth');
		   }
		   else
		   {
				
				$this->form_validation->set_rules('z_id','Zone ID', 'required');
				$this->form_validation->set_rules('z_name','Zone Name', 'required');
				if($this->form_validation->run() == false)
				{
				$this->zone();	
				}
				else
				{
				$data = array(
					      'z_id' => $this->input->post('z_id') ,
					      'z_name' => $this->input->post('z_name') ,
					      );
				$this->db->insert('zone', $data);
				
				
					$data['title'] = 'Zone detail';
					$data['page_containt'] = 'zone_body';
					$data['message'] ='Data Successful Insert';
					$this->load->view('template/containt', $data);
				}
		   }
	}
	public function complex()
	{
		
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
	    {
		$data['page_containt'] = 'complex_body';
		$data['title'] = 'Complex detail';
		$this->load->view('template/containt', $data);
	    }
		
	}
	public function new_user()
	{
		if(!$this->tank_auth->is_logged_in())
		   {
			redirect('auth');
		   }
		   else
		   {
			$data['page_containt'] = 'new_user';
			$data['title'] = 'User detail';
			$this->load->view('template/containt', $data);
		   }
	}
	public function rent_detail()
	{
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
	    {
		
		
			$data['page_containt'] = 'rent_detail';
			$data['title'] = 'rent detail';
			$this->load->view('template/containt', $data);
	    }
		
	}
	public function shop()
	{
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
	    {
			$data['page_containt'] = 'shop_body';
			$data['title'] = 'Shop detail';
			$this->load->view('template/containt', $data);
	    }
	}
	public function owner()
	{
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
			{
			    $data['page_containt'] = 'owner_body';
			    $data['title'] = 'Owner detail';
			    $this->load->view('template/containt', $data);
		    }
	}
	public function rent()
	{
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
	    {
			$data['page_containt'] = 'rent_body';
			$data['title'] = 'Rent detail';
			$this->load->view('template/containt', $data);
	    }
	}
	public function about()
	{
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
	    {
			$data['page_containt'] = 'about_body';
			$data['title'] = 'About us';
			$this->load->view('template/containt', $data);
	    }
	}
	public function home()
	{
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
	    {
			$data['title'] = 'Rent detail';
			$data['page_containt'] = 'home_body';
			$this->load->view('template/containt', $data);
	    }
	}
	/*public function hom()
	{
		$data['page_containt'] = 'example1';
		$this->load->view('template/containt', $data);
	} */
	//-- data insert -->//
	public function complex_insert()
	{
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
	    {
		
			$this->form_validation->set_rules('zone_name' , 'Zone', 'required');//is_unique[table.field]
			if($this->form_validation->run())
			{
					$data= array(
						'complex_name'=>$this->input->post('complex_name'),
						'ward_number'=>$this->input->post('ward_number'),
						'shop'=>$this->input->post('shop'),
						'hall'=>$this->input->post('hall'),
						'room'=>$this->input->post('room'),
						'canteen'=>$this->input->post('canteen'),
						'loudge'=>$this->input->post('loudge'),
						'total'=>$this->input->post('total_shop'),
						'alloted'=>$this->input->post('alloted'),
						'unalloted'=>$this->input->post('unalloted'),
					);
					$insert_id = $this->logic->cinsert_db('complex',$data);
					$shopdata = array(
								
								'complex_id'=>$insert_id,
								'sn_id'=>5,
								's_total'=>$this->input->post('loudge'),
							  );
					$this->logic->cinsert_db('shop_allot',$shopdata);
					
					$shopdata = array(
								
								
								'complex_id'=>$insert_id,
								'sn_id'=>4,
								's_total'=>$this->input->post('canteen'),
								
							  );
					$this->logic->cinsert_db('shop_allot',$shopdata);
					
					$shopdata = array(
								
								
								'complex_id'=>$insert_id,
								'sn_id'=>3,
								's_total'=>$this->input->post('room'),
								
								
							  );
					$this->logic->cinsert_db('shop_allot',$shopdata);
					
					$shopdata = array(
								'complex_id'=>$insert_id,
								'sn_id'=>1,
								's_total'=>$this->input->post('shop'),
								
							  );
					$this->logic->cinsert_db('shop_allot',$shopdata);
					
					$shopdata = array(
								
								'complex_id'=>$insert_id,
								'sn_id'=>2,
								's_total'=>$this->input->post('hall'),
								
							  );
					$this->logic->cinsert_db('shop_allot',$shopdata);
					$this->complex();
			}
			else
			{
				$this->complex();
			}
	    }
		
	}
	
	
	public function shop_insert()
	{
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
	    {
		
			$this->form_validation->set_rules('cname' , 'complex', '');//is_unique[table.field]
			if($this->form_validation->run())
			{
				
				$sdata=array(
						     'complex_id'=>$this->input->post('complex_name'),
						     'sn_id'=>$this->input->post('shop_type'),
						     );
					$sm_data['shop_allot'] = $this->logic->my_where('shop_allot', $sdata);
					$s_alloted ='';
					foreach($sm_data['shop_allot']->result() as $row)
					{
						$s_alloted = $row->s_alloted;
						$s_total = $row->s_total;
					}
				if($s_alloted != $s_total)
				{
					$data= array(
						'c_id'=>$this->input->post('complex_name'),
						'shop_name'=>$this->input->post('shop_name'),
						'shop_type'=>$this->input->post('shop_type'),
						'shop_size'=>$this->input->post('shop_size'),
						'shop_class'=>$this->input->post('shop_class'),
						'shop_premium'=>$this->input->post('shop_premium'),
						'shop_rent'=>$this->input->post('shop_rent'),
						
					);
					$this->logic->cinsert_db('shop',$data);
					$sdata=array(
						     'complex_id'=>$this->input->post('complex_name'),
						     'sn_id'=>$this->input->post('shop_type'),
						     );
					$data['shop_allot'] = $this->logic->my_where('shop_allot', $sdata);
					$s_alloted ='';
					foreach($data['shop_allot']->result() as $row)
					{
						$s_alloted = $row->s_alloted;
					}
					$s_alloted++;
					
					
					$update_data  = array(
							      's_alloted' => $s_alloted
							      );
					
					$this->logic->global_update('shop_allot',$sdata, $update_data);
					
					$this->shop();
				}
				else
				{
					echo "error!";// change 
				}
			}
			else
			{
				$this->shop();
			}
	    }
		
	}
	public function owner_insert()
	{
		if(!$this->tank_auth->is_logged_in() && !$this->session->userdata('userid'))
	    {
			if(!$this->tank_auth->is_logged_in())
			{
			redirect('auth');
			}
			if(!$this->session->userdata('userid'))
			{
				redirect('sub');
			}
	    }
	    else
	    {
		
			$this->form_validation->set_rules('shop_name' , 'shop name', 'is_unique[owner.s_id]');//is_unique[table.field]
			if($this->form_validation->run())
			{
					$data= array(
						's_id'=>$this->input->post('shop_name'),
						'owner_name'=>$this->input->post('owner_name'),
						'address'=>$this->input->post('address'),
						'contact_number'=>$this->input->post('contact'),
						'lease_issue_date'=>$this->input->post('issue_date'),
						'lease_close_date'=>$this->input->post('close_date'),
						'allotment_date'=>$this->input->post('alloted_date'),
						
					);
					$this->logic->cinsert_db('owner',$data);
					$this->owner();
			}
			else
			{
				$this->owner();
			}
	    }
		
	}
	function add_user()
	{
		if(!$this->tank_auth->is_logged_in())
		   {
			redirect('auth');
		   }
		   else
		   {
		
				$this->form_validation->set_error_delimiters("<tr><td colspan='2' class='error'>", "</td></tr>");
				$this->form_validation->set_rules('user_id' , 'User Id', 'required|strip_tags'); 
				$this->form_validation->set_rules('user_name' , 'User name', 'required');
				$this->form_validation->set_rules('fname' , 'Father_name', 'required');
				$this->form_validation->set_rules('contact' , 'Contact Number', 'required');
				$this->form_validation->set_rules('uemail' , 'Email address', 'required');
				$this->form_validation->set_rules('upass' , 'Password', 'required');
				
				if($this->form_validation->run() == false)
				{
					
				}
				else
				{
					$data= array(
							//'complex_id'=>$this->input->post('complex_id'),
							'user_id'=>$this->input->post('user_id'),
							'user_name'=>$this->input->post('user_name'),
							'fname'=>$this->input->post('fname'),
							'contact'=>$this->input->post('contact'),
							'uemail'=>$this->input->post('uemail'),
							'upass'=>$this->input->post('upass'),
							
						);
							$this->logic->cinsert_db('emp',$data);
							echo "New user created<a href='".base_url()."admin'> Click here for home page</a>";
		
					
				}
		   }
	}
	
	function get_complex_name()
	{
		$data['complex_name'] = $this->logic->global_where('complex', 'c_id', strip_tags($this->input->post('complex_id'))); 
		
		foreach($data['complex_name']->result() as $row)
		{
			echo $row->complex_name;
		}
		
	}
	
	
	function get_zone_name()
	{
		
		
		$data['z_name'] = $this->logic->global_where('zone', 'z_id', strip_tags($this->input->post('z_id'))); 
		
		foreach($data['z_name']->result() as $row)
		{
			echo $row->z_name;
		}
		
	}
	
	function get_shop_name()
	{
		
		
		$data['shop_name'] = $this->logic->global_where('shop', 's_id', strip_tags($this->input->post('s_id'))); 
		
		foreach($data['shop_name']->result() as $row)
		{
			echo $row->shop_name;
		}
		
	}
	
	function get_owner_name()
	{
		
		
		$data['owner_name'] = $this->logic->global_where('owner', 'o_id', strip_tags($this->input->post('o_id'))); 
		
		
		
		foreach($data['owner_name']->result() as $row)
		{
			
			echo ucfirst($row->owner_name);
		}
		
	}
	
	function ashop_type()
	{
		$complex_id = $_POST['complex_id'];
		$shop_id = $_POST['shop_id'];
		$field_val = array(
				   'complex_id' => $_POST['complex_id'],
				   'sn_id'=>$_POST['shop_id'],
				   
				   );
		$data['complex']= $this->logic->cal_shop($field_val);
		
		$shop_type ='';
		$ashop ='';
		foreach($data['complex']->result() as $row)
		{
			$shop_type = $row->s_total;
			$ashop = $row->s_alloted;
			
		}
		if($shop_type != $ashop)
		{
		echo "Ualloted=".$shop_type."Alloted=".$ashop;	
		}
		else
		{
			echo "<script> alert('already alloted!')</script>";
		}
		
	
	
		
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