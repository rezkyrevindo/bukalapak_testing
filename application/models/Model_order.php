<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_order extends CI_Model {
		function __construct() {
			parent::__construct();
		}

		public function getOrder(){
			$this->db->select('*');
			$this->db->from('orders');
			$this->db->join('pelanggan', 'pelanggan.id_pelanggan = orders.id_pelanggan');
			$this->db->join('makanan', 'makanan.id_makanan = orders.id_makanan');
			$this->db->join('pegawai', 'pegawai.id_pegawai = orders.id_pegawai');
			return $this->db->get()->result_array();
		}

		public function delete($id){
			$this->db->where('id_order', $id);
			$this->db->delete('orders');
		}

		public function edit($id){
			$data = array(
		      "id_pelanggan" => $this->input->post('id_pelanggan'),
		      "id_pegawai" => $this->input->post('id_pegawai'),
		      "id_makanan" => $this->input->post('id_makanan'),
		      "quantity" => $this->input->post('qty')
		    );
		    
		    $this->db->where('id_order', $id);
		    $this->db->update('orders', $data);
		}

		public function getById($id){
			$this->db->select('*');
			$this->db->join('pelanggan', 'pelanggan.id_pelanggan = orders.id_pelanggan');
			$this->db->join('makanan', 'makanan.id_makanan = orders.id_makanan');
			$this->db->join('pegawai', 'pegawai.id_pegawai = orders.id_pegawai');
			$this->db->where('id_order', $id);
    		return $this->db->get('orders')->row();
		}
		
		public function tambah(){
		   $data = array(
		      "id_pelanggan" => $this->input->post('id_pelanggan'),
		      "id_pegawai" => $this->input->post('id_pegawai'),
		      "id_makanan" => $this->input->post('id_makanan'),
		      "quantity" => $this->input->post('qty')
		    );
		    
		    
		    $this->db->insert('orders', $data); // Untuk mengeksekusi perintah insert data
		}
	
	}
?>