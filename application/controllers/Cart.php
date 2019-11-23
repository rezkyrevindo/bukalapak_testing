<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

  function __construct() {
      parent::__construct();
      
  }

  public function index()
  {
    
    $this->load->view('_partials/header');
    $this->load->view('Cart/index');
    $this->load->view('_partials/footer');
    
  }

  
  
  
}
