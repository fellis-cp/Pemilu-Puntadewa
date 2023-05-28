<?php
include 'assets/header.php';

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

</head>
<body>
  <div class="container" style="padding-top:70px;">
		<div class="row">
      <div class="tengah col-md-4">
	  <div class="thumbnail">
        <h4 class="tengah">Nama Calon 1</h4>
        <img src="assets/images/paslon1.png"  alt="Foto Paslon 1">
        <div class="ngisor">
					<?php  echo $per_calon1; ?>
        </div>
		</div>
      </div>
	  <div class="tengah col-md-4">
	  <div class="thumbnail">
        <h4 class="tengah">Nama Calon 2</h4>
        <img class="" src="assets/images/paslon1.png"  alt="Foto Paslon 1">
        <div class="ngisor">
					<?php  echo $per_calon2; ?>
        </div>
		</div>
      </div>
	  <div class="tengah col-md-4">
	  <div class="thumbnail">
        <h4 class="tengah">Nama Calon 3</h4>
        <img class="" src="assets/images/paslon1.png"  alt="Foto Paslon 1">
        <div class="ngisor">
					<?php  echo $per_calon3; ?>
        </div>
		</div>
      </div>
			<div class="alert alert-info" role="alert">
      <p>suara masuk</P>
      <div class="progress">
        <div id="progress" class="progress-bar bg-success" role="progressbar" style="width: 99%" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100">
        </div>
      </div>
    </div>
      </div>
  </div>
</body>
<?php
echo '<script language="javascript">
document.getElementById("progress").innerHTML="<div style=\"width:.$per_count.";"background-color:#337ab7;"\>&nbsp;</div>";
</script>';

echo str_repeat(' ',1024*64);
  include 'assets/footer.php';
	header("refresh:10;url=result.php");
 ?>
