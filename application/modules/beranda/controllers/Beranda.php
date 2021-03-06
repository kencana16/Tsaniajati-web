<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('beranda/m_beranda');
		$this->load->helper('url');
	}
	public function index(){
		$data['judul'] = "TSANIAJATI";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/m_cart');
		$data['cart']= $this->m_cart->get_data();
		$data['sum_jumlah']		= $this->m_cart->jumlah_cart();
		$data['products'] 		= $this->m_beranda->tampil_data_limit(4,0);
		$data['menukopi'] 		= $this->m_beranda->data_menu_kopi();
		$data['tidakkopi'] 		= $this->m_beranda->data_tidak_kopi();
		$data['category'] 		= $this->m_beranda->kategori();
		
		$this->load->model('category/m_cat');
		$data['category'] = $this->m_cat->tampil_data();
		$this->load->view('template/user_header', $data);
		$this->load->view('account/beranda',$data);
		$this->load->view('template/user_footer', $data);
	}

	function fetch(){
		echo $this->m_beranda->fetch_data($this->uri->segment(3));
	}
 
    function search(){
		$data['judul'] = "TSANIAJATI | Cari Produk";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']		= $this->M_Cart->get_data();
		$data['sum_jumlah']	= $this->M_Cart->jumlah_cart();
		
		//Pencarian Produk
		if($title=$this->input->post('caridata')){
			$this->db->like('prod_name', $title);
			$this->db->from('products');
			$this->db->join('category', 'products.cat_id = category.cat_id');
			$config['total_rows']	= $this->db->count_all_results();
			$data['total_rows'] 	= $config['total_rows'];
			$data['start'] = $this->uri->segment(3);
			$data['products'] = $this->m_beranda->search_data($title, $data['start']);
			$data['category'] = $this->m_beranda->kategori();
			$this->load->view('template/user_header', $data);
			$this->load->view('produk/produkv',$data);
			$this->load->view('template/user_footer', $data);
		}else{
			redirect('produk');
		}
		
    }
	function about(){
		$data['judul'] = "TSANIAJATI | Tentang Kami";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$this->load->view('template/user_header', $data);
		$this->load->view('account/about',$data);
		$this->load->view('template/user_footer', $data);
	}
	function contact(){
		$data['judul'] = "TSANIAJATI | Hubungi";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$this->load->view('template/user_header', $data);
		$this->load->view('account/contactv',$data);
		$this->load->view('template/user_footer', $data);
	}
	function addKomentar(){
		$data = array(
			'nama'=> $this->input->post('nama'),
			'email'=> $this->input->post('email'),
			'telp'=> $this->input->post('telp'),
			'komen'=> $this->input->post('komen')
			);
		$query = $this->db->insert('contacts',$data);
		redirect('beranda');
	}
	function pemesanan(){
		$data['judul'] = "TSANIAJATI | Proses Pesan";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$this->load->view('template/user_header', $data);
		$this->load->view('account/pemesananv',$data);
		$this->load->view('template/user_footer', $data);
	}
	function detail($id){
		$data['judul'] = "TSANIAJATI | Detail Produk";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$data['dprod'] = $this->m_beranda->detail_data($id);
		$data['products'] = $id;
		$this->load->view('template/user_header', $data);
		$this->load->view('account/detailv',$data);
		$this->load->view('template/user_footer', $data);
	}

	public function preorder($id){
		$data['judul'] = "TSANIAJATI | Pre-Order";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart/M_Cart');
		$data['cart']= $this->M_Cart->get_data();
		$data['sum_jumlah']= $this->M_Cart->jumlah_cart();
		$data['preorder'] = $this->m_beranda->detail_data($id);
		$this->cek_login->user();
		if ($this->cek_login->user() == TRUE ) {
            $this->load->view('login');
		} else {
			$this->load->view('template/user_header', $data);
			$this->load->view('produk/preorderv',$data);
			$this->load->view('beranda/template/user_footer', $data);
		}
		
	}
}
