<?php
class File_man extends CI_Model{
	function write($con, $des){
		write_file($des, $con, 'a+');
	}
}