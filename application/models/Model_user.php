<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {
	public function __construct()
	{
		parent::__construct();
	}


		public function delete($id_anggota){
			// ainun
			$this->db->where('id_user', $id_anggota);
			$this->db->delete('user');
		}

		public function edit($id_anggota){
			// ainun
			$data = array(

		      "nama_user" => $this->input->post('nama'),
		      "alamat_user" => $this->input->post('alamat'),
		      "email_user" => $this->input->post('email'),
		      "password_user" => $this->input->post('password')
		    );
		    
		    $this->db->where('id_user', $id_anggota);
		    $this->db->update('user', $data);
		}

		public function getById($id_anggota){
			// ainun
			$this->db->where('id_user', $id_anggota);
    		return $this->db->get('user')->row();
		}
		public function getByUsername($username){
			// ainun
			$this->db->where('email_user', $username);
    		return $this->db->get('user')->row();
		}
		public function tambah(){
			// ainun
		  	$data = array(

		      "nama_user" => $this->input->post('nama'),
		      "alamat_user" => $this->input->post('alamat'),
		      "email_user" => $this->input->post('email'),
		      "password_user" => $this->input->post('password')
		    );
		    
		    
		    $this->db->insert('user', $data); // Untuk mengeksekusi perintah insert data
		}
	


	

}

/* End of file Model_user.php */
/* Location: ./application/models/Model_user.php */