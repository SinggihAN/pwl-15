<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class perusahaan extends CI_Model {

	private $tbl_perusahaan= 'tbl_person';
	public function getperusahaan(){

		$this->db->where('idPerusahaan','1');
		$rs = $this->db->get('perusahaan');

		return $rs->row_array();
	}

	public function get_perusahaan($id){
		$this->db->where('idPerusahaan', $id);
		$query = $this->db->get('perusahaan');

		return $query->row_array();
	}

	function editperusahaan($id, $query){
		$this->db->where('idPerusahaan', $id);
		$this->db->update($this->tbl_person, $person);
		
	}
}
?>