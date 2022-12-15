
<div class= "tabel1">
<div class="container">
 <div class="card">
 <div class="card-header text-center">
 <h4>Tambah Data walikelas </h4>
 </div>
 <div class="card-body">
 <a href="<?php echo base_url().'index.php/walikelas/' ?>" class='btn btn-sm btn-light btn-outline-dark pull-right'><i class="fa fa-arrow-left"></i> Kembali</a>
 <br/>
 <br/>
 <form method="post" action="<?php echo base_url().'index.php/walikelas/tambah_aksi'; ?>">

<div class="form-group">
 <label class="font-weight-bold" for="nama">Kelas</label>
 <select class="form-control" name="id_kelas" aria-label="Default select example">
  <option selected>Pilih Tingkat </option>
  <?php foreach ($kelas as $j) {
      echo '<option value="' . $j->id_kelas . '">' . $j->nama_kelas . '</option>';
  } ?>
</select>
 </div>

 <div class="form-group">
 <label class="font-weight-bold" for="nama">Nama Guru</label>
 <select class="form-control" name="id_guru" aria-label="Default select example">
  <option selected>Pilih Guru</option>
  <?php foreach ($guru as $j) {
      echo '<option value="' . $j->id_guru . '">' . $j->nama_guru . '</option>';
  } ?>
</select>

 <div class="form-group">
 <label class="font-weight-bold" for="nama">Semester</label>
 <select class="form-control" name="semester" id="semester" aria-label="Default select example">
  <option selected>Pilih Semester </option>
  <?php
// Perulangan
$x = 1;
  while ($x<=6){
    echo '<option value="'.$x.'">'.$x.'</option>';
    $x++;
  }
  ?>
</select>
 </div>

 <div class="form-group">
 <label class="font-weight-bold" for="nama">Tapel</label>
 <select onchange="myFunction()" class="form-control" name="tapel" id="tapel" aria-label="Default select example">
  <option selected>Pilih Tapel </option>
  <option value="Ganjil">Ganjil </option>
  <option value="Genap">Genap</option>
</select>
 </div>

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




 