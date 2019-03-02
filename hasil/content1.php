
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
               <h3 class="no-margin-bottom">Data Keseluruhan</h3>
             </div>
             <br>

             <br>
             <div class="container">
             <div class="card">
             <div class="card-header bg-primary"></div>
             <div class="card-body">
             <br>
               <table class="table table-bordered">
                 <thead>
                   <tr>
                    <th>ID</th>
                     <th>Nama Daerah</th>
                     <th>Jumlah Penduduk</th>
                     <th>Total Pendapatan</th>
                     <th>Rata-rata Pendapatan</th>
                     <th>Status</th>
                   </tr>
                 </thead>
                 <tbody>
                   <?php include'../modul/koneksi.php';
                   $select=mysqli_query($conn, "SELECT * FROM regions ORDER BY idregions");
                   while ($hasil=mysqli_fetch_array($select)) {
                   $id=$hasil['idregions'];
                     ?>
                   <tr>
                     <td><?php echo $hasil['idregions']; ?></td>
                     <td><?php echo $hasil['name_reg']; ?></td>
                   </tr>


                 <?php } ?>
                 </tbody>
               </table>
             </div>
             </div>
           </header>
         </div>
       </div>
     </div>
 </html>
