<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl_2/assets/css/input.css">

</head>
<body>
   
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/kelas/update'; ?>" method="post">
<?php foreach($kelas as $u){ ?>
    <div class="imgcontainer">
    <a href=/app_rpl_2/index.php/kelas><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
    
  </div>
    <div class="container">
    <center><h1> Edit Data</h1></center>
      <hr>
    
    <input type="hidden" name="id_kelas" value="<?php 
    echo $u->id_kelas ?>">


 

    <label for="nama_kelas"><b>Nama Kelas</b></label>
    <input type="text"  class="form-control" name="nama_kelas" value="<?php 
    echo $u->nama_kelas ?>"required>

    <label for="tingkat_kelas"><b>Tingkat Kelas</b></label>
    <input type="text"  class="form-control" name="tingkat_kelas"  value="<?php 
    echo $u->tingkat_kelas ?>" required>

    <label for="jurusan"><b>Jurusan</b></label>
     <select name="jurusan" class="form-control">
    <?php
 foreach($jurusan as $j){

    echo '<option value="'.$j->nama_jurusan.'">'.$j-> nama_jurusan.'</option>';
 }
    ?>
</select>
 
        
<button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
<?php } ?>
</div>
</body>
</html>