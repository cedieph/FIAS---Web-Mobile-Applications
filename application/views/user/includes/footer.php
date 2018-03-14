
    <!-- start: Javascript -->
    <script src="<?= base_url()?>assets/template/js/jquery.min.js"></script>
    <script src="<?= base_url()?>assets/template/js/jquery.ui.min.js"></script>
    <script src="<?= base_url()?>assets/template/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    <script src="<?= base_url()?>assets/template/js/plugins/moment.min.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/fullcalendar.min.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/jquery.nicescroll.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/jquery.vmap.min.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/chart.min.js"></script>
    
    <script src="<?= base_url()?>assets/template/js/plugins/jquery.datatables.min.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/datatables.bootstrap.min.js"></script>
	<script src="<?= base_url()?>assets/js/sweetalert.min.js"></script>

    <!-- custom -->
    <script src="<?= base_url()?>assets/template/js/main.js"></script>

    <script>
        var app_url = "<?= base_url()?>";
    </script>


<!-- -->

    <script type="text/javascript">
       $(document).ready(function(){

        function add_workout1(){
            $('#btn-beginner').click(function(e){
                                        
                var curr = $(this);
                var workout_id = $(curr).data('workoutid');
                var level_id = $(curr).data('levelid');
                var url = app_url + "execute/add_workout";
                $.ajax({
                    type:"POST",
                    url: url,
                    data:{
                        "workout_id" : workout_id,
                        "level_id" : level_id
                    },
                    dataType:"json",
                    success:function(res){
                        if(res.success){      
                            swal({
                                title: "Add Workout Success",
                                text: res.message,
                                icon: "success",
                                button: null,
                                timer:2e3
                            });
                            setTimeout(function() {
                                location.href = app_url + "user/schedule";
                            }, 2000);

                        }
                        else{  
                            swal({
                                title: "Add Workout Failed",
                                text: res.message,
                                icon: "error",
                                button: null,
                                timer:2e3
                            });

                        }
                    },
                    error:function(res){
                        console.log(res);
                    }
                    
                });
            });
        }

        function add_workout2(){
            $('#btn-intermediate').click(function(e){
                                        
                var curr = $(this);
                var workout_id = $(curr).data('workoutid');
                var level_id = $(curr).data('levelid');
                var url = app_url + "execute/add_workout";
                $.ajax({
                    type:"POST",
                    url: url,
                    data:{
                        "workout_id" : workout_id,
                        "level_id" : level_id
                    },
                    dataType:"json",
                    success:function(res){
                        if(res.success){      
                            swal({
                                title: "Add Workout Success",
                                text: res.message,
                                icon: "success",
                                button: null,
                                timer:2e3
                            });
                            setTimeout(function() {
                                location.href = app_url + "user/schedule";
                            }, 2000);

                        }
                        else{  
                            swal({
                                title: "Add Workout Failed",
                                text: res.message,
                                icon: "error",
                                button: null,
                                timer:2e3
                            });

                        }
                    },
                    error:function(res){
                        console.log(res);
                    }
                    
                });
            });
        }

        function add_workout3(){
            $('#btn-advanced').click(function(e){
                                        
                var curr = $(this);
                var workout_id = $(curr).data('workoutid');
                var level_id = $(curr).data('levelid');
                var url = app_url + "execute/add_workout";
                $.ajax({
                    type:"POST",
                    url: url,
                    data:{
                        "workout_id" : workout_id,
                        "level_id" : level_id
                    },
                    dataType:"json",
                    success:function(res){
                        if(res.success){      
                            swal({
                                title: "Add Workout Success",
                                text: res.message,
                                icon: "success",
                                button: null,
                                timer:2e3
                            });
                            setTimeout(function() {
                                location.href = app_url + "user/schedule";
                            }, 2000);

                        }
                        else{  
                            swal({
                                title: "Add Workout Failed",
                                text: res.message,
                                icon: "error",
                                button: null,
                                timer:2e3
                            });

                        }
                    },
                    error:function(res){
                        console.log(res);
                    }
                    
                });
            });
        }
        

        function add_class(){
            $('.btn-addclass').click(function(e){
                                        
                var curr = $(this);
                var class_id = $(curr).data('id');
                var trainer_id = $(curr).data('trainerid');
                var url = app_url + "execute/add_class";
                // console.log(class_id);
                // console.log(trainer_id);
                $.ajax({
                    type:"POST",
                    url: url,
                    data:{
                        "class_id" : class_id,
                        "trainer_id" : trainer_id,
                    },
                    dataType:"json",
                    success:function(res){
                        if(res.success){      
                            swal({
                                title: "Add to Class Success",
                                text: res.message,
                                icon: "success",
                                button: null,
                                timer:2e3
                            });
                            setTimeout(function() {
                                location.href = app_url + "user/classes";
                            }, 2000);

                        }
                        else{  
                            swal({
                                title: "Add to Class Failed",
                                text: res.message,
                                icon: "error",
                                button: null,
                                timer:2e3
                            });

                        }
                    },
                    error:function(res){
                        console.log(res);
                    }
                    
                });
            });
        }

        function add_feedback(){
            $("#btn-add_feedback").click(function(e){
                var class_id = $("#class_id").val();
                var trainer_id = $("#trainer_id").val();
                var class_msg = $("#msg-class").val();
                var trainer_msg = $("#msg-trainer").val();
                var url = app_url + "execute/add_feedback";
                $.ajax({
                    type: "POST",
                    url : url,
                    dataType : "json",
                    data : {
                        'class_id' : class_id,
                        'trainer_id' : trainer_id,
                        'class_msg' : class_msg,
                        'trainer_msg' : trainer_msg,
                    },
                    success:function(res){
                        if(res.success){      
                            swal({
                                title: "Feedback Success",
                                text: res.message,
                                icon: "success",
                                button: null,
                                timer:2e3
                            });
                            setTimeout(function() {
                                location.href = app_url + "user/feedback";
                            }, 1000);

                        }
                        else{  
                            swal({
                                title: "Feedback Failed",
                                text: res.message,
                                icon: "error",
                                button: null,
                                timer:2e3
                            });

                        }
                    },
                    error:function(res){
                        console.log(res);
                    }
                });
            });
        }

        function end_class(){
            $(".btn-endclass").click(function(e){
                var curr = $(this);
                var class_id = $(curr).data('id');
                var trainer_id = $(curr).data('trainerid');
                var url = app_url + "execute/endclass";
                console.log(class_id);
                swal({
                    title: "Are you sure?",
                    text: "You will leave in the workout class",
                    icon: "warning",
                    buttons: true,
                    infoMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            type: "POST",
                            url: url,
                            data: {
                                "class_id" : class_id,
                                "trainer_id" : trainer_id
                            },
                            dataType: "json",
                            success:function(res){
                                if(res.success){  
                                    swal({
                                        title: "Success",
                                        text: res.message,
                                        icon: "success",
                                        button: null,
                                        timer:2e3
                                    });
                                    setTimeout(function() {
                                        location.href = app_url + "user/myclass";
                                    }, 1000);

                                }
                                else{
                                    swal({
                                        title: "Failed",
                                        text: res.message,
                                        icon: "error",
                                        button: null,
                                        timer:2e3
                                    });

                                }
                            },
                            error:function(res){
                                console.log(res);
                            }
                        });
                    } 
                    else {
                        
                    }
                });
                
            });

        }
        
        function open_feedback(){
            $(".btn-addfeedback").click(function(e){
                var curr = $(this);
                var class_id = $(curr).data('id');
                var trainer_id = $(curr).data('trainerid');
                console.log(class_id);
                $("#class_id").val(class_id);
                $("#trainer_id").val(trainer_id);
            });
        }

        function edit_profile(){
            $("#btn-editprofile").click(function(e){
                var fname = $("#edit-fname").val();
                var lname = $("#edit-lname").val();
                var email = $("#edit-email").val();
                var email2 = $("#edit-email2").val();
                var contact = $("#edit-contact").val();
                var contact2 = $("#edit-contact2").val();
                var weight = $("#edit-weight").val();
                var height = $("#edit-height").val();
                var url = app_url + "execute/editprofile";
                $.ajax({
                    type:"POST",
                    url: url,
                    data: {
                        "fname" : fname,
                        "lname" : lname,
                        "email" : email,
                        "email2" : email2,
                        "contact" : contact,
                        "contact2" : contact2,
                        "weight" : weight,
                        "height" : height
                    },
                    dataType: "json",
                    success:function(res){
                        console.log(res);
                        if(res.success){
                            swal({
                                title: "Success",
                                text: res.message,
                                icon: "success",
                                button: null,
                                timer:2e3
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);

                        }
                        else{
                            swal({
                                title: "Failed",
                                text: "Please Try Again",
                                icon: "error",
                                button: null,
                                timer:2e3
                            });

                        }
                    },
                    error:function(res){
                        console.log(res);
                    }
                })
            });
        }

        function end_workout(){
            $("#end-workout").click(function(e){
                var curr = $(this);
                var workout_id = $(curr).data('workid');
                var workout_level = $(curr).data('worklevel');
                var url = app_url + "execute/end_workout";
                $.ajax({
                    type: "POST",
                    url:url,
                    dataType: "json",
                    data:{
                        "workout_id" : workout_id,
                        "workout_level" : workout_level,
                    },
                    success:function(res){
                        console.log(res);
                        if(res.success){
                            swal({
                                title: "Success",
                                text: res.message,
                                icon: "success",
                                button: null,
                                timer:2e3
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                            
                        }
                        else{
                            
                            swal({
                                title: "Failed",
                                text: res.message,
                                icon: "error",
                                button: null,
                                timer:2e3
                            });
                        }
                    },
                    error:function(res){
                        console.log(res);
                    }
                });
            });
        }

        function show_editprofile(){
            $("#edit-profile").click(function(e){
                $("#editProfile").toggle();
            });
        }
        end_workout();
        show_editprofile();
        edit_profile();
        end_class();
        add_feedback();
        open_feedback();
        add_class();
        add_workout1();
        add_workout2();
        add_workout3();
        
       });
     </script> 



<!-- end: Javascript -->

</body>
</html>