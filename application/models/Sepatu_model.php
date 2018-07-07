<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sepatu_model extends CI_Model {

	public function getDataSepatu()
	{
		$query = $this->db->get('sepatu');
		return $query->result_array();
	}
	public function getSepatu($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('sepatu');
		return $query->result_array()[0];
	}
	public function insert()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'merk' => $this->input->post('merk'),
			'kategori' => $this->input->post('kategori'),
			'warna' => $this->input->post('warna'),
			'ukuran_tersedia' => $this->input->post('ukuran_tersedia'),
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'gambar' => $this->upload->data('file_name'),
		);
		$this->db->insert('sepatu',$data);
	}
	public function update($id)
	{
		$set = array(
			'nama' => $this->input->post('nama'),
			'merk' => $this->input->post('merk'),
			'kategori' => $this->input->post('kategori'),
			'warna' => $this->input->post('warna'),
			'ukuran_tersedia' => $this->input->post('ukuran_tersedia'),
			'stok' => $this->input->post('stok'),
			'harga' => $this->input->post('harga'),
			'gambar' => $this->upload->data('file_name'),
		);
		$this->db->where('id',$id);
		$this->db->update('sepatu',$set);
	}
	public function delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('sepatu');
	}
}

?>