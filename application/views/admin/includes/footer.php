
      <!-- start: Mobile -->
      <div id="mimin-mobile" class="reverse">
        <div class="mimin-mobile-menu-list">
            <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                <ul class="nav nav-list">
                    <li><div class="left-bg"></div></li>
                    <li class="time">
                        <h1 class="animated fadeInLeft"><?= date("H") ?></h1>
                        <p class="animated fadeInRight"><?= date("D, F j y") ?></p>
                    </li>
                    <li class="ripple">
                        <a href="<?= base_url()?>admin"><span class="fa fa-home"></span> Dashboard</a>
                    </li>
                    <li class="active ripple">
                        <a class="tree-toggle nav-header"><span class="fa-home fa"></span> User Management 
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                        </a>
                        <ul class="nav nav-list tree">
                            <li><a href="<?= base_url()?>admin/user">Users</a></li>
                            <li><a href="<?= base_url()?>admin/trainers">Trainers</a></li>
                            <li><a href="<?= base_url()?>admin/admin">Admin</a></li>
                        </ul>
                    </li>
                    
                    <li class="ripple">
                        <a class="tree-toggle nav-header">
                            <span class="fa-plus fa"></span> Workouts
                            <span class="fa-angle-right fa right-arrow text-right"></span>
                        </a>
                        <ul class="nav nav-list tree">
                            <li class="ripple">
                                <a class="sub-tree-toggle nav-header">
                                    <span class="fa-plus fa"></span> Body Building
                                    <span class="fa-angle-right fa right-arrow text-right"></span> 
                                </a>
                                
                                <ul class="nav nav-list sub-tree">
                                    <li><a href="<?= base_url() ?>admin/fullbody">Full Body Workout</a></li>
                                    <li><a href="<?= base_url() ?>admin/arm">Arm Workout</a></li>
                                    <li><a href="<?= base_url() ?>admin/leg">Leg Workout</a></li>
                                    <li><a href="<?= base_url() ?>admin/core">Core Workout</a></li>
                                    <li><a href="<?= base_url() ?>admin/butt">Butt Workout</a></li>
                                </ul>

                            </li>
                            <li><a href="<?= base_url()?>admin/cardio">Cardio</a></li>
                            <li><a href="<?= base_url()?>admin/diet">Weight Loss & Dieting</a></li>
                        </ul>
                    </li>
                    
                    <li class="ripple"><a href="<?=base_url()?>admin/classes"><span class="fa fa-list-alt"></span>Workout Classes</a></li>
                    
                    <li class="ripple"><a href=""><span class="fa fa-calendar-check-o"></span>Workout Schedules</a></li>

                    <li class="ripple"><a href="<?= base_url()?>admin/feedback"><span class="fa fa-comment"></span>Feedback</a></li>
                    
                    <li class="ripple"><a href="<?= base_url()?>admin/logs"><span class="fa fa-user"></span>Audit Trails</a></li>
                    
                    
                    
                    
                </ul>
            </div>    
        </div>
    </div>
</div>

<?php 
    $this->load->view('admin/includes/modal');
?>

          <!-- end: Content -->


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

<!--     
    <script src="<?= base_url() ?>assets/template/DataTables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets/template/DataTables/extensions/ColVis/js/dataTables.colVis.min.js"></script>
    <script src="<?= base_url() ?>assets/template/DataTables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>

<!--      -->
    <script src="<?= base_url()?>assets/template/js/plugins/jquery.datatables.min.js"></script> -->
    <script src="<?= base_url()?>assets/template/js/plugins/datatables.bootstrap.min.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/bootstrap-material-datetimepicker.js"></script>
	<script src="<?= base_url()?>assets/js/moment.js"></script>
	<script src="<?= base_url()?>assets/js/sweetalert.min.js"></script>
	<script src="<?= base_url()?>assets/js/moment.min.js"></script>


    <?php
        if(isset($login)) : 
    ?>

    <script src="<?= base_url()?>assets/template/js/plugins/moment.min.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/icheck.min.js"></script>
    <script src="<?= base_url()?>assets/template/js/plugins/jquery.validate.min.js"></script>

    <?php 
        endif;
      ?>

    <!-- custom -->
    <script src="<?= base_url()?>assets/template/js/main.js"></script>

    <script>
        var app_url = "<?= base_url()?>";
    </script>


    <?php
        if(isset($login)) : 
    ?>


    <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
        
        

        function do_login(){
            $('#login-form').submit(function(e){
                e.preventDefault();
                var username = $("#login_username").val();
                var password = $("#login_password").val();
                
                var formData = $(this).serialize();

                $("#login_username-error").html("");
                $("#login_password-error").html("");
                console.log();
                $.ajax({
                    type: "POST",
                    url: app_url + "adminLogin/do_login",
                    data : formData,
                    dataType: "json",
                    success:function(res){
                        console.log(res);
                        if(res.success){
                            console.log(res.message);
                            validator("#login_username-error","");
                            validator("#login_password-error","");
                                    
                            swal({
                                title: "Login Success",
                                text: res.message,
                                icon: "success",
                                button: null,
                                timer:2e3
                            });
                            setTimeout(function() {
                                location.href = app_url + "admin";
                            }, 2000);
                        }
                        else{
                            if(res.errormsg){
                                swal({
                                    title: "Login Failed",
                                    text: res.message,
                                    icon: "warning",
                                    button: null,
                                    timer:2e3
                                });
                            }
                                if(res.messages.username != ""){
                                    validator("#login_username-error",res.messages.username);
                                    // $("#login_username-error").parent("div").addClass("form-animate-error");
                                    // $("#login_username-error").append(res.messages.username);
                                }
                                else{
                                    validator("#login_username-error","");
                                }
                                if(res.messages.password != ""){
                                    validator("#login_password-error",res.messages.password);
                                    // $("#login_password-error").parent("div").addClass("form-animate-error");
                                    // $("#login_password-error").append(res.messages.password);    
                                }
                                else{
                                    validator("#login_password-error","");
                                }
                            console.log(res.messages);
                        }
                    }
                });
            });

        }

        function validator(id,message){
            if(message != ""){
                console.log("wha");
                $(id).parent("div").addClass("form-animate-error");
                $(id).append(message);
            }
            else{   
                $(id).parent("div").removeClass("form-animate-error");
                $(id).html("");
            }
        }

        do_login();
        
       });
     </script> 
       <?php 
        endif;
      ?>



<script type="text/javascript">
  $(document).ready(function(){
      var app_url = "<?= base_url()?>";
    $('#datatables-example').DataTable();
    //var table = $('#datatables-example').DataTable();
    $('#datatables-example2').DataTable();

    $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false,animation:true});
    $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
    $('.time').bootstrapMaterialDatePicker({ date: false,format:'HH:mm',animation:true});
    $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm',animation:true});
    $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
    $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });

    // var myTable = $("#datatables-example").DataTable({
    //                 "processing" : true,
    //                 "serverSide" : true,
    //                 "autoWidth" : true,
    //                 "order" : [[0, "desc"]],
    //                 "ajax:" : {
    //                     "url" : app_url + "executeadmin/fetch_trainer",
    //                     "type" : "POST"
    //                 },
    //                 "colmnDefs" : [
    //                     {
    //                         "render" : function(data, type ,row){
    //                             var ent = "";
    //                             ent = '<button class="btn btn-'+ row[4]==1 ? "warning" : "info" + ' btn-sm status_check" data-id="'+ row[0] +'" data-status="' + row[4] + '"><i class="icon-pencil"></i>  ' + row[4]==1 ? "Deactivate" : "Activate" + '</button>' +
    //                                 '<button class="btn btn-danger btn-sm delete_check" data-id="'+ row[0] +'"><i class="icon-trash"></i></button>';
    //                             return ent;
    //                         },
    //                         "targets" : 5
    //                     },
    //                     {
    //                         "render": function (data, type, row){
    //                             var ent = '';
    //                             ent = '';
    //                                 if(row[4] == 1){
    //                                     ent = '<span class="label label-raised label-success">Active</span>';
    //                                 }
    //                                 else{
    //                                     ent = '<span class="label label-raised label-danger">Active</span>';
    //                                 }
    //                             return ent;
    //                         },
    //                         "targets" : 4
    //                     },

    //                     { "searchable" : false, "orderable" : false, "targets" : 5}
    //                 ],
    //                 "destroy" : true
    //             });
    
    


/* ------------------------------ USER ---------------------------------------------- */
    
<?php if(isset($is_user)) : ?>
    function update_user(){
        $('.status_check').click(function(e){
            console.log("UPDATE CLICK");
            var curr = $(this);
            var id = $(curr).data('id');
            var url = "<?= base_url() ?>executeadmin/update_user";
            var status = $(this).text() == 'Activate' ? 1 : 0;
            console.log(status);
            console.log(curr);
            swal({
                title: "Are you sure?",
                text: "You will change the status of the user",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id,"status":status},
                        dataType:"json",
                        success: function(data){
                            console.log(data);
                            swal("You have successfully update the status of the user", {
                                icon: "success",
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } 
                    });
                } 
                else {
                    
                }
            });
        });   
                
    }

    function undelete_user(){
        $('.undelete_check').click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            
            var url = "<?= base_url() ?>executeadmin/undelete_user";
            console.log(curr);
            //console.log(id);
            swal({
                title: "Are you sure?",
                text: "You will unremove the user from the system",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id},
                        dataType:"json",
                        success: function(data){
                            console.log(data);
                            swal("You have successfully unremoved the user from the system", {
                                icon: "success",
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } 
                    });
                }
            });
        });   
            
    }

    function delete_user(){
        $('.delete_check').click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            var url = "<?= base_url() ?>executeadmin/delete_user";
            console.log(curr);
            //console.log(id);
            swal({
                title: "Are you sure?",
                text: "You will remove the user from the system",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id},
                        dataType:"json",
                        success: function(data){
                            console.log(data);
                            swal("You have successfully remove the user from the system", {
                                icon: "success",
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } 
                    });
                }
            });
        });   
            
    }


    <?php endif; ?>
/* ------------------------------ TRAINER ---------------------------------------------- */

<?php if(isset($is_trainer)) : ?>
    //fetch_trainer();
    function add_trainer(){
        $("#form-add-trainer").submit(function(e){
            e.preventDefault();
            var formData = $(this).serialize();
            console.log(formData);
            
            var url = app_url + "executeadmin/add_trainer";
            // validator("#add-trainer-pass2-error","");
            // validator("#add-trainer-pass1-error","");
            validator("#add-trainer-fname-error","");
            validator("#add-trainer-lname-error","");
            //console.log(table.DataTable().ajax.reload);
            $.ajax({
                url : url,
                type : "POST",
                dataType : "JSON",
                data : formData,
                success:function(res){
                    console.log(res);
                    if(res.success){
                        swal({
                            title: "Add Trainer Success",
                            text: "You have successfully add a trainer to your system",
                            icon: "success",
                            button: null,
                            timer:2e3
                        });
                        // table.ajax.reload();
                        location.reload();
                    }
                    else{
                        if(res.messages_error){
                            if(res.messages.fname != ""){
                                validator("#add-trainer-fname-error",res.messages.fname);
                            }
                            if(res.messages.lname != ""){
                                validator("#add-trainer-lname-error",res.messages.lname);
                            }
                            // if(res.messages.pass1 != ""){
                            //     validator("#add-trainer-pass1-error",res.messages.pass1);
                            // }
                            // if(res.messages.pass2 != ""){
                            //     validator("#add-trainer-pass2-error",res.messages.pass2);
                            // }
                            swal({
                                title: "Add Trainer Failed",
                                text: "Please check your errors",
                                icon: "error",
                                button: null,
                                timer:2e3
                            });
                        }
                        else{
                            swal({
                                title: "Add Trainer Failed",
                                text: res.message,
                                icon: "error",
                                button: null,
                                timer:2e3
                            });

                        }
                    }
                },
                error:function(res){
                    console.log(res);
                }
                
            });
        });
    }
    function update_trainer(){
        $('.status_check').click(function(e){
            console.log("UPDATE CLICK");
            var curr = $(this);
            var id = $(curr).data('id');
            var status = $(curr).data('status') == 1 ? 0 : 1;
            var url = "<?= base_url() ?>executeadmin/update_trainer";
            //var status = $(this).text() == 'Activate' ? 1 : 0;
            console.log(status);
            console.log(curr);
            swal({
                title: "Are you sure?",
                text: "You will change the status of the trainer",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id,"status":status},
                        dataType:"json",
                        success: function(data){
                            console.log(data);
                            swal("You have successfully update the status of the trainer", {
                                icon: "success",
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } 
                    });
                } 
                else {
                    
                }
            });
        });   
                
    }

    function open_update_trainer(){
        $(".update_trainer_data").click(function(e){
            var url = app_url + "executeadmin/fetch_trainer";
            $("#trainer-container-update").show();
            var id = $(this).data('id');
            console.log(id);
            $.ajax({
                url : url,
                type : "POST",
                dataType : "json",
                data : {"id" : id},
                success:function(res){
                    if(res.success){
                        var t = res.trainer;
                        console.log(t.gender);
                        $("#up-trainer-id").val(t.id);
                        $("#up-trainer-fname").val(t.trainer_fname);
                        $("#up-trainer-lname").val(t.trainer_lname);
                        // $("#up-trainer-gender").val(t.gender);
                        console.log(t.gender)
                        // $("input[name=gender]:checked").prop('value', t.gender);
                        // $("input[name=gender] [value=" + t.gender + "]").prop('checked', true);
                    }
                    console.log(res);
                    // $("#uc-dayofweek").val(c.day);
                },
                error:function(res){
                    console.log(res);
                }
            });
            console.log("show div");
        });
    }

    function update_details_trainer(){
        $("#update_trainer_data").submit(function(e){
            e.preventDefault();
            var url = app_url + "executeadmin/update_trainer_data";
            var formData = $(this).serialize();
            $.ajax({
                url : url,
                type : "POST",
                dataType : "json",
                data : formData,
                success:function(res){
                    console.log(res);
                    if(res.success){    
                        swal({
                            title: "Update Trainer Success",
                            text: res.message,
                            icon: "success",
                            button: null,
                            timer:2e3
                        });
                    }
                    else{
                        swal({
                            title: "Update Trainer Failed",
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

    function close_update_trainer(){
        $("#close_update_trainer").click(function(e){
            $("#trainer-container-update").hide();
            console.log("hide div");
        })
    }

    function delete_trainer(){
        $('.delete_check').click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            var url = "<?= base_url() ?>executeadmin/delete_trainer";
            console.log(curr);
            //console.log(id);
            swal({
                title: "Are you sure?",
                text: "You will remove the trainer from the system",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id},
                        dataType:"json",
                        success: function(data){
                            console.log(data);
                            swal("You have successfully remove the trainer from the system", {
                                icon: "success",
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } 
                    });
                }
            });
        });   
            
    }

    function undelete_trainer(){
        $('.undelete_check').click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            var url = "<?= base_url() ?>executeadmin/undelete_trainer";
            console.log(curr);
            swal({
                title: "Are you sure?",
                text: "You will unremove the trainer from the system",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id},
                        dataType:"json",
                        success: function(data){
                            console.log(data);
                            swal("You have successfully unremoved the trainer from the system", {
                                icon: "success",
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } 
                    });
                }
            });
        });       
    }


    <?php endif; ?>
/* ------------------------------- CLASS -------------------------------------------------------*/

function deactivate_class(){
        $('.status_check').click(function(e){
            console.log("UPDATE CLICK");
            var curr = $(this);
            var id = $(curr).data('id');
            var st = $(curr).data('status');
            var url = app_url + "executeadmin/deactivate_class";
            var status = st == 1 ? 0 : 1;
            console.log(status);
            // console.log(curr);
            swal({
                title: "Are you sure?",
                text: "You will change the status of the class",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id,"status":status},
                        success: function(data){
                            console.log(data);
                            swal("You have successfully update the status of the class", {
                                icon: "success",
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } 
                    });
                } 
                else {
                    
                }
            });
        });   
                
    }

    function update_class(){
        $('.status_check').click(function(e){
            console.log("UPDATE CLICK");
            var curr = $(this);
            var id = $(curr).data('id');
            var st = $(curr).data('status');
            var url = app_url + "executeadmin/update_class";
            var status = st == 1 ? 0 : 1;
            console.log(status);
            // console.log(curr);?
            swal({
                title: "Are you sure?",
                text: "You will change the status of the class",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id,"status":status},
                        dataType:'json',
                        success: function(data){
                            console.log(data);
                            if(data.success){
                                console.log(data.success);
                                swal("You have successfully update the status of the class", {
                                    icon: "success",
                                });
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);
                            }
                            else{
                                console.log(data.success);
                                swal("Failed to update the status of the class", {
                                    icon: "error",
                                });
                                setTimeout(function() {
                                    location.reload();
                                }, 1000);
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


/* ------------------------------ CLASS SCHEDULE ---------------------------------------------- */

<?php if(isset($is_class)) : ?>
    function update_classsched(){
        $('.status_check_sched').click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            var url = "<?= base_url() ?>executeadmin/update_classsched";
            var st = $(curr).data('status');
            var status = st == 1 ? 0 : 1;    
            console.log(status);
            console.log( id);
            // console.log(curr);
            swal({
                title: "Are you sure?",
                text: "You will change the status of the class schedule",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id,"status":status},
                        dataType:'json',
                        success: function(data){
                            console.log(data);
                            swal("You have successfully update the status of the class schedule", {
                                icon: "success",
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } 
                    });
                } 
                else {
                    
                }
            });
        });   
                
    }

    function delete_classsched(){
        $('.delete_status').click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            var st = $(curr).data('status');
            var status = st == 1 ? 0 : 1;
            var url = "<?= base_url() ?>executeadmin/delete_classsched";
            console.log(status);
            //console.log(id);
            swal({
                title: "Are you sure?",
                text: "You will remove the class schedule from the system",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id, 'status' : status},
                        dataType:'json',
                        success: function(data){
                            console.log(data);
                            swal("You have successfully remove the class schedule from the system", {
                                icon: "success",
                            });
                            // setTimeout(function() {
                            //     location.reload();
                            // }, 1000);
                        },
                        error:function(res){
                            console.log(res);
                        }
                    });
                }
            });
        });      
    }

    function undelete_sched(){
        $('.undelete_check').click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            
            var url = "<?= base_url() ?>executeadmin/undelete_sched";
            console.log(curr);
            //console.log(id);
            swal({
                title: "Are you sure?",
                text: "You will unremove the class schedule from the system",
                icon: "warning",
                buttons: true,
                infoMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        type:"POST",
                        url: url,
                        data: {"id":id},
                        dataType:'json',
                        success: function(data){
                            console.log(data);
                            swal("You have successfully unremoved the class schedule from the system", {
                                icon: "success",
                            });
                            setTimeout(function() {
                                location.reload();
                            }, 1000);
                        } 
                    });
                }
            });
        });          
    }

    <?php endif; ?>
    /* ---------------------------------------------- EXERCISES ------------------------------------------ */

    
<?php if(isset($is_exercise)){ ?>

    function readURL(input) {

        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
        }
    }

    $("#file-img").change(function() {
        readURL(this);
    });
    function readURL2(input) {

        if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
            $('#img2').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
        }
    }

    $("#up-file-img").change(function() {
        readURL2(this);
    });

    function add_exercise(){
        $('#form-exercise').submit(function(e){
            e.preventDefault();
            // var formData = $(this).serialize();
            var formData = new FormData(this);
            // var d = $("#file-img")[0].files[0];
            // formData.append('file',$("#file-img")[0].files[0]);

            var url = app_url + "executeadmin/add_exercise";
            console.log(formData);
            $.ajax({
                url : url,
                type : "POST",
                dataType: "json",
                processData: false,  // tell jQuery not to process the data
                contentType: false,  // tell jQuery not to set contentType
                cache: false,//Options to tell jQuery not to process data or worry about content-type.
                data : formData,
                success:function(res){
                    console.log(res);
                    if(res.success){
                        swal({
                            title: "Add Exercise Success",
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
                            title: "Add Exercise Success",
                            text: res.message,
                            icon: "error",
                            button: null,
                            timer:2e3
                        });

                    }
                },
                error:function(res){
                    console.log(res);
                },
            });
        });
    }

    function update_exercise(){
        $(".btn-update-exercise").click(function(e){
            e.preventDefault();
            var id = $(this).data('id');
            var st = $(this).data('status');
            var status = st == 1 ? 0 : 1;
            var url = app_url + "executeadmin/update_exercise";
            $.ajax({
                url : url,
                type : "POST",
                dataType : "json",
                data : {"id":id,"status":status},
                success:function(res){
                    if(res.success){
                        swal({
                            title: "Update Success",
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
                            title: "Update Failed",
                            text: res.message,
                            icon: "error",
                            button: null,
                            timer:2e3
                        });
                        setTimeout(function() {
                            location.reload();
                        }, 1000);

                    }
                },
                error:function(res){
                    console.log(res);
                }
            });
        });
    }

    function fetch_exercise(){
        $('.btn-update-exercise-form').click(function(e){
            var id = $(this).data('id');
            var url = app_url + "executeadmin/fetch_exercise";
            $.ajax({
                url : url,
                type : "POST",
                dataType : "JSON",
                data : { "id" : id},
                success:function(res){
                    console.log(res);
                    var ex = res.ex;
                    if(res.success){
                        $("#exercise-container-update").toggle();
                        $("#up-exercise-name").val(ex.name);
                        $("#up-exercise-instructions").text(ex.instructions);
                        $("#up-type-exercise").val(ex.type);
                        $("#up-equipment-type").val(ex.equipment_type);
                        $("#up-muscle-target").val(ex.muscle_targeted);
                        $("#up-workout_type").val(ex.workout_type);
                        $("#up-exercise-id").val(ex.id);
                    }
                },
                error:function(res){
                    console.log(res);
                }
            });
        })
    }

    function update_exercise_details(){
        $('#form-exercise-update').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            // var d = $("#file-img")[0].files[0];
            // formData.append('file',$("#file-img")[0].files[0]);

            var url = app_url + "executeadmin/update_exercise_details";
            console.log(formData);
            $.ajax({
                url : url,
                type : "POST",
                dataType: "json",
                processData: false,  // tell jQuery not to process the data
                contentType: false,  // tell jQuery not to set contentType
                cache: false,//Options to tell jQuery not to process data or worry about content-type.
                data : formData,
                success:function(res){
                    console.log(res);
                    if(res.success){
                        swal({
                            title: "Update Exercise Success",
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
                            title: "Update Exercise Failed",
                            text: res.message,
                            icon: "error",
                            button: null,
                            timer:2e3
                        });

                    }
                },
                error:function(res){
                    console.log(res);
                },
            });
        });

    }
    
    update_exercise_details();
    fetch_exercise();
    update_exercise();
    add_exercise();

<?php } ?>
    /* ---------------------------------------------------------------------------------- */
  
    function open_class(){
        $(".btn-addclass").click(function(e){
            var curr = $(this);
            var class_id = $(curr).data('id');
            console.log(class_id);
            $("#class_id").val(class_id);
        });
    }

    function add_class(){
        $("#btn-add_class").click(function(e){
            var start_time = $("#start-time").val();
            var end_time = $("#end-time").val();
            var day = $("#dayofweek").val();
            var trainer_id = $("#trainer_id").val();
            var class_id = $("#class_id").val();
            
            console.log(start_time);
            console.log(end_time);
            console.log(day);
            console.log(trainer_id);
            console.log(class_id);
            var url = app_url + "executeadmin/add_class";
            $.ajax({
                url: url,
                type:"POST",
                data: {
                    "start_time" : start_time,
                    "end_time" : end_time,
                    "day" : day,
                    "trainer_id" : trainer_id,
                    "class_id" : class_id
                },
                dataType:"json",
                success:function(res){
                    console.log(res);
                    if(res.success){
                        
                        swal("You have successfully add a class the system", {
                                icon: "success",
                            });
                        setTimeout(function(){
                            location.reload();
                        }, 1000);     
                        location.reload();
                    }

                    else{
                        
                        swal("Invalid! Please Try Again", {
                                icon: "error",
                            });
                    }
                },
                error:function(res){
                    console.log(res);
                }

            });
        });
    }   

    <?php if(isset($is_workout)) : ?>
    function open_list_workout(){
        $(".btn-add-workout").click(function(e){
            var curr = $(this);
            var levelid = $(curr).data('levelid');
            var workoutid = $(curr).data('workoutid');
            var weekid = $(curr).data('weekid');
            $("#add-workout-week").val(weekid);
            $("#add-workout-level").val(levelid);
            $("#add-workout-workout").val(workoutid);
            $("#add_workout_modal").modal('show');
            // $("#workout-list-container").show();
            // $("#workout-week-container").hide();
        
            //var url = app_url + "add_list";
            // console.log("wew");
            // $("")
            // var a = $("#add-workout-week").val();
            // console.log(a);
        });
    }

    function add_list_workout(){
        $("#btn-add-workout").click(function(e){
            var curr = $(this);
            var weekid = $("#add-workout-week").val();
            var levelid = $("#add-workout-level").val();
            var workoutid = $("#add-workout-workout").val();
            var workoutname = $("#add-workout-name").val();
            var url = app_url + "executeadmin/add_list";
            $("#add-workout-name-error").html("");
            $.ajax({
                url : url,
                type: "POST",
                dataType: "json",
                data:{
                    "weekid" : weekid,
                    "levelid" : levelid,
                    "workoutid" : workoutid,
                    "workoutname" : workoutname
                },
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
                            location.reload();
                        }, 1000);
                    }
                    else{
                        console.log(res);
                        if(res.messages.workoutname != ""){
                            validator("#add-workout-name-error",res.messages.workoutname);
                        }
                    }
                },
                error:function(res){
                    console.log(res);
                }
            });
        });
    }

    function update_status_list(){
        $(".btn-update-status-workout").click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            var weekid = $(curr).data('weekid');
            var levelid = $(curr).data('levelid');
            var workoutid = $(curr).data('workoutid');
            var curr_status = $(curr).data('status');
            var status = curr_status == '1' ? '0' : '1';
            var url = app_url + "executeadmin/update_status_list";
            console.log(curr_status);
            console.log(status);
            $.ajax({
                url : url,
                type: "POST",
                dataType: "json",
                data:{
                    "id" : id,
                    "weekid" : weekid,
                    "levelid" : levelid,
                    "workoutid" : workoutid,
                    "status" : status
                },
                success:function(res){
                    if(res.success){
                          
                        swal({
                            title: "Update Workout Success",
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
                        console.log(res);
                        swal({
                            title: "Update Workout Failed",
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
    

    function open_add_workout(){
        $(".btn-add-workout-week").click(function(e){
            var curr = $(this);
            var workoutid = $(curr).data('workoutid');

            $("#workout-workout").val(workoutid);
            $("#workout-week-container").toggle();

            //var url = app_url + "add_list";
        });
    }

    function add_workout_week(){
        $(".btn-add-workout-week-submit").click(function(e){
            var curr = $(this);

            var week_name; 
            var week_week; 
            var week_level;
            var week_workout;
            
            validator("#workout-level-error","");
            validator("#workout-name-error","");
            validator("#workout-week-error","");
            week_name = $("#workout-name").val();
            week_week = $("#workout-week").val();
            week_level = $("#workout-level").val();
            week_workout = $("#workout-workout").val();
            var url = app_url + "executeadmin/add_workout_week";

            console.log(week_name);
            console.log(week_week);
            console.log(week_level);
            console.log(week_workout);

            $.ajax({
                url : url,
                type :"POST",
                dataType : "json",
                data:{
                    "week_name" : week_name,
                    "week_week" : week_week,
                    "week_level" : week_level,
                    "week_workout" : week_workout
                },
                success:function(res){
                    if(res.success){
                        swal({
                            title: "Add Workout Week Success",
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
                        if(!res.week_error){
                            if(res.messages.week_name != ""){
                                validator("#workout-name-error",res.messages.week_name);
                            }
                            if(res.messages.week_week != ""){
                                validator("#workout-week-error",res.messages.week_week);
                            }      
                            if(res.messages.week_level != ""){
                                validator("#workout-level-error",res.messages.week_level);
                            }
                            
                            swal({
                                title: "Add Workout Week Failed",
                                text: "Check your details",
                                icon: "error",
                                button: null,
                                timer:2e3
                            });
                        }
                        else{
                            
                            swal({
                                title: "Add Workout Week Failed",
                                text: res.message,
                                icon: "error",
                                button: null,
                                timer:2e3
                            });
                        }
                    }
                },
                error:function(res){
                    console.log(res);
                }
            });
        });
    }
    
    <?php endif; ?>


    <?php if(isset($is_class)) : ?>
    function open_update_class_sched(){
        $(".update_class_sched").click(function(e){
            var url = app_url + "executeadmin/fetch_class_sched";
            var id = $(this).data('id');
            console.log(id);
            $.ajax({
                url : url,
                type : "POST",
                dataType : "json",
                data : {"id" : id},
                success:function(res){
                    // console.log(res.class);
                    var c = res.class;
                    var t = res.trainer;
                    // var class = res.class;
                    var st = new Date(c.start_time * 1000);
                    var et = new Date(c.end_time * 1000);
                    // console.log( st.getMinutes() == 0 ? '00' : st.getMinutes());
                    var start = st.getHours() + ":" + (st.getMinutes() == 0 ? '00' : st.getMinutes());
                    var end = et.getHours() + ":" + (et.getMinutes()  == 0 ? '00' : st.getMinutes());
                    // console.log(start);
                    // console.log(end);
                    if(t != false){
                        $("#uc-old-trainer").val(t.trainer_fname + " " + t.trainer_lname);
                    }
                    $("#uc-start-time").val(start);
                    $("#uc-end-time").val(end);
                    $("#uc-class-id").val(c.id);
                    $("#uc-dayofweek").val(c.day);
                },
                error:function(res){
                    console.log(res);
                }
            });
            $("#update_class_div").show();
            console.log("show div");
        });
    }

    function close_update_class_sched(){
        $("#close_update_class_sched").click(function(e){
            $("#update_class_div").hide();
            console.log("hide div");
        })
    }

    function update_class_sched(){
        $("#form_update_schedule_class").submit(function(e){
            e.preventDefault();
            var formData = $(this).serialize();
            var url = app_url + "executeadmin/update_schedule_class";
            $.ajax({
                url : url,
                type : "POST",
                dataType : "json",
                data : formData,
                success:function(res){
                    // console.log(res);
                    if(res.success){
                        swal({
                            title: "Update Success",
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
                            title: "Update Failed",
                            text: "Check your details",
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
    
    <?php endif; ?>
    
    function validator(id,message){
        if(message != ""){
            console.log("wha");
            $(id).parent("div").addClass("form-animate-error");
            $(id).append(message);
        }
        else{   
            $(id).parent("div").removeClass("form-animate-error");
            $(id).html("");
        }
    }
    <?php if(isset($is_workout)) : ?>
        open_list_workout();
        add_list_workout();
        update_status_list();
        open_add_workout();
        add_workout_week()
    <?php endif; ?>

        add_class();
        open_class();

    <?php if(isset($is_trainer)) : ?>
        add_trainer();
        update_trainer();
        update_details_trainer();
        delete_trainer();
        undelete_trainer();
        //updte table
        close_update_trainer();
        open_update_trainer();
    <?php endif; ?>
    
    <?php if(isset($is_user)) : ?>
        update_user();
        delete_user();
        undelete_user();
    <?php endif; ?>
    
    <?php if(isset($is_class)) : ?>
        update_classsched();
        delete_classsched();
        undelete_sched();
        // deactivate_class();
        update_class();
        //Table Update 
        update_class_sched();
        
        close_update_class_sched();
        open_update_class_sched();

    <?php endif; ?>

  });
</script>
<!-- end: Javascript -->

</body>
</html>