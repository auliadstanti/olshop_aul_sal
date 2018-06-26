<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}
	public function index()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Username','required|trim|callback_cekDB');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			redirect('Home','refresh');
		}
	}
	public function cekDB($username)
	{
		$password = md5($this->input->post('password'));
		$cekDB = $this->Login_model->cek($username,$password);
		if ($cekDB) {
			$data = $this->Login_model->get_data($username);
			$userdata = array(
				'username' => $username,
				'level' => $data['level'],
			);
			$this->session->set_userdata('logged_in',$userdata);
			return true;
		}else{
			$this->form_validation->set_message('cekDB','Username dan password tidak valid');
			return false;
		}
	}
	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('Home','refresh');
	}
}