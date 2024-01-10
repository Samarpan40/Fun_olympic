<?php 
$server = "localhost";//apache IP
$user= "samarpan";
$pass='G@o)ed!Ln.HL74Ao';
$dbname = 'fun_olympic';
//connection with mysql
$conn = mysqli_connect($server,$user,$pass);
$selectDb = mysqli_select_db($conn,$dbname);
?>