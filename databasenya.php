<?php

require_once 'connect.php'; ?>

<h3> DATABASE CUSTOMER </h3>
<table border="1" cellspacing="0" cellpadding="6">
		<thead>
			<tr>
				<th>Id</th>
				<th>name</th>
				<th>Email</th>
				<th>Address</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM user WHERE aktif =1";
			$result = $conn->query($sql);
			if($result-> num_rows > 0) {
				while($row = $result-> fetch_assoc()) {
					echo "<tr>
						<td>".$row['id']."</td>
						<td>".$row['nama']."</td>
						<td>".$row['email']."</td>
						<td>".$row['alamat']."</td>
						<td>".$row['pass']."</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='9'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
