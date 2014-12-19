<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class produk extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	function get_produk_all(){

		$this->db->join('kategori','kategori.idKategori = produk.idKategori');
		$rs = $this->db->get('produk');

		return $rs->result();
	}

	public function get_produk($id){

		$this->db->where('idProduk',$id);
		$rs = $this->db->get('produk');

		return $rs->row_array();
	}

  public function get_slider(){

    $rs = $this->db->get('slide');

    return $rs->result();
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

	function tambahproduk($nama_foto)
	{
		$idProduk = $this->input->post('idProduk');
		$idKategori = $this->input->post('idKategori');
		$namaProduk = $this->input->post('namaProduk');
		$ukuran = $this->input->post('ukuran');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');
		$deskripsi = $this->input->post('deskripsi');

		$data = array(
				'idProduk' => $idProduk,
				'idKategori' => $idKategori,
				'namaProduk' => $namaProduk,
				'ukuran' => $ukuran,
				'harga' => $harga,
				'stok' => $stok,
				'deskripsi' => $deskripsi,
				'gambar' => $nama_foto
			);
			$this->db->insert('produk',$data);
	}

	public function get_kategori(){

		$this->db->join('jenisKelamin','jenisKelamin.idJenisKelamin = kategori.idJenisKelamin');
		$rs = $this->db->get('kategori');

		return $rs->result();
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
		// Menghitung jumlah stok awal sebelum dikurangi (pada pemesanan)
		function _stok_awal($idProduk){
			$this->db->select('stok');
			$this->db->from('produk');
			$this->db->where('idProduk', $idProduk);
			$hasil = $this->db->get();
			if($hasil->num_rows() > 0){
				return $hasil->row_array(); //return row sebagai associative array
			}			
		}
		// Pengurangan stok barang, stok awal dikurangi jumlah pesanan
	function kurangiStok($idProduk, $jum){
			$stok_awal = $this->_stok_awal($idProduk);
			$stok = $stok_awal['stok'] - $jum;
			$data = array(
				'stok' => $stok
			);
			$this->db->where("idProduk", $idProduk);
			$this->db->update("produk", $data);		
	}
}
?>