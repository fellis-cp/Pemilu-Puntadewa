<?php
ob_start();
include 'assets/header.php';

?>
<body>

  <!-- Background Image -->
  	<div class="bg-img" style="background-image: url('./img/bowo1.jpg');">
  		<div class="overlay"></div>
  	</div>
  <!-- /Background Image -->

  <form class="container" action="vote.php" method="post">
    <div class="row">
      <div class="tengah col-md-4">
	  <div class="thumbnail">
        <h4 class="tengah">Nama Calon 1</h4>
        <img src="assets/images/paslon1.png"  alt="Foto Paslon 1">
        <div class="ngisor">
          <button style="width:50%" class="btn btn-lg btn-danger spasivote" type:"submit" name="submit2">Vote</button>
          <br>
          <button type="button" class="btn btn-lg btn-outline-info spasi" data-toggle="collapse" style="width:80%;" data-target="#visi1">Visi</button>
          <div id="visi1" class="collapse">
            <ol>
              <li>Ini Adalah Visi</li>
            </ol>
          </div>
          <button type="button" class="btn btn-lg btn-outline-info spasi" style="width:80%;" data-toggle="collapse" data-target="#misi1">Misi</button>
          <div id="misi1" class="collapse align-items-center">
            <ol>
              <li>Misi 1</li>
              <li>Misi 2</li>
              <li>Misi 3</li>
              <li>Misi 4</li>
            </ol>
          </div>
        </div>
		</div>
      </div>
	  <div class="tengah col-md-4">
	  <div class="thumbnail">
        <h4 class="tengah">Nama Calon 2</h4>
        <img class="" src="assets/images/paslon1.png"  alt="Foto Paslon 1">
        <div class="ngisor">
          <button style="width:50%" class="btn btn-lg btn-danger spasivote" type:"submit" name="submit2">Vote</button>
          <br>
          <button type="button" class="btn btn-lg btn-outline-info spasi" data-toggle="collapse" style="width:80%;" data-target="#visi2">Visi</button>
          <div id="visi2" class="collapse">
            <ol>
              <li>Ini Adalah Visi</li>
            </ol>
          </div>
          <button type="button" class="btn btn-lg btn-outline-info spasi" style="width:80%;" data-toggle="collapse" data-target="#misi2">Misi</button>
          <div id="misi2" class="collapse align-items-center">
            <ol>
              <li>Misi 1</li>
              <li>Misi 2</li>
              <li>Misi 3</li>
              <li>Misi 4</li>
            </ol>
          </div>
        </div>
		</div>
      </div>
	  <div class="tengah col-md-4">
	  <div class="thumbnail">
        <h4 class="tengah">Nama Calon 3</h4>
        <img class="" src="assets/images/paslon1.png"  alt="Foto Paslon 1">
        <div class="ngisor">
          <button style="width:50%" class="btn btn-lg btn-danger spasivote" type:"submit" name="submit1">Vote</button>
          <br>
          <button type="button" class="btn btn-lg btn-outline-info spasi" data-toggle="collapse" style="width:80%;" data-target="#visi3">Visi</button>
          <div id="visi3" class="collapse">
            <ol>
              <li>Ini Adalah Visi</li>
            </ol>
          </div>
          <button type="button" class="btn btn-lg btn-outline-info spasi" style="width:80%;" data-toggle="collapse" data-target="#misi3">Misi</button>
          <div id="misi3" class="collapse align-items-center">
            <ol>
              <li>Misi 1</li>
              <li>Misi 2</li>
              <li>Misi 3</li>
              <li>Misi 4</li>
            </ol>
          </div>
        </div>
		</div>
      </div>
      </div>
  </form>

</body>

<?php
  include 'assets/db.php';

  	if (isset($_POST['submit1']) && ($user != null)){
      $calon = "UPDATE vote SET calon1 = calon1+1 WHERE  id='1'";

      if ($conn->query($calon) === TRUE) {
        $validasi = "UPDATE users set validation = 1,pilihan = 1 WHERE username='$user'";

        if ($conn->query($validasi) === TRUE) {
          session_destroy(); // Destroying All Sessions
          header("Location: thanks.php"); // Redirecting To Home Page
        } else {
          echo "ERR - Insert validation failed!";
        }
      } else {
        echo "ERR - Insert to database failed!";
      }

  	} elseif (isset($_POST['submit2'])&& ($user != null)){
      $calon = "UPDATE vote SET calon2 = calon2+1 WHERE  id='1'";

      if ($conn->query($calon) === TRUE) {
        $validasi = "UPDATE users set validation = 1,pilihan = 2 WHERE username='$user'";

        if ($conn->query($validasi) === TRUE) {
          session_destroy(); // Destroying All Sessions
          header("Location: thanks.php"); // Redirecting To Home Page
        } else {
          echo "ERR - Insert validation failed!";
        }
      } else {
        echo "ERR - Insert to database failed!";
      }
    } elseif (isset($_POST['submit3'])&& ($user != null)){
      $calon = "UPDATE vote SET calon3 = calon3+1 WHERE  id='1'";

      if ($conn->query($calon) === TRUE) {
        $validasi = "UPDATE users set validation = 1,pilihan = 3 WHERE username='$user'";

        if ($conn->query($validasi) === TRUE) {
          session_destroy(); // Destroying All Sessions
          header("Location: thanks.php"); // Redirecting To Home Page
        } else {
          echo "ERR - Insert validation failed!";
        }
      } else {
        echo "ERR - Insert to database failed!";
      }
    }



include 'assets/footer.php';
 ?>
