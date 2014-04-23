<?php
class Test_mod extends CI_Model{
	function logArray($array){
		$this->load->helper('file');
		$input = print_r($array, true);
		write_file('./log.txt', $input)
	}
}