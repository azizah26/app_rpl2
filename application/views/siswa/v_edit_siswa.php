

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

  
<form class="modal-content animate" action="<?php echo base_url(). 'index.php/siswa/siswa_update'; ?>" method="post">
<?php foreach($siswa as $u){ ?>
<div class="imgcontainer">
    <a href=/app_rpltwo/index.php/siswa> <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span></a>
      <img src="<?=base_url('/assets/img/img_avatar2.png');?>" alt="Avatar" class="avatar">
    </div>

    <div class="container">

 
 <div class="form-group">
   <input type="hidden" name="id_siswa" value="<?php 
   echo $u->id_siswa ?>">

   <label class="font-weight-bold" for="nis">NIS</label>
   <input type="text" class="form-control" name="nis" required="required" value="<?php 
   echo $u->nis ?>">

   <label class="font-weight-bold" for="nisn">NISN</label>
   <input type="text" class="form-control" name="nisn" required="required" value="<?php 
   echo $u->nisn ?>">

   <label class="font-weight-bold" for="nama">Nama</label>
   <input type="text" class="form-control" name="nama" required="required" value="<?php 
   echo $u->nama ?>">

   <label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label><br>
   <td>
   <input type="radio" name="jenis_kelamin" value="L"<?php echo ($u->jenis_kelamin == 'L' ? 'checked' : ''); ?>/>L<br>
   <input type="radio" name="jenis_kelamin" value="P"<?php echo ($u->jenis_kelamin == 'P' ? 'checked' : ''); ?> />P<br>
   </td>

   <label class="font-weight-bold" for="alamat_siswa">Alamat</label>
   <input type="text" class="form-control" name="alamat_siswa" required="required" value="<?php 
   echo $u->alamat_siswa ?>">

   <label class="font-weight-bold" for="tmpt_lahir">Tempat Lahir</label>
   <input type="text" class="form-control" name="tmpt_lahir"  required="required" value="<?php 
   echo $u->tmpt_lahir ?>">

   <label class="font-weight-bold" for="tgl_lahir">Tanggal Lahir</label>
   <input type="date" class="form-control" name="tgl_lahir" required="required" value="<?php 
   echo $u->tgl_lahir ?>">

   <label class="font-weight-bold" for="anak_ke">Anak Ke</label>
   <input type="text" class="form-control" name="anak_ke" 
   required="required" value="<?php 
    echo $u->anak_ke ?>">
 
   <label class="font-weight-bold" for="agama">Agama</label><br>
   <td>
   <input type="radio" name="agama" value="Islam"<?php echo ($u->agama == 'Islam' ? 'checked' : ''); ?> />Islam</label>
   <input type="radio" name="agama" value="Kristen"<?php echo ($u->agama == 'Kristen' ? 'checked' : ''); ?> />Kristen</label>
   <input type="radio" name="agama" value="Katolik"<?php echo ($u->agama == 'Katolik' ? 'checked' : ''); ?> />Katolik</label><br>
   <input type="radio" name="agama" value="Hindu"<?php echo ($u->agama == 'Hindu' ? 'checked' : ''); ?> />Hindu</label>
   <input type="radio" name="agama" value="Budha"<?php echo ($u->agama == 'Budha' ? 'checked' : ''); ?> />Budha<br>
   </td>

   <label class="font-weight-bold" for="asal_sekolah">Asal Sekolah</label>
   <input type="text" class="form-control" name="asal_sekolah" required="required" value="<?php 
   echo $u->asal_sekolah ?>">

   <label class="font-weight-bold" for="no_ijazah">No Ijazah</label>
   <input type="text" class="form-control" name="no_ijazah" required="required" value="<?php 
   echo $u->no_ijazah ?>">

   <label class="font-weight-bold" for="tahun_ijazah">Tahun Ijazah</label>
   <input type="text" class="form-control" name="tahun_ijazah"  required="required" value="<?php 
   echo $u->tahun_ijazah ?>">

   <label class="font-weight-bold" for="tgl_masuk">Tanggal Masuk</label>
   <input type="date" class="form-control" name="tgl_masuk" required="required" value="<?php 
   echo $u->tgl_masuk ?>">

   <label class="font-weight-bold" for="no_hp_siswa">Telepon Siswa</label>
   <input type="text" class="form-control" name="no_hp_siswa" required="required" value="<?php 
   echo $u->no_hp_siswa ?>">

   <label class="font-weight-bold" for="nama_ibu">Nama Ibu</label>
   <input type="text" class="form-control" name="nama_ibu" required="required" value="<?php 
   echo $u->nama_ibu ?>">

   <label class="font-weight-bold" for="pekerjaan_ibu">Pekerjaan Ibu</label>
   <input type="text" class="form-control" name="pekerjaan_ibu" required="required" value="<?php 
   echo $u->pekerjaan_ibu ?>">

   <label class="font-weight-bold" for="nama_ayah">Nama Ayah</label>
   <input type="text" class="form-control" name="nama_ayah" required="required" value="<?php 
    echo $u->nama_ayah ?>">
 
   <label class="font-weight-bold" for="pekerjaan_ayah">Pekerjaan Ayah</label>
   <input type="text" class="form-control" name="pekerjaan_ayah" required="required" value="<?php 
   echo $u->pekerjaan_ayah ?>">

   <label class="font-weight-bold" for="alamat_orang_tua">Alamat orang Tua</label>
   <input type="text" class="form-control" name="alamat_orang_tua" required="required" value="<?php 
   echo $u->alamat_orang_tua ?>">

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
