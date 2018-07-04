<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level'] = $session_data['level'];
			$current_controller = $this->router->fetch_class();
			$this->load->library('acl');
			if (!$this->acl->is_public($current_controller)) {
				if (!$this->acl->is_allowed($current_controller,$data['level'])) {
					echo '<script>alert("Tidak Dapat Akses")</script>';
					redirect('Login/logout','refresh');
				}
			}
		}else{
			echo '<script>alert("Login Dahulu")</script>';
			redirect('Login');
		}
	}
	public function index()
	{
		$this->load->model('Users_model');
		$data['users_list'] = $this->Users_model->getDataUsers();
		$this->load->view('users/show',$data);
	}
	public function create()
	{
		$this->load->model('Users_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','is_unique[users.username]|required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('users/create_view');
		} else {
			$this->Users_model->insert();
			$this->load->view('users/create_sukses');
		}
	}
	public function update($id)
	{
		$this->load->model('Users_model');
		$this->load->library('form_validation');
		$data['users'] = $this->Users_model->getUsers($id);
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('users/update_view',$data);
		} else {
			$this->Users_model->update($id);
			$this->load->view('users/update_sukses');
		}
	}
	public function delete($id)
	{
		$this->load->model('Users_model');
		$this->Users_model->delete($id);
		$this->load->view('users/delete_sukses');
	}
}
