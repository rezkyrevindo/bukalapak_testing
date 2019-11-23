<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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

		$content['data_anggota'] = $this->model_pegawai->getPegawai();
		$this->load->view('admin/manageAnggota.php', $content);
	}
	public function login(){
		if($this->input->post('submit')){
			$data = $this->model_pegawai->getAdminByUsername($this->input->post('username'));
			if ($data == false){
				redirect('login');
			}
			if ($data->password_pegawai == $this->input->post('password')){
				$this->session->set_userdata('username', $data->email_pegawai);
				$this->session->set_userdata('nama', $data->nama_pegawai);
				redirect('order');
			}
		}
		$this->load->view('login.php');
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('login');
	}
}
