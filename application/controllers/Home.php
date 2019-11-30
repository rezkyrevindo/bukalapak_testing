<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
			parent::__construct();
			 $this->load->model('model_product');
	}

	public function index()
	{
		// rezky
		if($this->session->userdata('username') == null){
				redirect('user/login');
			}
		$data['product'] = $this->model_product->getProductOrang();
		
		$this->session->set_userdata('status', 'pembeli' );
		$this->load->view('_partials/header');
		$this->load->view('home/home', $data);
		$this->load->view('_partials/footer');
		
	}

	public function penjual(){
		if($this->session->userdata('username') == null){
				redirect('user/login');
			}
		// rezky
		$this->session->set_userdata('status', 'penjual' );
		redirect('product');
	}

	
	
	
}
