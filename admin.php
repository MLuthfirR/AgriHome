<!DOCTYPE html>

<?php
    include "connect.php";
    if($_SESSION['status']!="Admin")
    {
    ?>
    <script language="Javascript">alert("Lah... sape lu !!! husshh husshh !!");</script>
      <script>document.location.href='http://localhost/RPL/login.php';</script>
    <?php
    }
  ?>
<?php
    if(isset($_GET['hapus'])){
      $id = $_GET['hapus'];
      $query = mysqli_query($conn,"DELETE from penyakit_tanaman WHERE id_penyakit = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Deleted");</script>

<?php
    } }
?>
<?php
    if(isset($_GET['hapus2'])){
      $id = $_GET['hapus2'];
      $query = mysqli_query($conn,"DELETE from tabulangpot WHERE id_tabulangpot = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Deleted");</script>

<?php
    } }
?>
<?php
    if(isset($_GET['hapus3'])){
      $id = $_GET['hapus3'];
      $query = mysqli_query($conn,"DELETE from hidroponik WHERE id_hidro = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Deleted");</script>

<?php
    } }
?>
<?php
    if(isset($_GET['hapus4'])){
      $id = $_GET['hapus4'];
      $query = mysqli_query($conn,"DELETE from aeroponik WHERE id_aero = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Deleted");</script>

<?php
    } }
?>
<?php
    if(isset($_GET['hapus5'])){
      $id = $_GET['hapus5'];
      $query = mysqli_query($conn,"DELETE from arsitekturtanaman WHERE id_arsitektur = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Deleted");</script>

<?php
    } }
?>

<?php
    if(isset($_GET['hapus6'])){
      $id = $_GET['hapus6'];
      $query = mysqli_query($conn,"DELETE from tanaman WHERE id_tanaman = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Deleted");</script>

<?php
    } }
?>

<?php
    if(isset($_GET['update'])){
      $id = $_GET['update'];
      $query = mysqli_query($conn,"UPDATE penyakit_tanaman SET validasi_penyakit =1 WHERE id_penyakit = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Approved");</script>

<?php
  } }
?>


<?php
    if(isset($_GET['update2'])){
      $id = $_GET['update2'];
      $query = mysqli_query($conn,"UPDATE tabulangpot SET validasi_tabulangpot =1 WHERE id_tabulangpot = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Approved");</script>

<?php
    } }
?>
<?php
    if(isset($_GET['update3'])){
      $id = $_GET['update3'];
      $query = mysqli_query($conn,"UPDATE hidroponik SET validasi_hidro =1 WHERE id_hidro = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Approved");</script>

<?php
    } }
?>

<?php
    if(isset($_GET['update4'])){
      $id = $_GET['update4'];
      $query = mysqli_query($conn,"UPDATE aeroponik SET validasi_aero =1 WHERE id_aero = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Approved");</script>

<?php
    } }
?>

<?php
    if(isset($_GET['update5'])){
      $id = $_GET['update5'];
      $query = mysqli_query($conn,"UPDATE arsitekturtanaman SET validasi_arsitektur =1 WHERE id_arsitektur = '$id'");
      if($query){ ?>
      <script language="javascript">alert("Post Approved");</script>

<?php
    } }
?>

<?php
    if(isset($_GET['update6'])){
      $id = $_GET['update6'];
      $query = mysqli_query($conn,"UPDATE tanaman SET validasi_tanaman =1 WHERE id_tanaman = '$id'");
      if($query){ ?>

        <script language="javascript">alert("Post Approved");</script>
<?php
    } }
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Admin Agrihome</a><img src="img/portfolio/gambar/logo.png" width="50" height"50">
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['nama']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['nama']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong><?php echo $_SESSION['nama']; ?></strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                  <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">See Post<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="postslist.php"></i>Plant Disease</a>
                          </li>
                          <li>
                              <a href="postslist2.php"></i>Tabulangpot</a>
                          </li>
                          <li>
                              <a href="postslist3.php"></i>Hidroponik</a>
                          </li>
                          <li>
                              <a href="postslist4.php"></i>Aeroponik</a>
                          </li>
                          <li>
                              <a href="postslist6.php"></i>Tanaman</a>
                          </li>
                          <li>
                              <a href="postslist5.php"></i>Arsitektur Tanaman</a>
                          </li>
                      </ul>
                  </li>

                </li>
                <?php
                if($_SESSION['id']==1){
                  $id = $_SESSION['id'];
                  $query = mysqli_query($conn,"SELECT * FROM user WHERE id = '$id'");
                  $row = mysqli_fetch_array($query);
                }
                ?>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $row['nama']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="http://localhost/RPL/proseslogout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="admin.php"><i class="fa fa-fw fa-dashboard"></i> Perkebangan </a>
                    </li>
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home </a>
                    </li>
                    <li class="active">
                        <a href="posts.php"><i class="fa fa-fw fa-pencil"></i> Post something</a>
                    </li>
            </div>


            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Statistik <small>Perkembangan</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <i class="fa fa-dashboard"></i> Perkembangan
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="alert alert-info alert-dismissable">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <i class="fa fa-info-circle"></i>  <strong>Makin baik?</strong> coba kita lihat~
                        </div>
                    </div>
                </div>
                <!-- /.row -->



                </div>
                <!-- /.row -->

  <div class="container">
  <h2>Incoming Plant Disease</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Judul</th>
        <th>Status</th>
        <th>Validasi</th>

      </tr>
    </thead>
    <tbody>
      <?php
          $query = mysqli_query($conn,"SELECT * FROM penyakit_tanaman");
          while($row = mysqli_fetch_array($query)) {
       ?>
      <tr>
        <td><a href="artikel.php?id=<?php echo $row['id_penyakit']?>"><?php echo $row['judul_tanaman'] ?></td>
        <td><?php echo $row['validasi_penyakit'] ?></td>
        <td><a href="admin.php?update=<?php echo $row['id_penyakit']; ?>"><button type="button" class="btn btn-success">Post It !</button>
            <a href="admin.php?hapus=<?php echo $row['id_penyakit']; ?>"><button type="button" class="btn btn-danger">Don't Post !</button>
            <a href="postsedit.php?edit=<?php echo $row['id_penyakit']; ?>"><button type="button" class="btn btn-warning">Edit</button></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<div class="container">
<h2>Incoming Tabulangpot</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Status</th>
      <th>Validasi</th>

    </tr>
  </thead>
  <tbody>
    <?php
        $query = mysqli_query($conn,"SELECT * FROM tabulangpot");
        while($row = mysqli_fetch_array($query)) {
     ?>
    <tr>
      <td><a href="artikel2.php?id=<?php echo $row['id_tabulangpot']?>"><?php echo $row['nama_tabulangpot'] ?></td>
      <td><?php echo $row['validasi_tabulangpot'] ?></td>
      <td><a href="admin.php?update2=<?php echo $row['id_tabulangpot']; ?>"><button type="button" class="btn btn-success">Post It !</button>
          <a href="admin.php?hapus2=<?php echo $row['id_tabulangpot']; ?>"><button type="button" class="btn btn-danger">Don't Post !</button>
          <a href="postsedit.php?edit=<?php echo $row['id_tabulangpot']; ?>"><button type="button" class="btn btn-warning">Edit</button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<div class="container">
<h2>Incoming Hidroponik</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Status</th>
      <th>Validasi</th>

    </tr>
  </thead>
  <tbody>
    <?php
        $query = mysqli_query($conn,"SELECT * FROM hidroponik");
        while($row = mysqli_fetch_array($query)) {
     ?>
    <tr>
      <td><a href="artikel3.php?id=<?php echo $row['id_hidro']?>"><?php echo $row['nama_hidro'] ?></td>
      <td><?php echo $row['validasi_hidro'] ?></td>
      <td><a href="admin.php?update3=<?php echo $row['id_hidro']; ?>"><button type="button" class="btn btn-success">Post It !</button>
          <a href="admin.php?hapus3=<?php echo $row['id_hidro']; ?>"><button type="button" class="btn btn-danger">Don't Post !</button>
          <a href="postsedit.php?edit=<?php echo $row['id_hidro']; ?>"><button type="button" class="btn btn-warning">Edit</button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<div class="container">
<h2>Incoming Aeroponik</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Status</th>
      <th>Validasi</th>

    </tr>
  </thead>
  <tbody>
    <?php
        $query = mysqli_query($conn,"SELECT * FROM aeroponik");
        while($row = mysqli_fetch_array($query)) {
     ?>
    <tr>
      <td><a href="artikel4.php?id=<?php echo $row['id_aero']?>"><?php echo $row['nama_aero'] ?></td>
      <td><?php echo $row['validasi_aero'] ?></td>
      <td><a href="admin.php?update4=<?php echo $row['id_aero']; ?>"><button type="button" class="btn btn-success">Post It !</button>
          <a href="admin.php?hapus4=<?php echo $row['id_aero']; ?>"><button type="button" class="btn btn-danger">Don't Post !</button>
          <a href="postsedit.php?edit=<?php echo $row['id_aero']; ?>"><button type="button" class="btn btn-warning">Edit</button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<div class="container">
<h2>Incoming Plant Architecture</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Status</th>
      <th>Validasi</th>

    </tr>
  </thead>
  <tbody>
    <?php
        $query = mysqli_query($conn,"SELECT * FROM arsitekturtanaman");
        while($row = mysqli_fetch_array($query)) {
     ?>
    <tr>
      <td><a href="artikel5.php?id=<?php echo $row['id_arsitektur']?>"><?php echo $row['nama_arsitektur'] ?></td>
      <td><?php echo $row['validasi_arsitektur'] ?></td>
      <td><a href="admin.php?update5=<?php echo $row['id_arsitektur']; ?>"><button type="button" class="btn btn-success">Post It !</button>
          <a href="admin.php?hapus5=<?php echo $row['id_arsitektur']; ?>"><button type="button" class="btn btn-danger">Don't Post !</button>
          <a href="postsedit.php?edit=<?php echo $row['id_arsitektur']; ?>"><button type="button" class="btn btn-warning">Edit</button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>

<div class="container">
<h2>Incoming Tanaman</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Status</th>
      <th>Validasi</th>

    </tr>
  </thead>
  <tbody>
    <?php
        $query = mysqli_query($conn,"SELECT * FROM tanaman");
        while($row = mysqli_fetch_array($query)) {
     ?>
    <tr>
      <td><a href="artikel6.php?id=<?php echo $row['id_tanaman']?>"><?php echo $row['nama_tanaman'] ?></td>
      <td><?php echo $row['validasi_tanaman'] ?></td>
      <td><a href="admin.php?update6=<?php echo $row['id_tanaman']; ?>"><button type="button" class="btn btn-success">Post It !</button>
          <a href="admin.php?hapus6=<?php echo $row['id_tanaman']; ?>"><button type="button" class="btn btn-danger">Don't Post !</button>
          <a href="postsedit.php?edit=<?php echo $row['id_tanaman']; ?>"><button type="button" class="btn btn-warning">Edit</button></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
                <!-- /.row -->


                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
</body>

</html>
