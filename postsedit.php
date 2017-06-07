<?php include 'connect.php'; ?>

<div id="contact-form">
	<div>
		<h1>AgriHome</h1>
		<h4>Let's make it !</h4>
	</div>
		<p id="failure">Oopsie...message not sent.</p>
		<p id="success">Your message was sent successfully. Thank you!</p>
<?php $id = $_GET['edit'];
$query = mysqli_query($conn,"SELECT * FROM penyakit_tanaman where id_penyakit = '$id'");
$row = mysqli_fetch_array($query);
 ?>
		<link href="css/posts.css" rel="stylesheet">
		   <form method="post" enctype="multipart/form-data" action="prosesedit.php?id=<?php echo $id; ?>">
			<div>
		      <label for="name">
		      	<span class="required">Judul</span>
		      	<input type="text" value="<?php echo $row['judul_tanaman']; ?>" id="name" name="judul" placeholder="Judul Tanaman" required="required" tabindex="1" autofocus="autofocus" />
		      </label>
			</div>
			<input type="hidden" name="gambar" value="<?php echo $row['gambar_penyakit'];?>">
			<div>
		      <label for="subject">
		      <span>Subject: </span>
			      <select id="subject" name="category">
			         <option selected value="1">Plant Disease</option>
			         <option value="2">Tabulangpot</option>
			         <option value="3">Hidroponik</option>
							 <option value="4">Aeroponik</option>
							 <option value="5">Architecture Planting</option>
			      </select>
		      </label>
			</div>
			<div>
		      <label for="message">
		      	<span class="required">Article :</span>
						<script src="//cdn.ckeditor.com/4.7.0/standard/ckeditor.js"></script>
						<textarea id="message" name="deskripsi" placeholder="Please write your message here." tabindex="5" required="required">
						<?php echo $row['deskripsi_penyakit']; ?>
						</textarea>
						<script> CKEDITOR.replace('message'); </script>
					</label>
			</div>
			<br>
			<div>
		      <label for="subject">
		      <span>Image </span>
			       <input value="<?php echo $row['gambar_penyakit']; ?>" type="file" name="image">
		      </label>
			</div>
			<div>
		      <button name="submit" type="submit" id="submit" >SEND</button>
			</div>
		   </form>

	</div>
