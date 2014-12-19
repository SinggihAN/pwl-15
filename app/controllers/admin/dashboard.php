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
		$data['error'] = '';
		$this->data['title'] = 'Kelola Produk';
		$this->load->view('admin/dashboard', $this->data);
	}
	public function tambahproduk(){
		
		$this->load->model('admin/kategori');
		$this->data['tambahproduk'] = $this->kategori->get_kategori();
		$this->data['page']  = 'tambahproduk2';
		$this->data['title'] = 'Tambahkan Produk';
		$this->data['error'] = '';

		$this->load->view('admin/dashboard', $this->data);
		
	}
	public function proses_tambah_produk(){

		$this->load->library('form_validation');
		
		$namaProduk = $this->input->post('namaProduk',TRUE);
		
		// Konfigurasi Upload Gambar
		    $config['upload_path'] = './assets/img/produk/';
		    $config['allowed_types'] = 'gif|jpg|png';
		    $config['max_size'] = '2048000';
		    $config['max_width']  = '1024';
		    $config['max_height']  = '1024';

		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);


				if($this->upload->do_upload()){
					$this->load->model('admin/produk');
					$data = array('upload_data' => $this->upload->data());
					$get_name = $this->upload->data();
					$nama_foto = $get_name['file_name'];
					
					$this->produk->tambahproduk($nama_foto);

					$this->data['produk_male'] = $this->produk->get_produk_male();
					$this->data['produk_female'] = $this->produk->get_produk_female();
					$this->data['page']  = 'produk';
					$this->load->view('admin/dashboard', $this->data);

				}
				else{
					$this->load->model('admin/kategori');
					$this->data['tambahproduk'] = $this->kategori->get_kategori();
					$this->data['page']  = 'tambahproduk2';
					$this->data['title'] = 'Tambahkan Produk';
					$this->data['error'] = $this->upload->display_errors();
					$this->load->view('admin/dashboard', $this->data);
				}    
	}
	public function ubahproduk($id)
	{
		if($this->input->post('submit'))
		{
			$this->load->model('admin/produk');
			$this->produk->ubahproduk($id);
			//$this->do_upload();
			redirect('admin/dashboard/produk');
		}
		else
		{
		$this->load->model('admin/produk');

		$this->data['ubahproduk'] = $this->produk->get_produk($id);
		$this->data['kategori'] = $this->produk->get_kategori();
		$this->data['page']  = 'ubahproduk';
		$this->data['title'] = 'Ubah Produk';
		$this->load->view('admin/dashboard', $this->data);
		}
	}

	public function hapusproduk($id){

		$this->db->where('idProduk',$id);
		$this->db->delete('produk');
		redirect('admin/dashboard/produk');
	}

	public function pesanan(){
		$this->load->model('admin/pesanan');

		$this->data['pesanan'] = $this->pesanan->get_pesanan();
		$this->data['page']  = 'pesanan';
		$this->data['title'] = 'Kelola Pesanan';
		$this->load->view('admin/dashboard', $this->data);
	}

	public function ubahpesanan($id)
	{
		if($this->input->post('submit'))
		{
			$this->load->model('admin/pesanan');
			$this->pesanan->ubahpesanan($id);
			//$this->do_upload();
			redirect('admin/dashboard/pesanan');
		}
		else
		{
		$this->load->model('admin/pesanan');

		$this->data['ubahpesanan'] = $this->pesanan->get_pesanan_by_id($id);
		$this->data['page']  = 'ubahpesanan';
		$this->data['title'] = 'Ubah Pesanan';
		$this->load->view('admin/dashboard', $this->data);
		}
	}

	public function hapuspesanan($id){

		$this->db->where('idOrder',$id);
		$this->db->delete('order');
		redirect('admin/dashboard/pesanan');
	}

	function statuspesanan($id){
		$this->load->model('admin/pesanan');
		$status = $this->pesanan->get_pesanan_status($id);

		if($status['status'] == 'Sedang Diproses'){
			$this->pesanan->ubahstatusdikirim($id);
			redirect('admin/dashboard/ubahpesanan/'.$id,'refresh');
		}elseif($status['status'] == 'Sedang Dikirim'){
			$this->pesanan->ubahstatusselesai($id);
			redirect('admin/dashboard/ubahpesanan/'.$id,'refresh');
		}
	}

	function batalpesanan($id){

		$this->load->model('admin/pesanan');
		$status = $this->pesanan->get_pesanan_status($id);
		$this->pesanan->ubahstatusbatal($id);
		redirect('admin/dashboard/pesanan/');
	}

	public function perusahaan(){
		$this->load->model('admin/perusahaan');

		$this->data['perusahaan'] = $this->perusahaan->getperusahaan();
		$this->data['page']  = 'perusahaan';
		$this->data['title'] = 'Edit Profil Perusahaan';
		$this->load->view('admin/dashboard', $this->data);
	}
	public function ubahperusahaan()
	{
		if($this->input->post('submit'))
		{
			$this->load->model('admin/perusahaan');
			$this->perusahaan->ubahperusahaan();
			//$this->do_upload();
			redirect('admin/dashboard/ubahperusahaan/1');
		}
		else
		{
		$this->load->model('admin/perusahaan');

		$this->data['perusahaan'] = $this->perusahaan->getperusahaan();
		$this->data['page']  = 'perusahaan';
		$this->data['title'] = 'Edit Profil Perusahaan';
		$this->load->view('admin/dashboard', $this->data);
		}
	}

	public function logout(){

		$this->account->do_logout();
		header('location: '.site_url().'/login');
	}

	public function kategori(){
		$this->load->model('admin/kategori');

		$this->data['jenisKelamin'] = $this->kategori->get_jeniskelamin();
		$this->data['kategori'] = $this->kategori->get_kategori();
		$this->data['page']  = 'kategori';
		$this->data['title'] = 'Edit Kategori Produk';
		$this->load->view('admin/dashboard', $this->data);
	}
	public function tambahkategori(){

		if($this->input->post('submit')){
			$this->load->model('admin/kategori');
			$this->kategori->tambahkategori();
			//$this->do_upload();
			redirect('admin/dashboard/kategori');
		}
		$this->data['page']  = 'kategori';
		$this->data['title'] = 'Kategori';
		$this->load->view('admin/dashboard', $this->data);
	}

	public function ubahkategori($id)
	{
		if($this->input->post('submit'))
		{
			$this->load->model('admin/kategori');
			$this->kategori->ubahkategori($id);
			//$this->do_upload();
			redirect('admin/dashboard/kategori');
		}
		else
		{
		$this->load->model('admin/kategori');

		$this->data['ubahkategori'] = $this->kategori->get_kategori_by_id($id);
		$this->data['jenisKelamin'] = $this->kategori->get_jeniskelamin();
		$this->data['page']  = 'ubahkategori';
		$this->data['title'] = 'Ubah Kategori';
		$this->load->view('admin/dashboard', $this->data);
		}
	}

	public function hapuskategori($id){

		$this->db->where('idKategori',$id);
		$this->db->delete('kategori');
		redirect('admin/dashboard/kategori');
	}

}		