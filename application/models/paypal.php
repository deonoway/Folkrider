<?php
class paypal extends CI_Model{
	function write($con, $des){
		write_file($des, $con, 'a+');
	}
}