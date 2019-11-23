<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_pelanggan extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		public function getPelanggan(){
			return $this->db->get('pelanggan')->result_array();
		}

		public function delete($id){
			$this->db->where('id_pelanggan', $id);
			$this->db->delete('pelanggan');
		}

		public function edit($id){
			$data = array(
		      "nama_pelanggan" => $this->input->post('nama'),
		      "nohp_pelanggan" => $this->input->post('nohp'),
		      "alamat_pelanggan" => $this->input->post('alamat'),
		      "email_pelanggan" => $this->input->post('email')
		    );
		    
		    $this->db->where('id_pelanggan', $id);
		    $this->db->update('pelanggan', $data);
		}

		public function getById($id){
			$this->db->where('id_pelanggan', $id);
    		return $this->db->get('pelanggan')->row();
		}
		
		public function tambah(){
		   $data = array(
		      "nama_pelanggan" => $this->input->post('nama'),
		      "nohp_pelanggan" => $this->input->post('nohp'),
		      "alamat_pelanggan" => $this->input->post('alamat'),
		      "email_pelanggan" => $this->input->post('email')
		    );
		    
		    
		    $this->db->insert('pelanggan', $data); // Untuk mengeksekusi perintah insert data
		}
	
	}
?>