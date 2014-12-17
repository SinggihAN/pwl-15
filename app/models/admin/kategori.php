<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class kategori extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
  public function get_kategori(){

    $rs = $this->db->get('kategori');

    return $rs->result();
  }

	function insert_kategori($data)
	  {
	    $this->db->insert('kategori',$data);
	}

	function tambahkategori()
	{
		$idKategori = $this->input->post('idKategori');
		$idJenisKelamin = $this->input->post('idJenisKelamin');
		$namaKategori = $this->input->post('namaKategori');

		$data = array(
				'idKategori' => $idKategori,
				'idJenisKelamin' => $idJenisKelamin,
				'namaKategori' => $namaKategori
			);
			$this->db->insert('kategori',$data);
	}

  public function get_kategori_by_id($id){

		$this->db->where('idKategori',$id);
		$rs = $this->db->get('kategori');

		return $rs->row_array();

  }

	public function ubahkategori($id){

		$idJenisKelamin = $this->input->post('idJenisKelamin');
		$namaKategori = $this->input->post('namaKategori');

			$data = array(
				'idJenisKelamin' => $idJenisKelamin,
				'namaKategori' => $namaKategori
			);
			$this->db->where('idKategori',$id);
			$this->db->update('kategori',$data);
	}
}
?>