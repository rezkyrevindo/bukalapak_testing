<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class model_pegawai extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		public function getPegawai(){
			return $this->db->get('pegawai')->result_array();
		}

		public function delete($id_anggota){
			$this->db->where('id_pegawai', $id_anggota);
			$this->db->delete('pegawai');
		}

		public function edit($id_anggota){
			$data = array(

		      "nama_pegawai" => $this->input->post('nama'),
		      "email_pegawai" => $this->input->post('email'),
		      "password_pegawai" => $this->input->post('password'),
		      "alamat_pegawai" => $this->input->post('alamat'),
		      "nohp_pegawai" => $this->input->post('nohp')
		    );
		    
		    $this->db->where('id_pegawai', $id_anggota);
		    $this->db->update('pegawai', $data);
		}

		public function getById($id_anggota){
			$this->db->where('id_pegawai', $id_anggota);
    		return $this->db->get('pegawai')->row();
		}
		public function getAdminByUsername($username){
			$this->db->where('email_pegawai', $username);
    		return $this->db->get('pegawai')->row();
		}
		public function tambah(){
		  $data = array(

		      "nama_pegawai" => $this->input->post('nama'),
		      "email_pegawai" => $this->input->post('email'),
		      "password_pegawai" => $this->input->post('password'),
		      "alamat_pegawai" => $this->input->post('alamat'),
		      "nohp_pegawai" => $this->input->post('nohp')
		    );
		    
		    $this->db->insert('pegawai', $data); // Untuk mengeksekusi perintah insert data
		}
	
	}
?>