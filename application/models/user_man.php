<?php

class Get_db extends CI_Model{
	function getAll(){
		$query = $this->db->query("SELECT `name` FROM catalog_artists WHERE `active` = 1");

		return $query->result();
	}
}