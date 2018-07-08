<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function checkout($cart)
	{
		$set_transaktion = array(
			'nomor' => $this->gen_nomor(),
			'tanggal' => date('Y-m-d'),
			'status' => 1,
			'fk_users' => $this->session->userdata('logged_in')['id']
		);
		$this->db->insert('transaksi',$set_transaktion);
		$id_transaksi = $this->db->insert_id();
		foreach ($cart as $value) {
			$set_detail = array(
				'fk_transaksi' => $id_transaksi,
				'fk_sepatu' => $value['id'],
				'ukuran' => $value['ukuran'],
				'jumlah' => $value['qty']
			);
			$this->db->insert('transaksi_detail',$set_detail);
		}
	}
	public function gen_nomor()
	{
		$query = $this->db->query("select * from transaksi order by nomor desc limit 1");
		$result = $query->result();
		if ($query->num_rows() > 0) {
			$row = $result[0];
			$id = (int) substr($row->nomor, 3,5)+1;
			$newid = substr('00000'.($id), -5);
			return 'TRN'.$newid;
		}else{
			return "TRN00001";
		}
		
	}

}

?>