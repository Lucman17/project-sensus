
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
         <div class="content-inner col-lg">
           <br>
           <!-- Page Header-->
           <header class=" page-header">
             <div class="container-fluid">
               <h3 class="no-margin-bottom">Daerah</h3>
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
             <br>
               <table class="table table-bordered">
                 <thead>
                   <tr>
                     <th>Daerah</th>
                     <th>Opsi</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php include'../modul/koneksi.php';
                   $select=mysqli_query($conn, "SELECT * FROM regions ORDER BY idregions DESC");
                   while ($hasil=mysqli_fetch_array($select)) {
                   $id=$hasil['idregions'];
                     ?>
                   <tr>
                     <td><?php echo $hasil['name_reg']; ?></td>
                     <td class="">
                     <a href="../modul/crud.php?id=<?php echo $id ?> " class="btn btn-danger btn-sm"  onclick="return confirm('Yakin Hapus')"><span class="fa fa-trash" ></span> Delete</a>
                     </td>
                   </tr>
                 <?php } ?>
                 </tbody>
               </table>
             </div>
             <div class="card-footer">
               <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
             </div>
             </div>
           </header>

           <div id="modal" class="modal fade" role="dialog">
             <div class="modal-dialog">


               <div class="modal-content">
                 <form class="" action="../modul/crud.php" method="post">
                 <div class="modal-header">
                   <h4 class="modal-title">Daerah</h4>
                 </div>
                 <div class="modal-body">
                   <div class="form-group">
                   <label for="nd">Nama Daerah</label>
                   <input type="text" required class="form-control" id="nd" name="name" placeholder="Isi Nama Daerah">
                 </div>

                 <div class="modal-footer">
                   <button type="submit" class="btn btn-success" name="simpan_daerah" >Simpan</button>
                   <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                 </div>
               </form>

               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
 </html>
