<?php
  session_start();

  // check if the user is already logged in, if yes then redirect him to dashboard page
  if(isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] == true) {
    header("location: index.php");
    exit();
  }

$server = "localhost";//apache IP
$user= "samarpan";
$pass='G@o)ed!Ln.HL74Ao';
$dbname = 'fun_olympic';
//connection with mysql
$conn = mysqli_connect($server,$user,$pass);
$selectDb = mysqli_select_db($conn,$dbname);

  $email = $password = "";
  $email_error = $password_error = $login_error = "";

  if($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)) {
      $email_error = "Email is required.";
    }
    if(empty($password)) {
      $password_error = "Password is required.";
    }

    if(empty($email_error) && empty($password_error)) {
      //now we need to login
      $email = $_POST['email'];
      $password = sha1($_POST['password']);

      $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
      

      if($stmt = $conn->prepare($sql)) {
        //bind parameters
        $stmt->bind_param("ss", $p_email, $p_password);

        //set the parameters
        $p_email = $email;
        $p_password = $password;

        //attempt to execute
        if($stmt->execute()) {
          $result = $stmt->get_result();
          if($result->num_rows == 1) {
            $data = $result->fetch_assoc();


            $_SESSION["logged_in"] = true;
            $_SESSION["email"] = $email;
            $_SESSION["name"] = $data["userName"];


            //redirect user to dashboard
            //header("location: index.php");
            //exit();

            if($data["status"]==1){
               if($data["isadmin"]==1){
          
                header("location:dashboard.php");
                exit();
              }
               if($data["isadmin"]==0){
          
                header("location:index.php");
                exit();
              }
          
               
              }
              else{
                $login_error="Your account has been blocked.";
              }



          } else {
            $login_error = "Invalid email or password.";
          }
        } else {
          echo "Something went wrong.";
        }
        $stmt->close();
      } else {
        echo "Something went wrong.";
      }
    }
  }
  $conn->close();
?>






<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name= "viewport" content="width:device-width; initial-scale:1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <script src="https://kit.fontawesome.com/9d44fc4b52.js" crossorigin="anonymous"></script>
  
  <style type="">
  .gradient-custom {
/* fallback for old browsers 
background: #6a11cb;*/

/* Chrome 10-25, Safari 5.1-6 
background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1)); */

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/*background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1)) */
}
i {
  border:1px solid red;
  color:white;
  background-color: white;
}
</style>
  <title></title>
</head>
<body>

<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-1 mt-md-2 pb-1">
              <h3>Log in to Fun Olympic</h3>
              <img src="assets/img/logo.png" width="150px" height="150px" alt="logo">
               <br>
               
               <br>
              <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
              <div class="form-outline form-white mb-4">
                <input type="email" name="email" placeholder="Enter you email" class="form-control form-control-md" />
                <span class="text-danger"><?php echo $email_error; ?></span>
                
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" name="password" placeholder="Enter you password" class="form-control form-control-md" id="myInput" />
                <input type="checkbox" onclick="myFunction()">Show Password
                <span class="text-danger"><?php echo $password_error; ?></span>
                
              </div>

              <?php
            if($login_error) {
              echo "<div class='alert alert-danger'>$login_error</div>";
            }
          ?>

              <p class="small mb-2 pb-lg-2"><a class="text-white-50" href="reset.php">Forgot password?</a></p>

              <button class="btn btn-outline-light btn-md px-5" type="submit" style="margin-bottom: 18px;">Login</button>
            </form>

              <!--<div class="d-flex justify-content-center text-center mt-2 pt-1">
                <a href="#!" class="text-white"><i class="fa-brands fa-facebook"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i>  <i class=" fab fa-twitter"></i></a>
                <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
              </div>-->
              <span>Login with <a href="">google</a> || <a href="">facebook</a></span>
             

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="registration.php" class="text-blue-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>