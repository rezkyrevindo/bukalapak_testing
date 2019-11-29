<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Product extends CI_Controller {

	function __construct() {
			parent::__construct();
			
	}

	public function index()
	{
		
		$this->load->view('_partials/header');
		$this->load->view('detail_product/index');
		$this->load->view('_partials/footer');
		
	}

	
	
	
}
