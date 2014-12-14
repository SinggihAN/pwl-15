<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class produk extends CI_Model {

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

	function insert_data_produk($data)
	{
		$this->db->insert('produk',$data);
	}
}
?>