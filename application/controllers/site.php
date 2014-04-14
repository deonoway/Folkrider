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
		$this->load->view('members');
	}

	public function login_validation(){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');

		if($this->form_validation->run()){
			redirect('site/members');
		}else{
			$data['title']="login";
			$this->load->view('test', $data);
		}
	}

	public function getValues(){
		$this->load->model("get_db");

		$data['results'] = $this->get_db->getAll();

		$this->load->view("view_db", $data);
	}
}