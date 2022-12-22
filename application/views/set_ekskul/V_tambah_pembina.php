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

  <form class="modal-content animate" action="<?php echo base_url(). 'index.php/SetPembinaEkskul/tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=http://localhost/app_rpl_2/index.php/SetPembinaEkskul><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>

    </div>

    <div class="container">  
      
    <center><h1>Tambah Data</h1></center>

      <hr>
  
      <label for="id_ekskul"><b>Nama Ekskul</b></label>
 <select class="form-control" name="id_ekskul" aria-label="Default select example">
 <option value="">--Pilih Ekskul--</option>
  <?php
  foreach($ekskul as $j){
    echo '<option value="'.$j->id_ekskul.'">'.$j->nama_ekskul.'</option>';
  }
  ?>
</select>


        <label for="nama_pembina"><b>Nama pembina</b></label>
        <input type="text" id="nama_pembina"  placeholder="masukkan sesuai data anda" class="form-control" name="nama_pembina" required><br>

         
<label class="font-weight-bold" for="semester">Semester</label><br>
        <select id="semester" name="semester" required>
        <option value="">--Pilih Semester--</option>
          <?php
          $x=1;

          while($x <= 6) {
            echo "<option value=".$x.">".$x."</option>";
            $x++;
          }
          ?>
</select>

        
        <button type="submit" class="btnkirim">Kirim</button>
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
