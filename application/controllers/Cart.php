<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

  function __construct() {
      parent::__construct();
    	$this->load->model('model_cart');  
  }

  public function index()
  {
    $data['cart'] = $this->model_cart->getCart('1');
    $this->load->view('_partials/header');
    $this->load->view('Cart/index', $data);
    $this->load->view('_partials/footer');
    
  }

  	public function delete($id){
		// if($this->session->userdata('username') == null){
		// 	redirect('register');
		// }

		$this->model_cart->delete($id);
		redirect(base_url('cart'));
	}
	public function edit($id){
		// if($this->session->userdata('username') == null){
		// 	redirect('register');
		// }
	    $this->model_cart->edit($id, $_POST['qty']); // Panggil fungsi edit() yang ada di SiswaModel.php
	    redirect('cart');
	   
		
	}


  
  
  
}
