<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pesanan extends CI_Model {

	public function get_pesanan(){

		$this->db->join('pelanggan','pelanggan.idPelanggan = order.idPelanggan');
		$rs = $this->db->get('order');

		return $rs->result();
	}

	function insert_data_pesanan($data)
	{
		$this->db->insert('order',$data);
	}
}
?>