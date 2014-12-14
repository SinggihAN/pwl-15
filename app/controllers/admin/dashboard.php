<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	var $data;

	public function index(){

		$this->data['page']  = 'adminhome';
		$this->data['title'] = 'Dashboard';
		$this->load->view('admin/dashboard', $this->data);

	}
	public function produk(){
		$this->load->model('admin/produk');

		$this->data['produk_male'] = $this->produk->get_produk_male();
		$this->data['produk_female'] = $this->produk->get_produk_female();
		$this->data['page']  = 'produk';
		$this->data['title'] = 'Kelola Produk';
		$this->load->view('admin/dashboard', $this->data);
	}
	public function tambahProduk(){
		//$this->load->model('admin/tambahproduk');

		//$this->data['tambahproduk'] = $this->tambahproduk->get_tambahproduk();
		$this->data['page']  = 'tambahproduk';
		$this->data['title'] = 'Tambah Produk';
		$this->load->view('admin/dashboard', $this->data);
	}
	public function pesanan(){
		$this->load->model('admin/pesanan');

		$this->data['pesanan'] = $this->pesanan->get_pesanan();
		$this->data['page']  = 'pesanan';
		$this->data['title'] = 'Kelola Pesanan';
		$this->load->view('admin/dashboard', $this->data);
	}
	public function perusahaan(){
		$this->load->model('admin/perusahaan');

		$this->data['perusahaan'] = $this->perusahaan->getperusahaan();
		$this->data['page']  = 'perusahaan';
		$this->data['title'] = 'Edit Profil Perusahaan';
		$this->load->view('admin/dashboard', $this->data);
	}
	public function editPerusahaan(){

		$this->load->model('admin/perusahaan');

		$this->data['perusahaan'] = $this->perusahaan->editperusahaan();
		$this->data['page']  = 'perusahaan';
		$this->data['title'] = 'Edit Perusahaan';
		$this->data['action'] = site_url('admin/dashboard/editPerusahaan');
		
		// set empty default form field values
		//$this->_set_fields();
		// set validation properties
		//$this->_set_rules();
		
		// run validation
			// save data
			$id = $this->input->get('idPerusahaan');
			$query = array('namaPerusahaan' => $this->input->get('namaPerusahaan'),
							'alamatPerusahaan' => $this->input->get('alamatPerusahaan'));
			$this->perusahaan->update($id,$query);
			
			// set user message
			$data['message'] = '<div class="success">update person success</div>';
		
		
		// load view
		$this->load->view('admin/dashboard', $data);
	}
	
}		