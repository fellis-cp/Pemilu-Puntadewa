<?php
	ob_start();
	require('assets/db.php');
	include 'assets/header.php';
    // If form submitted, insert values into the database.


		if (isset($_POST['username']) && isset($_POST['password'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysqli_real_escape_string($conn,$username);
		$password = stripslashes($password);
		$password = mysqli_real_escape_string($conn,$password);
	//Checking is user existing in the database or not
		$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' and password='$password'");
		$validuser = mysqli_num_rows($query);
			if($validuser == 1){
					$query = mysqli_query($conn, "SELECT validation from users WHERE username='$username'");
					$row = mysqli_fetch_assoc($query);
						if ($row["validation"] == 0) {
							$_SESSION['username'] = $_POST['username'];
						 header("Location: vote.php"); // Redirect user to index.php
						} else {
							header("Location: ditutup.php"); // Redirect user to index.php
						}
			} else {
				header('location: login.php?error='.base64_encode('Username dan Password Invalid!!!'));
				exit();
			}

		}else{
?>

<body>

	<!-- Background Image -->
		<div class="bg-img" style="background-image: url('./img/bowo1.jpg');">
			<div class="overlay"></div>
		</div>
	<!-- /Background Image -->

	<div class="container">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4">
					<!-- form -->
					<form class="form-container" action="login.php" method="post" name="login">
						<img src="img/efb1.png" width="40%" alt="logo">
						<div class="form-group">
							<label for="exampleInputUsername1">Username</label>
							<input type="text" name="username" class="form-control" id="exampleInputUsername1" placeholder="Username" required>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
						</div>
						<button type="submit" class="btn btn-success btn-block" name="submit" value="login">Login</button>
					</form>
					<br>
					<!-- form -->
			</div>
			<div class="col-md-4"></div>
		</div>

	</div>
</body>



<?php }
include 'assets/footer.php';
?>
</body>
</html>
