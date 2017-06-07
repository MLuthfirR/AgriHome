<?php include 'connect.php'; ?>
<?php

    if(isset($_POST['submit'])){
      //assigns Var
      $judul     = $_POST['judul'];
      $deskripsi = $_POST['deskripsi'];
      $category  = $_POST['category'];

      //target direktori tempat nyimpen gambar
      $target   = "images/".basename($_FILES['image']['name']);
      //nama gambar
      $image    = $_FILES['image']['name'];

      //Simple validation
      if($category == 1) {
          $query = "INSERT INTO penyakit_tanaman
                      (judul_tanaman,deskripsi_penyakit,gambar_penyakit)
                        VALUES('$judul','$deskripsi','images/$image')";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
          	<script language="javascript">alert("Upload Successful");</script>
            <script>document.location.href='index.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Upload Gagal");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }

      if($category == 2) {
          $query = "INSERT INTO tabulangpot
                      (nama_tabulangpot,deskripsi_tabulangpot,gambar_tabulangpot)
                        VALUES('$judul','$deskripsi','images/$image')";
        //  $insert_row = $db->insert($query);

        move_uploaded_file($_FILES['image']['tmp_name'],"$target");
          if(mysqli_query($conn,$query)){

          ?>
          	<script language="javascript">alert("Upload Successful");</script>
            <script>document.location.href='index.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Upload Gagal");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }

      if($category == 3) {
          $query = "INSERT INTO hidroponik
                      (nama_hidro,deskripsi_hidro,gambar_hidro)
                        VALUES('$judul','$deskripsi','images/$image')";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
          	<script language="javascript">alert("Upload Successful");</script>
            <script>document.location.href='index.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Upload Gagal");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }

      if($category == 4) {
          $query = "INSERT INTO aeroponik
                      (nama_aero,deskripsi_aero,gambar_aero)
                        VALUES('$judul','$deskripsi','images/$image')";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
            <script language="javascript">alert("Upload Successful");</script>
            <script>document.location.href='index.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Upload Gagal");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }

      if($category == 5) {
          $query = "INSERT INTO arsitekturtanaman
                      (nama_arsitektur,deskripsi_arsitektur,gambar_arsitektur)
                        VALUES('$judul','$deskripsi','images/$image')";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
            <script language="javascript">alert("Upload Successful");</script>
            <script>document.location.href='index.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Upload Gagal");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }

      if($category == 6) {
          $query = "INSERT INTO tanaman
                      (nama_tanaman,deskripsi_tanaman,gambar_tanaman)
                        VALUES('$judul','$deskripsi','images/$image')";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
            <script language="javascript">alert("Upload Successful");</script>
            <script>document.location.href='index.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Upload Gagal");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }


    }
    mysqli_close($conn);
?>
