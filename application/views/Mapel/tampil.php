

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl_2/assets/css/input.css">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl_2/assets/css/select.css">

</head>
<body>

<form class="modal-content animate" action="<?php echo base_url(). 'index.php/mapel/tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=/app_rpl_2/index.php/mapel><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>

    </div>

    <div class="container">  
      
    <center><h1>Tambah Data</h1></center>

      <hr>
  
        <label for="kd_mapel"><b>KD Mapel</b></label>
        <input type="text" id="kd_mapel" placeholder="masukkan sesuai data anda" class="form-control" name="kd_mapel"  required><br>

        <label for="nama_mapel"><b>Nama Mapel</b></label>
        <input type="text" id="nama_mapel"  placeholder="masukkan sesuai data anda" class="form-control" name="nama_mapel" required><br>

     
       
      <button type="submit" class="btnkirim">Kirim</button>




</div>
</form>




</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
</body>
</html>
