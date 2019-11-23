<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_List_Product extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function getProduct()
    {
        return $this->db->get('product')->result_array();
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pegawai');
    }

    public function edit($id)
    {
        $data = array(
            "nama_product" => $this->input->post('nama_product'),
            "deskripsi" => $this->input->post('deskripsi'),
            "harga" => $this->input->post('harga'),
            "id_user" => $this->input->post('id_user')
        );

        $this->db->where('id', $id);
        $this->db->update('pegawai', $data);
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('product')->row();
    }

    public function tambah()
    {
        $data = array(
            "nama_product" => $this->input->post('nama_product'),
            "deskripsi" => $this->input->post('deskripsi'),
            "harga" => $this->input->post('harga'),
            "id_user" => $this->input->post('id_user')
        );

        $this->db->insert('product', $data); // Untuk mengeksekusi perintah insert data
    }
}
?>