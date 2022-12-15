<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpltwo/assets/css/input.css">



</head>
<body>

  <form class="modal-content animate" action="<?php echo base_url(). 'index.php/ekskul/tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=/app_rpltwo/index.php/ekskul><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>

    </div>

    <div class="container">  
      
    <center><h1>Tambah Data</h1></center>

      <hr>
  
        <label for="kd_ekskul"><b>KD Ekskul</b></label>
        <input type="text" id="kd_ekskul" placeholder="masukkan sesuai data anda" class="form-control" name="kd_ekskul"  required><br>

        <label for="nama_ekskul"><b>Nama Ekskul</b></label>
        <input type="text" id="nama_ekskul"  placeholder="masukkan sesuai data anda" class="form-control" name="nama_ekskul" required><br>

     
        
        <button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
</div>
</body>
</html>