<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Logic extends CI_Model
{
    public function get_data()
    {
        $query = $this->db->get('complex');
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
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    
    
        public function global_get($table)
        {
            $querry = $this->db->get($table);
            return $querry;
        }
    // for sub user login
    
    public function get_user()
    {
        $query = $this->db->get('emp');
        return $query;
    }
    public function user_val($val)
    {
        $this->db->where('uemail', $val);
        $query = $this->db->get('emp');
        return $query->num_rows();
    }
    
    //global where
    
    public function global_where($table_name, $field, $val)
    {
        
        $this->db->where($field, $val);
        $query = $this->db->get($table_name);
        return $query;
    }
    public function complex_join( $field_val)
    {
        $this->db->select("complex.*, shop_allot.*");
        $this->db->from("complex");
        $this->db->join("shop_allot", "shop_allot.complex_id=complex.c_id", "left");
        $this->db->where($field_val);
        $query = $this->db->get();
        return $query;
    }
    
    public function cal_shop( $field_val)
    {
    
        $this->db->where($field_val);
        $query = $this->db->get('shop_allot');
        return $query;
    }
    public function global_update($table_name, $where_field, $data)
    {
        $this->db->where($where_field);
        $this->db->update($table_name, $data); 
    }
    
    public function my_where($table_name, $field)
    {
        
        $this->db->where($field);
        $query = $this->db->get($table_name);
        return $query;
    }
}
/* End of file logic.php */
/* Location: ./application/models/logic.php */
?>
