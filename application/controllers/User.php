<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_user');
	}

	public function register(){
		$this->load->view('_partials/header');
		$this->load->view('user/register');
		$this->load->view('_partials/footer');
	}

	public function login(){
		if($this->input->post('submit')){
			$data = $this->model_user->getByUsername($this->input->post('nohp'));
			if ($data == false){

				$this->session->set_flashdata('error', 'Berhasil disimpan');
				redirect('register');
			}
			if ($data->password_user == $this->input->post('password')){
				$this->session->set_userdata('username', $data->email_user);
				$this->session->set_userdata('nama', $data->nama_user);
				$this->session->set_userdata('id_user', $data->id_user);
				$this->session->set_userdata('type', 'user');
				redirect('home');
			}
		}
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */