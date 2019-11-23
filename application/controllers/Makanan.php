<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Makanan extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->model('model_makanan');
			$this->load->model('model_restoran');
			include_once APPPATH . '/third_party/fpdf181/fpdf.php';
	}

	public function index()
	{
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		$content['data_makanan'] = $this->model_makanan->getMakanan();
		$this->load->view('makanan/manageMakanan', $content);
	}
	
	
	public function delete($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}

		$this->model_makanan->delete($id);
		redirect(base_url('makanan'));
	}

	public function edit($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	      $this->model_makanan->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
	      redirect('makanan');
	    }
	    $data['makanan'] = $this->model_makanan->getById($id);
	    $data['restoran'] = $this->model_restoran->getRestoran();
		$this->load->view('makanan/edit', $data);
	}
	public function tambah(){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	        $this->model_makanan->tambah(); // Panggil fungsi save() yang ada di SiswaModel.php
	        
	        redirect('makanan');
	    }
	    $data['restoran'] = $this->model_restoran->getRestoran();
	    $data['makanan'] = $this->model_makanan->getMakanan();
	    $this->load->view('makanan/tambah',$data);
	}
	
}
