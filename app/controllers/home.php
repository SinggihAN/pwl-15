<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->model('admin/produk');

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
	
	public function tentang_kami()
	{
		$this->load->model('admin/tentang');
		
		$this->data['page']  = 'tentang';
		$this->data['title'] = 'Tentang Kami';
		
		$this->load->view('home', $this->data);
	}
	public function kontak()
	{
		$this->load->model('admin/kontak');
		
		$this->data['page']  = 'kontak';
		$this->data['title'] = 'kontak';
		
		$this->load->view('home', $this->data);
	}
}