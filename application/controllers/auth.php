<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function logout(){
		$this->session->sess_destroy();
		redirect('site');
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
		$data['error']="this page is in our members area";
		$this->load->view('logfailed', $data);
	}

	public function login_validation(){
		$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');

		if($this->form_validation->run()){
			$data = array(
				'email' => $this->input->post('email'),
				'is_logged_in'=> 1
				);
			$this->session->set_userdata($data);
			redirect('site/members');
		}else{
			$data['title']="login";
			$data['error']="your login attempt has failed";
			$this->load->view('logfailed', $data);
		}
	}

	public function signup_validation(){
		$this->load->model('user_model');

		//$this->form_validation->set_rules('email', 'Email', 'required|trim|xss_clean|callback_validate_credentials|valid_email|is_unique[users.email]');

		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

		$this->form_validation->set_message("is_unique", "That email address is already in use");
		if($this->form_validation->run()){
			//generate random key
			$key = md5(uniqid());


			//send email to the user
			$message = "<p>Thank you for signing up</p>";
			$message = "<p><a href='".base_url()."/site/register_users/$key'>click here</a> to confirm your account";

			$this->email->from('no-reply@folkrider.com', 'Richard');
			$this->email->to($this->input->post('email'));
			$this->email->subject("Confirm your account");
			$this->email->message($message);
			
			//add them to the tmp users db
			if($this->user_model->add_temp_user($key)){
				if($this->email->send()){
					$data['title']="thank you for registering";

					$data['content']="plaese check your email for our message";

					$this->load->view("temp", $data);
				}else{
					echo("email not sent");
				}
			}else{
				echo("not added to temp database");
			}
		
		}else{
			$data['title']="sign up";
			$this->load->view('sign_up', $data);
		}
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