<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}


		public function delete($id_anggota){
			$this->db->where('id_user', $id_anggota);
			$this->db->delete('user');
		}

		public function edit($id_anggota){
			$data = array(

		      "nama_user" => $this->input->post('nama'),
		      "alamat_user" => $this->input->post('email'),
		      "email_user" => $this->input->post('password'),
		      "password_user" => $this->input->post('alamat')
		    );
		    
		    $this->db->where('id_user', $id_anggota);
		    $this->db->update('user', $data);
		}

		public function getById($id_anggota){
			$this->db->where('id_user', $id_anggota);
    		return $this->db->get('user')->row();
		}
		public function getByUsername($username){
			$this->db->where('email_user', $username);
    		return $this->db->get('user')->row();
		}
		public function tambah(){
		  	$data = array(

		      "nama_user" => $this->input->post('nama'),
		      "alamat_user" => $this->input->post('email'),
		      "email_user" => $this->input->post('password'),
		      "password_user" => $this->input->post('alamat')
		    );
		    
		    
		    $this->db->insert('user', $data); // Untuk mengeksekusi perintah insert data
		}
	


	

}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */