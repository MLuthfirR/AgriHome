<?php
	include "connect.php";

	$email = $_POST['email']; // dollar underscore post itu ngambil data dari yang sebelumnya
	$pass  = md5($_POST['pass']);
	$nama  = $_POST['nama'];
	$alamat= $_POST['alamat'];
	$image    = $_FILES['image']['name'];
	$target   = "images/".basename($_FILES['image']['name']);


//insert into buat nambahin entitas ke data base
//php gak ada tipe varibel ,, jadi enak aja masuk masukin
	$sql_buat = "INSERT INTO user(nama,alamat,email,pass,gambar,aktif)
	 VALUES('$nama','$alamat','$email','$pass','images/$image','1')";
	 move_uploaded_file($_FILES['image']['tmp_name'],"$target");
	if (mysqli_query($conn, $sql_buat)){
?>

		<script language="javascript">alert("Register Successful");</script>   //skrip javascript untuk alert sderhana
		<script>document.location.href='index.php';</script> //untuk nge link
<?php
	}
	else{
?>
		<script language="javascript">alert("Register Failed");</script>
		<!-- <script>document.location.href='login.php';</script> -->
<?php
	}
	mysqli_close($conn); //untuk nutup koneksi,, agar abis ngirim data gak ada script lagi masuk ke data base
?>
