<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Add_product extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {

        $this->load->view('_partials/header');
        $this->load->view('add_product/index');
        $this->load->view('_partials/footer');
    }
}
