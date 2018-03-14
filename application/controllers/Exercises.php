<?php

class Classes extends CI_Controller{

  function __construct(){
    parent::__construct();
    date_default_timezone_set("Asia/Manila");
    $this->load->model('accounts_model');
    $this->load->library('upload');
  }

  public function index(){

    $data = array(
      'title' => "WORKOUT EXERCISES",
    );
    $this->load->view('includes/header', $data);
    $this->load->view('exercises/admin/index');
    $this->load->view('includes/footer');
  }

}