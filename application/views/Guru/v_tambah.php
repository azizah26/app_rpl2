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

  <form class="modal-content animate" action="<?php echo base_url(). 'index.php/guru/guru_tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=http://localhost/app_rpl_2/index.php/guru><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
      <img src="<?=base_url('/assets/img/img_avatar2.png');?>" alt="Avatar" class="avatar">
    </div>
 

    <div class="container">  
      
    <center><h1>Tambah Data</h1></center>

      <hr>
  
        <label for="nama_guru"><b>Nama Guru</b></label>
        <input type="text" id="nama_guru"  placeholder="masukkan sesuai data anda" class="form-control" name="nama_guru" required>
       
        <label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
          <option value="">--Pilih Jenis Kelamin--</option>
          <option value="L">Laki-Laki</option>
          <option value="P">Perempuan</option>
        </select>

        <label for="alamat"><b>Alamat</b></label>
        <textarea type="text" id="alamat"  placeholder="masukkan sesuai data anda" class="form-control" name="alamat" required></textarea>
            
        <label for="no_hp"><b>Telepon</b></label>
        <input type="text" id="no_hp"  placeholder="masukkan sesuai data anda" class="form-control" name="no_hp" required>
        
        <label for="agama"><b>Agama</b></label><br>
        <select id="agama" name="agama" required>
          <option value="">--Pilih Agama--</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Katholik">Katholik</option>
        </select>

             
        <label for="tempat_lahir"><b>Tempat Lahir</b></label>
        <input type="text" id="tempat_lahir"  placeholder="masukkan sesuai data anda" class="form-control" name="tempat_lahir" required>

        <label for="tanggal_lahir"><b>Tanggal Lahir</b></label>
        <input type="date" id="tanggal_lahir"  placeholder="masukkan sesuai data anda" class="form-control" name="tanggal_lahir" required><br>

        <label for="nip"><b>NIP</b></label>
        <input type="text" id="nip"  placeholder="masukkan sesuai data anda" class="form-control" name="nip" required>


       
        <button type="submit" class="btnkirim">Kirim</button>

   
          </div>

    </div>
  </form>
</div>
</body>
</html>




<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
if (event.target == modal) {
    modal.style.display = "none";
}
}
</script>
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
