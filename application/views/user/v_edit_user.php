<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl2/assets/css/input.css">

</head>
<body>
   
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/user/update'; ?>" method="post">
<?php foreach($user as $u){ ?>
    <div class="imgcontainer">
    <a href=/app_rpl2/index.php/user><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
    
  </div>
    <div class="container">
    <center><h1> Edit Data</h1></center>
      <hr>
    
    <input type="hidden" name="id_user" value="<?php 
    echo $u->id_user ?>">


 

    <label for="username"><b>Username</b></label>
    <input type="text"  class="form-control" name="nama_user" value="<?php 
    echo $u->nama_user ?>"required><br>

    <label for="jabatan"><b>Level</b></label>
    <input type="text"  class="form-control" name="level"  value="<?php 
    echo $u->level ?>" required><br>

 
        
<button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
<?php } ?>
</div>
</body>
</html>