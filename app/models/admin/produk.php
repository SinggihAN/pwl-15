<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class produk extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_produk(){

		$rs = $this->db->get('produk');

		return $rs->result();
	}

	function get_produk_male()
	{

		$this->db->where('idKategori','1');
		$rs = $this->db->get('produk');

		return $rs->result();
	}
	function get_produk_female()
	{

		$this->db->where('idKategori','2');
		$rs = $this->db->get('produk');

		return $rs->result();
	}

	function tambahproduk($data)
	{
		$data = array(
		'idProduk' => $this->input->post('idProduk'),
		'idKategori' => $this->input->post('idKategori'),
		'namaProduk' => $this->input->post('namaProduk'),
		'ukuran' => $this->input->post('ukuran'),
		'harga' => $this->input->post('harga'),
		'stok' => $this->input->post('stok'),
		'deskripsi' => $this->input->post('deskripsi')
		);
		return $this->db->insert('produk', $data);
	}
}
?>