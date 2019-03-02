<?php //login proses
include 'koneksi.php';

if (isset($_POST['login'])) {
$email=$_POST['email'];
$password=sha1($_POST["password"]);
$login=mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
if (mysqli_num_rows($login)==1) {
$row=mysqli_fetch_assoc($login);
session_start();
$_SESSION['id']=$row['idusers'];
$_SESSION['email']=$row['email'];
header('location:../hasil/index.php');
}else{
echo '<br><div class="alert alert-danger col-lg-4 col-lg-offset-4">
<center><strong>Gagal!</strong> username atau password salah!!</center>
</div>';
}
}
?>

<?php //Insert Data Daerah
session_start();
if(isset($_POST['simpan_daerah'])){
  $name=$_POST['name'];
  $tanggal=$_POST['tanggal_reg'];
  $ses=$_SESSION['id'];

if (isset($_POST['simpan_daerah'])) {
$insert= " INSERT INTO regions VALUES ('','".$name."','".$tanggal."','".$ses."')";
  $sql=mysqli_query($conn, $insert);
    if ($sql) {
      header('location:../hasil/index.php?p=dh');
}else {
  echo 'gagal '.mysqli_error($conn);
}
}
}
?>


<?php //Isert Data Penduduk
if(isset($_POST['tambah_penduduk'])){
  $nama=$_POST['nama'];
  $alamat=$_POST['alamat'];
  $gaji=$_POST['gaji'];
  $daerah=$_POST['daerah'];
  $ses=$_SESSION['id'];

if (isset($_POST['tambah_penduduk'])) {
$insert= " INSERT INTO person VALUES ('','".$nama."','".$alamat."','".$gaji."','".$daerah."','".$ses."')";
  $sql=mysqli_query($conn, $insert);
    if ($sql) {
      header('location:../hasil/index.php?p=pd');
}else {
  echo 'gagal '.mysqli_error($conn);
}
}
}
?>

<?php //Delete Daerah
if (isset($_GET['id'])) {
  $delete=mysqli_query($conn, "DELETE FROM regions WHERE idregions='".$_GET['id']."'");
  header('location:../hasil/index.php?p=dh');
}
?>