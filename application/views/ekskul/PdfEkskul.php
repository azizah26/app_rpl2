<!DOCTYPE html>
<html>
<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>Pdf EKSTRAKURIKULER</title>
<center><h1>DATA EKSTRAKURIKULER</h1></center>
<center>
<div class="card-body">
        <div class="table-responsive">
        <table class="table table-striped" border="1">
            <thead class="bg-secondary text-light">
                <thead>
                    <tr>
                <th>NO</th>
                <th>KD EKTRAKURIKULER</th>
                <th>NAMA EKSTRAKURIKUER</th>
             </tr>
        </thead>
<?php 
$no = 1;
foreach($ekskul as $u){ ?>
 <tr>
    <td><?php echo $no++ ?></td>
<td><?php echo $u->kd_ekskul ?></td>
<td><?php echo $u->nama_ekskul?></td>
</tr>
<?php } ?>
</center>
</tbody>
</table>