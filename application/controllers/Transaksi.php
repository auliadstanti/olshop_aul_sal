<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
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
		$this->load->model('Transaksi_model');
		$data['list_transaksi'] = $this->Transaksi_model->getDataTransaksi();
		$this->load->view('transaksi/show',$data);
	}
	public function detail($id)
	{
		$this->load->model('Transaksi_model');
		$data['transaksi'] = $this->Transaksi_model->getTransaksi($id);
		$data['detail'] = $this->Transaksi_model->getDetailTransaksi($id);
		$this->load->view('transaksi/detail',$data);
	}
	public function kirim($id)
	{
		$this->load->model('Transaksi_model');
		$this->Transaksi_model->kirim($id);
		echo '<script>alert("Transaksi tersebut sudah dikirim")</script>';
		redirect('Transaksi','refresh');
	}
}
