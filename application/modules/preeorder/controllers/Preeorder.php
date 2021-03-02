<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Preeorder extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->cek_login->user();
		$this->load->model('M_Preeorder');
	}
	
	function index(){
		$data['judul'] = "Dashboard | Pree Order";
		$data['users']= $this->db->get_where('users', ['username' =>
		$this->session->userdata('username')])->row_array();
		$this->load->model('cart_beli/M_Cart_Beli');
		$data['sum_jumlah']= $this->M_Cart_Beli->jumlah_cart();
		$data['preeorder'] = $this->M_Preeorder->tampil_data();
		$this->load->view('dashboard/template/admin_header', $data);
		$this->load->view('dashboard/template/admin_sidebar');
		$this->load->view('index',$data);
		$this->load->view('dashboard/template/admin_footer');
	}
}
