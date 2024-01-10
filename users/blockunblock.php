<?php 
$server = "localhost";//apache IP
$user= "samarpan";
$pass='G@o)ed!Ln.HL74Ao';
$dbname = 'fun_olympic';
//connection with mysql
$conn = mysqli_connect($server,$user,$pass);
$selectDb = mysqli_select_db($conn,$dbname);




 $statusblock= "";


if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    $userstatus = $_POST['status'];
   $uid=$_POST['uid'];

    if($userstatus==1 )
    {
      
     
      $query="update user set status=0 where id=$uid";
      $result=mysqli_query($conn,$query);
      if($result)
        {
         
          echo "<script>alert('User blocked successfully!');
          window.location.href = 'blockunblock.php';</script>";
      }
    }
    if($userstatus==2 )
    {
      
     
      $query="update user set status=0 where id=$uid";
      $result=mysqli_query($con,$query);
      if($result)
        {
         
          echo "<script>alert('User blocked successfully!');
          window.location.href = 'blockunblock.php';</script>";
      }
    }

    
    if($userstatus==0)
    {
      
     
      $query="update user set status=1  where id=$uid";
      $result=mysqli_query($conn,$query);
      if($result)
        {
         
          echo "<script>alert('User unblocked successfully!');
          window.location.href = 'blockunblock.php';</script>";
      }
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


    
    
    //close connection
    $conn->close();
}




  
?>
<style>

    td{
        line-height:25px;
        padding: 0 10px!important;
        margin:0;
        font-size:14px;
        vertical-align:middle;
    }
    th{
        font-size:14px;
        vertical-align:middle;
    }

    button{
      line-height:20px;
      padding: 1px 5px!important;
    }

    form{
      margin:2px;
    }
</style>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript v-5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://kit.fontawesome.com/feaf2f5742.js" crossorigin="anonymous"></script>
<div class="main">
  <div class="container">
  <div class="row mt-5">
           <p style="text-align:center; font-weight:bold;">User</p>
           <!--<p style="text-align:right; font-weight:bold;"><a href="dashboard.php" style="text-decoration: none;">Dashboard</a></p>
           <br>-->
            </div>

<table class="table table-hover table-striped">
                <thead>
                <tr style="background-color:lightblue;">
                    <th scope="col">SN</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Gender</th>
                    
                    <th scope="col">User Name</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  //  $con=mysqli_connect("localhost","root","","cmsupdate");
                   
                    $server = "localhost";//apache IP
                    $user= "samarpan";
                    $pass='G@o)ed!Ln.HL74Ao';
                    $dbname = 'fun_olympic';
                    //connection with mysql
                    $conn = mysqli_connect($server,$user,$pass);
                    $selectDb = mysqli_select_db($conn,$dbname);

                    $query = "select * from user where isadmin=0";  
                    $result = mysqli_query($conn,$query);
                   
                    $cnt=1;
                    while ($row = mysqli_fetch_array($result)){
                      $userid=$row['id'];
                      $fname = $row['firstName'];
                      $lname = $row['lastName'];
                      $email = $row['email'];
                      $Gender = $row['Gender'];
                      $userName = $row['userName'];
                     
                     
                       $status = $row['status'];
                     
                      ?>
                      
                      <td> <?php echo $cnt;?> </td>
                      <td> <?php echo $fname;?> <?php echo $lname;?> </td>
                     
                      <td> <?php echo $email;?> </td>
                      <td> <?php echo $Gender;?> </td>
                      <td> <?php echo $userName;?> </td>
                
                      
                      <td style="">  
                    <a  href="delete.php?id= <?php echo $userid?>"><i class='fa fa-trash'></i></a>
                      


                        <form action="<?= $_SERVER['PHP_SELF']; ?> " method="POST" style="display:inline">
                         <!-- <button class="btn btn-danger">Delete</button> -->
                         <input type="hidden" name="status" value="<?php echo $status?>">
                         <input type="hidden" name="uid" value="<?php echo $userid?>">
                         <?php 
                         
                         
                         
                         if($status==1  )  
                    {
                      echo "<button class='btn btn-danger'>Block</button>";
                    }
                    if($status==0)  
                    {
                        echo "<button class='btn btn-info'>UnBlock</button>";
                    }

                    if($status==2)  
                    {
                        echo "<button class='btn btn-danger'>Block</button>";
                    }
                ?>

</form> 
                        </td> 
                      </tr>
                 <?php   $cnt++; }?>
                 
                </tbody>
              </table>
              </div>
              </div>
              <!-- echo "<button class='btn btn-danger'>Block</button>"; -->