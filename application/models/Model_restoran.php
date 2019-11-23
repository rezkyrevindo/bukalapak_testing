<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_restoran extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		public function getRestoran(){
			return $this->db->get('restoran')->result_array();
		}

		public function deleteRestoran($id){
			$this->db->where('id_restoran', $id);
			$this->db->delete('restoran');
		}

		public function editRestoran($id){
			$data = array(
		      "nama_restoran" => $this->input->post('nama'),
		      "jam_buka" => $this->input->post('jam'),
		      "alamat_restoran" => $this->input->post('alamat')
		    );
		    
		    $this->db->where('id_restoran', $id);
		    $this->db->update('restoran', $data);
		}

		public function getById($id){
			$this->db->where('id_restoran', $id);
    		return $this->db->get('restoran')->row();
		}
		
		public function tambahrestoran(){
		    $data = array(
		      "nama_restoran" => $this->input->post('nama'),
		      "jam_buka" => $this->input->post('jam'),
		      "alamat_restoran" => $this->input->post('alamat')
		    );
		    
		    $this->db->insert('restoran', $data); // Untuk mengeksekusi perintah insert data
		}
	
	}
?>