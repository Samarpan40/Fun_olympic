
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatiable" content="IE=edge">
<meta name= "viewport" content="width=device-width, initial-scale=1.0">
</head>

<style type="text/css">
  
*{
    margin: 0; padding: 0;
    box-sizing: border-box;
}
.container1{
    position: relative;
    min-height: 100vh;
    background: #ddd;
    
}
.container1 h1{
    font-size: 30px;
    font-family: Verdena,Geneva, Tahoma,sans-serif;
    font-weight: normal;
    padding: 15px;
    color: #333;
    text-align: center;
    text-transform: capitalize;
}
.container1 .image-container1{
    display: flex;
    flex-wrap: wrap;
    gap:15px;
    justify-content: center;
    padding: 10px;
}
.container1 .image-container1 .image{
   height: 250px;
   width:  350px;
   border:10px solid #fff;
   box-shadow: 0 5px 15px rgba(0,0,0,.1);
   overflow: hidden;
   cursor: pointer;
}
.container1 .image-container1 .image img{
   height: 100%;
   width:  100%;
   object-fit: cover;
   filter: grayscale(100%);
   transition: .3s linear;
  
        

}
.container1 .image-container1 .image:hover img{
    transform: scale(1.1);
     filter:grayscale(0);
}

.container1 .popup-image{
    position: fixed;
    top: 0; left: 0;
    background: rgba(0,0,0,.9);
    height: 100%;
    width:100%;
    z-index:100;
    display: none;
}
.container1 .popup-image span{
    position: absolute;
    top: 0; right: 10px;
    font-size: 60px;
    font-weight: bolder;
    color: #fff;
    cursor: pointer;
    z-index: 100;
}
.container1 .popup-image img{
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    border:5px solid #fff;
    border-radius: 5px;
    width: 900px;
    object-fit: cover;
}
@media (max-width: 768px){
    .container1 .popup-image img{
        width: 95%;
    }
}



</style>
<?php 
$title='Fun Olympic';
@include 'header.php';
 ?>
<body>
    <div class="container1">

    <h1>Image Gallery</h1>

    <div class="image-container1">
        <?php
          require 'config.php';

          $sql = "SELECT * FROM gallery";

          $result = $conn->query($sql);

          if($result->num_rows > 0) {
           
            while ($row = $result->fetch_assoc()) {
         ?>
     
         <div class="image"><img src="http://<?= $_SERVER['HTTP_HOST'];
         ?>/funolympic/uploads/gallery/<?=$row['photo'] ?>" alt="<?=$row['title'] ?>"></div>
         
        <?php  
            }
            $result->free();
          } else {
            echo "<p>No records found.</p>";
          }

          $conn->close();

        ?>
</div>

     <div class="popup-image">
        <span>&times;</span>
         <img src="assets/img/cr7b.jpg" alt="">
     </div>


    </div>
    </div>
    



<script>

document.querySelectorAll('.image-container1 img').forEach(image =>{
   image.onclick = () =>{
        document.querySelector('.popup-image').style.display = 'block';
        document.querySelector('.popup-image img').src = image.getAttribute('src');
}
});

document.querySelector('.popup-image span').onclick = () =>{
    document.querySelector('.popup-image').style.display = 'none';
}
</script>
<?php 
$title='Fun Olympic';
@include 'footers.php';
 ?>
</body>
</html>
