<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

 function __construct()
	{

	parent::__construct();
	

	$this->load->database();
	
	$this->load->model('Welcome_model');
	$this->load->library('form_validation');
	}
	public function index()
	{


		$this->load->view('welcome_message');
	}

	public function register()
	{
		$this->load->library('form_validation');
        $this->form_validation->set_rules('username','username', 'trim|required');
		$this->form_validation->set_rules('email','email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password','password', 'trim|required');
		$this->form_validation->set_rules('city','city', 'trim|required');

         if($this->form_validation->run()) {
			$data=array(
			'username'=>$this->input->post('username'),
			'email'=>$this->input->post('email'),
			'password'=>$this->input->post('password'),
			'city'=>$this->input->post('city')
			);
			$res=$this->Welcome_model->registerdata($data);
			if($res){
					$this->session->set_flashdata('success', 'Registration successful');
					redirect('welcome/register');
				}
			
		 }
		 else{

		 }
            $this->load->view('register_page');
	}
	public function login()
	{
		$username = $this->input->post('username');
        $password = $this->input->post('password');

        $user_type = $this->Welcome_model->get_user_type($username, $password);

        if ($user_type) {
            // User login
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('user_type', $user_type);
			
            $cookie_data = array(
            'name'   => $username,
            'value'  => $username,
            'expire' => 3600,  // 
        );
            $this->input->set_cookie($cookie_data);
            
            if ($user_type === 'admin') {
                redirect('admin/admin_panel');
				
            } elseif ($user_type === 'user') {
                redirect('welcome/homepage'); 
            }
        } else {
           
            $data['error_message'] = "Invalid login credentials";
            $this->load->view('login_page', $data);
        }
    }

	public function logout() {
        $this->session->sess_destroy();
        redirect('welcome/login');
    }
	public function homepage()
	{
		$category_list=$this->Welcome_model->category_list();
		// print_r($category_list);
		$this->load->view('homepage',['category_list'=>$category_list]);

	}

	public function product($id)
	{
		$product_view=$this->Welcome_model->product_view($id);
         $this->load->view('products',['product'=>$product_view]);
	}
	public function details($id)
	{
        $category_list=$this->Welcome_model->category_view($id);
		// print_r($category_view);
		$this->load->view('details',['ads'=>$category_list]);
	}

	public function cart($id)
	{
		$category_list=$this->Welcome_model->category_view($id);
         $this->load->view('cart',['ads'=>$category_list]);
	}
     
	public function about(){
		$this->load->view('about');
	}
	
	public function contact(){
		$this->load->view('contact');
	}
	
}





