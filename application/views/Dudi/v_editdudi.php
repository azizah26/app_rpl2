

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpltwo/assets/css/input.css">

<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpltwo/assets/css/select.css">

</head>
<body>

  
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/dudi/update_dudi'; ?>" method="post">
<?php foreach($dudi as $u){ ?>
<div class="imgcontainer">
    <a href=/app_rpltwo/index.php/dudi> <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span></a>
      <img src="<?=base_url('/assets/img/img_avatar2.png');?>" alt="Avatar" class="avatar">
    </div>

    <div class="container">

    
      <input type="hidden" name="id" value="<?php 
       echo $u->id ?>">

      <label for="nama_dudi"><b>Nama Dudi</b></label>
      <input type="text"  class="form-control" name="nama_dudi" value="<?php 
       echo $u->nama_dudi ?>"required><br>


<label for="nama_pembimbing"><b>Nama Pembimbing</b></label>
        <input type="text"  class="form-control" name="nama_pembimbing"  value="<?php 
        echo $u->nama_pembimbing ?>"  required><br>

        <label for="alamat_dudi"><b>Alamat Dudi</b></label>
        <input type="textarea"  class="form-control" name="alamat_dudi"  value="<?php 
        echo $u->alamat_dudi ?>" required><br>

        
       
         <label for="no_hp"><b>Telepon</b></label>
         <input type="text"  class="form-control" name="no_hp"  value="<?php 
    echo $u->no_hp ?>" required><br>
        

        
 

        <label for="tgl_masuk"><b>Tanggal Masuk</b></label>
        <input type="date" class="form-control" name="tgl_masuk"  value="<?php 
    echo $u->tgl_masuk ?>" required><br>


<label for="tgl_keluar"><b>Tanggal Keluar</b></label>
        <input type="date" class="form-control" name="tgl_keluar"  value="<?php 
    echo $u->tgl_keluar ?>" required><br>

<button type="submit" class="btnkirim">Kirim</button>

</div>

<div class="container" style="background-color:#f1f1f1">
<a href=/app_rpl2/index.php/guru>  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></a>
  
  
</div>
   
    
  </form>
  <?php } ?>
</div>

</body>
</html>
