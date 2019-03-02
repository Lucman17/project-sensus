<?php
session_start();
if(!isset($_SESSION['idusers'])){
  header('location:login.php');
}else{
?>
<!DOCTYPE html>
<html>
  <head>
    <?php include '../modul/css.php' ?>

  </head>
  <body>
    <div class="page">
      <?php include '../modul/header.php' ?>
      <div class="page-content d-flex align-items-stretch">
        <?php include '../modul/nav.php' ?>
        <div class="content-inner">
          <?php if (isset($_GET['p'])){
          $page=$_GET['p'];
          switch ($page) {
            case 'ids':
              include 'content1.php';
              break;
            case 'pd':
              include 'penduduk.php';
              break;
            case 'dh':
              include 'daerah.php';
              break;
            default:
              echo "<center><h3>Maaf... Halaman tidak di temukan  !</h3></center>";
              break;
          }
        }else {
          include 'content1.php';
        } ?>
          <?php include '../modul/footer.php' ?>
        </div>
      </div>
    </div>
    <?php include '../modul/javascript.php' ?>
  </body>
</html>
<?php } ?>
