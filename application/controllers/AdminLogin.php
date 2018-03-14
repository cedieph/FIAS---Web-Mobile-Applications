<?php

class AdminLogin extends CI_Controller{

  public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Manila");
        if($this->session->a_logged_in){
            redirect('admin');
        }
    }

    public function index(){
        $data = array(
            'title' => "FIAS: Gold's Gym Acropolis",
            'login' => true,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/login');
        $this->load->view('admin/includes/footer');
    }

    public function do_login(){
        $username = $this->input->post('username',true);
        $password = $this->input->post('password',true);
        $this->form_validation->set_rules('username','Username','required|xss_clean|trim');
        $this->form_validation->set_rules('password','Password','required|xss_clean|trim');
        $validator = array('success'=>FALSE,'messages'=>array());
        
        if($this->form_validation->run() == TRUE){
            $data = array(
                'username' => $username,
                'password' => sha1($password),
            );
            $user = $this->admin->fetch('admin',$data)[0];
            $userdata = array('a_logged_in'=>TRUE, "adminid"=>$user->id);
            if(!$user){
                
                $validator['message'] = "Invalid Account";
                $validator['success'] = FALSE;
                $validator['errormsg'] = TRUE;
            
            }
            else{
                if($this->insert_logs($user->id,'1',"Login",0)){
                    $this->session->set_userdata($userdata);
                    $validator['message'] = "Login Success";
                    $validator['success'] = TRUE;
                    $validator['errormsg'] = FALSE;
                }
                else{
                    $validator['message'] = "Please Try Again";
                    $validator['success'] = FALSE;
                    $validator['errormsg'] = TRUE;
                }

            }

            echo json_encode($validator);

        }
        else{
            foreach($_POST as $key => $value){
                $validator['messages'][$key] = form_error($key);
                $validator['success'] = FALSE;
                $validator['errormsg'] = FALSE;
            }
            echo json_encode($validator);
        }
    
    
    }

    public function insert_logs($id, $type, $activity, $act_type){
        $data = array(
            'user_id' => $id,
            'account_type' => $type,
            'activity' => $activity,
            'activity_type' => $act_type,
        );
        return $this->model->insert('audit_trails', $data);
    }

}
