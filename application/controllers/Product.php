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
        // pandu
        $data['product'] = $this->model_product->getProduct();
        $this->load->view('_partials/header');
        $this->load->view('product/index', $data);
        $this->load->view('_partials/footer');
    }

    public function detail_product($id)
    {
        // pandu
        $data['product'] = $this->model_product->getById($id);
        $this->load->view('_partials/header');
        $this->load->view('product/detail', $data);
        $this->load->view('_partials/footer');
    }

    
    public function delete($id){
        // pandu
        if($this->session->userdata('username') == null){
            redirect('user/login');
        }

        $this->model_product->delete($id);
        redirect(base_url('product'));
    }

    public function edit($id){
        // pandu
        if($this->session->userdata('username') == null){
            redirect('user/login');
        }
        if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
          $this->model_product->edit($id); // Panggil fungsi edit() yang ada di SiswaModel.php
          redirect('product');
        }
        $data['product'] = $this->model_product->getById($id);
        $this->load->view('_partials/header');
        $this->load->view('product/edit_product', $data);
        $this->load->view('_partials/footer');
    }
    public function tambah(){
        // pandu
        if($this->session->userdata('username') == null){
            redirect('user/login');
        }
        if($this->input->post('submit')){ // Jika user mengklik tombol submit yang ada di form
            $this->model_product->tambah(); // Panggil fungsi save() yang ada di SiswaModel.php
            
            redirect('product');
        }
        $data['product'] = $this->model_product->getProduct();
        $this->load->view('_partials/header');
        $this->load->view('product/add_product');
        $this->load->view('_partials/footer');
    }
}
