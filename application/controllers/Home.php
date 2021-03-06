<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		}
	}
	public function index()
	{
		$this->load->model("Sepatu_model");
		$data['data_sepatu'] = $this->Sepatu_model->getDataSepatu();
		$this->load->view('home',$data);
	}
	public function kategori($kategori)
	{
		$this->load->model("Sepatu_model");
		$data['data_sepatu'] = $this->Sepatu_model->getDataSepatuKategori($kategori);
		$this->load->view('home_kategori',$data);
	}
	public function detail($id)
	{
		$this->load->model("Sepatu_model");
		$data['sepatu'] = $this->Sepatu_model->getSepatu($id);
		$this->load->view('detail',$data);
	}
}
