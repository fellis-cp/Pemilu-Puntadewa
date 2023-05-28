<?php
include 'assets/header.php';
 ?>
	<?php
	include 'assets/db.php';
  $page = $_SERVER['PHP_SELF'];
  $sec = "10";

	$get_votes = "SELECT calon1,calon2 FROM vote";
	$run_votes = mysqli_query($conn,$get_votes);
	$row_votes = mysqli_fetch_array($run_votes);
  $get_total = "SELECT count(id) FROM user";
  $run_total = mysqli_query($conn,$get_total);



	$calon1 = $row_votes['calon1'];
	$calon2 = $row_votes['calon2'];

  $total = 1004;
	$count = $calon1+$calon2;
	$golput= $total-$count;


	$per_calon1 = round($calon1*100/$count) . "%";
	$per_calon2 = round($calon2*100/$count) . "%";
  $per_count  = round($count*100/$total) . "%";


?>
<head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
</head>
<body>
  <div class="container">
    <div class="card-deck align-items-center">
      <div class="card tengah">
        <img class="card-img-top" src="assets/images/nartoh.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Alvin - Wildan</h4>
            </div>
            <div class="card-footer alert-success" role="alert">
              <h4>
               <?php  echo $per_calon1; ?>
              </h4>
            </div>
      </div>
      <div class="card tengah">
        <img class="card-img-top" src="assets/images/sasukang.png" alt="Card image cap">
            <div class="card-body">
              <h4 class="card-title">Alldhy - Akif</h4>
            </div>
            <div class="card-footer alert-success" role="alert">
              <h4>
               <?php  echo $per_calon2; ?>
              </h4>
            </div>
      </div>
    </div>
    <div class="alert alert-info" role="alert">
      <p>suara masuk <?php  echo $per_count; ?></P>
      <div class="progress">
        <div id="progress" style="border:1px solid #337ab7">
        </div>
      </div>
    </div>
  </div>
  </div>
</body>
<!--<body>
  <br>
  <br>
  <br>
  <center>
    <h1>Hasil Sementara Pemilu Online SMAN 1 Klaten 2017 </h1>
  </center>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <center>
          <form class="kotak-pemilihan panel panel-primary" action="vote.php" method="post">
            <div class="panel-heading center">
                <h3 class="panel-title">Nartoh Izumakih</h3>
            </div>
            <br>
            <img class="gambar2" src="assets/images/nartoh.png"/>
            <br>
            <p> Perolehan Suara</p>
            <div class="alert alert-success" role="alert">
              <h4>

              </h4>
            </div>
            <br>
          </form>
        </center>
      </div>
      <div class="col-md-6">
        <center>
          <form class="kotak-pemilihan panel panel-primary" action="vote.php" method="post">
            <div class="panel-heading center">
              <h3 class="panel-title">Sasukang Uchiah</h3>
            </div>
            <br>
            <img class="gambar2" src="assets/images/sasukang.png"/>
            <br>
            <p> Perolehan Suara</p>
            <div class="alert alert-warning" role="alert">
              <h4>

             </h4>
            </div>
            <br>
          </form>
        </center>
      </div>
    </div>
  <br>
    <div class="alert alert-info" role="alert">
      <p>suara masuk <?php  echo $per_count; ?></P>
      <div class="progress">
        <div id="progress" style="border:1px solid #337ab7">
        </div>
      </div>
    </div>
  </div>
  <br>
</body> -->

<!--<body>
  <br>
  <br>
  <br>
  <br>
  <center>
    <h1>Hasil Sementara Pemilu Online SMAN 1 Klaten 2017 </h1>
  </center>
  <br>
  <br>
  <br>
  <div class="container">
    <div class="row center">
      <div class="col-md-4">
        <center>
          <form class="kotak-pemilihan card card-primary" action="vote.php" method="post">
            <div class="card-header bg-info ">
                <h5 class="text-white">Pasangan Calon 1</h5>
            </div>
            <br>
            <img class="gambar2" src="assets/images/nartoh.png"/>
            <br>
            <p> Perolehan Suara</p>
            <div class="alert alert-success" role="alert">
              <h4>
               <?php  echo $per_calon1; ?>
              </h4>
            </div>
            <br>
          </form>
        </center>
      </div>
      <div class="col-md-4">
        <center>
          <form class="kotak-pemilihan card card-primary" action="vote.php" method="post">
            <div class="card-header bg-info ">
              <h5 class="text-white">Pasangan Calon 2</h5>
            </div>
            <br>
            <img class="gambar2" src="assets/images/sasukang.png"/>
            <br>
            <p> Perolehan Suara</p>
            <div class="alert alert-warning" role="alert">
              <h4>
               <?php  echo $per_calon2; ?>
             </h4>
            </div>
            <br>
          </form>
        </center>
      </div>
    </div>
  <br>
    <div class="alert alert-info" role="alert">
      <p>suara masuk <?php  echo $per_count; ?></P>
      <div class="progress-bar bg-white">
        <div id="progress" style="border:1px">
        </div>
      </div>
    </div>
  </div>
  <br>
</body> -->



<?php
echo '<script language="javascript">
document.getElementById("progress").innerHTML="<div style=\"width:'.$per_count.';background-color:#337ab7;\">&nbsp;</div>";
</script>';

echo str_repeat(' ',1024*64);
  include 'assets/footer.php';
 ?>
