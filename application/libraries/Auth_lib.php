<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth_lib{
	public function protect(){
		$CI =& get_instance();
		if(! $CI->session->userdata('is_logged_in')){
			redirect('auth/restricted');
		}
	}
}