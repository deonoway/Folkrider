<?php

class Contact extends CI_Controller {

	public function index(){
		$this->main();
	}

	public function main(){
		$data['from']	='Please enter your email here';
		$data['name']	='Name';
		$data['subject']='Subject';
		$data['body']	='Please enter your message here';
		
		$data['title']="Get in touch";
		$this->load->view("contact", $data);
	}
	
	public function form_validate(){
	
		$this->form_validation->set_rules('from', 'Email', 'required|trim|xss_clean|valid_email');
		$this->form_validation->set_rules('name', 'Name', 'required|trim|xss_clean');
		$this->form_validation->set_rules('subject', 'Subject', 'required|trim|xss_clean');
		$this->form_validation->set_rules('body', 'Message Body', 'required|trim|xss_clean');

		if ($this->form_validation->run()){
			
			$from = $_POST['from'];
			$subject = $_POST['name']." ".$_POST['subject'];
			$body = $_POST['body'];
			
			$this->email->from('folkrider.'.$from);
			$this->email->to('richard.c.crafton@gmail.com');
			
			$this->email->subject($subject);
			$this->email->message($body);	
			
			if($this->email->send()){
				$data['title']="Thank you";
				$data['content']="Thank you for getting in touch";
				$this->load->view("temp", $data);
			}else{
				$data['title']="Sorry";
				$data['content']="We're sorry an error has occored please check back later";
				$this->load->view("temp", $data);
			}
		}else{
			$data['from']	=$_POST['from'];
			$data['name']	=$_POST['name'];
			$data['subject']=$_POST['subject'];
			$data['body']	=$_POST['body'];
			$data['title']	="Get in touch";
			$this->load->view("contact", $data);
		}
	}

	public function thankYou(){
		$this->load->model("file_man");
		$message=$_POST['from'].$_POST['subject'].$_POST['body'];
		$this->file_man->write($message, 'message.txt');
		$data['title']="Thank you";
		$data['content']="Thank you for getting in touch";
		$this->load->view("temp", $data);
	}
}