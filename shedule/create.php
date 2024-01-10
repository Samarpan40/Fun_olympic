<?php
	// session_start();

	// //check if the user is already logged in, if not then redirect him to login page
	// if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] != true) {
	// 	header("location: login.php");
	// 	exit();
	// }
	
	require '../config.php';


	

	require '../includes/header.php';
  	require '../includes/sidebar.php';
?>

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header clearfix">
					<h2 class="pull-left">Update details</h2>
					<a href="index.php" class="btn btn-primary pull-right">Back</a>
				</div>
				<hr>
			</div>
			<div class="col-md-6">
				<form>
					<div class="form-group">
						<label>First Team *</label>
						<input type="text" name="title" class="form-control" >
						
					</div>

					<div class="form-group">
						<label>Second Team *</label>
						<input type="text" name="title" class="form-control" >
						
					</div>
					<div class="form-group">
						<label>Time *</label>
						<input type="datetime" name="title" class="form-control" >
						
					</div>
					
					
  
					


					<div id="snackbar">Updated Successfully</div> 
					<script type="text/javascript" >
					function updated(){
						var x = document.getElementById("snackbar");

                    // Add the "show" class to DIV
  						x.className = "show";

  						// After 3 seconds, remove the show class from DIV
  					setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
					} 
					</script>
					<style type="text/css">
						

						#snackbar {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: #333; /* Black background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 50%; /* Center the snackbar */
  top: 60px; /* 30px from the bottom */
}

/* Show the snackbar when clicking on a button (class added with JavaScript) */
#snackbar.show {
  visibility: visible; /* Show the snackbar */
  /* Add animation: Take 0.5 seconds to fade in and out the snackbar.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the snackbar in and out */
@-webkit-keyframes fadein {
  from {top: 0; opacity: 0;}
  to {top: 60px; opacity: 1;}
}

@keyframes fadein {
  from {top: 0; opacity: 0;}
  to {top: 60px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {top: 60px; opacity: 1;}
  to {top: 0; opacity: 0;}
}

@keyframes fadeout {
  from {top: 60px; opacity: 1;}
  to {top: 0; opacity: 0;}
}
					</style>
				</form>

				<button class="btn btn-primary" onclick="updated()">Submit</button>
			</div>
		</div>
	</div>
</div>
</div>

