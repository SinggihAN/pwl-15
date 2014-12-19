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
	public function get_produk_by_id(){

		$this->db->join('pelanggan','pelanggan.idPelanggan = order.idPelanggan');
		$this->db->join('detailOrder','detailOrder.idOrder = order.idOrder');
		$this->db->join('produk','produk.idProduk = detailOrder.idProduk');
		$rs = $this->db->get('order');

		return $rs->row_array();
	}
	public function ubahstatusdikirim($id){

			$data = array(
				'status' => 'Sedang Dikirim',
			);
			$this->db->where('idOrder',$id);
			$this->db->update('order',$data);
	}
	public function ubahstatusselesai($id){

			$data = array(
				'status' => 'Selesai',
			);
			$this->db->where('idOrder',$id);
			$this->db->update('order',$data);
	}
	public function ubahstatusbatal($id){

			$data = array(
				'status' => 'Dibatalkan',
			);
			$this->db->where('idOrder',$id);
			$this->db->update('order',$data);
	}

	public function get_pesanan_status($id){

		$this->db->join('pelanggan','pelanggan.idPelanggan = order.idPelanggan');
		$this->db->join('detailOrder','detailOrder.idOrder = order.idOrder');
		$this->db->join('produk','produk.idProduk = detailOrder.idProduk');
		$this->db->where('order.idOrder',$id);
		$rs = $this->db->get('order');

		return $rs->row_array();
	}
	
	function insert_data_pesanan($data)
	{
		$this->db->where('order.idOrder',$id);
		$this->db->insert('order',$data);
	}
	function tambahpesanan($data_pelanggan, $data_order, $data_detail_order)
	{
		$this->db->insert('pelanggan', $data_pelanggan);

	    $data_order['idPelanggan'] = $this->db->insert_id();

	    $this->db->insert('order', $data_order);

	    $data_detail_order['idOrder'] = $this->db->insert_id();

		$this->db->insert('detailOrder', $data_detail_order);

	}
}
?>