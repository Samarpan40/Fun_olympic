<?php
	session_start();

	//check if the user is already logged in, if not then redirect him to login page
	if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] != true) {
		header("location: login.php");
		exit();
	}

  require 'includes/header.php';
  require 'includes/sidebar.php';
?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          
            
              
                
                <img style=" height: 250px; float: left;" src="assets/img/stat2.jpg" />
                <img style="height: 250px; " src="assets/img/stat1.jpg" />

        
      
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
