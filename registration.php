<?php
	/*session_start();

	//check if the user is already logged in, if not then redirect him to login page
	if(!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] != true) {
		header("location: login.php");
		exit();
	}*/
	
	$server = "localhost";//apache IP
$user= "samarpan";
$pass='G@o)ed!Ln.HL74Ao';
$dbname = 'fun_olympic';
//connection with mysql
$conn = mysqli_connect($server,$user,$pass);
$selectDb = mysqli_select_db($conn,$dbname);

	$fName = $email = $password = $confirm_password = $gender =$lName=$userName= "";
	$fName_error = $email_error = $password_error = $confirm_password_error = $lName_error = $gender_error =$userName_error= "";

	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$fName = $_POST['fName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confirm_password = $_POST['confirm_password'];
		$lName = $_POST['lName'];
		$gender = isset($_POST['gender']) ? $_POST['gender'] : '';
		$userName = $_POST['userName'];

		if(empty($fName)) {
			$fName_error = "First name is required.";
		} else {
			if (!preg_match("/^[a-zA-Z ]*$/", $fName)) {
			 	$fName_error = "Only letters and white space allowed.";
			}
		}
		if(empty($lName)) {
			$lName_error = "Last name is required.";
		} 
		else {
			if (!preg_match("/^[a-zA-Z ]*$/", $lName)) {
			 	$lName_error = "Only letters and white space allowed.";
			}
		}

		if(empty($userName)) {
			$userName_error = "User name is required.";
		} 
		else {
			if (!preg_match("/^[a-zA-Z ]*$/", $userName)) {
			 	$userName_error = "Only letters and white space allowed.";
			}
		}



		if(empty($email)) {
			$email_error = "Email is required.";
		} else {
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email_error = "Invalid email format.";
			}
		}
		if(empty($password)) {
			$password_error = "Password is required.";
		} else {
			$pwdLength = strlen($password);
			if($pwdLength < 8) {
				$password_error = "Password must be at least 8 characters long.";
			}
		}
		if(empty($confirm_password)) {
			$confirm_password_error = "Password confirmation is required.";
		} else {
			if($password !== $confirm_password) {
				$password_error = "Password and Confirm Password must be same.";
			}
		}
		
		if(empty($gender)) {
			$gender_error = "Gender is required.";
		}

		//check input errors before inserting in database
		if(empty($fName_error) && empty($email_error) && empty($password_error) && empty($confirm_password_error) && empty($userName_error) && empty($gender_error) && empty($userName_error)) {
		
			


			//die("here");
			//prepare an insert statement
			$sql = "INSERT INTO user (firstName, lastName, email, password, Gender,userName) VALUES (?, ?, ?, ?, ?,?)";}
			

			if($stmt = $conn->prepare($sql)) {
				//bind variables to the prepared statement as parameters
				$stmt->bind_param("ssssss", $p_fname,$p_lname,$p_email, $p_password, $p_gender,$P_userName);
				

				//set parameters
				$p_fname = $fName;
				$p_email = $email;
				$p_lname=$lName;
				$p_password = sha1($password);
				$p_gender = $gender;
				$P_userName= $userName;


				//attempt to execute the prepared statement
				if($stmt->execute()) {
					//record created successfully. redirect to index page
					header("location: login.php");
				} else {
					echo "Something went wrong. Please try again later.";
				}
			}
			//close statement
			$stmt->close();
		}
		//close connection
		$conn->close();
	}?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header clearfix">
					<h2 class="" style="text-align: center;">Sign Up To Fun Olympic</h2>
					
				</div>
				<hr>
			</div>
			<div class="col-md-6 m-auto">
				<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
					<div class="row">
					<div class="form-group m-3" >
						<label>First Name *</label>
						<input style="width: 300px;" type="text" name="fName" class="form-control" value="<?= $fName; ?>">
						<span class="text-danger"><i><?php echo $fName_error; ?></i></span>
					</div>
					<div class="form-group m-3" >
						<label >Last Name *</label>
						<input style="width: 300px; " type ="text" name="lName" class="form-control" value="<?= $lName; ?>">
						<span class="text-danger"><i><?php echo $lName_error; ?></i></span>
					</div>
				</div>
                <div class="row">
					<div class="form-group m-3">
						<label>User Name *</label>
						<input style="width: 300px;" type="text" name="userName" class="form-control" value="<?= $userName; ?>">
						<span class="text-danger"><i><?php echo $userName_error; ?></i></span>
					</div>
					<div class="form-group m-3">
						<label>Email *</label>
						<input style="width: 300px;" type="email" name="email" class="form-control" value="<?= $email; ?>">
						<span class="text-danger"><i><?php echo $email_error; ?></i></span>
					</div>
</div>
<div class="row">
					<div class="form-group m-3">
						<label>Password *</label>
						<input style="width: 300px;" type="password" name="password" class="form-control" value="<?= $password; ?>">
						<span class="text-danger"><i><?php echo $password_error; ?></i></span>
					</div>
					<div class="form-group m-3">
						<label>Confirm Password *</label>
						<input  style="width: 300px;"type="password" name="confirm_password" class="form-control" value="<?= $confirm_password; ?>">
						<span class="text-danger"><i><?php echo $confirm_password_error; ?></i></span>
					</div>
					
</div>
					<div class="form-group">
						<label>Gender *</label><br>
						<label class="px-3">
							<input  type="radio" name="gender" value="M" <?= $gender == "M" ? "checked" : ""?>> Male
						</label>
						
						<label class="px-3">
							<input type="radio" name="gender" value="F"  <?= $gender == "F" ? "checked" : ""?>> Female
						</label>
						
						<label  class="px-3">
							<input type="radio" name="gender" value="O" <?= $gender == "O" ? "checked" : ""?> > Other
						</label>
						<br>
						<span class="text-danger"><i><?php echo $gender_error; ?></i></span>
					</div>

					<input type="submit" class="btn btn-primary">
				</form>
			</div>
		</div>
	</div>
</div>
</div>