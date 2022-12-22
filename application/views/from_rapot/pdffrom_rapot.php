<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Pdf FormRapot</title>
<center><h1>Data FormRapot</h1></center>
<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1" id="dataTable" width="100%">
            <thead class="bg-secondary text-light">
                <thead>
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Nama Mapel</th>
                    <th>Semester</th>
                    <th>No Urut</th>
             </tr>
        </thead>
<?php 
$no = 1;
foreach($from_rapot as $u){ ?>
 <tr>
 <td><?php echo $no++ ?></td>
 <td><?php echo $u->nama_mapel ?></td>
 <td><?php echo $u->semester ?></td>
 <td><?php echo $u->no_urut ?></td>
</tr>
<?php } ?>
</tbody>
</table>