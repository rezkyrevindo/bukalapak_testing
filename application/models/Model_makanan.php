<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_makanan extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		public function getMakanan(){
			$this->db->select('*');
			$this->db->from('makanan');
			$this->db->join('restoran', 'restoran.id_restoran = makanan.id_restoran');
			return $this->db->get()->result_array();
		}

		public function delete($id){
			$this->db->where('id_makanan', $id);
			$this->db->delete('makanan');
		}

		public function edit($id){
			$data = array(
		      "nama_makanan" => $this->input->post('nama'),
		      "jenis_makanan" => $this->input->post('jenis'),
		      "harga_makanan" => $this->input->post('harga'),
		      "id_restoran" => $this->input->post('id_restoran')
		    );
		    
		    $this->db->where('id_makanan', $id);
		    $this->db->update('makanan', $data);
		}

		public function getById($id){
			$this->db->where('id_makanan', $id);
    		return $this->db->get('makanan')->row();
		}
		
		public function tambah(){
		   $data = array(
		      "nama_makanan" => $this->input->post('nama'),
		      "jenis_makanan" => $this->input->post('jenis'),
		      "harga_makanan" => $this->input->post('harga'),
		      "id_restoran" => $this->input->post('id_restoran')
		    );
		    
		    
		    $this->db->insert('makanan', $data); // Untuk mengeksekusi perintah insert data
		}
	
	}
?>