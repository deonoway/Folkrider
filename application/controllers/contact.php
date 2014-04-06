<?php

class Contact extends CI_Controller {

	public function index(){
		$this->main();
	}

	public function main(){
		$data['title']="Get in touch";
		$this->load->view("contact", $data);
	}

	public function thankYou(){
		$this->load->model("file_man");
		$message=$_POST['from'].$_POST['subject'].$_POST['body'];
		$this->file_man->write($message, 'message.txt');
		$data['title']="Thank you";
		$data['content']="Thank you for getting in touch";
		$this->load->view("empty", $data);
	}
}