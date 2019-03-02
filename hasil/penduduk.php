<?php
include '../modul/koneksi.php';
$tampilt=mysqli_query($conn, "SELECT * FROM regions");
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Bootstrap Material Admin by Bootstrapious.com</title>
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="robots" content="all,follow">

     <?php include '../modul/css.php' ?>

   </head>
   <body>
     <div class="page">
       <div class="page-content d-flex align-items-stretc">
         <div class="content-inner col-lg-12">
           <br>
           <!-- Page Header-->
           <header class=" page-header">
             <div class="container-fluid">
               <h3 class="no-margin-bottom">Penduduk</h3>
             </div>
             <br>
             <div class="col-lg-3" >
                 <button type="button" name="button" class="btn btn-outline-primary btn-block btn-md" data-toggle="modal" data-target="#modal">
                   <i class="fa fa-plus"></i> Tambah Data</button>
             </div>
             <br>
             <div class="container">
             <div class="card">
             <div class="card-header bg-primary"></div>
             <div class="card-body">
               <table class="table table-bordered">
                 <thead>
                   <tr>
                     <th>Id</th>
                     <th>Nama Penduduk</th>
                     <th>Gaji</th>
                     <th>Daerah</th>
                   </tr>
                 </thead>
                 <!--menampilkan daerah-->
                 <tbody>
                   <?php
                   include '../modul/koneksi.php';
                   $select=mysqli_query($conn, "SELECT person.* , regions.* FROM person INNER JOIN regions ON person.regions_idregions=regions.idregions");
                   while ($hasil=mysqli_fetch_array($select)) {
                   $idmail=$hasil['idperson'];
                    ?>
                    <tr>
                      <td><?php echo $hasil['idperson']; ?></td>
                        <td><?php echo $hasil['name']; ?></td>
                        <td><?php echo $hasil['income']; ?></td>
                        <td><?php echo $hasil['name_reg']; ?></td>
                     </div>
                      </td>
                    </tr>
                  <?php } ?>
                 </tbody>
               </table>
             </div>
             <div class="card-footer bg-primary"></div>
             </div>
             </div>
           </header>
           <!-- Modal -->
           <div id="modal" class="modal fade" role="dialog">
             <div class="modal-dialog modal-lg">

               <!-- Modal content-->
               <div class="modal-content">
                 <form class="" action="../modul/crud.php" method="post">
                 <div class="modal-header">
                   <h4 class="modal-title">Data Penduduk</h4>
                 </div>
                 <div class="modal-body">
                  <div class="form-group">
         						<label for="mn">Nama :</label>
         						<input type="text" required class="form-control" id="mn" name="nama" placeholder="Masukkan Nama">
         					</div>
                    <div class="form-group">
                    <label for="dk">Alamat :</label>
                    <textarea  class="form-control" id="dk" name="alamat" placeholder="Masukkan Alamat" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="mg">Gaji :</label>
                    <input type="text" required class="form-control" id="mg" name="gaji" placeholder="Masukkan Gaji" >
                  </div>
                  <div class="form-group">
         						<label for="tp">Daerah :</label>
                    <select class="form-control" id="tp" name="daerah">
                    <?php while ($tampils=mysqli_fetch_array($tampilt)) {
                    ?>
                    <option> <?php echo $tampils['idregions']; ?> &nbsp <?php echo $tampils['name_reg'];?></option>
                    <?php } ?>
                  </select>
         					</div>
                 </div>
                 <div class="modal-footer">
                   <button type="submit" class="btn btn-success" name="tambah_penduduk">Tambah</button>
                   <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                 </div>
               </form>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </body>
 </html>
