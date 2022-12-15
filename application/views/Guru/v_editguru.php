

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

  
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/guru/update_guru'; ?>" method="post">
<?php foreach($guru as $u){ ?>
<div class="imgcontainer">
    <a href=/app_rpltwo/index.php/guru> <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span></a>
      <img src="<?=base_url('/assets/img/img_avatar2.png');?>" alt="Avatar" class="avatar">
    </div>

    <div class="container">

    
      <input type="hidden" name="id_guru" value="<?php 
       echo $u->id_guru ?>">

      <label for="nama_guru"><b>Nama Guru</b></label>
      <input type="text"  class="form-control" name="nama_guru" value="<?php 
       echo $u->nama_guru ?>"required><br>

       <label for="jenis_kelamin"><b>Jenis Kelamin</b></label><br>
       <td>
    <input type="radio" name="jenis_kelamin" value="L"<?php echo ($u->jenis_kelamin == 'L' ? 'checked' : ''); ?>/>L<br>
    <input type="radio" name="jenis_kelamin" value="P"<?php echo ($u->jenis_kelamin == 'P' ? 'checked' : ''); ?>/>P<br>
    </td>
    

        <label for="alamat"><b>Alamat</b></label>
        <input type="textarea"  class="form-control" name="alamat"  value="<?php 
        echo $u->alamat ?>" required><br>
       
         <label for="no_hp"><b>Telepon</b></label>
         <input type="text"  class="form-control" name="no_hp"  value="<?php 
    echo $u->no_hp ?>" required><br>
        

        <label for="agama"><b>Agama</b></label><br>
        <td>
    <input type="radio" name="agama" value="Islam"<?php echo ($u->agama == 'Islam' ? 'checked' : ''); ?> />Islam</label>
    <input type="radio" name="agama" value="Kristen"<?php echo ($u->agama == 'Kristen' ? 'checked' : ''); ?> />Kristen</label>
    <input type="radio" name="agama" value="Katolik"<?php echo ($u->agama == 'Katolik' ? 'checked' : ''); ?> />Katolik</label><br>
    <input type="radio" name="agama" value="Hindu"<?php echo ($u->agama == 'Hindu' ? 'checked' : ''); ?> />Hindu</label>
    <input type="radio" name="agama" value="Budha"<?php echo ($u->agama == 'Budha' ? 'checked' : ''); ?> />Budha<br><br>
    </td>

        <label for="tempat_lahir"><b>Tempat Lahir</b></label>
        <input type="text"  class="form-control" name="tempat_lahir"  value="<?php 
    echo $u->tempat_lahir ?>"  required><br>
 

        <label for="tanggal_lahir"><b>Tanggal Lahir</b></label>
        <input type="date" class="form-control" name="tanggal_lahir"  value="<?php 
    echo $u->tanggal_lahir ?>" required><br>

        <label for="nip"><b>NIP</b></label>
        <input type="text"  class="form-control" name="nip"  value="<?php 
    echo $u->nip ?>" required><br>

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
