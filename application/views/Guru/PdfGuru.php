<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Pdf Guru</title>
<center><h1>Data Guru</h1></center>
<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1" id="dataTable" width="100%">
            <thead class="bg-secondary text-light">
                <thead>
                    <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Agama</th>
                <th>TTL</th>
                <th>NIP</th>
              
             </tr>
        </thead>
<?php 
$no = 1;
foreach($guru as $u){ ?>
 <tr>
    <td><?php echo $no++ ?></td>
<td><?php echo $u->nama_guru ?></td>

<td><?php
if ($u->jenis_kelamin =="L"){
        echo "laki-laki";
}else{
        echo"perempuan";
}
 ?></td>
<td><?php echo $u->alamat ?></td>
<td><?php echo $u->no_hp ?></td>
<td><?php echo $u->agama ?></td>
<td><?php echo $u->tempat_lahir.', '. $u->tanggal_lahir ?></td>
<td><?php echo $u->nip ?></td>

</tr>
<?php } ?>
</tbody>
</table>