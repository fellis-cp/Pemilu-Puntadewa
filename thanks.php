<?php
include 'assets/db.php';
include 'assets/header.php';
 ?>


 <!-- Background Image -->
 	<div class="bg-img" style="background-image: url('./img/bowo1.jpg');">
 		<div class="overlay"></div>
 	</div>
 <!-- /Background Image -->

 <div class="container" style="padding-top:70px;">
     <div class="kotak">
       <div class="row jumbotron align-items-center">
           <div class="card tengah" style="width:90%">
             <div style="padding:80px;background-color:#ddd">
               <h2>Terimakasih Telah Berpartisipasi</h2>
               <h3>PUNTADEWA 2018!</h3>
               <center><i class="fa fa-circle-o-notch fa-spin"></i></center>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 <?php
include 'assets/footer.php';
header("refresh:2.5;url=result.php");
  ?>
