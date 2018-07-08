<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('cart');
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
		if(count($this->cart->contents()) == 0){
			echo '<script>alert("Cart Kosong Kembali Ke Halaman Awal")</script>';
			redirect('Home','refresh');
		}
		$this->load->view('cart');
	}
	public function insert_cart()
	{
		$data = array(
			'id'      => $this->input->post('id'),
			'qty'     => $this->input->post('jumlah'),
			'price'   => $this->input->post('harga'),
			'name'    => $this->input->post('nama'),
			'ukuran'  => $this->input->post('ukuran')
		);
		$this->cart->insert($data);
		redirect('Cart');
	}
	public function update_cart()
	{
		$data = array();
		foreach ($this->input->post() as $key => $value) {
			$data[] = $value;
		}
		$this->cart->update($data);
		redirect('Cart');
	}
	public function remove_cart($rowid)			
	{
		$this->cart->remove($rowid);
		redirect('Cart');
	}
	public function checkout()
	{
		$this->load->model('Transaksi_model');
		$cart = $this->cart->contents();
		$this->Transaksi_model->checkout($cart);
		$this->cart->destroy();
		echo '<script>alert("Terima kasih telah membeli barang kami")</script>';
		redirect('Home','refresh');
	}
}
