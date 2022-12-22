<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Pdf Siswa</title>
<center><h1>Data Siswa</h1></center>
<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1" id="dataTable" width="100%">
            <thead class="bg-secondary text-light">
                <thead>

<tr>
<th>No</th>
<th>Nis</th>
<th>Nisn</th>
<th>Nama</th>
<th>Jenis Kelamin</th>
<th>Tempat,Tanggal Lahir</th>
<th>Agama</th>
<th>Telepon</th>
<th>Alamat Siswa</th>
</tr>
</thead>
<tbody>
 
<?php 
$no = 1;
foreach ($siswa as $u){ 
?>
<tr>
<td><?php echo $no++?></td>
<td><?php echo $u->nis ?></td>
<td><?php echo $u->nisn ?></td>
<td><?php echo $u->nama ?></td>
<td><?php
if ($u->jenis_kelamin =="L"){
       echo "laki-laki";
}else{
       echo"perempuan";
}
?></td>
<td><?php echo $u->tmpt_lahir.', '. $u->tgl_lahir ?></td>
<td><?php echo $u->agama ?></td>
<td><?php echo $u->no_hp_siswa ?></td>
<td><?php echo $u->alamat_siswa ?></td>
</tr>
<?php } ?>
</table>
</body>
</html>