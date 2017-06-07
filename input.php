<!DOCTYPE html>
<?php
    include "connect.php";
  ?>

  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Input</title>
  </head>
  <body>
    <form name="create" action="inputproses.php" method="POST">
      Email : <input type="email"        name="email" required><br><br>
      Password  : <input type="password"     name="pass"  required><br><br>
      Nama  : <input type="text"         name="nama"  required><br><br>
      Alamat   : <input type="text"      name="alamat"   required><br><br>
      <button type="submit">Submit</submit>
    </form>
  </body>
  </html>
