<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model {

	public function getDataUsers()
	{
		$query = $this->db->get('users');
		return $query->result_array();
	}
	public function getUsers($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('users');
		return $query->result_array()[0];
	}
	public function insert()
	{
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level')
		);
		$this->db->insert('users',$data);
	}
	public function update($id)
	{
		$set = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'level' => $this->input->post('level')
		);
		$this->db->where('id',$id);
		$this->db->update('users',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('users');
	}
}

?>