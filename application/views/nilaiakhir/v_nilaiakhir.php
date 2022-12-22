<?php
include('template/header.php');
include('template/wrapper.php');
include('template/navbar.php');
?>



<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Tambah Data Nilai Akhir </h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/Nilai_akhir/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form method="post" action="<?php echo base_url().'index.php/walikelas/tambah_aksi'; ?>">

 <div class="form-group">
 <label class="font-weight-bold" for="nama">Semester</label>
 <select class="form-control" name="semester" id="semester" aria-label="Default select example">
  <option selected>Pilih Semester </option>
  
<?php foreach ($semester as $j) {
    echo '<option value="' . $j->semester . '">' . $j->semester. '</option>';
} ?>
</select>
 </div>

<div class="form-group">
 <label class="font-weight-bold" for="nama">Kelas</label>
 <select class="form-control" name="kelas" id="kelas" aria-label="Default select example">
</select>
 </div>

 <div class="form-group">
 <label class="font-weight-bold" for="nama">Mapel</label>
 <select class="form-control" name="id_mapel" aria-label="Default select example">
  <option selected>Pilih Guru</option>
  <?php foreach ($mapel as $j) {
      echo '<option value="' . $j->id_mapel . '">' . $j->nama_mapel . '</option>';
  } ?>
</select>

 <br>
 <!-- <div class="form-group">
 <label class="font-weight-bold" for="nip">Nama Jurusan</label>
 <input type="text" class="form-control" name="nama_walikelas" 
 required="required" value="">
 </div> -->
 <input type="submit" class="btn btn-primary" value="Simpan">
 </form>

 </div>
 </div>
</div>
 </div>

