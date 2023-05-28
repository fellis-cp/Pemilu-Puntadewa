<?php
require('assets/db.php');

function randomString($length) {
	$str = "";
	$characters = array_merge(range('a','z'), range('0','9'));
	$max = count($characters) - 1;
	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}
	return $str;
}


for( $i = 01; $i < 31; $i++ ){
	$password = randomString(8);
	echo "password: ".$password."<br>";
	if ($i < 10) {
		$i = "0".$i;
	}
	$username = "XMIPA1".$i;
	echo "username: ".$username."<br>";
	$kelas = "XMIPA1";
	$trn_date = date("Y-m-d H:i:s");

	$isidata = "INSERT into `users` (validation, username, password, kelas, trn_date) VALUES ('0', '$username', '$password', '$kelas', '$trn_date');";
	if ($conn->query($isidata) === TRUE) {
		echo $kelas.$i."<br>";
	} else {
		echo "err<br>";
	}
}
