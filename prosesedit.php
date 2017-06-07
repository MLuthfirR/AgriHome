<?php include 'connect.php';

    if(isset($_POST['submit'])){
      //assigns Var
      $judul     = $_POST['judul'];
      $deskripsi = $_POST['deskripsi'];
      $category  = $_POST['category'];
      $gambar    = $_POST['gambar'];
      $id        = $_GET['id'];

      //target direktori tempat nyimpen gambar
      $target   = "images/".basename($_FILES['image']['name']);
      //nama gambar
      if($_FILES['image']['name'] == NULL) {   $image = $gambar;}else {
      $image    = $_FILES['image']['name'];
     }
      //Simple validation
      if($category == 1) {
          $query = mysqli_query($conn,"UPDATE penyakit_tanaman SET judul_tanaman = '$judul', deskripsi_penyakit = '$deskripsi',gambar_penyakit='$image' where id_penyakit='$id'");
        //  $insert_row = $db->insert($query);
          if($query){

          ?>
          	<script language="javascript">alert("Edit Successful");</script>
            <script>document.location.href='admin.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Edit Failed");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }
      if($category == 2) {
          $query = "UPDATE tabulangpot SET nama_tabulangpot = '$judul', deskripsi_tabulangpot = '$deskripsi',gambar_tabulangpot='$image'";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
          	<script language="javascript">alert("Edit Successful");</script>
            <script>document.location.href='admin.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Edit Failed");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }

      if($category == 3) {
          $query = "UPDATE hidroponik SET nama_hidro = '$judul', deskripsi_hidro = '$deskripsi',gambar_hidro='$image'";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
          	<script language="javascript">alert("Edit Successful");</script>
            <script>document.location.href='admin.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Edit Failed");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }

      if($category == 4) {
          $query = "UPDATE aeroponik SET nama_aero = '$judul', deskripsi_aero = '$deskripsi',gambar_aero='$image'";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
            <script language="javascript">alert("Edit Successful");</script>
            <script>document.location.href='admin.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Edit Failed");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }

      if($category == 5) {
          $query = "UPDATE arsitekturtanaman SET nama_arsitektur = '$judul', deskripsi_arsitektur = '$deskripsi',gambar_arsitektur='$image'";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
            <script language="javascript">alert("Edit Successful");</script>
            <script>document.location.href='admin.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Edit Failed");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }

      if($category == 6) {
          $query = "UPDATE tanaman SET nama_tanaman = '$judul', deskripsi_tanaman = '$deskripsi',gambar_tanaman='$image'";
        //  $insert_row = $db->insert($query);
        mysqli_query($conn,$query);

          if(move_uploaded_file($_FILES['image']['tmp_name'],"$target")){

          ?>
            <script language="javascript">alert("Edit Successful");</script>
            <script>document.location.href='admin.php';</script>
          <?php }else{ ?>
            <script language="javascript">alert("Edit Failed");</script>
            <script>document.location.href='posts.php';</script>
        <?php  }
      }


    }
    mysqli_close($conn);
?>
