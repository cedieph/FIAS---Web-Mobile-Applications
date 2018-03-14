<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
	<meta name="description" content="Miminium Admin Template v.1">
	<meta name="author" content="Isna Nur Azis">
	<meta name="keyword" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gold's Gym Acropolis</title>
 
    <!-- material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/css/bootstrap.min.css">

      <!-- plugins -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/css/plugins/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/css/plugins/datatables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/css/plugins/simple-line-icons.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/css/plugins/animate.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/css/plugins/spinkit.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/css/plugins/bootstrap-material-datetimepicker.css"/>
<!--     
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/DataTables/jquery.dataTables.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/DataTables/extensions/dataTables.colVis.css"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/DataTables/extensions/dataTables.tableTools.css"/>
 -->

      <?php
        if(isset($login)) : 
    ?>

        <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/css/plugins/icheck/skins/flat/aero.css"/>
    <?php 
        endif;
      ?>



      <!-- 
      <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/template/css/plugins/fullcalendar.min.css"/> .
        -->
	  <link href="<?= base_url()?>assets/template/css/style.css" rel="stylesheet">
	<!-- end: Css -->

	<link rel="shortcut icon" href="<?= base_url()?>assets/template/img/favicon.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <?php
    if(!isset($login)) :
        $this->load->view('admin/includes/topnavbar');
        $this->load->view('admin/includes/sidenavbar');
    endif;
  ?>