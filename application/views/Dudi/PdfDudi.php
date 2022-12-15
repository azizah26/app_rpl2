<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Pdf Dudi</title>
<center><h1>Data Dunia Industri</h1></center>

<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1">
            <thead class="bg-secondary text-light">
                <thead>
                    <tr>
                <th>No</th>
                <th>Nama Dudi</th>
                <th>Nama Pembimbing</th>
                <th>Alamat Dudi</th>
                <th>Telepon</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Keluar</th>
              
             </tr>
        </thead>
<<?php 
$no = 1;
foreach($dudi as $u){ ?>
 <tr>
    <td><?php echo $no++ ?></td>
<td><?php echo $u->nama_dudi ?></td>
<td><?php echo $u->alamat_dudi ?></td>
<td><?php echo $u->no_hp ?></td>
<td><?php echo $u->nama_pembimbing ?></td>
<td><?php echo $u->tgl_masuk ?></td>
<td><?php echo $u->tgl_keluar ?></td>
</tr>
<?php } ?>