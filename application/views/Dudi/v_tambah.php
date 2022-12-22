
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?= base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl_2/assets/css/input.css">
<link rel="stylesheet" type="text/css" 
href="http://localhost/app_rpl_2/assets/css/select.css">



</head>
<body>

  
  <form class="modal-content animate" action="<?php echo base_url(). 'index.php/dudi/dudi_tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=/app_rpl_2/index.php/dudi><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
    <img src="<?=base_url('/assets/img/ft.png');?>" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="nama_dudi"><b>Nama Dudi</b></label>
      <input type="text" id="nama_dudi" placeholder="Masukkan Sesuai Data Anda" name="nama_dudi" required>
        
      <label for="alamat_dudi"><b>Alamat Dudi</b></label>
      <textarea type="text" id="alamat_dudi" placeholder="Masukkan Sesuai Data Anda" name="alamat_dudi" required></textarea>
      
      <label for="nama_pembimbing"><b>Nama Pembimbing</b></label>
      <input type="text" id="nama_pembimbing" placeholder="Masukkan Sesuai Data Anda" name="nama_pembimbing" required>
   
      <label for="no_hp"><b>Telepon</b></label>
      <input type="text" id="no_hp" placeholder="Masukkan Sesuai Data Anda" name="no_hp" required>
      
      <label for="tgl_masuk"><b>Tanggal Masuk</b></label>
      <input type="date" id="tgl_masuk" class="form-control" name="tgl_masuk" required><br>
      
      <label for="tgl_keluar"><b>Tanggal Keluar</b></label>
      <input type="date" id="tgl_keluar" class="form-control" name="tgl_keluar" required><br>
      
      <button type="submit" class="btnkirim">Kirim</button>
   
      </div>
  </form>
</div>



    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->
</body>
</html>
