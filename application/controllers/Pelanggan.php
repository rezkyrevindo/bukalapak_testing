<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->model('model_pelanggan');
			include_once APPPATH . '/third_party/fpdf181/fpdf.php';
	}

	public function index()
	{
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		$content['data_pelanggan'] = $this->model_pelanggan->getPelanggan();
		$this->load->view('pelanggan/managePelanggan', $content);
	}
	
	
	public function delete($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}

		$this->model_pelanggan->delete($id);
		redirect(base_url('pelanggan'));
	}

	public function edit($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	      $this->model_pelanggan->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
	      redirect('pelanggan');
	    }
	    $data['pelanggan'] = $this->model_pelanggan->getById($id);

		$this->load->view('pelanggan/edit', $data);
	}
	public function tambah(){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	        $this->model_pelanggan->tambah(); // Panggil fungsi save() yang ada di SiswaModel.php
	        
	        redirect('pelanggan');
	    }
	    $data['pelanggan'] = $this->model_pelanggan->getPelanggan();
	    $this->load->view('pelanggan/tambah',$data);
	}
	
}
