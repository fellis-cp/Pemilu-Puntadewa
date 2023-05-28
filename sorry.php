<?php
include 'assets/db.php';
include 'assets/header.php';
 ?>

 <!-- Background Image -->
 	<div class="bg-img" style="background-image: url('./img/bowo1.jpg');">
 		<div class="overlay"></div>
 	</div>
 <!-- /Background Image -->


<br>
<br>
<br>
 <div class="container">
     <div class="kotak">
       <div class="row">
         <div class="col-lg-12 col-md-12 col-xs-12">
           <div class="well well-lg center">
             <div class="jumbotron tengah">
               <div style="padding:80px;background-color:#ddd">
                 <h4>Anda telah memilih.</h4>
                 <h5>Hak pilih hanya bisa digunakan satu kali.</h5>
                 <center><i style="font-size:50px" class="fa fa-circle-o-notch fa-spin"></i></center>
               </div>
             </div>
           </div>
         </div>

       </div> <!-- row -->
     </div> <!-- component -->
 </div> <!-- end container -->


 <?php
header('refresh: 2; url=login.php');
include 'assets/footer.php';
  ?>
