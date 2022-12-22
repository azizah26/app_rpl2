<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl_2/assets/css/input.css">

</head>
<body>
   
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/SetPembinaEkskul/update'; ?>" method="post">
<?php foreach($pembinaekskul as $p){ ?>
    <div class="imgcontainer">
    <a href=/app_rpl_2/index.php/ekskul><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
    
  </div>
    <div class="container">
    <center><h1> Edit Data</h1></center>
      <hr>
    
    <input type="hidden" name="id" value="<?php 
    echo $p->kd_ekskul ?>">


 

    <label for="nama_pembina"><b>Nama Pembina</b></label>
    <input type="text"  class="form-control" name="nama_pembina"  value="<?php 
    echo $p->nama_pembina ?>" required><br>

    <label for="semester"><b>Semester</b></label>
    <input type="text"  class="form-control" name="semester"  value="<?php 
    echo $p->semester ?>" required><br>

        
<button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
<?php } ?>
</div>
</body>
</html>