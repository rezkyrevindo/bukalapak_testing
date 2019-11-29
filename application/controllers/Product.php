<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Product extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('model_product');
    }

    public function index()
    {
        $data['product'] = $this->model_product->getProduct();
        $this->load->view('_partials/header');
        $this->load->view('Product/index', $data);
        $this->load->view('_partials/footer');
    }

    public function delete($id)
    {
        // if($this->session->userdata('username') == null){
        // 	redirect('register');
        // }

        $this->model_product->delete($id);
        redirect(base_url('product'));
    }
    public function edit($id)
    {
        // if($this->session->userdata('username') == null){
        // 	redirect('register');
        // }

        $this->load->view('_partials/header');
        $this->load->view('Product/edit_product');
        $this->load->view('_partials/footer');

        // $this->model_product->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
        // redirect('product');
    }
    public function add()
    {
        // if($this->session->userdata('username') == null){
        // 	redirect('register');
        // }

        $this->load->view('_partials/header');
        $this->load->view('Product/add_product');
        $this->load->view('_partials/footer');

        // $this->model_product->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
        // redirect('product');
    }
}
