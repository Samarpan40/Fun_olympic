
<body>
	<?php
	session_start();

$server = "localhost";//apache IP
$user= "samarpan";
$pass='G@o)ed!Ln.HL74Ao';
$dbname = 'fun_olympic';
//connection with mysql
$con = mysqli_connect($server,$user,$pass);
$selectDb = mysqli_select_db($con,$dbname);
$newpassword = $confirmpassword=	 $passworderror =$email= $emailerror= "";


	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$email= $_POST['email'];
		$newpassword = $_POST['newpassword'];
		$confirmpassword = $_POST['confirmpassword'];
		
      

		if(empty($email)) {
			$emailerror = "Email is required.";
		}



		if(empty($newpassword)) {
			$passworderror = "Password is required.";
		} else {
			$pwdLength = strlen($newpassword);
			if($pwdLength < 8) {
				$passworderror = "Password must be at least 8 characters long.";
			}
		}
		if(empty($confirmpassword)) {
			$passworderror = "Password confirmation is required.";
		} else {
			if($newpassword !== $confirmpassword) {
				$passworderror = "Password and Confirm Password must be same.";
			}
		}
	

		//check input errors before inserting in database
		if(empty($passworderror)  && empty($emailerror)) {
		
			
		// 	$sql1 = "SELECT * FROM user WHERE email = '$email'";
		// 	$result = mysqli_query($con, $sql1);
		// 	if (mysqli_num_rows($result) > 0)
		// 	{
		// 		$data=fetch_assoc($result);
		// 		if($data['email']==$email)
		// 		{
		// 		  $sql = "update  user set password=$newpassword where email=$email";
		// 		  $result = mysqli_query($con,$sql);
		// 		  if($result)
		// 		  {
		// 			  echo "<script>alert('Password reset successfully');
		// 			   window.location.href = 'login.php';</script>";
		// 		  }
		// 		}
		// 	}
        //    else{
		// 	$emailerror= "Email does not exists";
		//    }
         
		$sql="select * from user where email=? ";

		if($st=$con->prepare($sql))
		{
		 // bind parameter
		 $st->bind_param("s",$bp_email);
		 // set parameter
		 $bp_email=$email;
		
 
		 // execute
 
		 if($st->execute())
		 {
		   $result=$st->get_result();
		   if($result->num_rows==1){
			   $data=$result->fetch_assoc();
			 
			   $id=$data["id"];
			   /*$sql1 = "update  user set password=SHA1($newpassword) where id='$id'";
                echo $data['id'];
			//    header("location:user/index.php");
			//    exit();

			$result = mysqli_query($con,$sql1);
					  if($result)
					  {
						echo $data['fname'];
						  echo "<script>alert('Password reset successfully');
						   window.location.href = 'login.php';</script>";
					  }
					  else{
						$emailerror= "Email does not exists  12";
					  }
		   */   



$sql = "update  user set password=? where id=?";
			

			if($stmt = $con->prepare($sql)) {
				//bind variables to the prepared statement as parameters
				$stmt->bind_param("sd", $p_password,$p_id);
				

				//set parameters
                // $p_password =$newpassword;
			    $p_password = sha1($newpassword);
			   // $p_password = $newpassword;
			   $p_id=$id;

				//attempt to execute the prepared statement
				if($stmt->execute()) {
					//record created successfully. redirect to index page
                    echo "<script>alert('Password updated successfully');
    window.location.href = 'dashboard.php';</script>";
					// header("location: user/index.php");
				} else {
					echo "Something went wrong. Please try again later.";
				}
			}
			//close statement
			$stmt->close();







					}
		   else{
			$emailerror= "Email does not exists";
		   }
		 }
		 else{
		   echo "Something went wrong.";
		 }
		 $st->close();
		}
		else{
		 echo "Something went wrong.";
		}
		 

		}

		$con->close();
	}


  	
?>

<h1>Reset Password</h1>

<form action="<?= $_SERVER['PHP_SELF']; ?> " method="POST">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email"><br><br>
  <span style="color:red"> <?php echo $emailerror; ?></span>
  <label for="pwd">New Password:</label>
  <input type="password" id="pwd" name="newpassword" minlength="8"><br><br>
  <label for="pwd">Confirm Password:</label>
  <input type="password" id="pwd" name="confirmpassword" minlength="8"><br><br>
 <span style="color:red"> <?php echo $passworderror; ?></span>
  <input type="submit">
</form>

</body>
