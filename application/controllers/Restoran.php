<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restoran extends CI_Controller {

	function __construct() {
			parent::__construct();
			$this->load->model('model_restoran');
			include_once APPPATH . '/third_party/fpdf181/fpdf.php';
	}

	public function index()
	{
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		$content['data_restoran'] = $this->model_restoran->getRestoran();
		$this->load->view('restoran/manageRestoran', $content);
	}
	
	
	public function deleteRestoran($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}

		$this->model_restoran->deleteRestoran($id);
		redirect(base_url('restoran'));
	}

	public function editRestoran($id){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	      $this->model_restoran->editRestoran($id); // Panggil fungsi edit() yang ada di SiswaModel.php
	      redirect('restoran');
	    }
	    $data['restoran'] = $this->model_restoran->getById($id);

		$this->load->view('restoran/editRestoran.php', $data);
	}
	public function tambahRestoran(){
		if($this->session->userdata('username') == null){
			redirect('login');
		}
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	        $this->model_restoran->tambahRestoran(); // Panggil fungsi save() yang ada di SiswaModel.php
	        
	        redirect('restoran');
	    }
	    $data['restoran'] = $this->model_restoran->getRestoran();
	    $this->load->view('restoran/tambahRestoran',$data);
	}
	
}
