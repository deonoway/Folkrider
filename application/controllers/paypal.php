<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paypal extends CI_Controller {


	public function index()
	{
		$this->userIpn();

	}

	public function userIpn(){
		$this->load->model('paypal_mod');
	
		//log all information in main paypal table 
			//parse information
		/**
		 *
		 * Sorry, not showing you exactly how I handle the paypal IPN, the 'paypal' controller does not exist on the live site
		 *
		 */
		
			//insert information into db
		$this->paypal_mod->log($post); 
		
		//switch user from temorary user table to perm user table where email matchs sent by ipn matches email in table
		$this->user_model->activate_user($email);
		
	}
}