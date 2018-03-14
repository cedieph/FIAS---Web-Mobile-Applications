<?php

class User extends CI_Controller{

  public function __construct() {
        parent::__construct();
        date_default_timezone_set("Asia/Manila");
        if(!$this->session->u_logged_in){
            redirect('');
        }
    }

    public function index(){
        $user = $this->model->fetch('accounts',array('id'=>$this->session->userid))[0];
        $weight = $user->weight > 0 ? $user->weight : 0;
        // echo $weight;
        $height = $user->height > 0 ? $user->height : 0;
        
        // echo $height;
        if($height > 0 && $weight > 0){
            $bmi = ( $weight / ($height * $height) ) * (10000);
        }
        else{
            $bmi = 0;
        }
        $bmi_categories = "";
        switch($bmi){
            case 0: 
                $bmi_categories = "None";
                break;
            case 18.5 > $bmi :
                $bmi_categories = "Underweight";
                break;
            case 24.9 > $bmi :
                $bmi_categories = "Normal Weight";
                break;
            case 29.9 > $bmi :
                $bmi_categories = "Overweight";
            default:
                $bmi_categories = "Obese";
        }
        $data = array(
            'title' => "FIAS: Gold's Gym Acropolis",
            'user' => $user,
            'bmi' => $bmi,
            'bmi_category' =>$bmi_categories,
        );

        $current_workout = $this->model->fetch('user_workout',array('user_id'=>$this->session->userid,'status'=>1))[0];
        $current_class = $this->model->fetch('user_class',array('accounts_id'=>$this->session->userid,'status'=>1));
        if($current_workout){
            $workout = $this->model->fetch('workout',array('id'=>$current_workout->workout_id))[0];
            $level = $this->model->fetch('workout_levels',array('level'=>$current_workout->workout_level))[0]->level;
            
        }
        else{
            $workout = false;
            $level = false;
            switch($level){
                case 1:
                    $level = 'Beginner';
                    break;
                case 2:
                    $level = 'Intermediate';
                    break;
                case 3:
                    $level = 'Advanced';
                    break;
                default:
                    $level = "None";
            }
        }
        
        $classes = array();
        if($current_class){
            foreach($current_class as $class){
                $c = $this->model->fetch('class',array('id'=>$class->class_id))[0];
                array_push($classes,$c);
            }
        }
        
        $data['workout'] = $workout;
        $data['classes'] = $classes;
        $data['level'] = $level;

        // echo '<pre>';
        // print_r($classes);
        // echo '<pre>';
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/dashboard');
        $this->load->view('user/includes/footer');
    }

    /* ------------------------------ EXERCISES -------------------------------- */
    public function arm_exercise(){
        $data =  array(
            'title' => "FIAS: ARM WORKOUT EXERCISES",
            'is_exercise' => TRUE,
            'work_name' => "Arm",
        );

        $data['exercise'] = $this->model->fetch('exercises', array('status' => 1, 'type' => 1));
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/exercise/arm_exercise');
        $this->load->view('user/includes/footer');
        
    }

    public function core_exercise(){
        $data =  array(
            'title' => "FIAS: CORE WORKOUT EXERCISES",
            'is_exercise' => TRUE,
            'work_name' => "Core",
        );
        $data['exercise'] = $this->model->fetch('exercises', array('status' => 1, 'type' => 2));
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/exercise/core_exercise');
        $this->load->view('user/includes/footer');
    
    }

    public function leg_exercise(){
        $data =  array(
            'title' => "FIAS: LEG WORKOUT EXERCISES",
            'is_exercise' => TRUE,
            'work_name' => "Leg",
        );
        $data['exercise'] = $this->model->fetch('exercises', array('status' => 1, 'type' => 3));
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/exercise/leg_exercise');
        $this->load->view('user/includes/footer');
        
    }

    public function butt_exercise(){
        $data =  array(
            'title' => "FIAS: BUTT WORKOUT EXERCISES",
            'is_exercise' => TRUE,
            'work_name' => "Butt",
        );
        $data['exercise'] = $this->model->fetch('exercises', array('status' => 1, 'type' => 4));
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/exercise/butt_exercise');
        $this->load->view('user/includes/footer');
        
    }

    public function cardio_exercise(){
        $data = array(
            'title' => "FIAS: CARDIO WORKOUT EXERCISES",
            'is_exercise' => TRUE,
            'work_name' => "Cardio",
        );
        $data['exercise'] = $this->model->fetch('exercises', array('status' => 1, 'type' => 5));
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/exercise/cardio_exercise');
        $this->load->view('user/includes/footer');
        
    }

    public function weightloss_exercise(){
        $data = array(
            'title' => "FIAS: WEIGHTLOSS AND DIETING WORKOUT EXERCISES",
            'is_exercise' => TRUE,
            'work_name' => "Weight Loss & Dieting",
        );

        $data['exercise'] = $this->model->fetch('exercises', array('status' => 1, 'type' => 6));
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/exercise/weight_exercise');
        $this->load->view('user/includes/footer');
        
    }


/* --------------------------------------------------------------------------------------------------- */
    public function classes(){
        $data = array(
            'title' => "FIAS: CLASS WORKOUTS",
            'is_class' => TRUE,
        );
        $data['days'] = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        $data['class'] = $this->model->fetch('classes',array('status'=>1));
        $data['classes'] = $this->model->fetch('class',array('status'=>1));
        $data['trainers'] = $this->model->fetch('trainer',array('remove_status'=>0));
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/class');
        $this->load->view('user/includes/footer');

    }

    public function myclass(){
        $data = array(
            'title' => "FIAS: MY CLASS",
            'is_class' => TRUE,
        );
        $data['days'] = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        $class = $this->model->fetch('user_class',array('accounts_id'=>$this->session->userid,'status'=>1));
        $myclass = array();
        if($class){
            foreach($class as $c){
                $classes = $this->model->fetch('class',array('id'=>$c->class_id,'status'=>1))[0];
                if($classes){
                    array_push($myclass,$classes);
                }
            }
        }
        // print_r($myclass);
        $data['class'] = $myclass;
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/myclass');
        $this->load->view('user/includes/footer');
        
    }

    public function schedule(){
        $where = array(
            'user_id' => $this->session->userid,
            'status' => 1,
        );
        $work = $this->model->fetch('user_workout',$where)[0];
        if($work){
            $workout = $this->model->fetch('workout_levels',array('workout_id'=>$work->workout_id,'level'=>$work->workout_level));
            
            $mywork = $this->model->fetch('workout',array('id'=>$work->workout_id))[0];
            
            $new_format = date("Y-m-d",strtotime($work->created_at));
            $time = strtotime("+".(7 * count($workout))." day",strtotime($new_format));
        }
        else{
            $workout = null;
            $mywork = null;
            $time = null;
            
        }
        
        
        $data = array(
            'title' => "FIAS: Gold's Gym Acropolis",
            'workout' => $workout,
            'user_workout' => $work,
            'work' => $mywork,
            'date_expired' => $time,
        );
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/schedule');
        $this->load->view('user/includes/footer');
    }
    public function fullbody(){
        $data = array(
            'title' => "FIAS: WORKOUTS - BODY BUILDING",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>1,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>1,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>1,'level'=>3)),
            'workout' => $this->model->fetch('workout',array('id'=>1))[0],
        );
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/body/fullbody');
        $this->load->view('user/includes/footer');
    }

    public function core(){
        $data = array(
            'title' => "FIAS: WORKOUTS - CORE WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>4,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>4,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>4,'level'=>3)),
            'workout' => $this->model->fetch('workout',array('id'=>4))[0],
        );
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/body/core');
        $this->load->view('user/includes/footer');
    }

    public function arm(){
        $data = array(
            'title' => "FIAS: WORKOUTS - ARM WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>2,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>2,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>2,'level'=>3)),
            'workout' => $this->model->fetch('workout',array('id'=>2))[0],
        );
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/body/arm');
        $this->load->view('user/includes/footer');
    }

    public function leg(){
        $data = array(
            'title' => "FIAS: WORKOUTS - LEG WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>3,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>3,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>3,'level'=>3)),
            'workout' => $this->model->fetch('workout',array('id'=>3))[0],
        );
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/body/leg');
        $this->load->view('user/includes/footer');
    }

    public function butt(){
        $data = array(
            'title' => "FIAS: WORKOUTS - BUTT WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>5,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>5,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>5,'level'=>3)),
            'workout' => $this->model->fetch('workout',array('id'=>5))[0],
        );
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/body/butt');
        $this->load->view('user/includes/footer');
    }

    public function diet(){
        $data = array(
            'title' => "FIAS: WORKOUTS - WEIGHTLOSS & DIETING",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>7,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>7,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>7,'level'=>3)),
            'workout' => $this->model->fetch('workout',array('id'=>7))[0],
        );
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/diet');
        $this->load->view('user/includes/footer');
    }

    public function cardio(){
        $data = array(
            'title' => "FIAS: WORKOUTS - CARDIO WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>6,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>6,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>6,'level'=>3)),
            'workout' => $this->model->fetch('workout',array('id'=>6))[0],
        );
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/cardio');
        $this->load->view('user/includes/footer');
    }

    public function meal(){
        $data = array(
            'title' => "FIAS: MEAL PLAN REQUEST FORM",
            'is_meal' => TRUE,
            'user' => $this->model->fetch('accounts',array('id'=>$this->session->userid))[0],
        );
        // $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/meal',$data);
        $this->load->view('user/includes/footer');
    }

    public function mealplan_schedule(){
        $data = array(
            'title' => "FIAS: MEAL PLAN REQUEST FORM",
            'is_meal' => TRUE,
            'user' => $this->model->fetch('accounts',array('id'=>$this->session->userid))[0],
        );
        
        $meal = $this->model->fetch('user_mealplan',array('user_id'=>$this->session->userid,'status'=>1,'remove_status'=>0))[0];
        // print_r($meal);
        $mealplan = false;
        $time = false;
        $meal_day = false;
        $meal_type = false;
        $meal_name = false;
        if($meal){
            $mealplan = $this->model->fetch('mealplan',array('id'=>$meal->mealplan_id,'status'=>1))[0];
            // print_r($mealplan);
            if($mealplan){
                $act = 0;
                switch($mealplan->physical_activity){
                    case 'body':
                        $act = 1;
                        break;
                    case 'cardio':
                        $act = 2;
                        break;
                    case 'diet':
                        $act = 3;
                        break;
                }
                
                $meal_day = $this->model->fetch('mealplan_day',array('mealplan_id'=>$act));
                $meal_type = $this->model->fetch('meal_type',array('mealplan_id',$act));
                $meal_name = $this->model->fetch('mealplan_activity',array('id'=>$act))[0];
                // print_r($meal_day);
            }
            // $meal_day = $this->model->fetch('mealplan_day',array('mealplan_id'=>$mealplan->id))[0];
            // $meal_type = $this->model->fetch('meal_type',array('mealplan_day_id'=>$meal_day->id))[0];
            $new_format = date("Y-m-d",strtotime($meal->created_at));
            $time = strtotime("+ 14 day",strtotime($new_format));
        }
        else{
            $mealplan = false;
            $time = false;
            $meal_day = false;
            $meal_type = false;
        }
        $data['date_expired'] = $time;
        $data['mealplan'] = $mealplan;
        $data['meal_day'] = $meal_day;
        $data['meal_type'] = $meal_type;
        $data['meal'] = $meal;
        $data['meal_name'] = $meal_name->name;
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/mealplan_schedule');
        $this->load->view('user/includes/footer');

    }

    public function feedback(){
        $data = array(
            'title' => "FIAS: FEEDBACK",
            'is_feedback' => TRUE,
        );
        $data['days'] = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        $class = $this->model->fetch('user_class',array('accounts_id'=>$this->session->userid,'status'=>0,'feedback_status'=>0));
        $myclass = array();
        if($class){
            foreach($class as $c){
                $classes = $this->model->fetch('class',array('id'=>$c->class_id,'status'=>1))[0];
                array_push($myclass,$classes);
            }
        }
        else{

        }
        $data['class'] = $myclass;
        $data['feedback'] = $this->admin->fetch('feedback',NULL,'id');
        $this->load->view('user/includes/header', $data);
        $this->load->view('user/pages/feedback');
        $this->load->view('user/includes/footer');
    }

}
