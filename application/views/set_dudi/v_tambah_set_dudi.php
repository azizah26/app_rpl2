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

  <form class="modal-content animate" action="<?php echo base_url(). 'index.php/set_dudi/tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=/app_rpl_2/index.php/set_dudi><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>

    </div>

    <div class="container">  
      
    <center><h1>Tambah Data</h1></center>

      <hr>
    
    <label for="id"><b>ID Dudi</b></label><br>
        <select id='id' name="id">
        <option value="">--Pilih Id--</option>
        <?php
 foreach($dudi as $u){

    echo '<option value="'.$u->id.'">'.$u-> id.'</option>';
 }
    ?>
          
        </select>

<label class="font-weight-bold" for="nama_pembimbing">Pembimbing</label><br>
        <select id="nama_pembimbing" name="nama_pembimbing" required>
        <option value="">--Pilih Pembimbing--</option>
        <?php
 foreach($dudi as $u){

    echo '<option value="'.$u->nama_pembimbing.'">'.$u-> nama_pembimbing.'</option>';
 }
    ?>
          
        </select>

<label class="font-weight-bold" for="jurusan">Jurusan</label><br>
        <select id="jurusan" name="jurusan" required>
        <option value="">--Pilih Jurusan--</option>
        <?php
 foreach($kelas as $u){

    echo '<option value="'.$u->jurusan.'">'.$u->jurusan.'</option>';
 }
    ?>
          
        </select>

    
        <button type="submit" class="btnkirim">Kirim</button>




</div>
</form>




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
