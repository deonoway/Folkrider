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

	public function activate_user($email){
		$prep = "\"$email\"";
		//check if email matches an email in the temp users table
		$query = $this->db->query("SELECT * FROM temp_user WHERE `email` = $prep");
		if($query->num_rows() > 0){
			//retrieve information from temp users stable (except id)
			$this->db->start_cache();

			$this->db->where('email', $email);

			$this->db->stop_cache();

			$old = $this->db->get('temp_user');
			
			$this->db->flush_cache();
			if($old->num_rows() > 0){
				//store information from temp users in new variable
				$new = $old->result_array();
				$insert['email']	=$new[0]['email'];
				$insert['password']	=$new[0]['password'];
				$insert['display_name']	=$new[0]['display_name'];
				$insert['first_name']	=$new[0]['first_name'];
				
				//add information to perm user table
				$this->db->start_cache();
				$this->db->set($insert);
				$this->db->stop_cache();
				
				$this->db->insert('user');
				
				$this->db->flush_cache();
				
				//change active status in temp_user table
				$this->db->start_cache();
				$this->db->set('is_active', 1);
				$this->db->where('email', $email);
				$this->db->stop_cache();
				$this->db->update('temp_user');
				
			}
		}
	}
}