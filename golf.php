
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   

   <!-- custom css file link  -->
   <style type="text/css">
      
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

*{
   font-family: 'Poppins', sans-serif;
   /*margin:0; padding:0;*/
   box-sizing: border-box;
   outline: none; border:none;
   text-decoration: none;
   text-transform: capitalize;
}
video{
         border:2px solid red;
      }

body{
   background-color: white!important;
   padding:20px;
}

.container{
   max-width: 1200px;
   margin:100px auto;
   display: flex;
   flex-wrap: wrap;
   align-items: flex-start;
   gap:20px;
}

.container .main-video-container{
   flex:1 1 700px;
   border-radius: 5px;
   box-shadow: 0 5px 15px rgba(0,0,0,.1);
   background-color: #fff;
   padding:30px;
}

.container .main-video-container .main-video{
   margin-bottom: 7px;
   border-radius: 5px;
   width: 100%;
}

.container .main-video-container .main-vid-title{
   font-size: 20px;
   color:#444;
}

.container .video-list-container{
   flex:1 1 350px;
   height: 485px;
   overflow-y: scroll;
   border-radius: 5px;
   box-shadow: 0 5px 15px rgba(0,0,0,.1);
   background-color: #fff;
   padding:15px;
}

.container .video-list-container::-webkit-scrollbar{
   width: 10px;
}

.container .video-list-container::-webkit-scrollbar-track{
   background-color: #fff;
   border-radius: 5px;
}

.container .video-list-container::-webkit-scrollbar-thumb{
   background-color: #444;
   border-radius: 5px;
}

.container .video-list-container .list{
   display: flex;
   align-items: center;
   gap:15px;
   padding:10px;
   background-color: #eee;
   cursor: pointer;
   border-radius: 5px;
   margin-bottom: 10px;
}

.container .video-list-container .list:last-child{
   margin-bottom: 0;
}

.container .video-list-container .list.active{
   background-color: #444;
}

.container .video-list-container .list.active .list-title{
   color:#fff;
}

.container .video-list-container .list .list-video{
   width: 100px;
   border-radius: 5px;
}

.container .video-list-container .list .list-title{
   font-size: 17px;
   color:#444;
}















@media (max-width:1200px){

   .container{
      margin:0;
   }

}

@media (max-width:450px){

   .container .main-video-container .main-vid-title{
      font-size: 15px;
      text-align: center;
   }

   .container .video-list-container .list{
      flex-flow: column;
      gap:10px;
   }

   .container .video-list-container .list .list-video{
      width: 100%;
   }

   .container .video-list-container .list .list-title{
      font-size: 15px;
      text-align: center;
   }

}
   </style>

</head>
<?php 
$title='Fun Olympic';
@include 'header.php';
 ?>
<body>
   
<div class="container">

   <div class="main-video-container">
      <video style="border:none;" src="assets/vidss/golf.mp4" loop controls muted autoplay class="main-video"></video>
      <h3 class="main-vid-title">01. Best Moments of Golf Olympic Tokyo</h3>
   </div>

   <div class="video-list-container">

      <div class="list active">
         <video src="assets/vidss/second.mp4" class="list-video"></video>
         <h3 class="list-title">02.  Opening Cermony China</h3>
      </div>

      <div class="list">
         <video src="assets/vidss/nine.mp4" class="list-video"></video>
         <h3 class="list-title">03. England Hit World REcord ODI Score</h3>
      </div>

      <div class="list">
         <video src="assets/vidss/fourth.mp4" class="list-video"></video>
         <h3 class="list-title">04.Men's 100m Semi Finals</h3>
      </div>

      <div class="list">
         <video src="assets/vidss/fifth.mp4" class="list-video"></video>
         <h3 class="list-title">05. Women Football England vs Germany Finals</h3>
      </div>

      <div class="list">
         <video src="assets/vidss/sixth.mp4" class="list-video"></video>
         <h3 class="list-title">06. Olympic Opening ceremony</h3>
      </div>

      <div class="list">
         <video src="assets/vidss/seventh.mp4" class="list-video"></video>
         <h3 class="list-title">07. Men's Football Portugal vs Spain </h3>
      </div>

      <div class="list">
         <video src="assets/vidss/third.mp4" class="list-video"></video>
         <h3 class="list-title">08. Basketball Men Gold Medal Match Spain vs USA</h3>
      </div>

   </div>

</div>













<!-- custom js file link  -->
<script type="text/javascript">
   let videoList = document.querySelectorAll('.video-list-container .list');

videoList.forEach(vid =>{
   vid.onclick = () =>{
      videoList.forEach(remove =>{remove.classList.remove('active')});
      vid.classList.add('active');
      let src = vid.querySelector('.list-video').src;
      let title = vid.querySelector('.list-title').innerHTML;
      document.querySelector('.main-video-container .main-video').src = src;
      document.querySelector('.main-video-container .main-video').play();
      document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
   };
});
</script>


</body>
</html>
<?php 
$title='Fun Olympic';
@include 'footers.php';
 ?>