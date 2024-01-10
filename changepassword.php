<?php
	session_start();

/*
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
$con = mysqli_connect($server,$user,$pass);
$selectDb = mysqli_select_db($con,$dbname);


	 $newpassword = $confirmpassword=	 $passworderror =  "";


	if($_SERVER['REQUEST_METHOD'] == "POST") {
		
		$newpassword = $_POST['newpassword'];
		$confirmpassword = $_POST['confirmpassword'];
		
      



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
		if(empty($passworderror) ) {
		
			
        

			//die("here");
			//prepare an insert statement
			$sql = "update  user set password=? where id=?";
			

			if($stmt = $con->prepare($sql)) {
				//bind variables to the prepared statement as parameters
				$stmt->bind_param("sd", $p_password,$p_id);
				

				//set parameters
                // $p_password =$newpassword;
			    $p_password = sha1($newpassword);
			   //$p_id=$_SESSION['id'];
			    $p_id=1 ;

				//attempt to execute the prepared statement
				if($stmt->execute()) {
					//record created successfully. redirect to index page
                    echo "<script>alert('Password updated successfully');
    window.location.href = 'index.php';</script>";
					// header("location: user/index.php");
				} else {
					echo "Something went wrong. Please try again later.";
				}
			}
			//close statement
			$stmt->close();
		}
		//close connection
		$con->close();
	}


  	
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript v-5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://kit.fontawesome.com/feaf2f5742.js" crossorigin="anonymous"></script>
<style>
    input, button{
        width:100%;
    }

    input{
        border:1px solid black;
        outline:none;
    }
</style>
<body>
<div class="d-flex justify-content-center align-items-center flex-column my-5 mx-3" >
      <!-- <h1>Fun Olympic</h1> -->
    
     
         <div class="col-sm-5 col-lg-4 col-xl-3  shadow-lg" style="padding:20px">
         
            <form action="<?= $_SERVER['PHP_SELF']; ?> " method="POST">
         <h3 style="text-align:center;" class="mb-4  mt-4">Change Password</h3>
              <div class="mb-3 mt-3">
                   <input type="password" name="newpassword" class="form-control-lg  " required placeholder="new password">
                 
              </div>

              <div class="mb-4 mt-3">
                  <input type="password" name="confirmpassword" class="form-control-lg" required placeholder="confirm password">
                  <?php echo $passworderror; ?>
              </div>
              
              <div class="mb-5">
                  <button type="submit" class="btn btn-primary btn-lg "><strong>Change Password</strong></button>
              </div>
            
            
            </form>
          
          
            
         </div>


    </div>
<div style="position:fixed; bottom:0; left:0 ; right:0;">

</div>
</body>