<?php
	// session_start();

	// //check if the user is already logged in, if not then redirect him to login page
	// if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] != true) {
	// 	header("location: login.php");
	// 	exit();
	// }

	require '../config.php';

	$title  = "";
	$title_error = "";

	if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id']) && !empty($_POST['id'])) {
		$id = $_POST['id'];
		$title = $_POST['title'];
		

		if(empty($title)) {
			$title_error = "title Name is required.";
		} 
		
		//check input errors before inserting in database
		if(empty($title_error)) {
			
			//die("here");
			//prepare an insert statement
			$sql = "UPDATE video SET title=? WHERE id=?";
			if($stmt = $conn->prepare($sql)) {
				//bind variables to the prepared statement as parameters
				$stmt->bind_param("si", $p_title, $p_id);

				//set parameters
				$p_title = $title;
				
				$p_id = $id;

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
	} else {
		if(isset($_GET['id']) && !empty($_GET['id'])){
		
			//prepare a select statement
			$sql = "SELECT id, title FROM video WHERE id = ?";

			if($stmt = $conn->prepare($sql)) {
				//bind the variables to the prepared statement as parameters
				$stmt->bind_param("i", $p_id);

				//set parameters
				$p_id = trim($_GET['id']);

				//attempt to execute the prepared statement
				if($stmt->execute()) {
					$result = $stmt->get_result();

					if($result->num_rows == 1) {
						//fetch result row as an associative array.
						//Since the result set contains only one row, we don't need to use while loop
						$row = $result->fetch_assoc();

						$title = $row['title'];
						$id = $row['id'];
					} else {
						header("location: index.php");
						exit();
					}
				} else {
					echo "Oops!!! Something went wrong.";
				}
			}

			//close statement
			$stmt->close();

			//close connection
			$conn->close();
		} else {
			header("location: index.php");
			exit();
		}
	}

	require '../includes/header.php';
  	require '../includes/sidebar.php';
?>
	 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header clearfix">
					<h2 class="pull-left">Update Link</h2>
					<a href="index.php" class="btn btn-primary pull-right">Back</a>
				</div>
				<hr>
			</div>
			<div class="col-md-6">
				<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
					<div class="form-group">
						<label>Title *</label>
						<input type="text" name="title" class="form-control" value="<?= $title; ?>">
						<span class="text-danger"><i><?php echo $title_error; ?></i></span>
					</div>
					
					</div>
					<input type="hidden" name="id" value="<?= $id; ?>">
					<input type="submit" class="btn btn-primary" value="Update">
				</form>
			</div>
		</div>
	</div>
</div>
</div>



<?php require '../includes/footer.php'; ?>