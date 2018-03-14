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
      'title' => "WORKOUT CLASSES",
    );
    $this->load->view('includes/header', $data);
    $this->load->view('classes/admin/index');
    $this->load->view('includes/footer');
  }

  //CLASS WORKOUTS
  public function workouts(){
    $allItems = $this->accounts_model->fetch("class");
    $data = array(
        'title' => "WORKOUT CLASS MANAGEMENT",
        'classes' => $allItems,
    );
    $this->load->view('includes/header', $data);
    $this->load->view('classes/admin/index');
    $this->load->view('classes/admin/workouts');
    $this->load->view('includes/footer');
  }

  public function workout_view(){
    if(!$id = $this->uri->segment(3)){
        redirect('classes/workouts');
     }
     $class = $this->accounts_model->getClassWithTrainer($id);
     if (!$class) {
         redirect('classes/workouts');
    }
    $data = array(
        'class' => $class[0]
    );
    $this->load->view('includes/header',$data);
    $this->load->view('classes/admin/index');
    $this->load->view('classes/admin/view_workout');
    $this->load->view('includes/footer');
}

  public function add_workout(){
    $data['success'] = $this->session->flashdata('success');
    $data['error'] = $this->session->flashdata('error');
    $data['classes'] = $this->accounts_model->fetch('class');    
      
    $this->load->view('includes/header', $data);
    $this->load->view('classes/admin/index');
    $this->load->view('classes/admin/add_workouts');
    $this->load->view('includes/footer');
  }    
  
  public function insert_workout(){

    $data = array(
      'class_name' => $this->input->post('class_name'),
      'class_desc' => $this->input->post('class_desc'),
      'day' => $this->input->post('day'),
      'start_time' => strtotime($this->input->post('start')),
      'end_time' => strtotime($this->input->post('end')),
      'trainer_id' => $this->input->post('trainer_id'),
      'status' => $this->input->post('status')
    );
    $this->form_validation->set_rules('class_name', 'Class Name', 'required');    
    $this->form_validation->set_rules('class_desc', 'Class Description', 'required');
    $this->form_validation->set_rules('day', 'Day', 'required');
    $this->form_validation->set_rules('start', 'Start Time', 'required');
    $this->form_validation->set_rules('end', 'End Time', 'required');
    $this->form_validation->set_rules('trainer_id', 'Trainer', 'required');
    $this->form_validation->set_rules('status', 'Status', 'required');

    if($this->form_validation->run() == false){
        
        $dat = validation_errors();
        $this->session->set_flashdata('error', $dat);
        redirect('classes/add_workout');
    }
    else{ 
        if (!$this->upload->do_upload('img')) {
            $dat = $this->upload->display_errors();
            $this->session->set_flashdata('error', $dat);
            redirect('classes/add_workout');
        } else {
            echo '<pre>';
            print_r($this->upload->data());
            echo '</pre>';
            $image = $this->upload->data('file_name');
        }

        $data['img'] = $image;
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        if( $this->accounts_model->insert('class',$data)){
            $dat = "You have successfully add another Class";
            $this->session->set_flashdata('success', $dat);
            redirect('classes/workouts');
        }
    }
  }

  public function updateworkout(){

    $data = array(
        'title' => "Update Workout",
        'classes' => $this->accounts_model->fetch('class',array('class_id'=>$this->uri->segment(3))),
    );

    $this->load->view('includes/header',$data);
    $this->load->view('classes/admin/index');
    $this->load->view('classes/admin/update_workout');
    $this->load->view('includes/footer');
   
}

public function update_workout_data(){

    $class_id = $this->uri->segment(3);
    
    $data2 = array(
        'class_name' => $this->input->post('class_name'),
        'class_desc' => $this->input->post('class_desc'),
        'day' => $this->input->post('day'),
        'start_time' => strtotime($this->input->post('start')),
        'end_time' => strtotime($this->input->post('end')),
        'trainer_id' => $this->input->post('trainer_id'),
        'status' => $this->input->post('status')
    );

    if (!$this->upload->do_upload('img')) {
        $dat = $this->upload->display_errors();
        $this->session->set_flashdata('error', $dat);
        redirect('classes/workout_view');
    } else {
        echo '<pre>';
        print_r($this->upload->data());
        echo '</pre>';
        $image = $this->upload->data('file_name');
    }

    $data['img'] = $image;
    echo '<pre>';
    print_r($data);
    echo '</pre>';

    if(
        $this->accounts_model->update('class',$data, $data2,array('class_id'=>$class_id))
        ){
        $dat = "You have successfully add another Class";
        $this->session->set_flashdata('success', $dat);
        redirect('classes/workout_view');
    }
}


  //TRAINERS
  public function trainers(){
    $allItems = $this->accounts_model->fetch("trainer");
    
    $data = array(
        'title' => "WORKOUT CLASS MANAGEMENT",
        'trainers' => $allItems,
    );
    $this->load->view('includes/header',$data);
    $this->load->view('classes/admin/index');
    $this->load->view('classes/admin/trainers');
    $this->load->view('includes/footer');
  }
  
  public function add_trainer(){
    $data['success'] = $this->session->flashdata('success');
    $data['error'] = $this->session->flashdata('error');
    $data['trainer'] = $this->accounts_model->fetch('trainer');    
    
    $this->load->view('includes/header',$data);
    $this->load->view('classes/admin/index');
    $this->load->view('classes/admin/add_trainer');
    $this->load->view('includes/footer');
  }

  public function insert_trainer(){
    $data = array(
        'trainer_fname' => $this->input->post('fname'),
        'trainer_lname' => $this->input->post('lname'),
        'status' => $this->input->post('status')
    );
    $this->form_validation->set_rules('trainer_fname', 'First Name', 'required');    
    $this->form_validation->set_rules('trainer_lname', 'Last Name', 'required');
    
    if(!$this->form_validation->run() == false){
        
        $dat = validation_errors();
        $this->session->set_flashdata('error', $dat);
        redirect('classes/add_trainer');
    }
    else{ 
        if( $this->accounts_model->insert('trainer',$data)){
            $dat = "You have successfully add another Trainer";
            $this->session->set_flashdata('success', $dat);
            redirect('classes/trainers');
        }
    }      
  }

  public function update_trainer(){
    $data = array(
      'title' => "Update Trainer",
      'trainers' => $this->accounts_model->fetch('trainer',array('trainer_id'=>$this->uri->segment(3))),
    );
     
    $this->load->view('includes/header',$data);
    $this->load->view('classes/admin/index');
    $this->load->view('classes/admin/update_trainer');
    $this->load->view('includes/footer');
  }

  public function update(){

    $trainer_id = $this->uri->segment(3);
    $data = array(
        'trainer_fname' => $this->input->post('fname'),
        'trainer_lname' => $this->input->post('lname'),
        'status' => $this->input->post('status'),
    );
    $this->form_validation->set_rules('trainer_fname', 'First Name', 'required');    
    $this->form_validation->set_rules('trainer_lname', 'Last Name', 'required');
    
    if(!$this->form_validation->run() == false){
        
        $dat = validation_errors();
        $this->session->set_flashdata('error', $dat);
        redirect('classes/update_trainer');
    }
    else{ 
        if( $this->accounts_model->update('trainer',$data, array('trainer_id' => $trainer_id))){
            $dat = "You have successfully add another Trainer";
            $this->session->set_flashdata('success', $dat);
            redirect('classes/trainers');
        }
    }      
  }

}