<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {


	public function index()
	{
		$this->login();

	}

	public function home(){
		$data['title']="Folkrider";
		$this->load->view("home", $data);
	}

	public function login(){
		$data['title']="login";
		$this->load->view("test", $data);
	}

	public function members(){
		if($this->session->userdata('is_logged_in')){
			$this->load->view('members');
		}else{
			redirect('main/restricted');
		}
	}

	public function restricted(){
		$data['title']="login";
		$this->load->view("test", $data);
	}

	public function login_validation(){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');

		if($this->form_validation->run()){
			$data = array(
				'email' => $this->input->post('email'),
				'is_logged_in'=> 1
				);
			$this->session-> 
			redirect('site/members');
		}else{
			$data['title']="login";
			$this->load->view('test', $data);
		}
	}

	public function validate_credentials(){
		$this->load->modle('user_model');

		if($this->user_model->can_log_in()){
			return true;
		}else{
			$this->form_validation->set_message('validate_credentials', 'Incorrect username/password');
			return false;
		}
	}

	public function getValues(){
		$this->load->model("get_db");

		$data['results'] = $this->get_db->getAll();

		$this->load->view("view_db", $data);
	}
}