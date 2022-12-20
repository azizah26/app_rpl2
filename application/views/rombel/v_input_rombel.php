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

  <form class="modal-content animate" action="<?php echo base_url(). 'index.php/rombel/tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=/app_rpltwo/index.php/rombel><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>

    </div>


    <div class="container">  
      
    <center><h1>Tambah Data</h1></center>

      <hr>
      
     
    <label for="id_kelas"><b>Nama Kelas</b></label><br>
        <select id='id_kelas' name="id_kelas">
        <option value="">--Pilih Kelas--</option>
        <?php
 foreach($kelas as $u){

    echo '<option value="'.$u->id_kelas.'">'.$u-> id_kelas.'</option>';
 }
    ?>
          </select>


      <label for="kurikulum"><b>Kurikulum</b></label>
      <select id='kurikulum' name="kurikulum">
      <option value="">--Pilih Kurikulum--</option>
          <?php
          $x=2000;
          while($x <= 2030) {
            echo "<option value=".$x.">".$x."</option>";
            $x++;
          }
          ?>

        </select>
<label class="font-weight-bold"  for="nis">Nama Siswa</label>
        <select id="nis" name="nis" required>
        <option value="">--Pilih Siswa--</option>
        <?php
 foreach($siswa as $u){

    echo '<option value="'.$u->nis.'">'.$u-> nis.'</option>';
 }
    ?>
          
        </select>

      <label for="nama_rombel"><b>Nama Rombel</b></label>
      <input type="text" id="nama_rombel" placeholder="Masukkan Sesuai Data Anda" name="nama_rombel" required>

     
     
        
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
