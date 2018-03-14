<?php

class Admin extends CI_Controller{

  public function __construct() {
        parent::__construct();
        if(!$this->session->a_logged_in){
            redirect('admin/login');
        }
    }

    public function index(){
      $data = array(
        'title' => "FIAS: Gold's Gym Acropolis",
        'users' => $this->admin->fetch('accounts'),
        'trainers' => $this->admin->fetch('trainer'),
      );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/dashboard');
        $this->load->view('admin/includes/footer');
    }

    public function user(){
        $data = array(
          'title' => "FIAS: Gold's Gym Acropolis",
          'is_user' => TRUE,
        );
        $data['users'] = $this->admin->fetch('accounts',array('remove_status'=>0));
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/user');
        $this->load->view('admin/includes/footer');

    }
    public function trainers(){
        $data = array(
            'title' => "FIAS: Trainers",
            'is_trainer' => TRUE,
        );
        $data['trainers'] = $this->admin->fetch('trainer',array('remove_status'=>0));
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/trainers');
        $this->load->view('admin/includes/footer');
        
    }

    /* ------------------------- WORKOUT SCHEDULES ------------------ */
    public function admin(){
        $data = array(
            'title' => "FIAS: Admin",
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/admin');
        $this->load->view('admin/includes/footer');
    }

    public function fullbody(){
        $data = array(
            'title' => "FIAS: WORKOUTS - BODY BUILDING",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>1,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>1,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>1,'level'=>3)),
            'is_workout' => TRUE,
            'work_name' => "Fullbody",
            'workout_id' => 1,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/fullbody');
        $this->load->view('admin/includes/footer');
    }

    public function core(){
        $data = array(
            'title' => "FIAS: WORKOUTS - CORE WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>4,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>4,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>4,'level'=>3)),
            'is_workout' => TRUE,
            'work_name' => "Core",
            'workout_id' => 4,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/core');
        $this->load->view('admin/includes/footer');
    }

    public function arm(){
        $data = array(
            'title' => "FIAS: WORKOUTS - ARM WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>2,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>2,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>2,'level'=>3)),
            'is_workout' => TRUE,
            'work_name' => "Arm",
            'workout_id' => 2,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/arm');
        $this->load->view('admin/includes/footer');
    }

    public function leg(){
        $data = array(
            'title' => "FIAS: WORKOUTS - LEG WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>3,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>3,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>3,'level'=>3)),
            'is_workout' => TRUE,
            'work_name' => "Leg",
            'workout_id' => 3,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/leg');
        $this->load->view('admin/includes/footer');
    }

    public function butt(){
        $data = array(
            'title' => "FIAS: WORKOUTS - BUTT WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>5,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>5,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>5,'level'=>3)),
            'is_workout' => TRUE,
            'work_name' => "Butt",
            'workout_id' => 5,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/butt');
        $this->load->view('admin/includes/footer');
    }

    public function diet(){
        $data = array(
            'title' => "FIAS: WORKOUTS - WEIGHTLOSS & DIETING",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>7,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>7,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>7,'level'=>3)),
            'is_workout' => TRUE,
            'work_name' => "Weight Loss and Dieting",
            'workout_id' => 7,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/weightloss');
        $this->load->view('admin/includes/footer');
    }

    public function cardio(){
        $data = array(
            'title' => "FIAS: WORKOUTS - CARDIO WORKOUTS",
            'workouts_beginner' => $this->model->fetch('workout_levels',array('workout_id'=>6,'level'=>1)),
            'workouts_intermediate' => $this->model->fetch('workout_levels',array('workout_id'=>6,'level'=>2)),
            'workouts_advanced' => $this->model->fetch('workout_levels',array('workout_id'=>6,'level'=>3)),
            'is_workout' => TRUE,
            'work_name' => "Cardio",
            'workout_id' => 6,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/cardio');
        $this->load->view('admin/includes/footer');
    }

/* --------------------------------------- WORKOUT EXERCISES --------------------------------- */
    public function arm_exercise(){
        $data = array(
            'title' => "FIAS: EXERCISES - ARM EXERCISES",
            'exercise' => $this->model->fetch('exercises', array('type' => "1")),
            'is_exercise' => TRUE,
            'work_name' => "Arm",
            'workout_id' => 2,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/exercise_arm');
        $this->load->view('admin/includes/footer');
    }

    public function core_exercise(){
        $data = array(
            'title' => "FIAS: EXERCISES - CORE EXERCISES",
            'exercise' => $this->model->fetch('exercises', array('type' => "2")),
            'is_exercise' => TRUE,
            'work_name' => "Core",
            'workout_id' => 4,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/exercise_core');
        $this->load->view('admin/includes/footer');
    }

    public function leg_exercise(){
        $data = array(
            'title' => "FIAS: EXERCISES - LEG EXERCISES",
            'exercise' => $this->model->fetch('exercises', array('type' => "3")),
            'is_exercise' => TRUE,
            'work_name' => "Leg",
            'workout_id' => 3,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/exercise_leg');
        $this->load->view('admin/includes/footer');
    }

    public function butt_exercise(){
        $data = array(
            'title' => "FIAS: EXERCISES - BUTT EXERCISES",
            'exercise' => $this->model->fetch('exercises', array('type' => "4")),
            'is_exercise' => TRUE,
            'work_name' => "Butt",
            'workout_id' => 5,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/exercise_butt');
        $this->load->view('admin/includes/footer');
    }

    public function cardio_exercise(){
        $data = array(
            'title' => "FIAS: EXERCISES - CARDIO EXERCISES",
            'exercise' => $this->model->fetch('exercises', array('type' => "5")),
            'is_exercise' => TRUE,
            'work_name' => "Cardio",
            'workout_id' => 6,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/exercise_cardio');
        $this->load->view('admin/includes/footer');
    }

    public function weight_exercise(){
        $data = array(
            'title' => "FIAS: EXERCISES - WEIGHT LOSS & DIETING EXERCISES",
            'exercise' => $this->model->fetch('exercises', array('type' => "6")),
            'is_exercise' => TRUE,
            'work_name' => "Weight Loss & Dieting",
            'workout_id' => 7,
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/body/exercise_weight');
        $this->load->view('admin/includes/footer');
    }
    
/* ------------------------------------ MEAL PLANS ------------------------------------------ */
    public function request(){
        $data = array(
            'title' => "FIAS: MEAL PLANS - REQUESTS",
            'is_meal',
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/answeredform');
        $this->load->view('admin/includes/footer');
    }

/* ----------------------------------- CLASSES -----------------------------------------------*/
    public function classes(){
        $data = array(
            'title' => "FIAS: CLASS WORKOUTS",
            'is_class' => TRUE,
        );
        $data['classes'] = $this->admin->fetchReport();
        $data['days'] = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
        $data['class'] = $this->admin->fetch('classes',array('status'=>1));
        $data['trainer'] = $this->admin->fetch('trainer',array('status'=>1));
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/class');
        $this->load->view('admin/includes/footer');
    }

    public function workplan(){
         
        $data = array(
            'title' => "FIAS: WORKOUT PLANS",
        );
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/plan');
        $this->load->view('admin/includes/footer');
    }

    /* --------------------------- FEEDBACK ------------------ */
    public function feedback(){
        $data = array(
            'title' => "FIAS: FEEDBACK",
        );
        $data['feedback'] = $this->admin->fetch('feedback',NULL,'id');
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/feedback');
        $this->load->view('admin/includes/footer');
    }
    public function logs(){
        $data = array(
            'title' => "FIAS: FEEDBACK",
        );
        $data['logs'] = $this->admin->fetch('audit_trails',NULL,'id');
        $this->load->view('admin/includes/header', $data);
        $this->load->view('admin/pages/logs');
        $this->load->view('admin/includes/footer');

    }

    /* ---------------------------------- REPORTS ------------------------------ */
    public function report_users(){
        $where = array(
            'status' => 1,
        );
        $data['is_user'] = TRUE;
        $data['users'] = $this->admin->fetch('accounts',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/activeusers');
        $this->load->view('admin/includes/footer');
    }

    public function report_inactusers(){
        $where = array(
            'status' => 0,
            'remove_status' =>0,
        );
        $data['is_user'] = TRUE;
        $data['users'] = $this->admin->fetch('accounts',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/inactiveusers');
        $this->load->view('admin/includes/footer');
    }

    public function report_delusers(){
        $where = array(
            'remove_status' =>1,
        );
        $data['is_user'] = TRUE;
        $data['users'] = $this->admin->fetch('accounts',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/delusers');
        $this->load->view('admin/includes/footer');
    }

    public function report_trainers(){
        $where = array(
            'status' => 1,
            'remove_status' => 0,
        );
        $data['is_trainer'] = TRUE;
        $data['users'] = $this->admin->fetch('trainer',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/activetrainers');
        $this->load->view('admin/includes/footer');
    }

    public function report_inactrainers(){
        $where = array(
            'status' => 0,
        );
        $data['is_trainer'] = TRUE;
        $data['users'] = $this->admin->fetch('trainer',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/inactivetrainers');
        $this->load->view('admin/includes/footer');
    }

    public function report_deltrainers(){
        $where = array(
            'remove_status' =>1,
        );
        $data['is_trainer'] = TRUE;
        $data['users'] = $this->admin->fetch('trainer',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/deltrainers');
        $this->load->view('admin/includes/footer');
    }

    public function report_workouts(){
        $where = array(
            'status' => 1,
        );
        $data['is_workout'] = TRUE;
        $data['user_workout'] = $this->admin->fetch('user_workout',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/enrolledworkouts');
        $this->load->view('admin/includes/footer');

    }
    
    public function report_class(){
        $where = array(
            'status' => 1,
        );
        $data['is_class'] = TRUE;
        $data['user_class'] = $this->admin->fetch('user_class',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/enrolledclass');
        $this->load->view('admin/includes/footer');
    }

    public function report_classes(){
        $where = array(
            'status' => 1,
        );
        $data['is_class'] = TRUE;
        $data['classes'] = $this->admin->fetch('classes',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/activeworkoutclass');
        $this->load->view('admin/includes/footer');
    }

    public function report_inactclasses(){
        $where = array(
            'status' => 0,
        );
        $data['is_class'] = TRUE;
        $data['classes'] = $this->admin->fetch('classes',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/inactiveclass');
        $this->load->view('admin/includes/footer');
    }

    public function report_actsched(){
        $where = array(
            'status' => 1,
        );
        $data['is_class'] = TRUE;
        $data['sched'] = $this->admin->fetch('class',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/activesched');
        $this->load->view('admin/includes/footer');
    }

    public function report_inactsched(){
        $where = array(
            'status' => 0,
        );

        $data['is_class'] = TRUE;
        $data['sched'] = $this->admin->fetch('class',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/inactivesched');
        $this->load->view('admin/includes/footer');
    }

    public function report_unavailable(){
        $data['classes'] = $this->admin->fetchReportUnavailable();
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/unavailable');
        $this->load->view('admin/includes/footer');
    }

    public function report_delsched(){
        $where = array(
            'remove_status' => 1,
        );
        $data['is_class'] = TRUE;
        $data['sched'] = $this->admin->fetch('class',$where);
        $this->load->view('admin/includes/header',$data);
        $this->load->view('admin/pages/delclasssched');
        $this->load->view('admin/includes/footer');
    }

}
