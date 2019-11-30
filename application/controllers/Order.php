<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_order');
	}
	public function index()
	{
		// rezky
		if($this->session->userdata('username') == null){
				redirect('user/login');
		}
	    $data['order'] = $this->model_order->getOrder();
	    $this->load->view('_partials/header');
	    $this->load->view('pemesanan/index', $data);
	    $this->load->view('_partials/footer');
	    
	}

	public function detail($id)
	{
		// rezky
		if($this->session->userdata('username') == null){
				redirect('user/login');
		}
		$data['id_order'] = $id;
	    $data['order'] = $this->model_order->getById($id);
	    $this->load->view('_partials/header');
	    $this->load->view('pemesanan/detail', $data);
	    $this->load->view('_partials/footer');
	    
	}


	public function order_masuk(){
		// rezky
		if($this->session->userdata('username') == null){
				redirect('user/login');
		}
	    $data['order'] = $this->model_order->getOrderMasuk();
	    $this->load->view('_partials/header');
	    $this->load->view('pemesanan/order_masuk', $data);
	    $this->load->view('_partials/footer');
	}

	public function checkout($id, $total){
		// rezky
        if($this->session->userdata('username') == null){
            redirect('user/login');
        }
   		
      	$this->model_order->checkout($id, $total); // Panggil fungsi edit() yang ada di SiswaModel.php
      	redirect('order');
   
    
    }

    public function kirim($id){
    	// rezky
        if($this->session->userdata('username') == null){
            redirect('user/login');
        }
   
      	$this->model_order->kirim($id); // Panggil fungsi edit() yang ada di SiswaModel.php
      	redirect('order/order_masuk');
    
    }

    public function pengiriman_selesai($id_cart, $id_order){
    	// rezky
        if($this->session->userdata('username') == null){
            redirect('user/login');
        }
   
      	$this->model_order->pengiriman_selesai($id_cart); // Panggil fungsi edit() yang ada di SiswaModel.php
      	redirect('order/detail/'.$id_order);
    
    }

    public function delete($id){
    	// rezky
        if($this->session->userdata('username') == null){
            redirect('user/login');
        }

        $this->model_order->delete($id);
        redirect(base_url('order'));
    }

}

/* End of file Order.php */
/* Location: ./application/controllers/Order.php */