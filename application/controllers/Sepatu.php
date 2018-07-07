<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepatu extends CI_Controller {

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
		$this->load->model('Sepatu_model');
		$data['sepatu_list'] = $this->Sepatu_model->getDataSepatu();
		$this->load->view('sepatu/show',$data);
	}
	public function create()
	{
		$this->load->model('Sepatu_model');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama','Nama','is_unique[sepatu.nama]|required');
		$this->form_validation->set_rules('merk','Merk','required');
		$this->form_validation->set_rules('kategori','Kategori','required');
		$this->form_validation->set_rules('warna','Warna','required');
		$this->form_validation->set_rules('ukuran_tersedia','Ukuran','required');
		$this->form_validation->set_rules('stok','Stok','required');
		$this->form_validation->set_rules('harga','Harga','required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('sepatu/create_view');
		} else {
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('sepatu/create_view',$error);
			}
			else{
				$this->Sepatu_model->insert();
				$this->load->view('sepatu/create_sukses');
			}
		}
	}
	public function update($id)
	{
		$this->load->model('Sepatu_model');
		$this->load->library('form_validation');
		$data['sepatu'] = $this->Sepatu_model->getSepatu($id);
		$this->form_validation->set_rules('nama','Nama','required');
		$this->form_validation->set_rules('merk','Merk','required');
		$this->form_validation->set_rules('kategori','Kategori','required');
		$this->form_validation->set_rules('warna','Warna','required');
		$this->form_validation->set_rules('ukuran_tersedia','Ukuran','required');
		$this->form_validation->set_rules('stok','Stok','required');
		$this->form_validation->set_rules('harga','Harga','required');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('sepatu/update_view',$data);
		} else {
			$config['upload_path'] = './assets/uploads/';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']  = '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			
			$this->load->library('upload', $config);
			
			if ( ! $this->upload->do_upload('gambar')){
				$data['sepatu'] = $this->Sepatu_model->getSepatu($id);
				$data['error'] = array('error' => $this->upload->display_errors());
				$this->load->view('sepatu/create_view',$data);
			}
			else{
				$this->Sepatu_model->update($id);
				$this->load->view('sepatu/update_sukses');
			}
			
		}
	}
	public function delete($id)
	{
		$this->load->model('Sepatu_model');
		$this->Sepatu_model->delete($id);
		$this->load->view('sepatu/delete_sukses');
	}
}
