<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_cart extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		public function getCart($id){
			$this->db->select('*, (shopping_cart.qty * product.harga) as total');
			$this->db->join('product', 'product.id_product = shopping_cart.id_product');
			$this->db->where('shopping_cart.id_user', $id);
			return $this->db->get('shopping_cart')->result_array();
		}

		public function delete($id){
			$this->db->where('id_cart', $id);
			$this->db->delete('shopping_cart');
		}

		public function edit($id_cart, $qty){
			$data = array(
		      "qty" => $qty
		    );
		    
		    $this->db->where('id_cart', $id_cart);
		    $this->db->update('shopping_cart', $data);
		}

		public function getById($id){
			$this->db->where('id_cart', $id);
    		return $this->db->get('shopping_cart')->row();
		}
		
		public function tambah(){
		   $data = array(
		      "id_user" => $this->session->userdata('id_user'),
		      "id_product" => $id_product,
		      "qty" => '1',
		      "id_pemesanan" => $id_pemesanan
		    );
		    
		    
		    $this->db->insert('shopping_cart', $data); // Untuk mengeksekusi perintah insert data
		}
	
	}
?>