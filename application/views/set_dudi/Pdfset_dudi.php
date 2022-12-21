<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Pdf Setting Dudi</title>
<center><h1>DATA DUNIA INDUSTRI</h1></center>

<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1">
            <thead class="bg-secondary text-light">
                <thead>
                    <tr>
                    <th>No</th>
                <th>Id Dudi</th>
                <th>Pembimbing</th>
                <th>Jurusan</th>
             </tr>
        </thead>
<?php 
$no = 1;
foreach($set_dudi as $u){ ?>
 <tr>
 <td><?php echo $no++ ?></td>
<td><?php echo $u->id ?></td>
<td><?php echo $u->nama_pembimbing ?></td>
<td><?php echo $u->jurusan ?></td>
</tr>
<?php } ?>
</tbody>
</table>