<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('login'))
{
	function login()
	{
		$CI =& get_instance();
		$CI->form_validation->set_error_delimiters($CI->config->item('error_start_delimiter', 'ion_auth'), $CI->config->item('error_end_delimiter', 'ion_auth'));

		//validate form input
		$CI->form_validation->set_rules('identity', 'Identity', 'required');
		$CI->form_validation->set_rules('password', 'Password', 'required');

		if ($CI->form_validation->run() == true)
		{
			//check to see if the user is logging in
			//check for "remember me"
			$remember = (bool) $CI->input->post('remember');

			if ($CI->ion_auth->login($CI->input->post('identity'), $CI->input->post('password'), $remember))
			{
				//if the login is successful
				//redirect them back to the home page
				$CI->session->set_flashdata('message', $CI->ion_auth->messages());
				redirect('/', 'refresh');
			}
			else
			{
				//if the login was un-successful
				//redirect them back to the login page
				$CI->session->set_flashdata('message', $CI->ion_auth->errors());
				redirect('auth/login', 'refresh'); //use redirects instead of loading views for compatibility with MY_Controller libraries
			}
		}
		else
		{
			//the user is not logging in so display the login page
			//set the flash data error message if there is one
			$form['message'] = (validation_errors()) ? validation_errors() : $CI->session->flashdata('message');

			$form['identity'] = array('name' => 'identity',
				'id' => 'identity',
				'type' => 'text',
				'value' => $CI->form_validation->set_value('identity'),
			);
			$form['password'] = array('name' => 'password',
				'id' => 'password',
				'type' => 'password',
			);
			return($form);
		}
	}
}