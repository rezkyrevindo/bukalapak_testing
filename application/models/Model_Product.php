<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Product extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    public function getProduct()
    {
        // pandu
        $this->db->where('id_user', $this->session->userdata('id_user'));
        return $this->db->get('product')->result_array();
    }

      public function getProductOrang()
    {
        // pandu
        $this->db->where('id_user !=', $this->session->userdata('id_user'));
        return $this->db->get('product')->result_array();
    }

    public function getIdTerakhir(){
        // pandu
            $this->db->select('id_product');
            $this->db->order_by('id_product','DESC');
            return $this->db->get('product')->row_array();
    }


    public function delete($id)
    {
        // pandu
        $this->_deleteImage($id);
        $this->db->where('id_product', $id);
        $this->db->delete('product');
    }

    public function edit($id)
    {
        // pandu
        $data = array(
            "nama_product"      => $this->input->post('nama'),
            "deskripsi"         => $this->input->post('deskripsi'),
            "harga"             => $this->input->post('harga'),
            "id_user"           => $this->session->userdata('id_user')
        );
        if(!empty($_FILES["image"]["name"])){
                $data['img']      = $this->_uploadImage($id);
        }


        $this->db->where('id_product', $id);
        $this->db->update('product', $data);
    }

    public function getById($id)
    {
        // pandu
        $this->db->where('id_product', $id);
        return $this->db->get('product')->row();
    }

    public function tambah()
    {
        // pandu
        $data = array(
            "nama_product"      => $this->input->post('nama'),
            "deskripsi"         => $this->input->post('deskripsi'),
            "harga"             => $this->input->post('harga'),
            "id_user"           => $this->session->userdata('id_user'),
            "img"               => $this->_uploadImage()
        );

        $this->db->insert('product', $data); // Untuk mengeksekusi perintah insert data
    }
    private function _uploadImage($id = '')
    {
        // pandu
        $config['upload_path']          = './upload/img/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        if ($id == '') {
            $config['file_name']            = $this->getIdTerakhir()['id_product'] +1;
        }else{
            $this->_deleteImage($id);
            $config['file_name']            = $id;
        }
        
        $config['overwrite']            = true;
        $config['max_size']             = 1024 * 10; // 10MB    
        // $config['max_width']            = 1024;
        // $config['max_height']           = 768;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");

        }
        
        return "default.jpeg";
    }
    private function _deleteImage($id)
    {
        // pandu
        $lomba = $this->getById($id);
        if ($lomba->img[0] != "default.jpg") {
            $filename = explode(".", $lomba->img)[0];
            return array_map('unlink', glob(FCPATH."upload/img/$filename.*"));
        }
    }
    
    
    
}
