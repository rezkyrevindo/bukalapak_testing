<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_order extends CI_Model {
		function __construct() {
			parent::__construct();
			date_default_timezone_set('Asia/Jakarta');
		}

		public function getOrder(){
			// rezky
			$this->db->where('pemesanan.status_pemesanan != ', 'pending');
			$this->db->where('pemesanan.id_user',$this->session->userdata('id_user'));
			return $this->db->get('pemesanan')->result_array();
		}

		public function getOrderMasuk(){
			// rezky
			$this->db->select('*');
			$this->db->join('shopping_cart', 'shopping_cart.id_pemesanan = pemesanan.id_pemesanan');
			$this->db->join('product', 'product.id_product = shopping_cart.id_product');
			$this->db->join('user', 'user.id_user = product.id_user');
			$this->db->where('status_pemesanan != ', 'pending');
			$this->db->where('product.id_user',$this->session->userdata('id_user'));
			return $this->db->get('pemesanan')->result_array();
		}

		 public function getIdPemesanan(){
		 	// rezky
            $this->db->select('id_pemesanan');
            $this->db->where('id_user', $this->session->userdata('id_user'));
            $this->db->where('status_pemesanan', 'pending');
            $this->db->order_by('id_pemesanan','DESC');
            $data = $this->db->get('pemesanan')->row_array();
            if (sizeof($data) > 0){
            	return $data['id_pemesanan'];
            }else{
            	$this->db->select('id_pemesanan');
	            $this->db->order_by('id_pemesanan','DESC');
	            $new = $this->db->get('pemesanan')->result_array();

	            $ins = array(
			      "id_user" => $this->session->userdata('id_user')

			    );
		    	$this->db->insert('pemesanan', $ins);

	            return $this->getIdTerakhir()['id_pemesanan'];
            }
    	}	

    	public function getIdTerakhir(){
    		// rezky
            $this->db->select('id_pemesanan');
            $this->db->order_by('id_pemesanan','DESC');
            return $this->db->get('pemesanan')->row_array();
    	}

		

		public function checkout($id, $total){
			// rezky
			$data = array(
		      "status_pemesanan" => 'checkout',
		      "waktu" => date('Y-m-d H:m:s'),
		      'total' => $total
		      
		    );
		    
		    $this->db->where('id_pemesanan', $id);
		    $this->db->update('pemesanan', $data);

		    $data = array(
		      "status" => 'checkout'
		    );
		    
		    $this->db->where('id_pemesanan', $id);
		    $this->db->update('shopping_cart', $data);
		}

		public function kirim($id){
			// rezky
			$data = array(
		      "status" => 'shipping',
		      "jasa_pengiriman" => $this->input->post('jasa_pengiriman'),
		      "no_resi" => $this->input->post('no_resi')
		    );
		    
		    $this->db->where('id_cart', $id);
		    $this->db->update('shopping_cart', $data);
		}

		public function pengiriman_selesai($id){
			// rezky
			$data = array(
		      "status" => 'selesai'
		    );
		    
		    $this->db->where('id_cart', $id);
		    $this->db->update('shopping_cart', $data);
		}

		public function getById($id){
			// rezky
			
			$this->db->join('shopping_cart', 'shopping_cart.id_pemesanan = pemesanan.id_pemesanan');
			$this->db->join('product', 'product.id_product = shopping_cart.id_product');
			$this->db->where('pemesanan.status_pemesanan != ', 'pending');
			$this->db->where('pemesanan.id_user',$this->session->userdata('id_user'));
			$this->db->where('pemesanan.id_pemesanan', $id);
			return $this->db->get('pemesanan')->result_array();
		}
	
		public function delete($id){
			// rezky
			$this->db->where('id_pemesanan', $id);
			$this->db->delete('pemesanan');
		}
	
	}
?>