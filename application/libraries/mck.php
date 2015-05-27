<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mck
{
    function __construct()
	{
    $ci =& get_instance();
    $ci->load->database();
        }
        function zone()
	    {
		$ci =& get_instance();
		$ci->load->database();
		$ci->load->model('logic');
		$data['zone'] = $ci->logic->global_get('zone');
		echo "<select name='zone_name' id='zone_name'>";
		echo "<option>  Select</center>";
		if(isset($data['zone']))
		{
		    foreach($data['zone']->result() as $row)
		    {
			echo "<option value=".$row->z_id.">".$row->z_id."</option>";
			
		    }
		}
		echo "</select>";
	    }
	/****************************************************/
	function complex()
		{
		    $ci =& get_instance();
		    $ci->load->database();
		    $ci->load->model('logic');
		    $data['complex'] = $ci->logic->global_get('complex');
		    echo "<select name='complex_name' id='complex_name'>";
		    echo "<option> Select </option>";
		    if(isset($data['complex']))
		    {
			foreach($data['complex']->result() as $row)
			{
			    echo "<option value=".$row->c_id.">".$row->c_id."</option>";    
			}
		    }
		    echo "</select>";
		}
	/**************************************************/
	function shop()
		{
		    $ci =& get_instance();
		    $ci->load->database();
		    $ci->load->model('logic');
		    $data['shop'] = $ci->logic->global_get('shop');
		    echo "<select name='shop_name' id='shop_name'>";
		    echo "<option>  Select</center>";
		    if(isset($data['shop']))
		    {
			foreach($data['shop']->result() as $row)
			{
			    echo "<option value=".$row->s_id.">".$row->s_id."</option>";   
			}
		    }
		    echo "</select>";
		}
	/****************************************************/
	function owner()
	    {
		$ci =& get_instance();
		$ci->load->database();
		$ci->load->model('logic');
		$data['owner'] = $ci->logic->global_get('owner');
		echo "<select name='owner_name' id='owner_name'>";
		echo "<option>  Select</center>";
		if(isset($data['owner']))
		{
		    foreach($data['owner']->result() as $row)
		    {
			echo "<option value=".$row->o_id.">".$row->o_id."</option>";
		    }
		}
		echo "</select>";
	    }
	
	
	}