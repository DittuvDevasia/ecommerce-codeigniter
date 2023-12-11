<?php
class Admin_model extends CI_Model 
{
	public function __construct()
{
    $this->load->database();  
}
	public function saverecords($data)
	{
        $this->db->insert('newuser',$data);
        return true;
	}
	public function manage_users()
	{
		$sql_query=$this->db->get('student');
		return $sql_query->result();
		
		// echo $this->db->last_query();
		// exit;
	}
	
	public function users(){
		$this->db->select('*');
		$this->db ->from('register');
		$query=$this->db->get();
		// echo $this->db->last_query();
		// exit;
		return $query->result();
	}
	public function update($id)
	{
        $this->db->select('*');
		$this->db->from('category');
		$this->db->where('id',$id);
		$query=$this->db->get();
		// echo $this->db->last_query();
		// exit;
		return $query->row();
	}
	public function insertdata($data)
	{
		$sql_query=$this->db->insert('admin',$data);
	//   echo $this->db->last_query();
	//   exit;
	  return $sql_query;
	   }

	   public function add_product($data)
	{
		$sql_query=$this->db->insert('products',$data);
	//   echo $this->db->last_query();
	//   exit;
	  return $sql_query;
	   }
	   public function product()
	   {
		$this->db->select('*');
		$this->db ->from('products');
		$query=$this->db->get();
		// echo $this->db->last_query();
		// exit;
		return $query->result();
	}

	public function add_category($data)
	{
		$sql_query=$this->db->insert('category',$data);
	//   echo $this->db->last_query();
	//   exit;
	  return $sql_query;
	   }

	   public function category()
	   {
		$this->db->select('*');
		$this->db ->from('category');
		$query=$this->db->get();
		// echo $this->db->last_query();
		// exit;
		return $query->result();
	}
	public function delete_product_info($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('products');
    }
	public function delete($id){
		$res=array();
		$this->db->where('id',$id);
		$this->db->delete('products');
	}
	public function deletec($id){
		$res=array();
		$this->db->where('id',$id);
		$this->db->delete('category');
	}

	public function update_records($title,$description,$image,$price,$quantity,$id)
	{
	$query=$this->db->query("update form SET title='$title',description='$description',image='$image',price='$price',quantity='$quantity' where id='$id'");
	}
}
?>
