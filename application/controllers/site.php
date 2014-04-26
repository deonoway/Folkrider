<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {


	public function index()
	{
		$this->home();

	}

	public function home(){
		$data['title']="Folkrider";
		$this->load->view("home", $data);
	}

	public function faq(){
		$data['title']="Some Frequently Asked Questions";
		$this->load->view("faq", $data);
	}
}