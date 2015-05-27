<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/****************************************************
 * Class Name :user
 * 
*/
class User extends CI_Controller 
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
	    if(!$this->session->userdata('userid'))
	    {
		redirect('sub');
	    }
       }

    public function index()
    {
   
    redirect('admin/home');
    }
}
?>