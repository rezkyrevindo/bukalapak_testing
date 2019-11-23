<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct() {
			parent::__construct();
			
	}

	public function index()
	{
		$this->load->view('_partials/header');
		$this->load->view('home');
		$this->load->view('_partials/footer');
	}

	public function register(){
		$this->load->view('user/_partials/header');
		$this->load->view('user/register/index');
		$this->load->view('user/_partials/footer');
	}
	public function add(){
		if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
	        $this->model_user->tambah(); // Panggil fungsi save() yang ada di SiswaModel.php
	        $this->session->set_flashdata('success', 'Berhasil disimpan');
		    redirect('register');
	    }
	    redirect('register');

	}

	public function login(){
		if($this->input->post('submit')){
			$data = $this->model_user->getUserByNoHp($this->input->post('nohp'));
			if ($data == false){

				$this->session->set_flashdata('error', 'Berhasil disimpan');
				redirect('register');
			}
			if ($data->password_user == $this->input->post('password')){
				$this->session->set_userdata('username', $data->nohp_user);
				$this->session->set_userdata('nama', $data->nama_user);
				$this->session->set_userdata('id_user', $data->id_user);
				$this->session->set_userdata('type', 'user');
				redirect('home');
			}
		}
	}
	
	public function logout(){
		$this->session->sess_destroy();
		redirect('home');
	}

	
	
}
