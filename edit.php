<?php
  include "connect.php";
  if (isset($_SESSION['committee'])){
    $committee = $_SESSION['committee'];
  //$query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $committee");
  //$data = mysqli_fetch_array($query);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Homepage | EVE-OR</title>
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!---webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700,800,400,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Satisfy' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
	</head>

	<body>
		<?php
		$query = mysqli_query($conn, "SELECT * FROM user WHERE user_id = $committee");
		$data = mysqli_fetch_array($query);
		?>
		<!-- container -->
			<!-- header -->
			<div class="header">
				<!-- logo -->
				<div class="logo">
						<a href="../tampilan_awal_acara/awal.php"><img src="images/logo.png" title="baku" /></a>
				</div>
				<!-- logo -->

				<!-- cart-info -->
				<div class="container">
				<div class="cart-info">
					<ul>
						<li class="dropdown"><a href="#"><?php echo $data['name']; ?></a>
							<div class="dropdown-content">
							<a href="../tampilan_acara_liat_profile/index.php">View Profile</a> <br>
							<a href="../logoutproses.php">Logout</a> <br>
							</div>
						</li>
          </li>
          <li><a href="../tampilan_awal_acara/sponsor.php">Find Sponsor</a></li>

          <li><a href="#">Notifikasi</a></li>

						<li><a href="../tampilan_awal_acara/awal.php">Home</a></li>
					</ul>
				</div>

				<!-- search-form -->
				<div class="search-form">
					<form align="center">
						<input type="text" class="text" value="Keyword or product code" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Keyword or product code';}">
						<input type="submit" value="" />
					</form>
				</div>
				<div class="clearfix"> </div>
				<!-- /search-form -->

				<!-- script-for-nav -->
				<script>
					$(document).ready(function(){
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(300);
						});
					});
				</script>
				<!-- script-for-nav -->

				<!-- /cart-info -->
				</div>
				<!-- header -->
			</div>
		<br>
<div class="container">
		<form action="editproses1.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="user_id" value="<?php echo $data ['user_id'];?>">
		<img src="file/<?php echo $data['image']?>" height="250px" width="200px" title="image" accept="image/jpeg"/>

		<table border=0 align=left>

		<input type="file" name="file" accept="image/jpeg, image/x-png">
		<input type="submit" name="upload" value="Upload"> <br>
	</form>
<br><br>
      <form name="create" action="../tampilan_acara_edit_profile/editproses.php" method="POST">


        <input type="hidden" name="user_id" value="<?php echo $data ['user_id'];?>">
		<tr>
			<th>Full Name</th>
			<th><input type="text" name = "fullname" value="<?php echo $data ['fullname'];?>"required></th>
		</tr>

		<tr>
			<th>Username</th>
			<th><input type="text" name="name" value="<?php echo $data ['name'];?>" required> </th>
		</tr>

		<tr>
			<th>Email</th>
			<th><input type="email" name="email" value="<?php echo $data ['email'];?>"required></th>
		</tr>

    <tr>
			<th>Telephone Number</th>
			<th><input type="text" name = "telp" pattern=[0-9]{6,12} class="validate" value="<?php echo $data ['telp'];?>"required></th>
		</tr>

    <tr>
			<th>New Password</th>
			<th><input type="password" name = "password" value="<?php echo $data ['password'];?>"required></th>
		</tr>

    <tr>
			<th>Re-type New Password</th>
			<th><input type="password" name = "password1" value="<?php echo $data ['password'];?>"required></th>
		</tr>

		<tr>
			<th></th>
			<th><input type="submit" name="submit" value="Submit"></th>
		</tr>
  </form>
		</table>
</div>
		<br>
		</div>

		<!-- footer -->
		<div class="footer">
			<div class="footer-grids">
				<div class="container">
					<div class="col-md-3 footer-grid contact-grid">
						<h4>Contact us</h4>
							<ul>
							<li><span class="c-icon"> </span>Dramaga, Bogor, West Java</li>
							<li><span class="c-icon1"> </span><a href="#">eveor_id@gmail.com</a></li>
							</ul>
						</div>

						<div class="col-md-3 footer-grid contact-grid">
						<ul class="social-icons">
						<li>
							<a href="#"><span class="facebook"> </span>EVE-OR Indonesia</a>
						</li>
						<li></li>
						</ul>
						</div>

						<div class="col-md-3 footer-grid contact-grid">
						<ul class="social-icons">
						<li>
							<a href="#"><span class="twitter"> </span>@eveor_id</a>
						</li>
						<li></li>
						</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer -->
		<!-- container -->
	</body>
</html>
<?php
}
	else if (@$_SESSION['company']){
			?>
			<script>document.location.href='../tampilan_awal_sponsor/awalspo.php';</script>
			<?php
    }else if (@$_SESSION['admin']){
        ?>
        <script>document.location.href='../admin/list.php';</script>
        <?php}
	else{
			?>
			<script language="javascript">alert("Anda belum login");</script>
			<script>document.location.href='../index.php';</script>
			<?php
		}
?>
