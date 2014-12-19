<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();


		$this->load->model('admin/pesanan');

	}
	public function index()
	{
		$this->data['slider'] = $this->produk->get_slider();
		$this->data['page']  = 'home';
		$this->data['title'] = 'Home';
		$this->load->view('home', $this->data);
	}
	public function kaum_pria()
	{
		$this->load->model('admin/produk');

		$this->data['kaum_pria'] = $this->produk->get_produk_male();
		$this->data['page']  = 'kaum_pria';
		$this->data['title'] = 'Kaum Pria';
		$this->load->view('home', $this->data);
	}
	public function kaum_wanita()
	{
		$this->load->model('admin/produk');

		$this->data['kaum_wanita'] = $this->produk->get_produk_female();
		$this->data['page']  = 'kaum_wanita';
		$this->data['title'] = 'Kaum Wanita';
		$this->load->view('home', $this->data);
	}

	public function detailProduk($id)
	{
		$this->load->model('admin/produk');

		$this->data['detailProduk'] = $this->produk->get_produk($id);
		$this->data['page']  = 'detailProduk';
		$this->data['title'] = 'Detail Produk';
		$this->load->view('home', $this->data);
	}
}