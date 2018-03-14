<?php

class Landing extends CI_Controller{

  public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Manila");
    }

    public function index(){
      $data = array(
        'title' => "FIAS: Gold's Gym Acropolis",
      );
        $this->load->view('includes/header', $data);
        $this->load->view('landing/index');
        $this->load->view('includes/footer');
    }
}
