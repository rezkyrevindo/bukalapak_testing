<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

	  function __construct() {
	      parent::__construct();
	    	$this->load->model('model_cart');  
	  }

	  public function index()
	  {
	  	// alvie
	  	if($this->session->userdata('username') == null){
				redirect('user/login');
			}
	    $data['cart'] = $this->model_cart->getCart($this->session->userdata('id_user'));
	    $this->load->view('_partials/header');
	    $this->load->view('Cart/index', $data);
	    $this->load->view('_partials/footer');
	    
	  }

  	public function delete($id){
  		// alvie
		if($this->session->userdata('username') == null){
			redirect('user/login');
		}

		$this->model_cart->delete($id);
		redirect(base_url('cart'));
	}
	public function edit($id){
		// alvie
		if($this->session->userdata('username') == null){
			redirect('user/login');
		}
	    $this->model_cart->edit($id, $_POST['qty']); // Panggil fungsi edit() yang ada di SiswaModel.php
	    redirect('cart');
	   
		
	}
	public function tambah($id_product){
		// alvie
        if($this->session->userdata('username') == null){
            redirect('user/login');
        }
        $this->model_cart->tambah($id_product); 
        
        redirect('cart');

        
        
    }


  
  
  
}
