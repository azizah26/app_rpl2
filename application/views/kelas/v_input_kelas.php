

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

  <form class="modal-content animate" action="<?php echo base_url(). 'index.php/kelas/tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=/app_rpltwo/index.php/kelas><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>

      <center><h3>Tambah Data</h3></center>
    </div>

    <div class="container">
      <label for="nama_kelas"><b>Nama Kelas</b></label>
      <input type="text" id="nama_kelas" placeholder="Masukkan Sesuai Data Anda" name="nama_kelas" required>

     
    <label class="font-weight-bold" for="tingkat_kelas">Tingkat</label><br>
        <select id="tingkat_kelas" name="tingkat_kelas" required>
        <option selected>Pilih Tingkat </option>
  <option value="10">10</option>
  <option value="11">11 </option>
  <option value="12">12</option>
        </select>
        <div class="form-group">
         
        <label class="font-weight-bold" for="jurusan">Jurusan</label><br>
        <select id="jurusan" name="jurusan" required>
        <option selected>Pilih Jurusan </option>
        <?php
 foreach($jurusan as $j){

    echo '<option value="'.$j->nama_jurusan.'">'.$j-> nama_jurusan.'</option>';
 }
    ?>
</select>
    </div>
        
    <button type="submit" class="btnkirim">Kirim</button>
    </div>
  </form>
</div>



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
