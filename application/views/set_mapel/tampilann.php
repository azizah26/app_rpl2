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

<form class="modal-content animate" action="<?php echo base_url(). 'index.php/setMapel/tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=/app_rpltwo/index.php/setMapel><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>

    </div>

    <div class="container">  
    <center><h1>Tambah Data</h1></center>

    <label for="kd_mapel"><b>Nama Mapel</b></label>
 <select class="form-control" name="kd_mapel" aria-label="Default select example">
 <option value=""> Pilih Mapel</option>
  <?php
  foreach($mapel as $a){
    echo '<option value="'.$a->nama_mapel.'">'.$a->nama_mapel.'</option>';
  }
  ?>
</select>

<label for="guru_mapel"><b>Nama Guru</b></label>
 <select class="form-control" name="guru_mapel" aria-label="Default select example">
 <option value="">Pilih Guru</option>
  <?php
  foreach($guru as $u){
    echo '<option value="'.$u->nama_guru.'">'.$u->nama_guru.'</option>';
  }
  ?>
</select>

    <label for="id_kelas"><b>Nama Kelas</b></label>
 <select class="form-control" name="id_kelas" aria-label="Default select example">
 <option value="">Pilih kelas</option>
  <?php
  foreach($kelas as $u){
    echo '<option value="'.$u->nama_kelas.'">'.$u->nama_kelas.'</option>';
  }
  ?>
</select>

        <label for="jam_pelajaran"><b>Jam Pelajaran</b></label>
        <input type="time" id="jam_pelajaran"  placeholder="masukkan sesuai data anda" class="form-control" name="jam_pelajaran" required><br>
        
        <button type="submit" class="btnkirim">Kirim</button>
        </form>
</div>

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