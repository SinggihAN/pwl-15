<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	var $data;

	public function __construct(){
		parent::__construct();


		$this->load->model('account');

		if(!$this->account->validate_cookie()){
			$this->session->set_flashdata('error', 'Anda tidak mempunyai akses ke halaman ini');
			header('location: '.site_url().'/login');
		}else{

			$this->data['cookie'] = $this->account->get_cookie();
		}
	}

	public function index(){

		$this->data['page']  = 'adminhome';
		$this->data['title'] = 'Dashboard';
		$this->load->view('admin/dashboard', $this->data);

	}
	public function profil(){

		$id = $this->data['cookie']['c_id'];

		$this->data['profil'] = $this->account->get_admin($id);
		$this->data['page']  = 'profil';
		$this->data['title'] = 'Edit Profil';

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
	public function tambahproduk()
	{
		$this->data['page']  = 'tambahproduk';
		$this->data['title'] = 'tambahproduk';
		$this->load->view('admin/dashboard', $this->data);
	}
	public function proses_tambahproduk()
	{
		$this->load->model('admin/produk','',TRUE);
		$this->produk->tambahproduk();
		redirect('admin/dashboard/produk');
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
	public function logout(){

		$this->account->do_logout();
		header('location: '.site_url().'/login');
	}

}		