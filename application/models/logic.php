<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Logic extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('shop');
        return $query->result();
    }
    public function example()
    {
        $query = $this->db->get('ci_sessions');
        return $query->result();
    }
    public function insert_db()
    {
        $this->db->insert_db('zone');
        
    }
     public function cinsert_db($table_name,$data)
    {
        $this->db->insert($table_name,$data);
    }
    
}
/* End of file logic.php */
/* Location: ./application/models/logic.php */
?>
