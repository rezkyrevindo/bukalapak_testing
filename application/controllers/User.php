<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
	}

	public function register(){
		// ainun
		if($this->session->userdata('username') != null){
			redirect('user/login');
		}
		if ($this->input->post('submit')) {
			$data = $this->model_user->tambah();
			 $this->session->set_flashdata('success', 'Berhasil disimpan');
		    redirect('user/login');
		}		
		$this->load->view('user/register');
	}

	public function login(){
		// ainun
		if($this->session->userdata('username') != null){
			redirect('user/login');
		}
		if($this->input->post('submit')){
			$data = $this->model_user->getByUsername($this->input->post('email'));
			if ($data == false){
				$this->session->set_flashdata('error', 'Berhasil disimpan');
				redirect('register');
			} else
			if ($data->password_user == $this->input->post('password')){

				$this->session->set_userdata('username', $data->email_user);
				$this->session->set_userdata('nama', $data->nama_user);
				$this->session->set_userdata('id_user', $data->id_user);
				$this->session->set_userdata('status', 'pembeli');
				$this->session->set_userdata('type', 'user');
				redirect('home');
			}
		}
		$this->load->view('login');
	}

	public function logout(){
		// ainun
		$this->session->sess_destroy();
		session_unset();
		redirect('user/login');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */