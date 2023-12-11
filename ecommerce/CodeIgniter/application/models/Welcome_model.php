<?php

class Welcome_model extends CI_Model 
{
	function saverecords($data)
	{
	$query="insert into newuser values('','rrr','rrr')";
	$this->db->query($query);
	}

	public function category_list()
	{
	    $this->db->select('*');
		$this->db ->from('products');
		$query=$this->db->get();
		// echo $this->db->last_query();
		// exit;
		return $query->result();
	}
	
	public function category_view($id)
	{
        $this->db->select('*');
		$this->db->from('products');
		$this->db->where('id',$id);
		$query=$this->db->get();
		// echo $this->db->last_query();
		// exit;
		return $query->row();
	}
	public function insertdata($data)
	{
		$sql_query=$this->db->insert('users',$data);
	//   echo $this->db->last_query();
	//   exit;
	  return $sql_query;
	   }
	   public function registerdata($data)
	{
		$sql_query=$this->db->insert('register',$data);
	//   echo $this->db->last_query();
	//   exit;
	  return $sql_query;
	   }
	   public function product_view($id)
	{
        $this->db->select('*');
		$this->db->from('products');
		$this->db->where('id',$id);
		$query=$this->db->get();
		// echo $this->db->last_query();
		// exit;
		return $query->row();
	}
	public function get_user_type($username, $password) {
        // Check if the user is registered and get user type based on username and password
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));

        if ($query->num_rows() > 0) {
            $user = $query->row();
            return $user->user_type; 
        } else {
            return false; 
        }
    }

	public function get_customer_info($data)
    {
        $this->db->select('*');
        $this->db->from('register');
        $this->db->where($data);
        $info = $this->db->get();
        return $info->row();
    }
}
?>
