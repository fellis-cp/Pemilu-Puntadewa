<?php
ob_start();
if(!isset($_SESSION["username"])){
header("Location: ditutup.php");
exit(); }
?>
