<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {
public function __construct() {
        parent::__construct();
        $this->load->helper('url');
          $this->load->database();
		$this->load->model('Admin_model');
        }

	
	public function index()
	{
		$this->load->view('new');
	}
	public function manageusers()
	{
		$data['result']=$this->Admin_model->manage_users();
		$this->load->view('manageusers',$data);
	}
    
	public function admin_panel()
	{
		
		$this->load->view('admin_panel');
	}
	public function user()
	{
		$user_data=$this->Admin_model->users();
		$this->load->view('user_table',['users'=>$user_data]);
	}
	public function add_ads()
    {
		$this->load->library('form_validation');
        $this->form_validation->set_rules('title','title', 'trim|required');
        $this->form_validation->set_rules('description','description', 'trim|required');
		$this->form_validation->set_rules('image','image', 'trim|required');
		$this->form_validation->set_rules('price','price', 'trim|required');
		$this->form_validation->set_rules('quantity','quantity', 'trim|required');

         if($this->form_validation->run()) {
			$data=array(
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'image'=>$this->input->post('image'),
			'price'=>$this->input->post('price'),
			'quantity'=>$this->input->post('quantity')
			);
			$response=$this->Admin_model->add_product($data);
			if($response){
				$this->session->set_flashdata('success', 'add successfull');
				redirect('admin/admin_panel');
			}
			}else{
		          
			}
			$this->load->view('add_ads');
	}

	public function add_category(){

		$this->load->library('form_validation');
        $this->form_validation->set_rules('title','title', 'trim|required');
        $this->form_validation->set_rules('description','description', 'trim|required');
		$this->form_validation->set_rules('image','image', 'trim|required');

         if($this->form_validation->run()) {
			$data=array(
			'title'=>$this->input->post('title'),
			'description'=>$this->input->post('description'),
			'image'=>$this->input->post('image'),
			);
			$response=$this->Admin_model->add_category($data);
			if($response){
				$this->session->set_flashdata('success', 'add successfull');
				redirect('admin/admin_panel');
			}
			}else{
		          
			}
			$this->load->view('add_category');
	}


public function product_table()
{
	$product_data=$this->Admin_model->product();
	$this->load->view('product_table',['products'=>$product_data]);
}

public function category_table()
{
	$category_data=$this->Admin_model->category();
	$this->load->view('category_table',['categorys'=>$category_data]);
}

	public function logout() {
        $this->session->sess_destroy();
        redirect('welcome/login');
    }
	
	public function delete($id){
		$dbRes=$this->Admin_model->delete($id);
		redirect('admin/product_table');
	}
	public function deletec($id){
		$dbRes=$this->Admin_model->deletec($id);
		redirect('admin/category_table');
	}
             
}   
