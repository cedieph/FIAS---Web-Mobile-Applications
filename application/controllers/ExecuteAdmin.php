<?php


//For execution of algorithms
class ExecuteAdmin extends CI_Controller{

  public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Manila");
    }

    /* ------------------------- USER ------------------------------------- */
    public function update_user(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'status' => $this->input->post('status'),
        );
        if($this->admin->update('accounts',$data,array('id'=>$this->input->post('id') ) ) ){
            
            if($this->insert_logs($this->session->adminid,1,"Update User",5)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully update the user";
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to update the user";

        }

        echo json_encode($validator);
    }

    public function undelete_user(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'remove_status' => 0,
        );
        if($this->admin->update('accounts',$data,array('id'=>$this->input->post('id') ) ) ){
                
            if($this->insert_logs($this->session->adminid,1,"Update User",5)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully unremoved the user";
       
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to unremove the user";
        }

        echo json_encode($validator);
    }

    
    public function delete_user(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'remove_status' => 1,
        );
        if($this->admin->update('accounts',$data,array('id'=>$this->input->post('id') ) ) ){
                
            if($this->insert_logs($this->session->adminid,1,"Delete User",6)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully remove the user";
       
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to remove the user";
        }

        echo json_encode($validator);
    }

    /* ------------------------- TRAINER ------------------------------------- */
    public function update_trainer(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'status' => $this->input->post('status'),
        );
        if($this->admin->update('trainer',$data,array('id'=>$this->input->post('id') ) ) ){
            
            if($this->insert_logs($this->session->adminid,1,"Update Trainer",7)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully update the trainer";
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to update the trainer";

        }

        echo json_encode($validator);
    }

    // public function fetch_trainer(){
    //     $this->datatable->setColumns(array('id', 'trainer_fname', 'trainer_lname', 'gender', 'status', 'status'));
    //     $col = $this->datatable->getColumns();

    //     $filter = $this->datatable->setFilter($_POST['search']['value'], $_POST['columns']);
    //     $order = $this->datatable->setOrder($_POST);
    //     $limit = $this->datatable->setLimit($_POST['start'], $_POST['length']);

    //     $sql = "SELECT $col from trainer  " . $filter['stmnt'] . " $order $limit";
    //     $sql2 = "SELECT $col from trainer  " . $filter['stmnt'] . " $order";

    //     $query = $this->db->query($sql, $filter['bindData']);
    //     $query2 = $this->db->query($sql2, $filter['bindData']);


    //     $data = $query->result_array();
    //     $rdata = array();
    //     foreach ($data as $val) {
    //         $rdata[] = array_values($val);
    //     }
    //     $tableData = array(
    //         "draw" => $_POST['draw'],
    //         "recordsFiltered" => $query2->num_rows(),
    //         "recordsTotal" => $query2->num_rows(),
    //         "data" => $rdata,
    //         "filter" => $filter['stmnt'],
    //         "bind" => $filter['bindData'],
    //         "sql" => $sql,
    //     );
    //     echo json_encode($tableData);
    // }

    public function fetch_trainer(){
        $id = $this->input->post('id',true);
        $trainer = $this->admin->fetch('trainer',array('id'=>$id))[0];
        if($trainer){
            $validator = array(
                'success'=>TRUE,
                'message' => 'Trainer Exist!',
                'trainer' => $trainer,
            );
            echo json_encode($validator);
        }
        else{
            
            $validator = array(
                'success'=>FALSE,
                'message' => 'Class Not Exist!',
            );
            echo json_encode($validator);
        }

    }

    public function update_trainer_data(){
        $validator = array('success'=>FALSE,'messages'=>array());
        $this->form_validation->set_rules('fname','First Name','required');
        $this->form_validation->set_rules('lname','Last Name','required');
        $this->form_validation->set_rules('gender','Gender','required');
        // $update_trainer = $this->input->post('id',true);
        if($this->form_validation->run()){

            $validator['post'] = $_POST;
            // $validator['success'] = TRUE;
            $validator['message'] = "Data Passed!";
            $where = array('id'=>$this->input->post('trainer_id',true));
            $data = array(
                'trainer_fname' => $this->input->post('fname',true),
                'trainer_lname' => $this->input->post('lname',true),
                'gender' => $this->input->post('gender',true),
            );
            // if($update_trainer != ""){
            //     $data['id'] = $update_trainer;
            // }

            if($this->admin->update('trainer',$data,$where)){
                $validator['success'] = TRUE;
                $validator['message'] = "Update Successfully";
            }
            else{
                $validator['success'] = FALSE;
                $validator['message'] = "Update Failed";
            }
            $validator['data'] = $data;
            echo json_encode($validator);
        }
        else{
            foreach ($_POST as $key => $value) {
                $validator['messages'][$key] = form_error($key);
                $validator['success'] = FALSE;
            }
            $validator['errors'] = validation_errors();
            echo json_encode($validator);
        }
    }

    public function delete_trainer(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'remove_status' => 1,
        );
        if($this->admin->update('trainer',$data,array('id'=>$this->input->post('id') ) ) ){
            
            if($this->insert_logs($this->session->adminid,1,"Delete Trainer",8)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully remove the trainer";
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to remove the trainer";
        }

        echo json_encode($validator);
    }

    public function undelete_trainer(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'remove_status' => 0,
        );
        if($this->admin->update('trainer',$data,array('id'=>$this->input->post('id') ) ) ){
                
            if($this->insert_logs($this->session->adminid,1,"Update Trainer",7)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully unremoved the trainer";
       
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to unremove the trainer";
        }

        echo json_encode($validator);
    }

    public function add_trainer(){
        $validator = array('success'=>FALSE,'messages'=>array());
        $this->form_validation->set_rules('fname',"First Name","required|trim|xss_clean");
        $this->form_validation->set_rules('lname',"Last Name","required|trim|xss_clean");
        // $this->form_validation->set_rules('pass1',"Password","required|trim|xss_clean|min_length[6]|matches[pass2]");
        // $this->form_validation->set_rules('pass2',"Confirm Password","required|trim|xss_clean|min_length[6]|matches[pass1]");

        if($this->form_validation->run() == TRUE){
            $data = array(
                'trainer_fname' => $this->input->post('fname',true),
                'trainer_lname' => $this->input->post('lname',true),
                'gender' => $this->input->post('gender',true),
                // 'password' => $this->input->post('pass1',true),
            );
            if($this->admin->insert('trainer',$data)){
                $validator['success'] = TRUE;
                $validator['message'] = "Successfully Added";
            }
            else{
                $validator['success'] = FALSE;
                $validator['message'] = "Added Failed";
                $validator['messages_error'] = FALSE;
            }
            echo json_encode($validator);
        }
        else{
            foreach($_POST as $key => $value){
                $validator['messages'][$key] = form_error($key);
                $validator['success'] = FALSE;
                $validator['messages_error'] = TRUE;
            }
            echo json_encode($validator);
        }
    }

    /*---------------------------- CLASS ------------------------------------------- */

    public function deactivate_class(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'status' => $this->input->post('status'),
        );
        if($this->admin->update('classes',$data,array('id'=>$this->input->post('id') ) ) ){
            
            if($this->insert_logs($this->session->adminid,1,"Update Class",10)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully deactivate the class";
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to deactivate the class";

        }

        echo json_encode($validator);
    }    

    public function update_class(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'status' => $this->input->post('status'),
        );

        if($this->admin->update('classes',$data,array('id'=>$this->input->post('id') ) ) ){
            
            if($this->insert_logs($this->session->adminid,1,"Update Class",10)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully update the class";
                // $validator['wew'] = "nyeaw";
            }
        
        }
        else{
            
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to update the class";
            
        }

        echo json_encode($validator);

    }   

    /* ------------------------- CLASS SCHEDULE ------------------------------------- */

    public function fetch_class_sched(){
        $id = $this->input->post('id',true);
        $class = $this->admin->fetch('class',array('id'=>$id))[0];
        if($class){
            $trainer = $this->admin->fetch('trainer',array('id'=>$class->trainer_id,'status'=>1))[0];
            $validator = array(
                'success'=>TRUE,
                'message' => 'Class Exist!',
                'class' => $class,
                'trainer' => $trainer,
            );
            if($trainer)
                $validator['trainer'] = $trainer;
            else
                $validator['trainer'] = FALSE;
            echo json_encode($validator);
        }
        else{
            
            $validator = array(
                'success'=>FALSE,
                'message' => 'Class Not Exist!',
            );
            echo json_encode($validator);
        }
    }

    public function update_schedule_class(){
        $validator = array('success'=>FALSE,'messages'=>array());
        $this->form_validation->set_rules('start_time','Start Time','required|xss_clean|trim');
        $this->form_validation->set_rules('end_time','End Time','required|xss_clean|trim');
        $this->form_validation->set_rules('day','Start Time','required|xss_clean|trim');
        $new_trainer = $this->input->post('trainer_id',true);
        if($this->form_validation->run()){

            $validator['post'] = $_POST;
            // $validator['success'] = TRUE;
            $validator['message'] = "Data Passed!";
            $where = array('id'=>$this->input->post('class_id',true));
            $data = array(
                'start_time' => strtotime($this->input->post('start_time',true)),
                'end_time' => strtotime($this->input->post('end_time',true)),
                'day' => $this->input->post('day',true),
            );
            if($new_trainer != ""){
                $data['trainer_id'] = $new_trainer;
            }

            if($this->admin->update('class',$data,$where)){
                $validator['success'] = TRUE;
                $validator['message'] = "Update Successfully";
            }
            else{
                $validator['success'] = FALSE;
                $validator['message'] = "Update Failed";
            }
            $validator['data'] = $data;
            echo json_encode($validator);
        }
        else{
            foreach ($_POST as $key => $value) {
                $validator['messages'][$key] = form_error($key);
                $validator['success'] = FALSE;
            }
            $validator['errors'] = validation_errors();
            echo json_encode($validator);
        }
    }

    public function update_classsched(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'status' => $this->input->post('status'),
        );
        if($this->admin->update('class',$data,array('id'=>$this->input->post('id') ) ) ){
            
            if($this->insert_logs($this->session->adminid,1,"Update Class",10)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully update the class schedule";
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to update the class schedule";

        }

        echo json_encode($validator);
    }

    public function delete_classsched(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'remove_status' => $this->input->post('status',true),
        );
        if($this->admin->update('class',$data,array('id'=>$this->input->post('id') ) ) ){
            
            if($this->insert_logs($this->session->adminid,1,"Delete Class",10)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully remove the class schedule";
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to remove the class schedule";
        }

        echo json_encode($validator);
    }

    public function undelete_sched(){
        $validator = array('success'=>FALSE, 'message'=>"");

        $data = array(
            'remove_status' => 1,
        );
        if($this->admin->update('class',$data,array('id'=>$this->input->post('id') ) ) ){
                
            if($this->insert_logs($this->session->adminid,1,"Update Class",10)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully unremoved the class schedule";
       
            }
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "You have failed to unremove the class schedule";
        }

        echo json_encode($validator);
    }



    public function add_class(){
        $validator = array('success'=>FALSE, 'message'=>"");
        $class = $this->admin->fetch('classes', array('id'=>$this->input->post('class_id',true)))[0];
        $data = array(
            'class_name' => $class->name,
            'class_desc' => $class->description,
            'start_time' => strtotime($this->input->post('start_time',true)),
            'end_time' => strtotime($this->input->post('end_time',true)),
            'day' => $this->input->post('day',true),
            'trainer_id' => $this->input->post('trainer_id',true),
            'classes_id' => $this->input->post('class_id',true),
        );
        $validator['data'] = $data;
        if($this->admin->insert('class',$data)){

            if($this->insert_logs($this->session->adminid,1,"Admin - Add Class",10)){
                $validator['success'] = TRUE;
                $validator['message'] = "Successfully Add A Class";
                //$validator = array('success'=>TRUE, 'message'=>"Successfully Add A Class");
        
            }
        }
        else{

            $validator['success'] = TRUE;
            $validator['message'] = "Failed To Add Class";
            //$validator = array('success'=>FALSE, 'message'=>"Failed To Add Class");
        }
        
        echo json_encode($validator);
    }

    /* ------------------------- WORKOUT PLAN ------------------------------------- */
    public function add_list(){
        
        $validator = array('success'=>FALSE, 'messages'=>array());

        $this->form_validation->set_rules('workoutname',"Workout Name","required|xss_clean|trim");
        if($this->form_validation->run() == TRUE){
            $data = array(
                'name' => $this->input->post('workoutname',true),
                'week_id' => $this->input->post('weekid',true),
                'level_id' => $this->input->post('levelid',true),
                'workout_id' => $this->input->post('workoutid',true),
            );

            if($this->admin->insert('workout_list',$data)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully add workout in week " . $data['week_id'];
            }

            echo json_encode($validator);
        }
        else{
            foreach($_POST as $key => $value){
                $validator['success'] = FALSE;
                $validator['messages'][$key] = form_error($key);
            }

            echo json_encode($validator);
        }

    }

    public function update_status_list(){
        $status = $this->input->post('status',true);
        $week_id = $this->input->post('weekid',true);
        $level_id = $this->input->post('levelid',true);
        $workout_id = $this->input->post('workoutid',true);
        $id = $this->input->post('id',true);
        $data = array(
            'id' => $id,
            'week_id' => $week_id,
            'level_id' => $level_id,
            'workout_id' => $workout_id,
        );
        if($this->admin->update('workout_list',array('status'=>$status), $data) ){
            $validator['success'] = TRUE;
            $validator['message'] = "Status Update Success";
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "Status Update Success";
        }

        echo json_encode($validator);
    }

    public function add_workout_week(){
        $validator = array('success'=>true,"messages"=>array());
        $this->form_validation->set_rules('week_name',"Week Name","required|trim|xss_clean");
        $this->form_validation->set_rules('week_week',"Workout Week","required|trim|xss_clean|numeric");
        $this->form_validation->set_rules('week_level',"Workout Level","required|trim|xss_clean|numeric");
        $this->form_validation->set_rules('week_workout',"Workout Name","required|trim|xss_clean");
        $week_name = $this->input->post('week_name',true);
        $week_week = $this->input->post('week_week',true);
        $week_level = $this->input->post('week_level',true);
        $week_workout = $this->input->post('week_workout',true);
        $validator['type'] = $this->input->post('type',true);
        if($this->form_validation->run() == TRUE){
            $data = array(
                'name' => $week_name,
                'week' => $week_week,
                'level' => $week_level,
                'workout_id' => $week_workout,
            );

            $checkData = array(
                'week' => $week_week,
                'level' => $week_level,
                'workout_id' => $week_workout,
            );
            $weekdata = $this->admin->fetch('workout_levels',$checkData)[0];
            if(!$weekdata){
                if($this->admin->insert('workout_levels',$data)){
                    $validator['success'] = TRUE;
                    $validator['message'] = "You have successfully add a week to your workout";
                }
                else{
                    $validator['success'] = FALSE;
                    $validator['message'] = "You have failed to add a week to your workout, Please Try Again!";
                }
            }
            else{
                $validator['success'] = FALSE;
                $validator['week_error'] = TRUE;
                $validator['message'] = "Please change the week ". $week_week ." to another week.";
            }
            echo json_encode($validator);
        }
        else{
            foreach($_POST as $key => $value){
                $validator['success'] = FALSE;
                $validator['messages'][$key] = form_error($key);
                $validator['week_error'] = FALSE;
            }
            echo json_encode($validator);
        }

    }

    public function add_exercise(){

        $validator = array('success'=>FALSE,'messages'=>array());
        
        $this->form_validation->set_rules ( "name", "Exercise Name", "trim|required|xss_clean" );
        $this->form_validation->set_rules ( "instructions", "Instructions", "trim|required|xss_clean" );
        $this->form_validation->set_rules ( "type", "Exercise Type", "trim|required|xss_clean" );
        $this->form_validation->set_rules ( "equipment", "Equipment Type", "trim|required|xss_clean" );
        $this->form_validation->set_rules ( "target", "Muscle Targeted", "trim|required|xss_clean" );
        $this->form_validation->set_rules ( "workout_type", "Workout Type", "trim|required|xss_clean" );

        $validator['files'] = $_FILES;
        $validator['data'] = $_POST;
        $is_file = false;
        $error_upload = false;
        $data = array(
            'name' => $this->input->post('name',true),
            'instructions' => $this->input->post('instructions',true),
            'equipment_type' => $this->input->post('equipment',true),
            'muscle_targeted' => $this->input->post('target',true),
            'workout_type' => $this->input->post('workout_type',true),
            'type' => $this->input->post('type',true),
        );

        $file_name = time().'_'.$data['name'] ;
        $config['upload_path']          = './uploads/exercise/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1366;
        $config['max_height']           = 768;
        $config['file_name']            = $file_name;
        $config['overwrite']            = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('img')){
                // $data['error'] = $this->upload->display_errors();
                // $this->session->set_flashdata('error',TRUE);
                $validator['error'] = $this->upload->display_errors();
                $error_upload = TRUE;
                $validator['success'] = FALSE;
                // $this->load->view('member/includes/header', $data);
                // $this->load->view('member/application/accountOperations', $data);
        }
        else{
                $img = $this->upload->data('file_name');
                // $validator['picpath'] = $img;
                $data['image'] = $img;
                $validator['success'] = TRUE;
        }

        $validator['error_upload'] = $error_upload;
        if($this->form_validation->run() == TRUE){
                
            if($validator['error_upload'] != TRUE){    
                if($this->admin->insert('exercises',$data)){
                    $validator['success'] = TRUE;
                    $validator['message'] = "Add Exercise Success";
                }
                else{
                    $validator['success'] = FALSE;
                    $validator['message'] = "Failed Add";

                }
            }
            else{
                $validator['success'] = FALSE;
                $validator['message'] = $validator['error'];
            }
            
            echo json_encode($validator);
        }
        else{
            foreach($_POST as $key => $value){
                $validator['success'] = FALSE;
                $validator['messages'][$key] = form_error($key);
                // $validator['post'][$key] = $value;
            }
            $validator['errors'] = validation_errors();
            $validator['error_upload'] = FALSE;
            echo json_encode($validator);
        }
    }

    public function update_exercise_details(){
        $validator = array('success'=>FALSE,'messages'=>array());
        
        $this->form_validation->set_rules ( "name", "Exercise Name", "trim|xss_clean" );
        $this->form_validation->set_rules ( "instructions", "Instructions", "trim|xss_clean" );
        $this->form_validation->set_rules ( "type", "Exercise Type", "trim|xss_clean" );
        $this->form_validation->set_rules ( "equipment", "Equipment Type", "trim|xss_clean" );
        $this->form_validation->set_rules ( "target", "Muscle Targeted", "trim|xss_clean" );
        $this->form_validation->set_rules ( "workout_type", "Workout Type", "trim|xss_clean" );

        $validator['files'] = $_FILES;
        $validator['data'] = $_POST;
        $is_file = false;
        $error_upload = false;
        $data = array(
            'name' => $this->input->post('name',true),
            'instructions' => $this->input->post('instructions',true),
            'equipment_type' => $this->input->post('equipment',true),
            'muscle_targeted' => $this->input->post('target',true),
            'workout_type' => $this->input->post('workout_type',true),
            'type' => $this->input->post('type',true),
        );

        $file_name = time().'_'.$data['name'] ;
        $config['upload_path']          = './uploads/exercise/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1024;
        $config['max_width']            = 1366;
        $config['max_height']           = 768;
        $config['file_name']            = $file_name;
        $config['overwrite']            = TRUE;
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if(!empty($_FILES['files']['img'])){
            if (!$this->upload->do_upload('img')){
                    // $data['error'] = $this->upload->display_errors();
                    // $this->session->set_flashdata('error',TRUE);
                    $validator['error'] = $this->upload->display_errors();
                    $error_upload = TRUE;
                    $validator['success'] = FALSE;
                    // $this->load->view('member/includes/header', $data);
                    // $this->load->view('member/application/accountOperations', $data);
            }
            else{
                    $img = $this->upload->data('file_name');
                    // $validator['picpath'] = $img;
                    $data['image'] = $img;
                    $validator['path'] = $img;
                    $validator['success'] = TRUE;
            }
        }
        else{
            $validator['error'] = "what";
        }

        $validator['error_upload'] = $error_upload;
        if($this->form_validation->run() == TRUE){
                
            if($validator['error_upload'] != TRUE){    
                if($this->admin->update('exercises',$data,array('id'=>$this->input->post('id',true) ) ) ){  
                    $validator['success'] = TRUE;
                    $validator['message'] = "Add Exercise Success";
                }
                else{
                    $validator['success'] = FALSE;
                    $validator['message'] = "Failed Add";

                }
            }
            else{
                $validator['success'] = FALSE;
                $validator['message'] = $validator['error'];
            }
            
            echo json_encode($validator);
        }
        else{
            foreach($_POST as $key => $value){
                $validator['success'] = FALSE;
                $validator['messages'][$key] = form_error($key);
                // $validator['post'][$key] = $value;
            }
            $validator['errors'] = validation_errors();
            $validator['error_upload'] = FALSE;
            echo json_encode($validator);
        }
    }

    public function update_exercise(){
        $validator = array('success'=>FALSE,'message'=>"");
        $data = array(
            'status' => $this->input->post('status',true),
        );
        $where = array(
            'id' => $this->input->post('id',true),
        );
        if($this->admin->update('exercises',$data,$where)){
            $validator['success'] = TRUE;
            $validator['message'] = "Exercise Status Updated";
        }
        else{
            
            $validator['success'] = FALSE;
            $validator['message'] = "Exercise Status Failed to Update";
        }

        echo json_encode($validator);
    }

    public function fetch_exercise(){
        $validator = array('success'=>TRUE, 'message'=>"");
        
        $exercise = $this->admin->fetch('exercises',array('id'=>$this->input->post('id')))[0];
        if($exercise){
            $validator['success'] = TRUE;
            $validator['message'] = "Exercise Exist";
            $validator['ex'] = $exercise;
        }
        else{
            $validator['success'] = FALSE;
            $validator['message'] = "Exercise Not Exist";
            $validator['ex'] = $exercise;
        }

        echo json_encode($validator);

    }

    public function logout(){
        $this->session->sess_destroy();
        
        if($this->insert_logs($this->session->adminid,1,"Logout",2)){
            redirect('');
        }
    }


    public function insert_logs($id, $type, $activity, $act_type){
        $data = array(
            'user_id' => $id,
            'account_type' => $type,
            'activity' => $activity,
            'activity_type' => $act_type,
        );
        return $this->admin->insert('audit_trails', $data);
    }
}