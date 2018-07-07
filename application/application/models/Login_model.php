<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	public function cek($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$query = $this->db->get('users');
		if ($query->num_rows() == 1) {
			return true;
		}else{
			return false;
		}
	}	
	public function get_data($username)
	{
		$this->db->where('username',$username);
		$query = $this->db->get('users');
		return $query->result_array()[0];
	}
}

?>