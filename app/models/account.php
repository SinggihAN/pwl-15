<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Account extends CI_Model {

	var $usr;
	var $pwd;
	var $usr_data;	

	public function __construct(){
		$this->usr = '';
		$this->pwd = '';
	}

	public function set_user($user){
		$this->usr = $user;
		$this->usr_data['c_usr'] = $user;
	}
	
	public function set_password($password){
		$this->pwd = $password;
		$this->usr_data['c_pwd'] = md5($password);
	}

	public function do_login(){

		$query = "Select * from user where username='$this->usr' and password=md5('$this->pwd')";
		$result = $this->db->query($query);
		$rows = $result->row_array();

		if ($this->db->affected_rows() > 0) {

			$this->usr_data['c_fullname'] = $rows['namaUser'];
			$this->usr_data['c_lastlog']  = $rows['lastlog'];
			$this->usr_data['c_id']  	  = $rows['idUser'];
			$this->usr_data['c_email']	  = $rows['email'];
			$this->usr_data['c_username']	  = $rows['username'];

			$this->set_cookie();
			$this->_update_log($rows['idUser']);

            return true;
        } else {
            return false;
        }

	}	

	public function do_logout(){
		$sess = array();

        $sess['c_usr'] = '';
        $sess['c_pwd'] = '';
        $sess['c_id']  = '';
        $sess['c_lastlog'] = '';
        $sess['c_fullname'] = '';
        $sess['c_email'] = '';
        $sess['c_username'] = '';

        $this->session->unset_userdata($sess);
        $this->session->sess_destroy();
	}

	public function get_admin($id){
		$this->db->where('idUser', $id);
		$query = $this->db->get('user');

		return $query->row_array();
	}

	protected function set_cookie(){
		$this->session->set_userdata($this->usr_data);
	}

	public function get_cookie(){
		$sess = array();

        $sess['c_usr'] = $this->session->userdata('c_usr');
        $sess['c_pwd'] = $this->session->userdata('c_pwd');
        $sess['c_fullname'] = $this->session->userdata('c_fullname');
        $sess['c_lastlog']  = $this->session->userdata('c_lastlog');
        $sess['c_id']  = $this->session->userdata('c_id');
        $sess['c_email']  = $this->session->userdata('c_email');
        $sess['c_username']  = $this->session->userdata('c_username');

        return $sess;
	}

	public function validate_cookie(){
		if ($this->session->userdata('c_usr') != '' && $this->session->userdata('c_pwd') != '')
            return true;
        else
            return false;
	}

	private function _update_log($id) {
        $str = "update user set lastlog=now() where idUser=$id";
        $query = $this->db->query($str);

        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

}	