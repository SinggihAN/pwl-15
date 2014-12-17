<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class perusahaan extends CI_Model {

	public function getperusahaan(){

		$this->db->where('idPerusahaan','1');
		$rs = $this->db->get('perusahaan');

		return $rs->row_array();
	}

	public function get_perusahaan(){
		$this->db->where('idPerusahaan', '1');
		$query = $this->db->get('perusahaan');

		return $query->row_array();
	}

	function ubahperusahaan(){
			$namaPerusahaan = $this->input->post('namaPerusahaan');
			$alamatPerusahaan = $this->input->post('alamatPerusahaan');
			$telpPerusahaan = $this->input->post('telpPerusahaan');
			$emailPerusahaan = $this->input->post('emailPerusahaan');
			$namaBank = $this->input->post('namaBank');
			$noRek = $this->input->post('noRek');
			$atasNama = $this->input->post('atasNama');
			$tentang = $this->input->post('tentang');
			/*$agama = $this->input->post('agama');
			$kddepartemen = $this->input->post('kddepartemen');*/
			$data = array(
				'namaPerusahaan' => $namaPerusahaan,
				'alamatPerusahaan' => $alamatPerusahaan,
				'telpPerusahaan' => $telpPerusahaan,
				'emailPerusahaan' => $emailPerusahaan,
				'namaBank' => $namaBank,
				'noRek' => $noRek,
				'atasNama' => $atasNama,
				'tentang' => $tentang/*,
				'agama' => $agama,
				'kddepartemen' => $kddepartemen*/
			);
			$this->db->where('idPerusahaan','1');
			$this->db->update('perusahaan',$data);
			}
}
?>