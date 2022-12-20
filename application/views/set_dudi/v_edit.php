<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl2/assets/css/input.css">

</head>
<body>
   
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/set_dudi/update'; ?>" method="post">
<?php foreach($set_dudi as $u){ ?>
    <div class="imgcontainer">
    <a href=/app_rpl2/index.php/set_dudi><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
    
  </div>
    <div class="container">
    <center><h1> Edit Data</h1></center>
      <hr>
    
    <input type="hidden" name="id_setdudi" value="<?php 
    echo $u->id_setdudi ?>">


<label for="id"><b>Id Dudi</b></label>
    <input type="text"  class="form-control" name="id" value="<?php 
    echo $u->id ?>"required><br>
 

    <label for="nama_pembimbing"><b>Pembimbing</b></label>
    <input type="text"  class="form-control" name="nama_pembimbing" value="<?php 
    echo $u->nama_pembimbing ?>"required><br>

    <label for="jurusan"><b>Jurusan</b></label>
    <input type="text"  class="form-control" name="jurusan"  value="<?php 
    echo $u->jurusan ?>" required><br>

 
        
<button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
<?php } ?>
</div>
</body>
</html>