<?php
  $conn = mysqli_connect('localhost','root','','login') //urutannya server, username, password, nama data base di myphp
  or die("Gagal koneksi ke server".mysqli_error());
  session_start();
	if(!(isset($_SESSION['id']))) {
		$_SESSION['status'] = "nouser";
	}
?>
