<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class home extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
  public function get_slider(){

    $rs = $this->db->get('slide');

    return $rs->result();
  }
}