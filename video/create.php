<?php
	// session_start();

	// //check if the user is already logged in, if not then redirect him to login page
	// if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] != true) {
	// 	header("location: login.php");
	// 	exit();
	// }
	
	require '../config.php';

	$title = "";
	$title_error = "";

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$title  = $_POST['title'];
		


$targetDir = "../uploads/gallery/";
$fileName = $_POST['file'];
		 

		if(empty($title)) {
			$title_error = "title is required.";
		} 
		


		//check input errors before inserting in database
		if(empty($title_error)) {

			
			//die("here");
			//prepare an insert statement
			$sql = "INSERT INTO video (title,link) VALUES (?,?)";
			if($stmt = $conn->prepare($sql)) {

		
      
				//bind variables to the prepared statement as parameters
				$stmt->bind_param("ss", $p_title,$p_photo);

				//set parameters
				$p_title = $title;
				$p_photo = $fileName;

				//attempt to execute the prepared statement
				if($stmt->execute()) {
					//record created successfully. redirect to index page
					header("location: index.php");
				} else {
					echo "Something went wrong. Please try again later.";
				}
			}
			//close statement
			$stmt->close();
		}
		//close connection
		$conn->close();
	}


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
					<h2 class="pull-left">Link Video</h2>
					<a href="index.php" class="btn btn-primary pull-right">Back</a>
				</div>
				<hr>
			</div>
			<div class="col-md-6">
				<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label>Title *</label>
						<input type="text" name="title" class="form-control" value="<?= $title; ?>">
						<span class="text-danger"><i><?php echo $title_error; ?></i></span>
					</div>
					
					
                      
    <div class="form-group">
    	<label>Enter Embeded Link:</label>
    	<input text="file" name="file" class="form-control"  > </div>
  
					<input type="submit" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</div>
</div>

