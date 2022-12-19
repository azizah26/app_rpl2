
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl2/assets/css/input.css">
<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl2/assets/css/select.css">



</head>
<body>

  <form class="modal-content animate" action="<?php echo base_url(). 'index.php/user/tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=/app_rpl2/index.php/user><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>

    </div>  
    <center><h1 class="p-2 mb-2 text-dark">Tambah User</h1></center>
    <div class="container"> 
</br>
        <label for="psw"><b>Nama User</b></label>
        <input type="text"  placeholder="masukkan sesuai data anda" class="form-control" name="nama_user"  required><br>

        <label for="psw"><b>Level</b></label>
        <input type="text"  placeholder="masukkan sesuai data anda" class="form-control" name="level" required><br>
    
        <button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
</div>
</body>
</html>