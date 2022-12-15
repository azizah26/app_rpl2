<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpltwo/assets/css/input.css">

</head>
<body>
   
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/mapel/update'; ?>" method="post">
<?php foreach($mapel as $u){ ?>
    <div class="imgcontainer">
    <a href=/app_rpltwo/index.php/mapel><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
    
  </div>
    <div class="container">
    <center><h1> Edit Data</h1></center>
      <hr>
    
    <input type="hidden" name="id_mapel" value="<?php 
    echo $u->id_mapel ?>">


 

    <label for="psw"><b>KD Mapel</b></label>
    <input type="text"  class="form-control" name="kd_mapel" value="<?php 
    echo $u->kd_mapel ?>"required><br>

    <label for="psw"><b>Nama Mapel</b></label>
    <input type="text"  class="form-control" name="nama_mapel"  value="<?php 
    echo $u->nama_mapel ?>" required><br>

 
        
<button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
<?php } ?>
</div>
</body>
</html>