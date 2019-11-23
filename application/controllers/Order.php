<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->model('model_order');
			$this->load->model('model_makanan');
			$this->load->model('model_pegawai');
			$this->load->model('model_pelanggan');
			include_once APPPATH . '/third_party/fpdf181/fpdf.php';
	}

	public function index()
	{
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		$content['data_order'] = $this->model_order->getOrder();
		$this->load->view('order/manageOrder', $content);
	}
	
	
	public function delete($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}

		$this->model_order->delete($id);
		redirect(base_url('order'));
	}

	public function edit($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	      $this->model_order->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
	      redirect('order');
	    }
	    $data['order'] = $this->model_order->getById($id);
	    $data['pelanggan'] = $this->model_pelanggan->getPelanggan();
	    $data['makanan'] = $this->model_makanan->getMakanan();
	    $data['pegawai'] = $this->model_pegawai->getPegawai();
		$this->load->view('order/edit', $data);
	}
	public function tambah(){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	        $this->model_order->tambah(); // Panggil fungsi save() yang ada di SiswaModel.php
	        
	        redirect('order');
	    }
	    
	    $data['pelanggan'] = $this->model_pelanggan->getPelanggan();
	    $data['makanan'] = $this->model_makanan->getMakanan();
	    $data['pegawai'] = $this->model_pegawai->getPegawai();
	    $this->load->view('order/tambah',$data);
	}
	
}
