<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_cart extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		public function getCart(){
			return $this->db->get('Cart')->result_array();
		}

		public function delete($id){
			$this->db->where('id_Cart', $id);
			$this->db->delete('Cart');
		}

		public function edit($id){
			$data = array(
		      "id_user" => $this->input->post(''),
		      "id_product" => $this->input->post(''),
		      "qty" => $this->input->post(''),
		      "id_pemesanan" => $this->input->post('')
		    );
		    
		    $this->db->where('id_Cart', $id);
		    $this->db->update('Cart', $data);
		}

		public function getById($id){
			$this->db->where('id_Cart', $id);
    		return $this->db->get('cart')->row();
		}
		
		public function tambah(){
		   $data = array(
		      "id_user" => $this->input->post(''),
		      "id_product" => $this->input->post(''),
		      "qty" => $this->input->post(''),
		      "id_pemesanan" => $this->input->post('')
		    );
		    
		    
		    $this->db->insert('cart', $data); // Untuk mengeksekusi perintah insert data
		}
	
	}
?>