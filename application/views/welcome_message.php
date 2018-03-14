
<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta name="description" content="Miminium Admin Template v.1">
        <meta name="author" content="Isna Nur Azis">
        <meta name="keyword" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gold's Gym Acropolis</title>

        <!-- start: Css -->
        <link rel="stylesheet" type="text/css" href="http://goldsgymfiascom/assets/template/css/bootstrap.min.css">

        <!-- plugins -->
        <link rel="stylesheet" type="text/css" href="http://goldsgymfiascom/assets/template/css/plugins/font-awesome.min.css"/>
        <link rel="stylesheet" type="text/css" href="http://goldsgymfiascom/assets/template/css/plugins/datatables.bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="http://goldsgymfiascom/assets/template/css/plugins/simple-line-icons.css"/>
        <link rel="stylesheet" type="text/css" href="http://goldsgymfiascom/assets/template/css/plugins/animate.min.css"/>
        <link rel="stylesheet" type="text/css" href="http://goldsgymfiascom/assets/template/css/plugins/spinkit.css"/>
        <link rel="stylesheet" type="text/css" href="http://goldsgymfiascom/assets/template/css/plugins/bootstrap-material-datetimepicker.css"/>




        <!-- 
        <link rel="stylesheet" type="text/css" href="http://localhost/fiasco/assets/template/css/plugins/fullcalendar.min.css"/> .
        -->
        <link href="http://goldsgymfiasco/assets/template/css/style.css" rel="stylesheet">
        <!-- end: Css -->

        <link rel="shortcut icon" href="http://goldsgymfiascom/assets/template/img/favicon.png">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>



    <body id="mimin" class="dashboard">
        <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
            <div class="col-md-12 nav-wrapper">
                <div class="navbar-header" style="width:100%;">
                    <div class="opener-left-menu is-open">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                    </div>
                    <a href="index.html" class="navbar-brand"> 
                        <b>Gold's Gym Acropolis</b>
                    </a>


                    <ul class="nav navbar-nav navbar-right user-nav">
                        <li class="user-name"><span>User</span></li>
                        <li class="dropdown avatar-dropdown">
                            <img src="http://goldsgymfiascom/assets/template/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                            <ul class="dropdown-menu user-dropdown">
                                <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                                <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                                <li role="separator" class="divider"></li>
                                <li class="more">
                                    <ul>
                                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                                        <li><a href="http://goldsgymfiascom/executeadmin/logout"><span class="fa fa-power-off "></span></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- end: Header -->
        <div class="container-fluid mimin-wrapper">

            <!-- start:Left Menu -->
            <div id="left-menu">
                <div class="sub-left-menu scroll">
                    <ul class="nav nav-list">
                        <li><div class="left-bg"></div></li>
                        <li class="time">
                            <h1 class="animated fadeInLeft">06</h1>
                            <p class="animated fadeInRight">Fri, February 2 18</p>
                        </li>
                        <li class="ripple">
                            <a href="#"><span class="fa fa-home"></span> Dashboard</a>
                        </li>
                        <li class="active ripple">
                            <a class="tree-toggle nav-header"><span class="fa-home fa"></span> User Management 
                                <span class="fa-angle-right fa right-arrow text-right"></span>
                            </a>
                            <ul class="nav nav-list tree">
                                <li><a href="http://goldsgymfiascom/admin/user">Users</a></li>
                                <li><a href="http://goldsgymfiascom/admin/trainers">Trainers</a></li>
                                <li><a href="http://goldsgymfiascom/admin/admin">Admin</a></li>
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
                                        <li><a href="">Full Body Workout</a></li>
                                        <li><a href="">Arm Workout</a></li>
                                        <li><a href="">Leg Workout</a></li>
                                        <li><a href="">Core Workout</a></li>
                                        <li><a href="">Butt Workout</a></li>
                                    </ul>

                                </li>
                                <li><a href="http://goldsgymfiascom/admin/cardio">Cardio</a></li>
                                <li><a href="">Weight Loss & Dieting</a></li>
                            </ul>
                        </li>

                        <li class="ripple"><a href="http://goldsgymfiascom/admin/classes"><span class="fa fa-list-alt"></span>Workout Classes</a></li>

                        <li class="ripple"><a href=""><span class="fa fa-calendar-check-o"></span>Workout Schedules</a></li>

                        <li class="ripple"><a href="http://goldsgymfiascom/admin/logs"><span class="fa fa-user"></span>Audit Trails</a></li>



                    </ul>
                </div>
            </div>
            <!-- end: Left Menu -->



            <div id="content">
                <div class="tabs-wrapper text-center">    
                    <div class="col-md-12 tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="panels-area-demo" aria-labelledby="tabs2">
                            <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                <h4>Collapsible Group Item #1</h4>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingTwo">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                <h4>Collapsible Group Item #2</h4>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingThree">
                                                        <h4 class="panel-title">
                                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                                <h4>Collapsible Group Item #3</h4>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                        <div class="panel-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>    
                </div>
            </div>

            <!-- start: Mobile -->
            <div id="mimin-mobile" class="reverse">
                <div class="mimin-mobile-menu-list">
                    <div class="col-md-12 sub-mimin-mobile-menu-list animated fadeInLeft">
                        <ul class="nav nav-list">
                            <li><div class="left-bg"></div></li>
                            <li class="time">
                                <h1 class="animated fadeInLeft">06</h1>
                                <p class="animated fadeInRight">Fri, February 2 18</p>
                            </li>
                            <li class="ripple">
                                <a href="#"><span class="fa fa-home"></span> Dashboard</a>
                            </li>
                            <li class="active ripple">
                                <a class="tree-toggle nav-header"><span class="fa-home fa"></span> User Management 
                                    <span class="fa-angle-right fa right-arrow text-right"></span>
                                </a>
                                <ul class="nav nav-list tree">
                                    <li><a href="http://goldsgymfiascom/admin/user">Users</a></li>
                                    <li><a href="http://goldsgymfiascom/admin/trainers">Trainers</a></li>
                                    <li><a href="http://goldsgymfiascom/admin/admin">Admin</a></li>
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
                                            <li><a href="">Full Body Workout</a></li>
                                            <li><a href="">Arm Workout</a></li>
                                            <li><a href="">Leg Workout</a></li>
                                            <li><a href="">Core Workout</a></li>
                                            <li><a href="">Butt Workout</a></li>
                                        </ul>

                                    </li>
                                    <li><a href="http://goldsgymfiascom/admin/cardio">Cardio</a></li>
                                    <li><a href="">Weight Loss & Dieting</a></li>
                                </ul>
                            </li>

                            <li class="ripple"><a href="http://goldsgymfiascom/admin/classes"><span class="fa fa-list-alt"></span>Workout Classes</a></li>

                            <li class="ripple"><a href=""><span class="fa fa-calendar-check-o"></span>Workout Schedules</a></li>

                            <li class="ripple"><a href="http://goldsgymfiascom/admin/logs"><span class="fa fa-user"></span>Audit Trails</a></li>



                        </ul>
                    </div>    
                </div>
            </div>
        </div>
        <!-- start: Javascript -->
        <script src="http://goldsgymfiascom/assets/template/js/jquery.min.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/jquery.ui.min.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/bootstrap.min.js"></script>


        <!-- plugins -->
        <script src="http://goldsgymfiascom/assets/template/js/plugins/moment.min.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/plugins/fullcalendar.min.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/plugins/jquery.nicescroll.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/plugins/jquery.vmap.min.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/plugins/maps/jquery.vmap.world.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/plugins/jquery.vmap.sampledata.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/plugins/chart.min.js"></script>

        <script src="http://goldsgymfiascom/assets/template/js/plugins/jquery.datatables.min.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/plugins/datatables.bootstrap.min.js"></script>
        <script src="http://goldsgymfiascom/assets/template/js/plugins/bootstrap-material-datetimepicker.js"></script>
        <script src="http://goldsgymfiascom/assets/js/sweetalert.min.js"></script>


        <!-- custom -->
        <script src="http://goldsgymfiascom/assets/template/js/main.js"></script>

        <script>
            var app_url = "http://goldsgymfiascom";
        </script>





        <script type="text/javascript">
            $(document).ready(function(){
            var app_url = "http://goldsgymfiascom";
            $('#datatables-example').DataTable();
            $('.dateAnimate').bootstrapMaterialDatePicker({ weekStart : 0, time: false, animation:true});
            $('.date').bootstrapMaterialDatePicker({ weekStart : 0, time: false});
            $('.time').bootstrapMaterialDatePicker({ date: false, format:'HH:mm', animation:true});
            $('.datetime').bootstrapMaterialDatePicker({ format : 'dddd DD MMMM YYYY - HH:mm', animation:true});
            $('.date-fr').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', lang : 'fr', weekStart : 1, cancelText : 'ANNULER'});
            $('.min-date').bootstrapMaterialDatePicker({ format : 'DD/MM/YYYY HH:mm', minDate : new Date() });
            function update_user(){
            $('.status_check').click(function(e){
            console.log("UPDATE CLICK");
            var curr = $(this);
            var id = $(curr).data('id');
            var url = "http://goldsgymfiascom/executeadmin/update_user";
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
                    .then((willDelete) = > {
                    if (willDelete) {
                    $.ajax({
                    type:"POST",
                            url: url,
                            data: {"id":id, "status":status},
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
                 });
            });
        }
            function update_trainer(){
            $('.status_check').click(function(e){
            console.log("UPDATE CLICK");
            var curr = $(this);
            var id = $(curr).data('id');
            var status = $(curr).data('status') == 1 ? 0 : 1;
            var url = "http://goldsgymfiascom/executeadmin/update_trainer";
            //var status = $(this).text() == 'Activate' ? 1 : 0;
            console.log(status);
            console.log(curr);
            swal({
            title: "Are you sure?",
                    text: "You will change the status of the user",
                    icon: "warning",
                    buttons: true,
                    infoMode: true,
            })
                    .then((willDelete) = > {
                    if (willDelete) {
                    $.ajax({
                    type:"POST",
                            url: url,
                            data: {"id":id, "status":status},
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

            function delete_user(){
            $('.delete_check').click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            var url = "http://goldsgymfiascom/executeadmin/delete_user";
            console.log(curr);
            //console.log(id);
            swal({
            title: "Are you sure?",
                    text: "You will remove the user from the system",
                    icon: "warning",
                    buttons: true,
                    infoMode: true,
            })
                    .then((willDelete) = > {
                    if (willDelete) {
                    $.ajax({
                    type:"POST",
                            url: url,
                            data: {"id":id},
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

            function delete_trainer(){
            $('.delete_check').click(function(e){
            var curr = $(this);
            var id = $(curr).data('id');
            var url = "http://goldsgymfiascom/executeadmin/delete_trainer";
            console.log(curr);
            //console.log(id);
            swal({
            title: "Are you sure?",
                    text: "You will remove the trainer from the system",
                    icon: "warning",
                    buttons: true,
                    infoMode: true,
            })
                    .then((willDelete) = > {
                    if (willDelete) {
                    $.ajax({
                    type:"POST",
                            url: url,
                            data: {"id":id},
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
            var end_time = $("#start-time").val();
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
                    if (res.success){

                    swal("You have successfully add a class the system", {
                    icon: "success",
                    });
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
            add_class();
            open_class();
            });
        </script>
        <!-- end: Javascript -->

    </body>
</html>