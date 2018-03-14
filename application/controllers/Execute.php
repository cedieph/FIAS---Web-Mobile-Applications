<?php


//For execution of algorithms
class Execute extends CI_Controller{

  public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Manila");
    }

    function do_login(){
        $email = $this->input->post('email',true);
        $password = $this->input->post('password',true);
        $validator = array("success"=>TRUE, "messages"=>array());
        $this->form_validation->set_rules('email',"Email Address","required|xss_clean|trim");
        $this->form_validation->set_rules('password',"Password","required|xss_clean|trim");
        if($this->form_validation->run() == TRUE){
            $data = array(
                'email' => $email,
                'password' => sha1($password),
            );
            $user = $this->model->fetch('accounts',$data)[0];
            if(!$user){
                $validator['message'] = "Invalid Account";
                $validator['success'] = false;
                $validator['errormsg'] = true;
            }
            else{
                $session_data = array('u_logged_in' => TRUE, 'userid'=>$user->id);
                if($user->status == 0){
                    $validator['message'] = "Your Account is Blocked!";
                    $validator['success'] = false;
                    $validator['errormsg'] = true;
                }
                else{
                    if($user->is_verified == 0){
                        $validator['message'] = "Verify Your Account First";
                        $validator['success'] = false;
                        $validator['errormsg'] = true;
                    }
                    else{
                        if($this->insert_logs($user->id,0,"Login",1)){
                            $this->session->set_userdata($session_data);
                            $validator['message'] = "Successfully Login Your Account";
                            $validator['success'] = true;
                            $validator['errormsg'] = false;
                        }
                        else{
                            $validator['message'] = "Invalid Account, LOGS";
                            $validator['success'] = false;
                            $validator['errormsg'] = true;
                        }
                    }
                }
            }
            echo json_encode($validator);
        }
        else{
            foreach ($_POST as $key => $value) {
                $validator['messages'][$key] = form_error($key);
                $validator['success'] = false;
                $validator['errormsg'] = false;
            }
            echo json_encode($validator);
        }
    }

    public function check_user(){
        $code = random_string('alnum', 20);
        $email = $this->input->post('email',true);
        $password = $this->input->post('pass',true);
        $password2 = $this->input->post('cpass',true);
        $validator = array("success"=>TRUE, "messages"=>array());
        $this->form_validation->set_rules('email',"Email Address","required|xss_clean|trim|is_unique[accounts.email]|valid_email");
        $this->form_validation->set_rules('pass',"Password","required|xss_clean|trim|min_length[6]");
        $this->form_validation->set_rules('cpass',"Confirm Password","required|xss_clean|trim|matches[pass]|min_length[6]");
        if($this->form_validation->run() == TRUE){
            
            $data = array(
                'email' => $email,
                'password' => sha1($password),
                'verification_code' => $code,
            );
            if($this->send_mail($data) ){
                if($this->model->insert('accounts',$data)){
                    $validator['message'] = "You have created your account, Please add some information";
                    $validator['success'] = true;
                    $validator['errormsg'] = false;
                }
                else{
                    $validator['message'] = "Please Try again";
                    $validator['success'] = false;
                    $validator['errormsg'] = true;

                }
                echo json_encode($validator);
            }
            else{
                $validator['message'] = "Please Check Your Email";
                $validator['success'] = false;
                $validator['errormsg'] = true;
                echo json_encode($validator);
            }
            
        }
        else{
            foreach ($_POST as $key => $value) {
                $validator['messages'][$key] = form_error($key);
                $validator['success'] = false;
                $validator['errormsg'] = false;
            }
            $validator['erros'] = validation_errors();
            echo json_encode($validator);
        }
    }

    public function add_form() {
        $this->load->view('forms/add_info');
    }

    public function add_info(){
        $validator = array("success"=>TRUE, "messages"=>array());
        $this->form_validation->set_rules('fname',"First Name","required|xss_clean|trim");
        $this->form_validation->set_rules('lname',"Last Name","required|xss_clean|trim");
        $this->form_validation->set_rules('bdate',"Birthdate","required|xss_clean|trim");
        $this->form_validation->set_rules('gender',"Gender","required|xss_clean|trim");
        $this->form_validation->set_rules('street',"Street","required|xss_clean|trim");
        $this->form_validation->set_rules('city',"City","required|xss_clean|trim");
        $this->form_validation->set_rules('pcode',"Postal Code","required|xss_clean|trim");
        $this->form_validation->set_rules('phone',"Phone Number","required|xss_clean|trim|min_length[11]");
        if($this->form_validation->run() == TRUE){
            $data = array(
                'user_fname' => $this->input->post('fname',true),
                'user_lname' => $this->input->post('lname',true),
                'birthdate' => $this->input->post('bdate',true),
                'gender' => $this->input->post('gender',true),
                'address' => ($this->input->post('city',true) . ' ' . $this->input->post('street',true) . ' ' . $this->input->post('pcode',true)),
                'contact' => $this->input->post('phone',true)
            );
            if($this->model->update('accounts',$data, array('email'=>$this->input->post('email',true)))){
                $validator['message'] = "You have completed your registration, Please check your email";
                $validator['success'] = true;
                $validator['errormsg'] = false;

            }
            else{
                $validator['message'] = "Please Try again";
                $validator['success'] = false;
                $validator['errormsg'] = true;

            }
            echo json_encode($validator);
        }
        else{
            foreach ($_POST as $key => $value) {
                $validator['messages'][$key] = form_error($key);
                $validator['success'] = false;
                $validator['errormsg'] = false;
            }
            echo json_encode($validator);
        }
    }

    public function activate_account(){
        $code = $this->uri->segment(3);
        $data = array(
            'verification_code' => "",
            'is_verified' => 1, 
        );
        $where = array(
            'verification_code' => $code,
        );

        if($this->model->update('accounts',$data,$where)){
            echo '<script>alert("Account Activated"); location.href = "'.base_url().'"; </script>';
        }
    }

    public function add_workout(){
        $validator = array("success"=>TRUE, "messages"=>array());
        
        $user = $this->model->fetch('user_workout',array('user_id'=>$this->session->userid));
        $flag = 1;
        if($user){
            foreach($user as $u){
                if($u->status == 1){
                    $flag = 0;
                }
            }
            $data = array(
                'user_id' => $this->session->userid,
                'workout_id' => $this->input->post('workout_id',true),
                'workout_level' => $this->input->post('level_id',true),
            );
            if($flag == 1){
                if($this->model->insert('user_workout',$data)){
                    $validator = array(
                        'success'=>true,
                        'message'=>"You have successfully add a workout to your schedule",
                    );

                    if($this->insert_logs($this->session->userid,0,"Add Workout",21)){

                    }

                }
                else{
                    $validator = array(
                        'success'=>false,
                        'message'=>"You can't add a workout, Please Try Again",
                    );

                }

            }
            else{
                $validator = array(
                    'success'=>false,
                    'message'=>"Your workout isn't complete, Finish first to move on the next workout",
                );
            }

            echo json_encode($validator);
            

        }
        else{
            
            $data = array(
                'user_id' => $this->session->userid,
                'workout_id' => $this->input->post('workout_id',true),
                'workout_level' => $this->input->post('level_id',true),
            );
            if($this->model->insert('user_workout',$data)){
                $validator = array(
                    'success'=>true,
                    'message'=>"You have successfully add a workout to your schedule",
                );
                if($this->insert_logs($this->session->userid,0,"Add Workout",21)){

                }

            }
            else{
                $validator = array(
                    'success'=>false,
                    'message'=>"You can't add a workout, Please Try Again",
                );
            }
            
            echo json_encode($validator);
        }

    }

    public function add_class(){
        $validator = array("success"=>TRUE, "messages"=>array());
        $user_id = $this->session->userid;
        $class_id = $this->input->post('class_id',true);
        $ra_id = $this->input->post('trainer_id',true);

        $user_class = $this->model->fetch('user_class',array('accounts_id'=>$user_id));

        if($user_class){
            $flag = 1;
            foreach($user_class as $user){
                if($user->class_id == $class_id){
                    $flag = 0;
                }
            }
            if($flag == 0){
                
                $validator['success'] = FALSE;
                $validator['message'] = "You can't add in Same Class, Please Try Again";
            }
            else{
                $data = array(
                    'accounts_id' => $user_id,
                    'class_id' => $class_id,
                    'trainer_id' => $trainer_id,
                );

                if($this->model->insert('user_class',$data)){
                    $validator['success'] = TRUE;
                    $validator['message'] = "You have successfully join in a Class";

                    if($this->insert_logs($this->session->userid,0,"User Add Class",22)){

                    }
    
                }
                else{
                    $validator['success'] = FALSE;
                    $validator['message'] = "You can't add a Class, Please Try Again";
    
                }
            }
            echo json_encode($validator);
        }
        else{
            $data = array(
                'accounts_id' => $user_id,
                'class_id' => $class_id,
                'trainer_id' => $trainer_id,
            );
            if($this->model->insert('user_class',$data)){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully join in a Class";
                if($this->insert_logs($this->session->userid,0,"User Add Class",22)){

                }

            }
            else{
                $validator['success'] = FALSE;
                $validator['message'] = "You can't add a Class, Please Try Again";

            }
            echo json_encode($validator);
        }
    }

    
    public function add_feedback(){
        $validator = array("success"=>TRUE, "messages"=>array());
        
        $data = array(
            'user_id' => $this->session->userid,
            'message_trainer' => $this->input->post('class_msg',true),
            'message_class' => $this->input->post('trainer_msg',true),
            'trainer_id' => $this->input->post('trainer_id',true),
            'class_id' => $this->input->post('class_id',true),
        );

        if($this->model->insert('feedback',$data)){
            $where = array(
                'accounts_id' => $this->session->userid,
                'class_id' => $this->input->post('class_id',true),
                'trainer_id' => $this->input->post('trainer_id',true),

            );
            if($this->model->update('user_class',array('feedback_status'=>1),$where ) ){
                $validator['success'] = TRUE;
                $validator['message'] = "You have successfully send a feedback";
            }
            
            if($this->insert_logs($this->session->userid,0,"User Send Feedback",23)){

            }

        }
        else{
            
            $validator['success'] = FALSE;
            $validator['message'] = "Failed to send feedback, Please Try Again";
        }
        echo json_encode($validator);
    }

    public function endclass(){
        $validator = array("success"=>TRUE, "messages"=>array());
        
        $where = array(
            'accounts_id' => $this->session->userid,
            'trainer_id' => $this->input->post('trainer_id',true),
            'class_id' => $this->input->post('class_id',true),
        );

        if($this->model->update('user_class',array('status'=>0),$where ) ){
            $validator['success'] = TRUE;
            $validator['message'] = "You have successfully leave the class";
            
            if($this->insert_logs($this->session->userid,0,"User End Class",24)){

            }
        }
        else{
            
            $validator['success'] = FALSE;
            $validator['message'] = "Failed to leave, Please Try Again";
        }
        echo json_encode($validator);
    }

    public function editprofile(){
        $validator = array('success'=>false, "messages"=>array());
        $fname = $this->input->post('fname',true);
        $lname = $this->input->post('lname',true);
        $email = $this->input->post('email',true);
        $email2 = $this->input->post('email2',true);
        $contact = $this->input->post('contact',true);
        $contact2 = $this->input->post('contact2',true);
        $weight = $this->input->post('weight',true);
        $height = $this->input->post('height',true);
        $data = array(
            'user_fname' => $fname,
            'user_lname' => $lname,
            'weight' => $weight,
            'height' => $height,
        );
        if($contact != $contact2){
            $this->form_validation->set_rules('contact',"Contact Number",'required|trim|xss_clean|regex_match[/^(.*?[0-9]){11,}$/]|is_unique[accounts.contact]');
            $data['contact'] = $contact;
        }
        if($email != $email2){
            $this->form_validation->set_rules('email',"Email Address",'required|trim|xss_clean|valid_email|is_unique[accounts.email]');
            $data['email'] = $email;
        }
        $this->form_validation->set_rules('fname',"First Name","required|trim|xss_clean");
        $this->form_validation->set_rules('lname',"Last Name","required|trim|xss_clean");
        $this->form_validation->set_rules('weight',"Weight","required|trim|xss_clean|numeric");
        $this->form_validation->set_rules('height',"Height","required|trim|xss_clean|numeric");

        if($this->form_validation->run() == TRUE){
            
            if($this->model->update('accounts',$data,array('id'=>$this->session->userid) ) ){
                if($this->insert_logs($this->session->userid,0,"User Update Profile",25 )){
                    $validator['message'] = "You have successfully updated your profile";
                    $validator['success'] = TRUE;
                    $validator['data'] = $data;
                }
            }
            else{
                $validator['message'] = "Failed to update your profile";
                $validator['success'] = FALSE;
                $validator['data'] = $data; 
            }
            echo json_encode($validator);
        }
        else{
            
            foreach ($_POST as $key => $value) {
                $validator['messages'][$key] = form_error($key);
                $validator['success'] = false;
                $validator['errormsg'] = false;
            }
            echo json_encode($validator);

        }

    }

    public function end_workout(){
        $validator = array('success'=>FALSE,'messages'=>array());
        $workout_id = $this->input->post('workout_id',true);
        $workout_level = $this->input->post('workout_level',true);
        $where = array(
            'workout_id' => $workout_id,
            'workout_level' => $workout_level,
        );
        if($this->model->update('user_workout',array('status'=>0),$where)){
            $validator['success'] = TRUE;
            $validator['message'] = "Your workout is done!";
        }
        else{
            
            $validator['success'] = FALSE;
            $validator['message'] = "Please Try Again!";
        }
        echo json_encode($validator);
    }

    public function addmealplan(){
        $validator = array('success'=>false, 'messages'=>array());
        $this->form_validation->set_rules('gender',"Gender",'required|xss_clean|trim');
        $this->form_validation->set_rules('weight',"Weight",'required|xss_clean|trim');
        $this->form_validation->set_rules('height',"Height",'required|xss_clean|trim');
        $this->form_validation->set_rules('target',"Target Weight",'required|xss_clean|trim');
        $this->form_validation->set_rules('gender',"Gender",'required|xss_clean|trim');
        $this->form_validation->set_rules('activity',"Physical Activity",'required|xss_clean|trim');
        $this->form_validation->set_rules('religion',"Religion",'required|xss_clean|trim');
        
        $data = array(
            'user_id' => $this->session->userid,
            'weight' => $this->input->post('weight',true),
            'height' => $this->input->post('height',true),
            'gender' => $this->input->post('gender',true),
            'target_weight' => $this->input->post('target',true),
            'physical_activity' => $this->input->post('activity',true),
            'religion' => $this->input->post('religion',true),
            'complications' => $this->input->post('complications',true),
            'foods_avoid' => $this->input->post('avoid',true),
            'medical_info' => $this->input->post('med_info',true),
        );
        if($this->form_validation->run()){
            if( $this->model->insert('mealplan',$data) ){
                $mealplan_id = $this->db->insert_id();
                $food = $this->input->post('food',true);
                $health = $this->input->post('health',true);
                $allergy = $this->input->post('allergy',true);
                $foods = array();
                $healths = array();
                $allergys = array();
                for($i = 0;$i < count($food); $i++){
                    $foods[] = array(
                        'mealplan_id' => $mealplan_id,
                        'name' => $food[$i],
                    );
                }
                for($i = 0;$i < count($health); $i++){
                    $healths[] = array(
                        'mealplan_id' => $mealplan_id,
                        'name' => $health[$i],
                    );
                }
                for($i = 0;$i < count($allergy); $i++){
                    $allergys[] = array(
                        'mealplan_id' => $mealplan_id,
                        'name' => $allergy[$i],
                    );
                }

                if($this->model->insert_batch('food_preference',$foods)){
                    $validator['success']['food'] = TRUE;
                }
                if($this->model->insert_batch('health_condition',$healths)){
                    $validator['success']['health'] = TRUE;
                }
                if($this->model->insert_batch('allergy',$allergys)){
                    $validator['success']['allergy'] = TRUE;
                }

                $data = array(	
                    'user_id' => $this->session->userid,
                    'mealplan_id' => $mealplan_id,
                );
                // $validator['hehe'] = $this->generate_mealplan($_POST,$mealplan_id);
                if($this->model->insert('user_mealplan',$data) ){

                }
                $validator['success'] = TRUE;
                $validator['message'] = "Request Meal Success!";



            }
            else{
                $validator['success'] = FALSE;
                $validator['message'] = "Request Meal Failed!";
            }

            
            
            echo json_encode($validator);
        }
        else{
            foreach($_POST as $key => $val){
                $validator['messages'][$key] = form_error($key);
                $validator['success'] = FALSE;
            }
            $validator['erorrs'] = validation_errors();
            echo json_encode($validator);

        }


    }
    
    public function generate_mealplan($data,$mealplan_id){
        $post_data = (object) $data;
        $mealplan_id = $mealplan_id;
        $allergy = $post_data->allergy;
        $health = $post_data->health;
        $preference = $post_data->food;
        $activity = $post_data->activity;
        $religion = $post_data->religion;
        $remove = array();
        
        $foodlist = $this->model->fetch('foodlist');

        

        if($allergy && count($allergy) != 0){

            for($i = 0; $i < count($allergy);$i++){
                if($allergy[$i] == 'dairy'){
                    $remove['allergy']['dairy'] = 1;
                }
                if($allergy[$i] == 'egg'){
                    $remove['allergy']['egg'] = 1;
                }
                if($allergy[$i] == 'peanut'){
                    $remove['allergy']['peanut'] = 1;
                }
                if($allergy[$i] == 'fish'){
                    $remove['allergy']['fish'] = 1;
                }
                if($allergy[$i] == 'shellfish'){
                    $remove['allergy']['shellfish'] = 1;
                }
                if($allergy[$i] == 'wheat'){
                    $remove['allergy']['wheat'] = 1;
                }
                if($allergy[$i] == 'soy'){
                    $remove['allergy']['soy'] = 1;
                }
            }
            // $this->model->fetch('t')
        }
        if($health && count($health) != 0){
            for($i = 0;$i < count($health); $i++){
                if($health[$i] == 'diabetic'){
                    $remove['health']['diabetic'] = 1;
                }
                if($health[$i] == 'hyperacidic'){
                    $remove['health']['hyperacidic'] = 1;
                }
                if($health[$i] == 'hypertensive'){
                    $remove['health']['hypertensive'] = 1;
                }
                if($health[$i] == 'anemic'){
                    $remove['health']['anemic'] = 1;
                }

            }
        }
        if($preference && count($preference)!= 0){
            for($i = 0;$i< count($preference); $i++){
                if($preference[$i] == 'organic'){
                    $remove['preference']['organic'] = 1;
                }
                if($preference[$i] == 'vegan'){
                    $remove['preference']['vegan'] = 1;
                }
                if($preference[$i] == 'meat'){
                    $remove['preference']['meat'] = 1;
                }
                if($preference[$i] == 'pasta'){
                    $remove['preference']['pasta'] = 1;
                }
            }
        }

        if($activity == 'cardio'){
            for($i = 0;$i < 7;$i++){
                if($this->model->insert('mealplan_day',array('mealplan_id'=>$mealplan_id,'day'=>($i+1)))){

                }
                $not_food = array();
                $mealplan_day_id = $this->db->insert_id();
                for($j = 0;j<4;$j++){
                    $data = array(
                        'mealplan_id' => $mealplan_id,
                        'mealplan_day_id' => $mealplan_day_id,
                        'type' => ($j + 1),
                    );
                    if($religion == 'muslim'){
                        array_push($not_food, 'pork');
                        array_push($not_food, 'blood');
                    }
                    if($religion =='inc'){
                        array_push($not_food, 'blood');
                    }

                    if($remove['allergy']['dairy'] == 1){
                        array_push($not_food, 'milk');
                        array_push($not_food, 'yogurts');
                        array_push($not_food, 'cheese');
                        array_push($not_food, 'egg');
                        array_push($not_food,'margarines');
                    }
                    
                    if($remove['allergy']['egg'] == 1){
                        array_push($not_food, 'egg');
                    }
                    if($remove['allergy']['peanut'] == 1){
                        array_push($not_food, 'peanut');
                        array_push($not_food, 'pea');
                        array_push($not_food, 'nut');
                    }
                    if($remove['allergy']['fish'] == 1){
                        array_push($not_food, 'fish');
                    }
                    if($remove['allergy']['shellfish'] == 1){
                        array_push($not_food, 'shellfish');
                    }
                    if($remove['allergy']['wheat'] == 1){
                        array_push($not_food, 'wheat');
                        array_push($not_food, 'breads');
                        array_push($not_food, 'cereals');
                        array_push($not_food, 'pasta');
                        array_push($not_food, 'salad');
                        array_push($not_food, 'rice');
                        array_push($not_food, 'rice cakes');
                        array_push($not_food, 'cakes');
                    }
                    if($remove['allergy']['soy'] == 1){
                        array_push($not_food, 'soy');
                        array_push($not_food, 'tofu');
                        array_push($not_food, 'soy');
                        array_push($not_food, 'milk');
                        array_push($not_food, 'miso');
                        array_push($not_food, 'soy milk');
                    }

                    if($remove['health']['diabetic'] == 1){
                        array_push($not_food, 'nachos');
                        array_push($not_food, 'coffee');
                        array_push($not_food, 'fruit juice');
                        array_push($not_food, 'juice');
                        array_push($not_food, 'cinnamon');
                        array_push($not_food, 'donuts');
                        array_push($not_food, 'doughnuts');
                        array_push($not_food, 'milk shake');
                    }
                    
                    if($remove['health']['diabetic'] == 1){
                        array_push($not_food, 'whole grains');
                        array_push($not_food, 'meat');
                        array_push($not_food, 'dairy');
                        array_push($not_food, 'avocado');
                        array_push($not_food, 'chocolate');
                        array_push($not_food, 'choco');
                        array_push($not_food, 'high fat food');
                        array_push($not_food, 'high fat');
                        array_push($not_food, 'coffee');
                        array_push($not_food, 'apple');
                        array_push($not_food, 'orange');
                        array_push($not_food, 'banana');
                        array_push($not_food, 'berries');
                        array_push($not_food, 'peaches');
                        array_push($not_food, 'peach');
                        array_push($not_food, 'papaya');
                    }

                    if($remove['health']['hypertensive'] == 1){
                        array_push($not_food, 'sugar');
                        array_push($not_food, 'sugar group');
                        array_push($not_food, 'tomato');
                    }

                    if($remove['health']['anemic']){
                        
                        array_push($not_food, 'spinach');
                        array_push($not_food, 'coffee');
                        array_push($not_food, 'tea');
                        array_push($not_food, 'soy');
                        array_push($not_food, 'soy food');
                        
                    }

                    $avail_food = $this->model->checkFoodList($not_food); 
                    foreach ($avail_food as $value) {
                        # code...
                    }
                    if($this->model->insert('meal_type')){

                    }
                }

            }   
        }
        elseif($activity == 'body'){
        
        }
        elseif ($activity == 'diet') {
            
        }


        return $post_data;
        // foreach($data as $key => $val){
        //     $validator['data'][$key] = $val;
        // }
        // return $validator;
    }

    public function check_allergy(){

    }
    public function send_mail($data = NULL){
        if($data != NULL){
            $this->email->from('smegana@fit.edu.ph', 'FIASCO');
            $this->email->to($data['email']);

            $this->email->subject('Account Activation');
            // $message = '<a href="'.base_url() .'execute/activate_account/'.$data['verification_code'].'">ACTIVATE ACCOUNT</a>';
            $this->email->message($this->load->view('email/register', $data, true));
            // $this->email->message($message);


            if (!$this->email->send()) {
                return false;
            } else {
                return true;
            }
        }
        else{
            return false;
        }
            
    }

    public function logout(){
        $this->session->sess_destroy();
        
        if($this->insert_logs($this->session->userid,0,"Logout",2)){
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
        return $this->model->insert('audit_trails', $data);
    }
}
