<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pesanan extends CI_Model {

	public function get_pesanan(){

		$this->db->join('pelanggan','pelanggan.idPelanggan = order.idPelanggan');
		$rs = $this->db->get('order');

		return $rs->result();
	}

	public function get_pesanan_by_id($id){

		$this->db->join('pelanggan','pelanggan.idPelanggan = order.idPelanggan');
		$this->db->join('detailOrder','detailOrder.idOrder = order.idOrder');
		$this->db->join('produk','produk.idProduk = detailOrder.idProduk');
		$this->db->where('order.idOrder',$id);
		$rs = $this->db->get('order');

		return $rs->result();

	}
	
	function insert_data_pesanan($data)
	{
		$this->db->insert('order',$data);
	}
}
?>