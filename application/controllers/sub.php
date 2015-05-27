<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/****************************************************
 * Class Name :Admin
 * 
*/
class Sub extends CI_Controller 
{
    function __construct()
       {
            parent::__construct();
	    $this->load->model('logic');
	    $this->load->helper(array('form', 'url'));
	    $this->load->library('form_validation');
	    $this->load->library('security');
		$this->load->library('tank_auth');
		$this->lang->load('tank_auth');
$this->load->library('session');	    
       }

    public function index()
    {
   
        $this->load->view('user_page/login');
    }
    public function login()
    {
        $this->form_validation->set_rules('inputEmail','Email','required|trim|xss_clean|strip_tags|callback_checkuser'); 
        $this->form_validation->set_rules('inputPassword','Password','required');
        if($this->form_validation->run() == false)
        {
            $this->index();
        }
        else
        {
            $data['get_user'] = $this->logic->get_user();
            foreach($data['get_user']->result() as $row)
            {
                $dbuserid = $row->uemail;
                $dbpassword= $row->upass;
                
            }
            if(($this->input->post('inputEmail') == $dbuserid) && ($this->input->post('inputPassword') == $dbpassword) )
            {
                $session_data = array(
                  'userid'=> $dbuserid
                );
                $this->session->set_userdata($session_data);
                redirect('user');
            }
            else
            {
                $this->index();
            }
        }
    }
    public function checkuser()
    {
        if($this->logic->user_val($this->input->post('inputEmail')) < 0)
        {
            $this->form_validation->set_message('checkuser', 'user not valid');
            return false;
        }
        else
        {
            return true;
        }
    }
    public function signout()
    {
        $this->session->sess_destroy();
        redirect('sub');
    }
}
?>