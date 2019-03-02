
<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengarsipan Surat Masuk dan Keluar</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <header class="main-header">
    <a href="index.php" class="logo">
      <span class="logo-mini"><b>Main</b></span>
      <span class="logo-lg"><b>Web Admin</b></span>
    </a>
    <nav class="navbar navbar-static-top">
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <ul class="dropdown-menu">
                <ul class="menu">
                  <li><
                </ul>
            </ul>
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/sinta.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">User-Sinta</span></a>
            <ul class="dropdown-menu">
              <li class="user-header">
                <img src="dist/img/sinta.jpg" class="img-circle" alt="User Image">
                <p>Sinta Dewi Artika</p>
              </li>
              <li class="user-footer">
                <div class="pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
       </nav>
   </header>
  <aside class="main-sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN</li>
        <li class="active treeview">
          <li><a href="index.php"><i class="fa fa-home"></i> <span>Beranda</span></a></li>
          <ul class="treeview-menu">
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-gear"></i> <span>Pengaturan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-users"></i> Pengguna </a></li>
            <li><a href="jnsurat.php"><i class="fa fa-puzzle-piece"></i> Jenis Surat</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-file"></i> <span> Pemrosesan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="Masuk.php"><i class="fa fa-download"></i> Surat Masuk </a></li>
            <li><a href="#"><i class="fa  fa-upload"></i> Surat Keluar </a></li>
          </ul>
        </li>
  </aside>
  <div class="content-wrapper">
    <section class="content">
       <!-- Form Element sizes -->
          <div class="col-xs-13">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Masukan Type Surat</h3>
            </div>
            <div class="box-body">
            <div class="col-xs-3">
            <form action="" method="POST">

              <input class="form-control" type="text" name="jnsurat" placeholder="Masukan Type Surat">
              <div class="box-footer">
                <button type="submit" name="tambah" class="btn btn-info pull-left">Tambah</button>

            </form>
              </div>

              <div class="row mb-6">
               <div class="box-body">
              <table class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="col-xs-3">ID</th>
                  <th class="col-xs-5"> Nama Type Surat</th>
                  <th class="col-lg-5">Aksi</th>

                </tr>
                </thead>
                <tbody>

                <tr>
                <?php
                    include 'koneksi.php';
                    $hasil=mysqli_query($conn,"SELECT * FROM mail_type");
                    while ($tampil=mysqli_fetch_array($hasil)) {
                      ?>
                  <td><?php echo $tampil['id']; ?></td>
                  <td><?php echo $tampil['type']; ?></td>
                  <td>
                      <a href="" class="btn btn-info">Edit</a>
                      <a href="" class="btn btn-danger">Hapus</a>
                   </td>
                  <?php }?>
                </tr>
                </tbody>
                </table>


                <?php
  include "koneksi.php";
  if(isset($_POST['tambah'])){
  $insert=mysqli_query($conn,"INSERT INTO mail_type VALUES('',
                                  '".$_POST['jnsurat']."')");
    if (!$insert) {
      echo 'gagal'.mysqli_error($conn);
    }
                        }    ?>

      </div>
        </section>
      </div>
    </section>
   <footer class="main-footer">
  <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong> Powered By <a href="#">Bootstrap</a>.</strong>
  </footer>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<script src="dist/js/adminlte.min.js"></script>
<script src="dist/js/pages/dashboard.js"></script>
<script src="dist/js/demo.js"></script>
</body>
</html>
