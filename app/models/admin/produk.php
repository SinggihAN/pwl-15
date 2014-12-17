<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class produk extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	public function get_produk($id){

		$this->db->where('idProduk',$id);
		$rs = $this->db->get('produk');

		return $rs->row_array();
	}

  public function get_slider(){

    $rs = $this->db->get('slide');

    return $rs->row_array();
  }
	function get_produk_male()
	{

		$this->db->join('kategori','kategori.idKategori = produk.idKategori');
		$this->db->where('idjenisKelamin','1');
		$rs = $this->db->get('produk');

		return $rs->result();
	}
	function get_produk_female()
	{

		$this->db->join('kategori','kategori.idKategori = produk.idKategori');
		$this->db->where('idjenisKelamin','2');
		$rs = $this->db->get('produk');

		return $rs->result();
	}

	function tambahproduk()
	{
		$idProduk = $this->input->post('idProduk');
		$idKategori = $this->input->post('idKategori');
		$namaProduk = $this->input->post('namaProduk');
		$ukuran = $this->input->post('ukuran');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$deskripsi = $this->input->post('deskripsi');
		$gambar = $this->input->post('gambar');

		$data = array(
				'idProduk' => $idProduk,
				'idKategori' => $idKategori,
				'namaProduk' => $namaProduk,
				'ukuran' => $ukuran,
				'harga' => $harga,
				'stok' => $stok,
				'deskripsi' => $deskripsi,
				'gambar' => $gambar
			);
			$this->db->insert('produk',$data);
	}
	public function ubahproduk($id){

		$idProduk = $this->input->post('idProduk');
		$idKategori = $this->input->post('idKategori');
		$namaProduk = $this->input->post('namaProduk');
		$ukuran = $this->input->post('ukuran');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$deskripsi = $this->input->post('deskripsi');
		$gambar = $this->input->post('gambar');

			$data = array(
				'idProduk' => $idProduk,
				'idKategori' => $idKategori,
				'namaProduk' => $namaProduk,
				'ukuran' => $ukuran,
				'harga' => $harga,
				'stok' => $stok,
				'deskripsi' => $deskripsi,
				'gambar' => $gambar
			);
			$this->db->where('idProduk',$id);
			$this->db->update('produk',$data);
	}
}
?>