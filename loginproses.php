<?php
	include 'connect.php';

	$email = $_POST['username'];
	$password =md5( $_POST['password']);

	$result = mysqli_query($conn, "SELECT * FROM user WHERE email='$email' and pass='$password'");

	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	if($row) {
		$_SESSION['id'] = $row['id'];

		if($_SESSION['id'] == '1'){
			$_SESSION['status'] = "Admin";
?>
			<script language="javascript">alert("Hai Admin :v");</script>
			<script> document.location.href='http://localhost/RPL/admin.php';</script>
<?php
		}
		else {
			$_SESSION['status'] = "User";
?>
			<script language="javascript">alert("Login Success");</script>
			<script> document.location.href='http://localhost/RPL/userdash.php';</script>
<?php
		}
	}
	else {
?>
		<script language="javascript">alert("Login Failed, Please Check Your Email & Password");</script>
		<script>document.location.href='http://localhost/RPL/login.php';</script>
<?php
	}
	mysqli_close($conn);
?>
