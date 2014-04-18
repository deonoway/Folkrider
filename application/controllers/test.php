<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {


	public function index()
	{
		$this->signup();

	}

	public function home(){
		$data['title']="Folkrider";
		$this->load->view("home", $data);
	}

	public function login(){
		$data['title']="login";
		$this->load->view("test", $data);
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('site/login');
	}

	public function signup(){
		$data['title'] = 'sign up';
		$this->load->view('sign_up', $data);
	}

	public function members(){
		if($this->session->userdata('is_logged_in')){
			$data['title'] = 'members area';
			$this->load->view('members', $data);
		}else{
			redirect('site/restricted');
		}
	}

	public function restricted(){
		$data['title']="login";
		$this->load->view("test", $data);
	}

	public function validate_credentials(){
		$this->load->model('user_model');

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

	public function register_users($key){
		$thsi->load->model('user_model');

		if($this->user_model->is_key_valid($key)){
			if($email = $this->user_model->add_user($key)){
				$date = array(
					'email' => $email,
					'is_logged_in' => 1
				);

				$this->session->set_userdata($data);
				redirect('site/members');
			}else{
				echo "fail";
			}
		}
	}
}