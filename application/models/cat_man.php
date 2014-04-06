<?php

class Cat_man extends CI_Model{
	function getArt($field=NULL, $sel=NULL, $prop=NULL, $by=NULL, $order=NULL){
		if ($order != NULL) {
			$query = $this->db->query("SELECT $field FROM catalog_artists WHERE $sel = $prop ORDER BY  $by $order");
			return $query->result();
		
		}elseif ($prop != NULL) {
			$query = $this->db->query("SELECT $field FROM catalog_artists WHERE $sel = $prop");
			return $query->result();
		
		}else{
			$query = $this->db->query("SELECT * FROM catalog_artists WHERE `active` = 1");
			return $query->result();
		}
	}

	function getAlb($field=NULL, $sel=NULL, $prop=NULL, $by=NULL, $order=NULL){
		if ($order != NULL) {
			$query = $this->db->query("SELECT $field FROM catalog_albums WHERE $sel = $prop ORDER BY  $by $order");
			return $query->result();
		
		}elseif ($prop != NULL) {
			$query = $this->db->query("SELECT $field FROM catalog_albums WHERE $sel = $prop");
			return $query->result();
		
		}else{
			$query = $this->db->query("SELECT * FROM catalog_albums WHERE `active` = 1");
			return $query->result();
		}
	}

	function getSong($field=NULL, $sel=NULL, $prop=NULL, $by=NULL, $order=NULL){
		if ($order != NULL) {
			$query = $this->db->query("SELECT $field FROM catalog_songs WHERE $sel = $prop ORDER BY  $by $order");
			return $query->result();
		
		}elseif ($prop != NULL) {
			$query = $this->db->query("SELECT $field FROM catalog_songs WHERE $sel = $prop AND `active` = 1");
			return $query->result();
		
		}else{
			$query = $this->db->query("SELECT * FROM catalog_songs WHERE `active` = 1");
			return $query->result();
		}
	}
	
	function getAllSongs($ID){
		$query = $this->db->query("SELECT  `title`,`active` FROM  `full_songs` WHERE  `albumID` =$ID");
		
		return $query->result();
	}
}