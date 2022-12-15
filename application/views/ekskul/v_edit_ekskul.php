<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpltwo/assets/css/input.css">

</head>
<body>
   
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/ekskul/update'; ?>" method="post">
<?php foreach($ekskul as $u){ ?>
    <div class="imgcontainer">
    <a href=/app_rpltwo/index.php/ekskul><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
    
  </div>
    <div class="container">
    <center><h1> Edit Data</h1></center>
      <hr>
    
    <input type="hidden" name="id_ekskul" value="<?php 
    echo $u->id_ekskul ?>">


 

    <label for="kd_ekskul"><b>KD Ekskul</b></label>
    <input type="text"  class="form-control" name="kd_ekskul" value="<?php 
    echo $u->kd_ekskul ?>"required><br>

    <label for="nama_ekskul"><b>Nama ekskul</b></label>
    <input type="text"  class="form-control" name="nama_ekskul"  value="<?php 
    echo $u->nama_ekskul ?>" required><br>

 
        
<button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
<?php } ?>
</div>
</body>
</html>