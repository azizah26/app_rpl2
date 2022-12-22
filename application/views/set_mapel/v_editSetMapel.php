<!DOCTYPE html>
<html>
<head> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl_2/assets/css/input.css">

</head>
<body>
   
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/setMapel/update'; ?>" method="post">
<?php foreach($set_mapel as $u){ ?>
    <div class="imgcontainer">
    <a href=/app_rpl_2/index.php/setMapel><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
    
  </div>
    <div class="container">
    <center><h1> Edit Data</h1></center>
      <hr>
    
    <input type="hidden" name="id" value="<?php 
    echo $u->id ?>">

    <label for="kd_mapel"><b>KD Mapel</b></label>
    <input type="text"  class="form-control" name="kd_mapel" value="<?php 
    echo $u->kd_mapel ?>"required><br>

    <label for="guru_mapel"><b>Guru Mapel</b></label>
    <input type="text"  class="form-control" name="guru_mapel"  value="<?php 
    echo $u->guru_mapel ?>" required><br>

    <label for="id_kelas"><b>ID Kelas</b></label>
    <input type="text"  class="form-control" name="id_kelas"  value="<?php 
    echo $u->id_kelas ?>" required><br>

    <label for="jam_pelajaran"><b>Jam Pelajaran</b></label>
    <input type="time"  class="form-control" name="jam_pelajaran"  value="<?php 
    echo $u->jam_pelajaran ?>" required><br>

 
        
<button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
<?php } ?>
</div>
</body>
</html>