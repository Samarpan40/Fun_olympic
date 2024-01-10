
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">

  .content {
    text text-align: center;
    }
    .content h1{
      font-size: 50px;
      color: #fff;
      font-weight: 600;
      transition: 0.5s;
    }
    .content h1:hover{
    	-webkit-text-stroke: 2px #fff ;
    	color: transparent;
    }

    
   .back-video{
   	position: absolute;
   	right: 0;
   	bottom: 0;
    z-index:-1;
   }
   @media (min-aspect-ratio: 16/9){
   	.back-video{
   		width: 100%;
   		height: auto;
   	}
   }

   @media (max-aspect-ratio: 16/9){
   	.back-video{
   		width: auto;
   		height: 100%;
   	}
   }

  </style>
</head>
<body>

<div class="hero">
<?php 
$title='Fun Olympic';
@include 'header.php';
 ?>

  <video autoplay loop muted plays-inline class="back-video">
  <source src="assets/vidss/first.mp4" type="video/mp4">
 </video>

 <div class="content">
    <h1 align="center" style="color: red; font-size:35px;">Match Shedule</h1>
 </div>

</div>

<style>
table {
  font-family: arial, sans-serif;
  
  border-collapse: collapse;
  width: 100%;
}

td, th {
  
  
  padding: 30px;

}

tr:nth-child(even){
  background-color: rgba(240, 240, 240,0.4);

}
tr:hover{
  background-color: gray;
  color: white!important;
}
.left{
text-align:right;
font-weight:bold;
}
.right{
text-align:left;
font-weight:bold;
}
.shedule a:hover{
background-color:green!important;
cursor:pointer;
}
</style>
</head>
<body>

<div class="d-flex justify-content-center">
<table class="shedule" style="width: 800; margin: auto;">
  <tr>
    <td class="left">Ernst Handel</td>
    <td style=" width:200px;text-align:center;">9:52-10:50</td>
    <td class="right">Austria</td>
    <td> <a href="main_video.php"style="background-color:red; padding:4px 6px;border-radius:20px; color:white; font-weight:bold;text-decoration: none;">Watch Live</a></td>
 
  </tr>
  
  <tr>
    <td class="left">Ernst Handel</td>
    <td style=" width:200px;text-align:center;">9:52-10:50</td>
    <td class="right">Austria</td>
    <td> <a href="main_video.php"style="background-color:red; padding:4px 6px;border-radius:20px; color:white; font-weight:bold;text-decoration: none;">Watch Live</a></td>
    
 
  </tr>
  <tr>
    <td class="left">Ernst Handel</td>
    <td style=" width:200px;text-align:center;">9:52-10:50</td>
    <td class="right">Austria</td>
    <td> <a href="main_video.php" style="background-color:red; padding:4px 6px;border-radius:20px; color:white; font-weight:bold;text-decoration: none;">Watch Live</a></td>
 
  </tr>
  <tr>
    <td class="left">Ernst Handel</td>
    <td style=" width:200px;text-align:center;">9:52-10:50</td>
    <td class="right">Austria</td>
    <td> <a href="main_video.php" style="background-color:red; padding:4px 6px;border-radius:20px; color:white; font-weight:bold;text-decoration: none;">Live</a></td>
    
 
  </tr>
  
    
  
</table>
</div>




<div class="d-flex justify-content-center">
<table class="shedule" style="width: 800; margin: auto;">
  <tr>
    <td class="left">Ernst Handel</td>
    <td style=" width:200px;text-align:center;">9:52-10:50</td>
    <td class="right">Austria</td>
    <td> <a href="main_video.php"style="background-color:red; padding:4px 6px;border-radius:20px; color:white; font-weight:bold;text-decoration: none;">Live</a></td>
 
  </tr>
  
  <tr>
    <td class="left">Ernst Handel</td>
    <td style=" width:200px;text-align:center;">9:52-10:50</td>
    <td class="right">Austria</td>
    <td> <a href="main_video.php"style="background-color:red; padding:4px 6px;border-radius:20px; color:white; font-weight:bold;text-decoration: none;">Live</a></td>
    
 
  </tr>
  <tr>
    <td class="left">Ernst Handel</td>
    <td style=" width:200px;text-align:center;">9:52-10:50</td>
    <td class="right">Austria</td>
    <td> <a href="main_video.php" style="background-color:red; padding:4px 6px;border-radius:20px; color:white; font-weight:bold;text-decoration: none;">Live</a></td>
 
  </tr>
  <tr>
    <td class="left">Ernst Handel</td>
    <td style=" width:200px;text-align:center;">9:52-10:50</td>
    <td class="right">Austria</td>
    <td> <a href="main_video.php" style="background-color:red; padding:4px 6px;border-radius:20px; color:white; font-weight:bold;text-decoration: none;">Live</a></td>
    
 
  </tr>
  
    
  
</table>
</div>




<?php 
$title='Fun Olympic';
@include 'includes/footer.php';
 ?>
</body>
</html>
