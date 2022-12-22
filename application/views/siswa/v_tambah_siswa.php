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

  <form class="modal-content animate" action="<?php echo base_url(). 'index.php/siswa/siswa_tambah_aksi'; ?>" method="post">
    <div class="imgcontainer">
    <a href=http://localhost/app_rpl_2/index.php/siswa><span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span></a>
      <img src="<?=base_url('/assets/img/img_avatar2.png');?>" alt="Avatar" class="avatar">
    </div>
 

    <div class="container">  
      
    <center><h1>Tambah Data</h1></center>

      <hr>
  
        <label for="nis"><b>NIS</b></label>
        <input type="text" id="nis"  placeholder="masukkan sesuai data anda" class="form-control" name="nis" required><br>

        <label for="nisn"><b>NISN</b></label>
        <input type="text" id="nisn"  placeholder="masukkan sesuai data anda" class="form-control" name="nisn" required><br>

        <label for="nama"><b>Nama</b></label>
        <input type="text" id="nama"  placeholder="masukkan sesuai data anda" class="form-control" name="nama" required><br>
        
           
        <label class="font-weight-bold" for="jenis_kelamin">Jenis Kelamin</label><br>
        <select id="jenis_kelamin" name="jenis_kelamin" required>
          <option value="">--Pilih Jenis Kelamin--</option>
          <option value="L">Laki-Laki</option>
          <option value="P">Perempuan</option>
        </select>

        <label for="alamat_siswa"><b>Alamat</b></label>
        <textarea type="text" id="alamat_siswa"  placeholder="masukkan sesuai data anda" class="form-control" name="alamat_siswa" required></textarea>

        <label for="tmpt_lahir"><b>Tempat Lahir</b></label>
        <input type="text" id="tmpt_lahir"  placeholder="masukkan sesuai data anda" class="form-control" name="tmpt_lahir" required><br>
        
        <label for="tgl_lahir"><b>Tanggal Lahir</b></label>
        <input type="date" id="tgl_lahir"  placeholder="masukkan sesuai data anda" class="form-control" name="tgl_lahir" required><br>

        <label for="anak_ke"><b>Anak Ke-</b></label><br>
        <select id='anak_ke' name="anak_ke">
        <option value="">--Pilih--</option>
          <?php
          $x=1;

          while($x <= 10) {
            echo "<option value=".$x.">".$x."</option>";
            $x++;
          }
          ?>
</select></br>
<label for="agama"><b>Agama</b></label><br>
        <select id="agama" name="agama" required>
          <option value="">--Pilih Agama--</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Katholik">Katholik</option>
        </select>

        <label for="asal_sekolah"><b>Asal Sekolah</b></label>
        <input type="text" id="asal_sekolah" placeholder="masukkan sesuai data anda"  placeholder="masukkan sesuai data anda" class="form-control" name="asal_sekolah" required><br>

        <label for="no_ijazah"><b>No Ijazah</b></label>
        <input type="text" id="no_ijazah" placeholder="masukkan sesuai data anda" class="form-control" name="no_ijazah" required><br>

        <label for="tahun_ijazah"><b>Tahun Ijazah</b></label>
        <input type="text" id="tahun_ijazah" placeholder="masukkan sesuai data anda" class="form-control" name="tahun_ijazah" required><br>

        <label for="tgl_masuk"><b>Tanggal Masuk</b></label>
        <input type="date" id="tgl_masuk" class="form-control" name="tgl_masuk"><br>

        <label for="no_hp_siswa"><b>Telepon Siswa</b></label>
        <input type="text" id="no_hp_siswa" placeholder="masukkan sesuai data anda" class="form-control" name="no_hp_siswa" required><br>
        
        <label for="nama_ibu"><b>Nama Ibu</b></label>
        <input type="text" id="nama_ibu" placeholder="masukkan sesuai data anda" class="form-control" name="nama_ibu" required><br>

        <label for="pekerjaan_ibu"><b>Pekerjaan Ibu</b></label>
        <input type="text" id="pekerjaan_ibu" placeholder="masukkan sesuai data anda" class="form-control" name="pekerjaan_ibu" required><br>

        <label for="nama_ayah"><b>Nama Ayah</b></label>
        <input type="text" id="nama_ayah" placeholder="masukkan sesuai data anda" class="form-control" name="nama_ayah" required><br>

        <label for="pekerjaan_ayah"><b>Pekerjaan Ayah</b></label>
        <input type="text" id="pekerjaan_ayah" placeholder="masukkan sesuai data anda" class="form-control" name="pekerjaan_ayah" required><br>

        <label for="alamat_orang_tua"><b>Alamat Orang Tua</b></label>
        <input type="text" id="alamat_orang_tua" placeholder="masukkan sesuai data anda" class="form-control" name="alamat_orang_tua" required><br>


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
