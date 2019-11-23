<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->model('model_pegawai');
			include_once APPPATH . '/third_party/fpdf181/fpdf.php';
	}

	public function index()
	{
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		$content['data_pegawai'] = $this->model_pegawai->getPegawai();
		$this->load->view('pegawai/managePegawai', $content);
	}
	
	
	public function delete($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}

		$this->model_pegawai->delete($id);
		redirect(base_url('pegawai'));
	}

	public function edit($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	      $this->model_pegawai->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
	      redirect('pegawai');
	    }
	    $data['pegawai'] = $this->model_pegawai->getById($id);

		$this->load->view('pegawai/edit', $data);
	}
	public function tambah(){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	        $this->model_pegawai->tambah(); // Panggil fungsi save() yang ada di SiswaModel.php
	        
	        redirect('pegawai');
	    }
	    $this->load->view('pegawai/tambah');
	}
	
}
