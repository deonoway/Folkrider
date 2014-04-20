<?php

class user_model extends CI_Model{
	public function can_log_in(){
		
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');

		if ($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function add_temp_user(){
		$data = array(
			'email'=> $this->input->post('email')
			,'password'=> md5($this->input->post('password'))
			,'display_name'=> $this->input->post('displayName')
			,'first_name'=> $this->input->post('firstName')
		);

		$query = $this->db->insert('temp_users', $data);
		if($query){
			return true;
		}else{
			return false;
		}
	}

	public function is_key_valid($key){
		$this->db->where('key', $key);
		$query = $this->db->get('temp_users');

		if($query->num_rows() == 1){
			return true;
		}else{
			return false;
		}
	}

	public function add_user($key){
		$this->db->where('key', $key);
		$temp_user = $this->db->get('temp_users');

		if($query){
			$row = $temp_user->row();

			$data = array(
				'email' => $row->email,
				'password' => $row->password
			);

			$added_user = $this->db->insert('users', $data);

			if($added_user){
				$this->db->where('key'. $key);
				$this->db->delete('temp_user');

				return $data['email'];
			}else{
				return false;
			}
		}
	}
}