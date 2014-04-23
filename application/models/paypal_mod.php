<?php
class Paypal_mod extends CI_Model{
	function log($paypal){
		$this->db->insert('paypal', $paypal);
	}
}